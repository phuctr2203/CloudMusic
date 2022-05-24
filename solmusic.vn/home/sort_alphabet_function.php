<?php

function read_all_products() {
  $file_name = 'Music_Collection.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $songs = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $song = [];
    foreach ($first as $col_name) {
      $song[$col_name] =  $row[$i];
      $i++;
    }
    $songs[] = $song;
  }
  return $songs;
}

function get_song_search_letter($song_first_letter) {
    $songs = read_all_products();
    $song_name = [];

    for($i = 0; $i < count($songs); $i++)
    {
        $song_name[$i][0] = $songs[$i]['song'];       
        $song_name[$i][1] = $songs[$i]['artist'];   
        $song_name[$i][2] = $songs[$i]['album'];
    }

    $song_each_letter = [];
        
    for($a = 0; $a < count($songs); $a++)
    {
        $song_each_letter[$a] = $song_name[$a][0][0];
    }

    $new = [];
    $count = 0;
    $new_count = 0;
    for($index = 0; $index < count($songs); $index++)
    {
        if($song_each_letter[$index] == $song_first_letter)
        {
            $new[$new_count][0] = $song_name[$index][0];
            $new[$new_count][1] = $song_name[$index][1];
            $new[$new_count][2] = $song_name[$index][2];
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