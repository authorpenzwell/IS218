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

//print_r($records);

if(empty($_GET)) {
	
    foreach($records as $record) {
      $i++;
      $record_num = $i - 1;
      echo '<a href=' . '"http://web.njit.edu/~ko45/is218/' . $record_num . '"' . '>College Name ' . $i . ' </a>';
		
      echo '</p>';
    }
  }

  $record = $records[$_GET['record']];
  
   foreach($record as $key => $value) {
    echo $key . ': ' . $value . "<br>\n";
   }
   
   
   
 /* foreach($records as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value .  "</br> \n";
    }
    echo '<hr>';
  }
  */
   
?>