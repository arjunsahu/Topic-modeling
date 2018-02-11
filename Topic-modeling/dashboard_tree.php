<?php 
$servername = "demo.predictly.co"; 

$username = "demo"; 

$password = ""; 

$dbname = "imrb"; 

$con = mysql_connect($servername, $username, $password); 


if (!$con) {
  die('Could not connect: ' . mysql_error()); 

}
$analysis=$_GET['analysis'];
$keywords=array('aspects_liked','details_liked','benfits_liked','aspects_disliked','details_disliked','aspects_disliked_problem');

if (in_array('aspects_liked', $analysis)) {$divide=sizeof($analysis);echo $divide;}
else if(in_array('details_liked', $analysis)) {$divide=sizeof($analysis);echo $divide;}
else if(in_array('benfits_liked', $analysis)) {$divide=sizeof($analysis);echo $divide;}
else if(in_array('aspects_disliked', $analysis)) {$divide=sizeof($analysis);echo $divide;}
else if(in_array('details_disliked', $analysis)) {$divide=sizeof($analysis);echo $divide;}
else {$divide=9;echo $divide;}


foreach ($analysis as $value) {$select[] =  $value; }

$centre= $_POST["centre"]?: '';
$age_group= $_POST["age_group"]?: '';
$panel= $_POST["panel"]?: '';
$age= $_POST["age"]?: '';
$vechile_name= $_POST["vechile_name"]?: '';
$intender= $_POST["intender"]?: '';
$rank_before= $_POST["rank_before"]?: '';
$concept= $_POST["concept"]?: '';
$price= $_POST["price"]?: '';
$mention= $_POST["mention"]?: '';

$vechile_code= $_POST["vehicle_code"]?: '';
$vechicle_before= $_POST["vechicle_before"]?: '';
$vechicle_after= $_POST["vechicle_after"]?: '';
$rank1= $_POST["rank1"]?: '';
$rank3= $_POST["rank3"]?: '';
$rank2= $_POST["rank2"]?: '';
$rank1_a= $_POST["rank1_a"]?: '';
$topic= $_POST["topic"]?: '';

if ($mention==""){$mention_divide=3;}else{$mention_divide=1;}

foreach ($analysis as $value) { $head_light[] = "$value REGEXP 'head_light|front_light|head_lamp|front_lamp|headlight| light '" ;}
foreach ($analysis as $value) { $wheel[] = "$value REGEXP 'wheel|brake|alloy|tyre'" ;}
foreach ($analysis as $value) { $handle[] = "$value REGEXP 'hand|mirror|grip'" ;}
foreach ($analysis as $value) { $indicator[] = "$value REGEXP 'indic'" ;}
foreach ($analysis as $value) { $seats[] = "$value REGEXP 'seat|sit|Pillion|rail|Sear'" ;}
foreach ($analysis as $value) { $fuel_tank[] = "$value REGEXP 'fuel|petrol|tank|gas'" ;}
foreach ($analysis as $value) { $tail_lamp[] = "$value REGEXP 'back_light|tail_light|Rear_lamp|tail_lamp|Rear light|rear_panel'" ;}
foreach ($analysis as $value) { $guards[] = "$value REGEXP 'guard|saree'" ;}
foreach ($analysis as $value) { $silencer[] = "$value REGEXP 'silen'" ;}
foreach ($analysis as $value) { $graphics[] = "$value REGEXP 'Tank_pad|stick|grap'" ;}
foreach ($analysis as $value) { $color[] = "$value REGEXP 'colo|silver|black|red'" ;}
foreach ($analysis as $value) { $front_dome[] = "$value REGEXP 'front_dome|visor|dome '" ;}
foreach ($analysis as $value) { $carrier[] = "$value REGEXP 'lug|carr|bag|suitcase'" ;}
foreach ($analysis as $value) { $speedometer[] = "$value REGEXP 'meter'" ;}
foreach ($analysis as $value) { $over_shape[] = "$value REGEXP 'overall shap|design|Body'" ;}
foreach ($analysis as $value) { $over_desgin[] = "$value REGEXP 'design'" ;}

foreach ($analysis as $value) { $mileage[] = "$value REGEXP 'mile|average|kmps'" ;}
foreach ($analysis as $value) { $power[] = "$value REGEXP ' power |engine|start|kick'" ;}
foreach ($analysis as $value) { $comfort[] = "$value REGEXP 'comfort|shock|smooth|slip'" ;}
foreach ($analysis as $value) { $look[] = "$value REGEXP 'look|sty'" ;}
foreach ($analysis as $value) { $maintenance[] = "$value REGEXP 'mainte|oil'" ;}
foreach ($analysis as $value) { $safe[] = "$value REGEXP 'lock|safe|accide'" ;}
foreach ($analysis as $value) { $side_panel[] = "$value REGEXP 'side|stand'" ;}
foreach ($analysis as $value) { $cover[] = "$value REGEXP 'cover'" ;}
foreach ($analysis as $value) { $foot_rest[] = "$value REGEXP 'Leg_pad|foot_rest|foot rest|footrest'" ;}
foreach ($analysis as $value) { $toolbox[] = "$value REGEXP 'toolbox|utility box'" ;}
foreach ($analysis as $value) { $none[] = "$value REGEXP 'none'" ;}
$result=mysql_query("select count(id) from imrb.oct_16  where centre like '%".$centre."%' and rank1  like '%".$rank1."%' and rank1_a  like '%".$rank1_a."%' and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and age_group like '%".$age_group."%' and panel like '%".$panel."%' and age like '%".$age."%' and vechile_name like '%".$vechile_name."%' and intender like '%".$intender."%' and  vehicle_code like '%".$vechile_code."%' and mention like '%".$mention."%'") or
die(mysql_error());
$data=mysql_fetch_array($result);
$deno= $data[0]/$mention_divide;

mysql_select_db($dbname, $con); 

 $result = mysql_query("
SELECT CONCAT( 'name',',','parent',',','size',',','percentage',',','positive',',','negative')as 'name' 
union
SELECT CONCAT( 'root',',',',',',') as name 
union
SELECT CONCAT( 'Head_Light',',','root',',',ROUND(((select (count(case when (".implode($head_light," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($head_light," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name


"); 

$rows = array(); 
while($r = mysql_fetch_array($result)) {
   echo $r[0]; 

   echo "\n"; 

   }



mysql_close($con); 

?>
 
