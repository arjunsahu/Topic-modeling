<?php
if(!mysql_connect("demo.predictly.co","demo",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("csv_import_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
	

echo $table_name='ridden_soul_final';



$word = mysql_query("Select * from  $table_name");

while($r = mysql_fetch_array($word)) {
      $vichel=$r["vichel"];
	 $value1='v'.$vichel.'_first_impression';
	 
	 
	 
	  $value2=$r["$value1"];
	  
	  $arr = explode("-", $value2, 2);
     echo   $value = $arr[0];
	 
	  
	  
	  
	  $serial_no=$r["serial_no"];
	  
	  
	   //$value = explode(' ',trim($myvalue))[0];
	 
echo "update $table_name set vichel_name='$value' where serial_no='$serial_no'";
	 
	mysql_query("update $table_name set vichel_name='$value' where serial_no='$serial_no'");
	 
	 echo"<br><br>"; 
	 
	  
}

?>