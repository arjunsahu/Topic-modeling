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



$word = mysql_query("Select * from  $table_name where mention=1");

while($r = mysql_fetch_array($word)) {
      $aspect_like=$r["aspect_like"];
	  $serial_no=$r["serial_no"];
	  $serialno=$r["serialno"];
	  $mention=$r["mention"];
	  $vichel=$r["vichel"];
	  $v_name=$r["v_name"];
	 //if($mention=1){
		 
		 echo"update $table_name set v_name='$v_name' where serialno='$serialno' and vichel='$vichel' ";
		 
		 mysql_query("update $table_name set v_name='$v_name' where serialno='$serialno' and vichel='$vichel' ");
	 
	 echo"<br><br>"; 
		 
		 
	// }
	 
	  
	
	  
	  
}

?>