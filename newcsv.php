<?php
//reading the file
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE);
if (($handle = fopen("hd2013.csv", "r")) !== FALSE) { //opens and reads the file
    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
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
//for each record, display college name
foreach ($records as $record){
		$colleges[] =  $record['UNITID'] .'-' .$record['INSTNM'] . '</a>';
		
	}
	
//print_r($colleges);// prints out the college names into arrays

if(empty($_GET)) {
	
    foreach($records as $record) {
    	$i++;
     echo  '<a href = '.' "http://web.njit.edu/~ko45/is218/newcsv.php?record=' . $i . '"'. '>'.$record['INSTNM']. '</a>';
		
      echo '</p>';
    }
  }

  /*$record = $records[$_GET['record']];
  
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