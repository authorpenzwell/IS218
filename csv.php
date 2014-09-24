<?php
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE);
if (($handle = fopen("test.csv", "r")) !==FALSE) {
	while (($row = fgetcsv($handle, 1000,",")) !==FALSE) {
		if($first_row == TRUE) { //always use a double ==. single = assigns the value
			$column_heading = $row;
		    $first_row = FALSE;
		} else {
			$record = array_combine($column_heading, $row);
			$record [] = $record;
		}
	}
	
	fclose($handle);
}
  foreach($records as $record) {
  	foreach($record as $key => $value) {
  		echo $key . ': ' . $value . "</br> \n";
	}
	echo 'hr';

print_r($records);
?>