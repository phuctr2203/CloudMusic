<?php

function read_all_products() {
  $file_name = 'Music_Collection.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}

function get_store_search_name($store_first_character_search) {
    $stores = read_all_products();
    $store_name = [];

    for($i = 0; $i < count($stores); $i++)
    {
        $store_name[$i][0] = $stores[$i]['song'];       
        $store_name[$i][1] = $stores[$i]['artist'];        
        $store_name[$i][2] = $stores[$i]['album'];
    }

    $store_first_character = [];
        
    for($a = 0; $a < count($stores); $a++)
    {
        $store_first_character[$a] = $store_name[$a][1];
    }

    $new = [];
    $count = 0;
    $new_count = 0;
    for($index = 0; $index < count($stores); $index++)
    {
        if(!strcmp($store_first_character[$index],$store_first_character_search))
        {
            $new[$new_count][0] = $store_name[$index][0];
            $new[$new_count][1] = $store_name[$index][1];
            $new[$new_count][2] = $store_name[$index][2];
            $new_count++;
            $count++;
        }
    }

    if($count > 0)
    {
        return $new;
    }
    else
    {
        return false;
    }
}