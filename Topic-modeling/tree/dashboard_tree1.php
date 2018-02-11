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
foreach ($analysis as $value) { $head_light_shape [] = "$value REGEXP 'head_light shape'" ;}
foreach ($analysis as $value) { $head_light_Glass [] = "$value REGEXP 'head_light glass|vision'" ;}
foreach ($analysis as $value) { $head_light_Design [] = "$value REGEXP 'head_light design'" ;}
foreach ($analysis as $value) { $head_light_Size [] = "$value REGEXP 'head_light Size'" ;}
foreach ($analysis as $value) { $wheel[] = "$value REGEXP 'wheel|brake|alloy|tyre'" ;}
foreach ($analysis as $value) { $wheel_Grip[] = "$value REGEXP 'wheel grip'" ;}
foreach ($analysis as $value) { $wheel_Design[] = "$value REGEXP 'wheel design'" ;}
foreach ($analysis as $value) { $wheel_Shape[] = "$value REGEXP 'wheel shape'" ;}
foreach ($analysis as $value) { $wheel_Size[] = "$value REGEXP 'wheel size'" ;}
foreach ($analysis as $value) { $Handle[] = "$value REGEXP 'hand|mirror|grip'" ;}
foreach ($analysis as $value) { $Handle_Grip[] = "$value REGEXP 'hand grip'" ;}
foreach ($analysis as $value) { $Handle_Size[] = "$value REGEXP 'hand size'" ;}
foreach ($analysis as $value) { $Handle_Comfort[] = "$value REGEXP 'hand shape'" ;}
foreach ($analysis as $value) { $Handle_Stylish[] = "$value REGEXP 'hand style'" ;}
foreach ($analysis as $value) { $Indicator[] = "$value REGEXP 'indic'" ;}
foreach ($analysis as $value) { $Indicator_Shape[] = "$value REGEXP 'indic shape'" ;}
foreach ($analysis as $value) { $Indicator_Design[] = "$value REGEXP 'indic design '" ;}
foreach ($analysis as $value) { $Indicator_Seats[] = "$value REGEXP 'indic seat'" ;}
foreach ($analysis as $value) { $Seats[] = "$value REGEXP 'seat|sit|Pillion|rail|Sear'" ;}
foreach ($analysis as $value) { $Seats_Lengthy[] = "$value REGEXP 'seat length'" ;}
foreach ($analysis as $value) { $Seats_Comfort[] = "$value REGEXP 'seat comfort'" ;}
foreach ($analysis as $value) { $Seats_Outlook[] = "$value REGEXP 'seat outlook'" ;}
foreach ($analysis as $value) { $Seats_Shape[] = "$value REGEXP 'seat shape'" ;}
foreach ($analysis as $value) { $Fuel_Tank[] = "$value REGEXP 'fuel|petrol|tank|gas'" ;}
foreach ($analysis as $value) { $Fuel_Tank_Shape[] = "$value REGEXP 'fuel shape'" ;}
foreach ($analysis as $value) { $Fuel_Tank_Size[] = "$value REGEXP 'fuel size'" ;}
foreach ($analysis as $value) { $Fuel_Tank_Color[] = "$value REGEXP 'fuel color'" ;}
foreach ($analysis as $value) { $Tail_Lamp[] = "$value REGEXP 'back_light|tail_light|Rear_lamp|tail_lamp|Rear light|rear_panel'" ;}
foreach ($analysis as $value) { $Tail_Lamp_Looks[] = "$value REGEXP 'tail_light|look'" ;}
foreach ($analysis as $value) { $Tail_Lamp_Shape[] = "$value REGEXP 'tail_lamp shape'" ;}
foreach ($analysis as $value) { $Guards[] = "$value REGEXP 'guard|saree'" ;}
foreach ($analysis as $value) { $Guards_Safe[] = "$value REGEXP 'guard safe'" ;}
foreach ($analysis as $value) { $Guards_Size[] = "$value REGEXP 'guard size'" ;}
foreach ($analysis as $value) { $Silencer[] = "$value REGEXP 'silen'" ;}
foreach ($analysis as $value) { $Silencer_Size[] = "$value REGEXP 'silen size'" ;}
foreach ($analysis as $value) { $Silencer_Shine[] = "$value REGEXP 'silen shine'" ;}
foreach ($analysis as $value) { $Silencer_Cover[] = "$value REGEXP 'silen cover'" ;}
foreach ($analysis as $value) { $Graphics[] = "$value REGEXP 'Tank_pad|stick|grap'" ;}
foreach ($analysis as $value) { $Graphics_Sticker[] = "$value REGEXP 'graphics sticker'" ;}
foreach ($analysis as $value) { $Graphics_Shape[] = "$value REGEXP 'graphics shape'" ;}
foreach ($analysis as $value) { $Graphics_Color[] = "$value REGEXP 'graphics color'" ;}
foreach ($analysis as $value) { $Colors[] = "$value REGEXP 'colo|silver|black|red'" ;}
foreach ($analysis as $value) { $Colors_Bright[] = "$value REGEXP 'red'" ;}
foreach ($analysis as $value) { $Colors_Dark[] = "$value REGEXP 'silver'" ;}
foreach ($analysis as $value) { $Front_Dome[] = "$value REGEXP 'front_dome|visor|dome '" ;}
foreach ($analysis as $value) { $Front_Dome_Shape[] = "$value REGEXP 'front_dome shape'" ;}
foreach ($analysis as $value) { $Front_Dome_Color[] = "$value REGEXP 'front_dome color'" ;}
foreach ($analysis as $value) { $carrier[] = "$value REGEXP 'lug|carr|bag|suitcase'" ;}
foreach ($analysis as $value) { $Speedometer[] = "$value REGEXP 'meter'" ;}
foreach ($analysis as $value) { $Speedometer_Design[] = "$value REGEXP 'meter design'" ;}
foreach ($analysis as $value) { $Speedometer_Stylish[] = "$value REGEXP 'meter stylish'" ;}
foreach ($analysis as $value) { $Over_Shape[] = "$value REGEXP 'overall shap|design|Body'" ;}
foreach ($analysis as $value) { $over_desgin[] = "$value REGEXP 'design'" ;}

foreach ($analysis as $value) { $Mileage[] = "$value REGEXP 'mile|average|kmps'" ;}
foreach ($analysis as $value) { $Power[] = "$value REGEXP ' power |engine|start|kick'" ;}
foreach ($analysis as $value) { $Power_Easy[] = "$value REGEXP ' power easy'" ;}
foreach ($analysis as $value) { $Power_Comfort[] = "$value REGEXP ' power comfort'" ;}
foreach ($analysis as $value) { $Comfort_[] = "$value REGEXP 'comfort|shock|smooth|slip'" ;}
foreach ($analysis as $value) { $look[] = "$value REGEXP 'look|sty'" ;}
foreach ($analysis as $value) { $Maintenance[] = "$value REGEXP 'mainte|oil'" ;}
foreach ($analysis as $value) { $Safety[] = "$value REGEXP 'lock|safe|accide'" ;}
foreach ($analysis as $value) { $Safety_Safe[] = "$value REGEXP 'lock|safe'" ;}
foreach ($analysis as $value) { $Safety_Protect[] = "$value REGEXP 'protect'" ;}
foreach ($analysis as $value) { $Carrier[] = "$value REGEXP 'easy|shape|size'" ;}
foreach ($analysis as $value) { $Carrier_Easy[] = "$value REGEXP 'easy'" ;}
foreach ($analysis as $value) { $Carrier_Shape[] = "$value REGEXP 'shape'" ;}
foreach ($analysis as $value) { $Carrier_Size[] = "$value REGEXP 'protect'" ;}
foreach ($analysis as $value) { $Side_Panel[] = "$value REGEXP 'side|stand'" ;}
foreach ($analysis as $value) { $Side_Panel_Design[] = "$value REGEXP 'side design'" ;}
foreach ($analysis as $value) { $Side_Panel_Color[] = "$value REGEXP 'side_panel color'" ;}
foreach ($analysis as $value) { $Side_Panel_3D[] = "$value REGEXP 'side 3d'" ;}
foreach ($analysis as $value) { $Cover[] = "$value REGEXP 'cover'" ;}
foreach ($analysis as $value) { $Cover_Color[] = "$value REGEXP 'cover color'" ;}
foreach ($analysis as $value) { $Cover_Stylish[] = "$value REGEXP 'cover stylish'" ;}
foreach ($analysis as $value) { $Cover_Shape[] = "$value REGEXP 'cover shape'" ;}
foreach ($analysis as $value) { $Foot_Rest[] = "$value REGEXP 'Leg_pad|foot_rest|foot rest|footrest'" ;}
foreach ($analysis as $value) { $Foot_Rest_Comfort[] = "$value REGEXP 'Leg_pad comfort'" ;}
foreach ($analysis as $value) { $Foot_Rest_Wide[] = "$value REGEXP 'Leg_pad wide'" ;}
foreach ($analysis as $value) { $Toolbox[] = "$value REGEXP 'toolbox|utility box'" ;}
foreach ($analysis as $value) { $Toolbox_Size[] = "$value REGEXP 'toolbox size'" ;}
foreach ($analysis as $value) { $Toolbox_Shape[] = "$value REGEXP 'toolbox shape'" ;}
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
union
SELECT CONCAT( 'Shape',',','Head_Light',',',ROUND(((select (count(case when (".implode($head_light_shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($head_light_shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Glass',',','Head_Light',',',ROUND(((select (count(case when (".implode($head_light_Glass," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($head_light_Glass," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Design',',','Head_Light',',',ROUND(((select (count(case when (".implode($head_light_Design," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($head_light_Design," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Head_Light',',',ROUND(((select (count(case when (".implode($head_light_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($head_light_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'wheel',',','root',',',ROUND(((select (count(case when (".implode($wheel," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($wheel," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Grip',',','wheel',',',ROUND(((select (count(case when (".implode($wheel_Grip," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($wheel_Grip," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Design',',','wheel',',',ROUND(((select (count(case when (".implode($wheel_Design," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($wheel_Design," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','wheel',',',ROUND(((select (count(case when (".implode($wheel_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($wheel_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','wheel',',',ROUND(((select (count(case when (".implode($wheel_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($wheel_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Handle',',','root',',',ROUND(((select (count(case when (".implode($Handle," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Handle," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Grip',',','Handle',',',ROUND(((select (count(case when (".implode($Handle_Grip," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Handle_Grip," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Handle',',',ROUND(((select (count(case when (".implode($Handle_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Handle_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Comfort',',','Handle',',',ROUND(((select (count(case when (".implode($Handle_Comfort," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Handle_Comfort," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Stylish',',','Handle',',',ROUND(((select (count(case when (".implode($Handle_Stylish," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Handle_Stylish," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Indicator',',','root',',',ROUND(((select (count(case when (".implode($Indicator," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Indicator," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Indicator',',',ROUND(((select (count(case when (".implode($Indicator_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Indicator_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Design',',','Indicator',',',ROUND(((select (count(case when (".implode($Indicator_Design," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Indicator_Design," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Seats',',','Indicator',',',ROUND(((select (count(case when (".implode($Indicator_Seats," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Indicator_Seats," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Seats',',','root',',',ROUND(((select (count(case when (".implode($Seats," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Seats," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Lengthy',',','Seats',',',ROUND(((select (count(case when (".implode($Seats_Lengthy," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Seats_Lengthy," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Comfort',',','Seats',',',ROUND(((select (count(case when (".implode($Seats_Comfort," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Seats_Comfort," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Outlook',',','Seats',',',ROUND(((select (count(case when (".implode($Seats_Outlook," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Seats_Outlook," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Seats',',',ROUND(((select (count(case when (".implode($Seats_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Seats_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Fuel_Tank',',','root',',',ROUND(((select (count(case when (".implode($Fuel_Tank," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Fuel_Tank," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Fuel_Tank',',',ROUND(((select (count(case when (".implode($Fuel_Tank_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Fuel_Tank_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Fuel_Tank',',',ROUND(((select (count(case when (".implode($Fuel_Tank_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Fuel_Tank_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Color',',','Fuel_Tank',',',ROUND(((select (count(case when (".implode($Fuel_Tank_Color," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Fuel_Tank_Color," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Tail_Lamp',',','root',',',ROUND(((select (count(case when (".implode($Tail_Lamp," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Tail_Lamp," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Looks',',','Tail_Lamp',',',ROUND(((select (count(case when (".implode($Tail_Lamp_Looks," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Tail_Lamp_Looks," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Tail_Lamp',',',ROUND(((select (count(case when (".implode($Tail_Lamp_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Tail_Lamp_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Guards',',','root',',',ROUND(((select (count(case when (".implode($Guards," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Guards," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Safe',',','Guards',',',ROUND(((select (count(case when (".implode($Guards_Safe," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Guards_Safe," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Guards',',',ROUND(((select (count(case when (".implode($Guards_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Guards_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Silencer',',','root',',',ROUND(((select (count(case when (".implode($Silencer," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Silencer," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Silencer',',',ROUND(((select (count(case when (".implode($Silencer_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Silencer_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shine',',','Silencer',',',ROUND(((select (count(case when (".implode($Silencer_Shine," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Silencer_Shine," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Cover',',','Silencer',',',ROUND(((select (count(case when (".implode($Silencer_Cover," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Silencer_Cover," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Graphics',',','root',',',ROUND(((select (count(case when (".implode($Graphics," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Graphics," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Sticker',',','Graphics',',',ROUND(((select (count(case when (".implode($Graphics_Sticker," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Graphics_Sticker," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Graphics',',',ROUND(((select (count(case when (".implode($Graphics_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Graphics_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Color',',','Graphics',',',ROUND(((select (count(case when (".implode($Graphics_Color," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Graphics_Color," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Colors',',','root',',',ROUND(((select (count(case when (".implode($Colors," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Colors," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Bright',',','Colors',',',ROUND(((select (count(case when (".implode($Colors_Bright," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Colors_Bright," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Dark',',','Colors',',',ROUND(((select (count(case when (".implode($Colors_Dark," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Colors_Dark," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Front_Dome',',','root',',',ROUND(((select (count(case when (".implode($Front_Dome," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Front_Dome," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Front_Dome',',',ROUND(((select (count(case when (".implode($Front_Dome_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Front_Dome_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Color',',','Front_Dome',',',ROUND(((select (count(case when (".implode($Front_Dome_Color," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Front_Dome_Color," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Speedometer',',','root',',',ROUND(((select (count(case when (".implode($Speedometer," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Speedometer," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Design',',','Speedometer',',',ROUND(((select (count(case when (".implode($Speedometer_Design," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Speedometer_Design," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Stylish',',','Speedometer',',',ROUND(((select (count(case when (".implode($Speedometer_Stylish," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Speedometer_Stylish," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Over_Shape',',','root',',',ROUND(((select (count(case when (".implode($Over_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Over_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Mileage',',','root',',',ROUND(((select (count(case when (".implode($Mileage," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Mileage," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Power',',','root',',',ROUND(((select (count(case when (".implode($Power," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Power," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Easy',',','Power',',',ROUND(((select (count(case when (".implode($Power_Easy," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Power_Easy," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Comfort',',','Power',',',ROUND(((select (count(case when (".implode($Power_Comfort," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Power_Comfort," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Comfort_',',','root',',',ROUND(((select (count(case when (".implode($Comfort_," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Comfort_," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Maintenance',',','root',',',ROUND(((select (count(case when (".implode($Maintenance," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Maintenance," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Safety',',','root',',',ROUND(((select (count(case when (".implode($Safety," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Safety," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Safe',',','Safety',',',ROUND(((select (count(case when (".implode($Safety_Safe," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Safety_Safe," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Protect',',','Safety',',',ROUND(((select (count(case when (".implode($Safety_Protect," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Safety_Protect," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Carrier',',','root',',',ROUND(((select (count(case when (".implode($Carrier," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Carrier," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Easy',',','Carrier',',',ROUND(((select (count(case when (".implode($Carrier_Easy," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Carrier_Easy," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Carrier',',',ROUND(((select (count(case when (".implode($Carrier_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Carrier_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Carrier',',',ROUND(((select (count(case when (".implode($Carrier_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Carrier_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Side_Panel',',','root',',',ROUND(((select (count(case when (".implode($Side_Panel," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Side_Panel," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Design',',','Side_Panel',',',ROUND(((select (count(case when (".implode($Side_Panel_Design," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Side_Panel_Design," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Color',',','Side_Panel',',',ROUND(((select (count(case when (".implode($Side_Panel_Color," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Side_Panel_Color," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( '3D',',','Side_Panel',',',ROUND(((select (count(case when (".implode($Side_Panel_3D," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Side_Panel_3D," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Cover',',','root',',',ROUND(((select (count(case when (".implode($Cover," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Cover," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Color',',','Cover',',',ROUND(((select (count(case when (".implode($Cover_Color," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Cover_Color," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Stylish',',','Cover',',',ROUND(((select (count(case when (".implode($Cover_Stylish," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Cover_Stylish," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Cover',',',ROUND(((select (count(case when (".implode($Cover_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Cover_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Foot_Rest',',','root',',',ROUND(((select (count(case when (".implode($Foot_Rest," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Foot_Rest," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Comfort',',','Foot_Rest',',',ROUND(((select (count(case when (".implode($Foot_Rest_Comfort," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Foot_Rest_Comfort," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Wide',',','Foot_Rest',',',ROUND(((select (count(case when (".implode($Foot_Rest_Wide," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Foot_Rest_Wide," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Toolbox',',','root',',',ROUND(((select (count(case when (".implode($Toolbox," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Toolbox," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Size',',','Toolbox',',',ROUND(((select (count(case when (".implode($Toolbox_Size," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Toolbox_Size," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name
union
SELECT CONCAT( 'Shape',',','Toolbox',',',ROUND(((select (count(case when (".implode($Toolbox_Shape," OR ")." ) then 1 end ) )from oct_16)/9),0),',',((select (count(case when (".implode($Toolbox_Shape," OR ")." ) then 1 end ) )from oct_16)/$deno)) as name




"); 
$rows = array(); 
while($r = mysql_fetch_array($result)) {
   echo $r[0]; 

   echo "\n"; 

   }



mysql_close($con); 

?>
 
