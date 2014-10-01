<?php
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE);
if (($handle = fopen("hd2013.csv", "r")) !== FALSE) { //opens and reads the file
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
     if($first_row == TRUE) {
       $column_heading = $row;
       $first_row = FALSE;
     } else {
       $record = array_combine($column_heading, $row);
       $records[] = $record;
     }

    }

    fclose($handle);
}

  foreach($records as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value .  "</br> \n";
    }
    echo '<hr>';
  }
?>