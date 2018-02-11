<?php
if(!mysql_connect("demo.predictly.co","demo",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("csv_import_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
	

echo $table_name='pune_ridden_final';

for($i=1;$i<=3;$i++)
{

$word = mysql_query("Select * from  $table_name where vichel=$i and mention=1");

while($r = mysql_fetch_array($word)) {
      $aspect_like=$r["aspect_like"];
	  $serial_no=$r["serialno"];
	 
	 
	 
	  if(stripos($aspect_like,'-') !== FALSE){


	  
	  $arr = explode("-", $aspect_like, 2);
     echo   $value = $arr[0];
	 
	  
	  }
	  else 
		  $value = '';
	  
  
	 
	  
	  
	   //$value = explode(' ',trim($myvalue))[0];
	 
echo "update $table_name set v_name='$value' where serialno='$serial_no' and vichel=$i";
	 
	mysql_query("update $table_name set v_name='$value' where serialno='$serial_no' and vichel=$i");
	 
	 echo"<br><br>"; 
	
	  
	  
}
}
?>