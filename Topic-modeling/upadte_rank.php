<?php
if(!mysql_connect("demo.predictly.co","demo",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("csv_import_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
	

echo $table_name='pune_exposed_final';
//rank1_reason1_vname

for($a=1;$a<=11;$a++)
{

$word = mysql_query("Select * from  $table_name");

while($r = mysql_fetch_array($word)) {
	$rank_name='rank'.$a;
	
     $rank=$r["$rank_name"];
	 
	 $rank_vname='rank'.$a.'_vname';
	 
	  $serial_no=$r["serial_no"];
	 
	 
	 
	  if(stripos($rank,'-') !== FALSE){


	  
	  $arr = explode("-", $rank, 2);
     echo   $value = $arr[0];
	 
	  
	  }
	  else 
		  $value = '';
	  
		  
	
	  
	   //$value = explode(' ',trim($myvalue))[0];
	 
echo "update $table_name set $rank_vname='$value' where serial_no='$serial_no'";
	 
	mysql_query("update $table_name set $rank_vname='$value' where serial_no='$serial_no'");
	 
	 echo"<br><br>"; 
	
	  
	 
	  
}


}

?>