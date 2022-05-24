<?php
class CSVHandler
{
	private $data;
	private $column;
	private $fileName;
	private $sortConfig;
 
	public function __construct($fileName, $data = [], $column=[])
	{
		$this->data = $data;
		$this->fileName = $fileName;
		$this->column = $column;
		$this->sortConfig = false;
		$this->initData();
	}

	public function initData()
	{
		if (($handle = fopen($this->fileName, "r")) !== FALSE) {
			$row = 1;
			$dataItem = array();
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				if($row > 1) {
					//readData
					$rowData = array();
					for ($rowIndex=0; $rowIndex < $num; $rowIndex++) {
						if(!empty($this->column) && count($this->column) > 0) {
							$rowData[$this->column[$rowIndex]] = $data[$rowIndex];
						}
					}
					$dataItem[] = $rowData;
				} else {
					//row = 1 read Column name
					$columnList = array();
					for ($rowIndex=0; $rowIndex < $num; $rowIndex++) {
						$columnList[$rowIndex] = $data[$rowIndex];
					}
					
					$this->column = $columnList;
				}
				$row++;
				
			}
			fclose($handle);
		}
		$this->data = $dataItem;
		return $this->data;
	}

	public function getColumn()
	{
		return $this->column;
	}
  
	public function sort($columnName, $dataType = 'int', $sortType = 'asc')
	{
		$this->sortConfig = [$columnName, $dataType, $sortType];
		return $this;
	}
	
	public function compare($sortConfig) {
		return function ($a, $b) use ($sortConfig) {
			if($a[$sortConfig[0]] == $b[$sortConfig[0]]) {
				return 1;
			}
			switch($sortConfig[1]) {
				case "int":
					$compareValue = $a[$sortConfig[0]] > $b[$sortConfig[0]];
					$returnValue = (($sortConfig[2] == 'asc') ? $compareValue : !$compareValue) ? 1 : -1;
					break;
				case "date":
					$compareValue = strtotime($a[$sortConfig[0]]) > strtotime($b[$sortConfig[0]]);
					$returnValue = (($sortConfig[2] == 'asc') ? $compareValue : !$compareValue) ? 1 : -1;
					break;
				default:
					$compareValue = $a[$sortConfig[0]] > $b[$sortConfig[0]];
					$returnValue = (($sortConfig[2] == 'asc') ? $compareValue : !$compareValue) ? 1 : -1;
					break;
			}
			return $returnValue;
		};
	}
	
	public function getData($filter = false, $getFirstRecord = false)
	{
		$dataReturn = [];
		if($filter) {
			$dataReturn = array_filter($this->data, function($value, $key) use($filter) {
				$filterReturnStatus = true;
				foreach($filter as $filterValue) {
					if(!isset($value[$filterValue[0]])) break;
					if(count($filterValue) > 2) {
						//with other compare type
						$returnValue = false;
						switch($filterValue[1]){
							case "=":
								$returnValue = $value[$filterValue[0]] == $filterValue[2];
								break;
							case ">":
								$returnValue = $value[$filterValue[0]] > $filterValue[2];
								break;
							case "<":
								$returnValue = $value[$filterValue[0]] < $filterValue[2];
								break;
							case ">=":
								$returnValue = $value[$filterValue[0]] >= $filterValue[2];
								break;
							case "<=":
								$returnValue = $value[$filterValue[0]] <= $filterValue[2];
								break;
							case "!=":
								$returnValue = $value[$filterValue[0]] != $filterValue[2];
								break;
							case "<>":
								$returnValue = $value[$filterValue[0]] <> $filterValue[2];
								break;
							default:
								$returnValue = $value[$filterValue[0]] == $filterValue[2];
								break;
						}
						if(!$returnValue) $filterReturnStatus = false;
					}else if($value[$filterValue[0]] != $filterValue[1]){
						$filterReturnStatus = false;
					}
				}
				return $filterReturnStatus;
			}, ARRAY_FILTER_USE_BOTH);
		} else {
			$dataReturn = $this->data;
		}
		if($getFirstRecord) {
			if(count($dataReturn) > 0) {
				$dataReturn = reset($dataReturn);
			}
		} else if($this->sortConfig) {
			
			
			usort($dataReturn, $this->compare($this->sortConfig));
		}
		return $dataReturn;
	}
}
?>