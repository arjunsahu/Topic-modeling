<!DOCTYPE html>
<?php




if(!mysql_connect("demo.predictly.co","demo",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("csv_import_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

$analysis=$_POST['analysis'];
foreach ($analysis as $value) { $ran[] = $value;}

$string = ' '.'vichel'.' '.'in'.' '. '('.implode(",", $ran).')'.' ';


$ranks=array('reason_choosing_ranked_1');
$keywords=array('aspect_like','details_like','benefit_like','aspect_dislike','details_dislike','problem_dislike');

if (in_array('aspect_like', $ranks)) {$divide=sizeof($ranks);echo $divide;}
else if(in_array('details_like', $ranks)) {$divide=sizeof($ranks);echo $divide;}
else if(in_array('benefit_like', $ranks)) {$divide=sizeof($ranks);echo $divide;}
else if(in_array('aspect_dislike', $ranks)) {$divide=sizeof($ranks);echo $divide;}
else if(in_array('details_dislike', $ranks)) {$divide=sizeof($ranks);echo $divide;}
else {$divide=12;echo $divide;}


foreach ($ranks as $value) {$select[] =  $value; }





 
 foreach ($analysis as $ra) {echo $ra; }


//age,occuption,panel_no,maritial_status,gender,type_of_byer,brand_intended,vichel,rank,pj
//occupation like '%".$centre."%' and rank1  like '%".$rank1."%'   and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'

 $centre= $_POST["centre"]?: '';//occupation
 $age_group= $_POST["age_group"]?: '';//maritial_status
  $panel= $_POST["panel"]?: '';//panel_no
  $age= $_POST["age"]?: '';//age
 $vechile_name= $_POST["vechile_name"]?: ''; //type_of_byer
 $intender= $_POST["intender"]?: '';//brand_intended
$rank_before= $_POST["rank_before"]?: '';
$concept= $_POST["concept"]?: '';//reason_choosing_ranked_1_vname
echo $table_name= $_POST["table_name"]?: 'ridd_savvy';
 $mention= $_POST["mention"]?: '';//PJ

 
 
 $vechile_code= $_POST["vehicle_code"]?: '';//vichel
$vechicle_before= $_POST["vechicle_before"]?: '';
$vechicle_after= $_POST["vechicle_after"]?: '';
$mention_no=$_POST["mention_no"]?: '';

$vichel_group=$_POST["vichel_group"]?: '';

$rank1= $_POST["rank1"]?: '';
$rank3= $_POST["rank3"]?: '';
$rank2= $_POST["rank2"]?: '';



$rank4= $_POST["rank4"]?: '';
$rank5= $_POST["rank5"]?: '';
$rank6= $_POST["rank6"]?: '';


$rank7= $_POST["rank7"]?: '';
$rank8= $_POST["rank8"]?: '';
$rank9= $_POST["rank9"]?: '';

$rank10= $_POST["rank10"]?: '';
$rank11= $_POST["rank11"]?: '';







$rank1_a= $_POST["rank1_a"]?: '';
$topic= $_POST["topic"]?: '';

if ($mention==""){$mention_divide=3;}else{$mention_divide=1;}

?>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Predictly Tech Labs | Web Application</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Predictly Tech Labs">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
  <script src="//d3js.org/d3.v3.min.js"></script>
  <script src="libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jquery/underscore/underscore-min.js"></script>
  <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery/PACE/pace.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://highcharts.github.io/export-csv/export-csv.js"></script>
  <script src="scripts/config.lazyload.js"></script>
  <script src="//d3js.org/d3.v3.min.js"></script>
  	    <script src="libs/js/cloud.js"></script>
  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
  <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
    rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
    type="text/javascript"></script>
 <style>

 .border-right {
    border-right: 1px solid #ddd;
}
</style> 
 <style type="text/css">
    .multiselect-container {
        width: 250px !important;
    }
</style> 	
<style>

  div.tree_tooltip {
    position: absolute;
    text-align: left;
    width: 180px;
    height: 120px;
    padding: 2px;
    font: 12px sans-serif;
	
	.node circle {
  fill: #fff;
  stroke: steelblue;
  stroke-width: 1.5px;
}

    
    border: 0px;
    border-radius: 8px;
    pointer-events: none;
  }
  
  .node circle {
    fill: #fff;
    stroke: steelblue;
    stroke-width: 3px;
  }

  .node text { font: 12px sans-serif; }

  .link {
    fill: none;
    stroke: #ccc;
    stroke-width: 2px;
  }
  
    </style>	
	<style>

	table { 
    width: 100px; 
    border-collapse: collapse; 
    margin:50px auto;
    }
/* Zebra striping */
tr:nth-of-type(odd) { 
    background: #eee; 
    }
th { 
    background: #3498db; 
    color: white; 
    font-weight: bold; 
    }
td, th { 
    padding: 5px; 
    border: 1px solid #ccc; 
    text-align: left; 
    font-size: 16px;
    }
	</style> 

<script>
$(document).ready(function () {
   document.getElementById("change_num").click();
});
$(document).ready(function(){
	 
$("#change_num").click(function(){
    $("#percentage").hide();
	 $("#sentiment").show();
});

$("#change_per").click(function(){
    $("#percentage").show();
	$("#sentiment").hide();
});	
});		
</script>
</head>
<body  onload="document.getElementById('change_num').click();">
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-expand folded">
    <div class="left navside grey dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        <img src="assets/images/imrb-logo-small.png" alt="." >
        	<img src="assets/images/imrb-logo-small.png" alt="." class="hide">
        	<span class="hidden-folded inline">IMRB</span>
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-border b-primary">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>
              
              <li>
                <a href="#" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="'assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <b class="label rounded label-sm primary"></b>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Sections</span>
                </a>
             <ul class="nav-sub">
			 
			 <li>
                     <a href="section_a.php" >
                      <span class="nav-text">Section A</span>
                    </a>
                  </li>
				   <li>
                     <a href="section_a1.php" >
                      <span class="nav-text">Section A1</span>
                    </a>
                  </li>
				  <li>
                  <li>
                    <a href="Section_b1.php" >
                      <span class="nav-text">Section B1</span>
                    </a>
                  </li>
                  <li>
                     <a href="Section_b2.php" >
                      <span class="nav-text">Section B2</span>
                    </a>
                  </li>
				  
                     <a href="section_bo1.php" >
                      <span class="nav-text">Section BO1</span>
                    </a>
                  </li>
				  
				   <li>
                     <a href="section_bo2.php" >
                      <span class="nav-text">Section BO2</span>
                    </a>
                  </li>
				   <li>
                     <a href="section_bo3.php" >
                      <span class="nav-text">Section BO3</span>
                    </a>
                  </li>
				   <li>
                     <a href="section_bo4.php" >
                      <span class="nav-text">Section BO4</span>
                    </a>
                  </li>
				  
				  <li>
                     <a href="section_bo5.php" >
                      <span class="nav-text">Section BO5</span>
                    </a>
                  </li>
				  
				  <li>
                     <a href="section_bo6.php" >
                      <span class="nav-text">Section BO6</span>
                    </a>
                  </li>
				  
                
                </ul>
              </li>
          
       
            </ul>
        </nav>
      </div>
      <div flex-no-shrink>
        <div ui-include="'views/blocks/aside.bottom.0.html'"></div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 box-radius-1x" role="main">
    <div class="app-header white box-shadow">
       <div class="navbar">
           <!-- Open side - Naviation on mobile -->
           <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
             <i class="material-icons">&#xe5d2;</i>
           </a>
           <!-- / -->
       
           <!-- Page title - Bind to $state's title -->
           <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>
       
           <!-- navbar right -->
           <ul class="nav navbar-nav pull-right">
             <li class="nav-item dropdown pos-stc-xs">
               <a class="nav-link" href data-toggle="dropdown">
                 <i class="material-icons">&#xe7f5;</i>
                 <span class="label label-sm up warn">3</span>
               </a>
               <div ui-include="'views/blocks/dropdown.notification.html'"></div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link clear" href data-toggle="dropdown">
                 <span class="avatar w-32">
                   <img src="assets/images/a0.jpg" alt="...">
                   <i class="on b-white bottom"></i>
                 </span>
               </a>
               <div ui-include="'views/blocks/dropdown.user.html'"></div>
             </li>
             <li class="nav-item hidden-md-up">
               <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                 <i class="material-icons">&#xe5d4;</i>
               </a>
             </li>
           </ul>
           <!-- / navbar right -->
       
           <!-- navbar collapse -->
           <div class="collapse navbar-toggleable-sm" id="collapse">
             <div ui-include="'views/blocks/navbar.form.right.html'"></div>
             <!-- link and dropdown -->
             <ul class="nav navbar-nav">
               <li class="nav-item dropdown">
                 <a class="nav-link" href="#" data-toggle="modal" data-target="#top">
                   <i class="fa fa-fw fa-plus text-muted"></i>
                   <span>Selection</span>
                 </a>
                
               </li>
             </ul>
             <!-- / -->
           </div>
           <!-- / navbar collapse -->
       </div>
    </div>
    <div class="app-footer">
      <div class="p-a text-xs">
        <div class="pull-right text-muted">
          &copy; Copyright <strong>Predictly Tech Labs</strong> <span class="hidden-xs-down">- Built with PredictlyAI v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="">About</a>
          <span class="text-muted">-</span>
          <a class="nav-link label accent" href="https://www.predictly.co/">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="row-col b-b">
	<div class="col-md">
		<div class="padding">
			<div class="margin">
				<h5 class="m-b-0 _300">
	
	


 </h5>
			</div>
			<div class="row-col box">
				<div class="col-sm-4">
					<div class="box-header">
						<h3>Reports</h3>
					</div>
					<div class="box-body">
						<p class="text-muted m-b-md">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
						<a href class="btn btn-sm rounded success">Read More</a>
					</div>
		        </div>
		        <div class="col-sm-8 grey lt">
				
	        		<div class="box-header">
			          <h3>Activities</h3>
					  <div class="btn-group pull-right" style="margin-top: -2%;">
    
              <button type="button" class="btn btn-sm btn-outline b-primary  " id="change_num" >Number</button>
               <button type="button" class="btn btn-sm btn-outline b-primary " id="change_per">Percentage</button>
             
            </div>
					
			          
			        </div>
			        <div class="box-body">
				 <div id="sentiment"  style="min-width: 310px; height: 400px; margin: 0 auto"></div> 
<div id="percentage"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			          
			        </div>
		        </div>
		    </div>
			<br>
			<div class="row">
			    <div class="col-sm-7">
			        <div class="box">
			          <div class="box-header">
			            <h3>Word Cloud   </h3>
			            <!--small>A general overview of your sales</small-->
			          </div>
			          <div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="material-icons md-18">&#xe863;</i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="material-icons md-18">&#xe5d4;</i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href>This week</a>
				              <a class="dropdown-item" href>This month</a>
				              <a class="dropdown-item" href>This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div>
			          <div class="box-body">
			           	 <div id="word_cloud" class="svg-container"></div>
			          </div>
			        </div>
			    </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>  </h3><!--button id="btn-Preview-Image">SVG</button> <button id="save">SVG</button-->
                        </div>
                        <div class="panel-body">
                              <div id="tree"> </div>
                        </div>
						
                    </div>
                </div>
            </div>
			

			</div>
			</div>
	</div>
</div>

<div class="modal fade inactive" id="chat" data-backdrop="false">
  <div class="right w-xxl grey lt b-l">
  	<div ui-include="'views/blocks/modal.chat.html'"></div>
  </div>
</div>
<div class="modal fade" id="top">
<form method="post" action="">
  <div class="top  b-b" style="background-color:#F0F0F0">
   <div class="box" style=" margin-bottom: 0rem;">
        <div class="box-header">
		<div class="row">
		    <div class="col-md-8">
          <h2>Section BO6 - FeedBack On the Reason choosing Ranked 1 Vehicle Ridden</h2>
          <small>Interviewer to code the vehicle to be Ridden.</small>
		   </div>
		     <div class="col-md-4">
			 
       <button class="btn btn-fw success pull-right"  type="submit" name="submit" value="Submit">Submit</button>
		  </div>
		
		  </div>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body p-v-md" style="padding-left: 5%;padding-right: 5%">
        
		  <div class="row">
		    <div class="col-md-6 border-right">
			<!-- General -->
			<div class="col-md-12 text-center" style="padding-bottom: 15px;"> 
					<span  class="btn btn-sm btn-outline rounded b-accent">General</span> 
					
			</div>
		
          <div class="form-inline">
		
			<!-- City -->
			<div class="row">
			
			<div class="col-sm-4">
			<small class="label label-default label-as-badge">Select Occupation</small>	
			 
			 <div class="form-group row">
            
              <div class="col-sm-10">
			  
                <select class="form-control c-select" name="centre">
				
                  <option selected disabled>Select Occupation</option>
				  <option value="">All</option>
                  
				  
				  <?php 
				$word = mysql_query("Select distinct(occupation) as occupation from  $table_name");

while($r = mysql_fetch_array($word)) {
	
                 echo" <option value='".$r["occupation"]."'>".$r["occupation"]."</option>";
}
				  ?>
				  
				  
                </select>
              </div>
            </div>
			</div>
			
			<div class="col-sm-4">
			<small class="label label-default label-as-badge">Select Panel</small>
			<div class="form-group row">
             
              <div class="col-sm-10">
                <select class="form-control c-select" name="panel" >
				
                  <option selected disabled>Select Panel</option>
				  <option value="">All</option>
                  <option value="1">First Panel</option>
                  <option value="2">Second Panel</option>
				  
				   <option value="3">3rd Panel</option>
                  <option value="4">4th Panel</option>
                </select>
              </div>
            </div>
			</div>
			<br>
	<div class="col-sm-4">
	<small class="label label-default label-as-badge ">Select Age</small>
			<div class="form-group row">
             
              <div class="col-sm-10">
                <select class="form-control c-select" name="age">
				<option selected disabled>Select Age</option>
				   <option value="">ALL </option>
               
                              <?php 
				$word = mysql_query("Select distinct(age) as age from  $table_name");

while($r = mysql_fetch_array($word)) {
	
                 echo" <option value='".$r["age"]."'>".$r["age"]."</option>";
}
				  ?>
                </select>
              </div>
            </div>
			</div>

			</div>

			
		 </div>
		<br>
		
		<div class="form-inline">
		
			<!-- City -->
			<div class="row">
			
			<div class="col-sm-4">
			<small class="label label-default label-as-badge">Select Marrital Status</small>	
			 
			 <div class="form-group row">
            
              <div class="col-sm-10">
			  
                <select class="form-control c-select" name="age_group" >
				
                  <option selected disabled>Select Marrital Status</option>
				 
                  <?php 
				$word = mysql_query("Select distinct(marital_status) as marital_status from  $table_name");

while($r = mysql_fetch_array($word)) {
	
                 echo" <option value='".$r["marital_status"]."'>".$r["marital_status"]."</option>";
}
				  ?>
                </select>
              </div>
            </div>
			
			
			</div>
		
		

			
	
			
		 
		
			
		<div class="form-group row">
            
              <div class="col-sm-4">
			  
			  <small class="label label-default label-as-badge">Select exposed/ridden</small>
                <select class="form-control c-select" name="table_name" >
				
                  <option selected disabled>exposed/ridden</option>
				 
                  
                  <option value="ridd_savvy">ridden</option>
                </select>
              </div>
            </div>	
			
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="col-sm-6">
			<small class="label label-default label-as-badge">Type of Buyer</small>	
			 
			 <div class="form-group row">
            
              <div class="col-sm-10">
			  
                <select class="form-control c-select" name="vechile_name">
				
                  <option selected disabled>Type of Buyer</option>
                  <option value="">ALL </option>
                   <?php 
				$word = mysql_query("Select distinct(type_of_buyer) as type_of_buyer from  $table_name");

while($r = mysql_fetch_array($word)) {
	
                 echo" <option value='".$r["type_of_buyer"]."'>".$r["type_of_buyer"]."</option>";
}
				  ?>
                </select>
              </div>
            </div>
			</div>
			
			
			
			
			
			
			</div>

			
		 </div>
		
		
          </div>
			
			<div class="col-md-6">
			<!-- Section B -->
			<div class="col-md-12 text-center" style="padding-bottom: 15px;"> 
					<span  class="btn btn-sm btn-outline rounded b-accent">Section BO6 </span> 
					
			</div>
		
          
		
		<div class="form-inline">
		
			<!-- City -->
			<div class="row">
			
			<div class="col-sm-4">
			<small class="label label-default label-as-badge">Select Analysis</small>	
			 
			 <div class="form-group row">
            
              <div class="col-sm-4">
			  <select id="analysis" name="analysis[]" multiple="multiple" class="form-control c-select" >
		
					    <optgroup label="Detail Analysis" >
     <option value="reason_choosing_ranked_1">Reason choosing Ranked 1</option>
	  
	   
    
	  </optgroup>

	


</select>
     
              </div>
            </div>
			</div>
			
			<div class="form-inline">
		
			<!-- City -->
			<div class="row">
			
			<div class="col-sm-4">
			<small class="label label-default label-as-badge">Select Vehicle</small>	
			 
			 <div class="form-group row">
            
            <div class="col-sm-10">
                <select class="form-control c-select"  name="concept">
				
	
                                   	
     <option selected disabled>Select Vehicle</option>
				  <option value="">All</option>
				  <option value="Jupiter">TVS Jupiter</option> <option value="Aprillia">Aprillia SR 150</option> <option value="Dio">Honda Dio</option> <option value="Ray">Yamaha RayZR</option> <option value="Fascino">Yamaha Fascino</option> <option value="Piaggio Vespa 150">Piaggio Vespa 150</option> <option value="ent">TVS Entor Q SXR 125</option> <option value="Honda Activa 125">Honda Activa 125</option> <option value="Access">Suzuki Access 125</option> <option value="Edge">Hero Maestro Edge</option> <option value="Honda Activa 4G">Honda Activa 4G</option> 

                  
                </select>
              </div>
            </div>
			</div>
			
			</div>
			</div>
			
			
			
		




	
			
			
			
			
			
			
			
			
			
			
		 
			</div>	
			
			
			  
			  
			  
			  
		
			</div>

			
		 </div>
		
		
          </div>
			
		</div>
		
        </div>
      </div>
  </div>

  </form>
  </div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / content -->

  <!-- theme switcher -->
  <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
       
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Boxed Layout</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="text-u-c text-center _600 clearfix">
          <label class="p-a col-xs-6 light pointer m-a-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-xs-6 grey pointer m-a-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-xs-6 dark pointer m-a-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-xs-6 black pointer m-a-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>
    
    <div class="switcher box-color black lt" id="sw-demo">
      <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a>
      <div class="box-header">
        <h2>Your Selection</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="text-u-c text-center _600 clearfix">
<style>
 td {
    border: 1px solid white;
    padding: 5px;
    text-align: left;
  }
</style>


		<table style="width:100%">
   <tr>
    <td>occupation</td>
    <td><?php echo $centre?:'All' ?></td> 
   </tr>
   <tr>
    <td>panel_no</td>
    <td><?php echo $panel?:'All' ?></td> 
   </tr>
    <tr>
    <td>Age</td>
    <td><?php echo $age?:'All' ?></td> 
   </tr>
    <tr>
    <td>type_of_byer</td>
    <td><?php echo $vechile_name?:'All' ?></td> 
   </tr>
     <tr>
    <td>brand_intended</td>
    <td><?php echo $intender?:'All' ?></td> 
   </tr>
   <tr>
    <td>PJ</td>
    <td><?php echo $mention?:'All' ?></td> 
   </tr> 
    <tr>
    <td>Analysis</td>
    <td><?php echo implode($select,"| ") ?></td> 
   </tr>   
</table>

        </div>
      </div>
    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  
<script type="text/javascript">
    $(function () {
        $('#analysis').multiselect({
            includeSelectAllOption: true
        });
    });
	

</script>
<!-- endbuild -->
<!-- Chart Building Processes -->
<?php 








//Nishank
$result=mysql_query("select COUNT(DISTINCT serialno) from $table_name  where occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and    reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'" ) or
die(mysql_error());
$data=mysql_fetch_array($result);

if ((preg_match('/ent/',$concept)) AND  $panel == 1  ){$correct=6;}else {$correct=0;}
$deno= $data[0]+$correct;


  echo "<script>console.log( 'iew: " . $correct . "' );</script>";


foreach ($ranks as $value) { $head_light[] = "$value REGEXP 'head_light|front_light|head_lamp|front_lamp|headlight| light '" ;}
foreach ($ranks as $value) { $wheel[] = "$value REGEXP 'wheel|brake|alloy|tyre|BREAKS'" ;}
foreach ($ranks as $value) { $handle[] = "$value REGEXP 'hand|mirror|grip'" ;}
foreach ($ranks as $value) { $indicator[] = "$value REGEXP 'indic'" ;}
foreach ($ranks as $value) { $seats[] = "$value REGEXP 'seat|sit|Pillion|rail|Sear'" ;}
foreach ($ranks as $value) { $fuel_tank[] = "$value REGEXP 'fuel|petrol|tank|gas'" ;}
foreach ($ranks as $value) { $tail_lamp[] = "$value REGEXP 'back_light|tail_light|Rear_lamp|tail_lamp|Rear light|rear_panel'" ;}
foreach ($ranks as $value) { $guards[] = "$value REGEXP 'guard|saree'" ;}
foreach ($ranks as $value) { $silencer[] = "$value REGEXP 'silen'" ;}
foreach ($ranks as $value) { $graphics[] = "$value REGEXP 'Tank_pad|stick|grap'" ;}
foreach ($ranks as $value) { $color[] = "$value REGEXP 'colo|silver|black|red'" ;}
foreach ($ranks as $value) { $front_dome[] = "$value REGEXP 'front_dome|visor|dome '" ;}
foreach ($ranks as $value) { $carrier[] = "$value REGEXP 'lug|carr|bag|suitcase'" ;}
foreach ($ranks as $value) { $speedometer[] = "$value REGEXP 'meter'" ;}
foreach ($ranks as $value) { $over_shape[] = "$value REGEXP 'overall shap|design|Body'" ;}
foreach ($ranks as $value) { $over_desgin[] = "$value REGEXP 'design'" ;}
foreach ($ranks as $value) { $mileage[] = "$value REGEXP 'mil|average|kmps'" ;}
foreach ($ranks as $value) { $power[] = "$value REGEXP ' power |engine|start|kick|pick'" ;}
foreach ($ranks as $value) { $comfort[] = "$value REGEXP 'comfort|shock|smooth|slip'" ;}
foreach ($ranks as $value) { $look[] = "$value REGEXP 'look|sty'" ;}
foreach ($ranks as $value) { $maintenance[] = "$value REGEXP 'mainte|oil'" ;}
foreach ($ranks as $value) { $safe[] = "$value REGEXP 'lock|safe|accide'" ;}
foreach ($ranks as $value) { $side_panel[] = "$value REGEXP 'side|stand'" ;}
foreach ($ranks as $value) { $cover[] = "$value REGEXP 'cover'" ;}
foreach ($ranks as $value) { $foot_rest[] = "$value REGEXP 'Leg_pad|foot_rest|foot rest|footrest'" ;}
foreach ($ranks as $value) { $toolbox[] = "$value REGEXP 'toolbox|utility box'" ;}
foreach ($ranks as $value) { $none[] = "$value REGEXP 'none'" ;}
foreach ($ranks as $value) { $count[] = "count($value)" ;}

//Nishank whole query Change
$v1_q = mysql_query("
select  count(DISTINCT serialno) from ridd_savvy where (".implode($head_light," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($wheel," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($handle," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($indicator," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($seats," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($fuel_tank," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($tail_lamp," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($guards," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($silencer," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($graphics," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($color," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($front_dome," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'

 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($speedometer," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($over_shape," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($over_desgin," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 

select  count(DISTINCT serialno) from ridd_savvy where (".implode($mileage," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($power," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($comfort," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($look," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($maintenance," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($safe," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($carrier," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($side_panel," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($cover," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($foot_rest," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($toolbox," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'
 union all 
select  count(DISTINCT serialno) from ridd_savvy where (".implode($none," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'




");



  echo "<script>console.log( 'Total Review: " . $deno . "' );</script>";

$v1s = array();

$v2s = array();


echo "";
       while($rv1 = mysql_fetch_array($v1_q)) {
       //$v1 = $rv1[0];
       array_push($v1s, $rv1[0]); //nishank 
         //echo "<script>console.log( 'SIZE OF Objects: " . $v1 . "' );</script>";



}
 

foreach ($v1s as $value12) {

  array_push($v2s, $value12*100/$deno ); //nishank 
}

     echo "<script>console.log( 'Number: " .  join($v1s, ',') . "' );</script>";
     echo "<script>console.log( 'percentage: " .  join($v2s, ',') . "' );</script>";
   

?>
    
	
<?php mysql_close($con);?>



<script>
Highcharts.createElement('link', {
   href: 'https://fonts.googleapis.com/css?family=Unica+One',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

Highcharts.theme = {
   colors: ['#2b908f', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee',
      '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
   chart: {
      backgroundColor: '#424242',
         
    
      style: {
         fontFamily: ''
      },
      plotBorderColor: '#606063'
   },
   title: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase',
         fontSize: '20px'
      }
   },
   subtitle: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase'
      }
   },
   xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#A0A0A3'
         }
      }
   },
   tooltip: {
      backgroundColor: 'rgba(0, 0, 0, 0.85)',
      style: {
         color: '#F0F0F0'
      }
   },
   plotOptions: {
      series: {
         dataLabels: {
            color: '#B0B0B3'
         },
         marker: {
            lineColor: '#333'
         }
      },
      boxplot: {
         fillColor: '#505053'
      },
      candlestick: {
         lineColor: 'white'
      },
      errorbar: {
         color: 'white'
      }
   },
   legend: {
      itemStyle: {
         color: '#E0E0E3'
      },
      itemHoverStyle: {
         color: '#FFF'
      },
      itemHiddenStyle: {
         color: '#606063'
      }
   },
   credits: {
      style: {
         color: '#666'
      }
   },
   labels: {
      style: {
         color: '#707073'
      }
   },


   navigation: {
      buttonOptions: {
         symbolStroke: '#DDDDDD',
         theme: {
            fill: '#505053'
         }
      }
   },

   // scroll charts
   rangeSelector: {
      buttonTheme: {
         fill: '#505053',
         stroke: '#000000',
         style: {
            color: '#CCC'
         },
         states: {
            hover: {
               fill: '#707073',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            },
            select: {
               fill: '#000003',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            }
         }
      },
      inputBoxBorderColor: '#505053',
      inputStyle: {
         backgroundColor: '#333',
         color: 'silver'
      },
      labelStyle: {
         color: 'silver'
      }
   },

   navigator: {
      handles: {
         backgroundColor: '#666',
         borderColor: '#AAA'
      },
      outlineColor: '#CCC',
      maskFill: 'rgba(255,255,255,0.1)',
      series: {
         color: '#7798BF',
         lineColor: '#A6C7ED'
      },
      xAxis: {
         gridLineColor: '#505053'
      }
   },

   scrollbar: {
      barBackgroundColor: '#808083',
      barBorderColor: '#808083',
      buttonArrowColor: '#CCC',
      buttonBackgroundColor: '#606063',
      buttonBorderColor: '#606063',
      rifleColor: '#FFF',
      trackBackgroundColor: '#404043',
      trackBorderColor: '#404043'
   },

   // special colors for some of the
   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
   background2: '#505053',
   dataLabelsColor: '#B0B0B3',
   textColor: '#C0C0C0',
   contrastTextColor: '#F0F0F3',
   maskColor: 'rgba(255,255,255,0.3)'
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);


$(function () {
    $('#sentiment').highcharts({
		
        chart: {
            type: 'column'
        },
		
		 credits: {
            enabled: false
        },

        title: {
            text: ''
        },
		
        subtitle: {
            text: 'Base :- <?php echo $deno;
?> | Rank1 :- <?php echo $rank1?:"ALL";?> | Age Group :- <?php echo $age_group?:"ALL";?> | Panel :- <?php echo $panel?:"ALL";?> | Age :- <?php echo $age?:"ALL";?> | Vechile_name :- <?php echo $vechile_name?:"ALL";?> | Vechile_code :- <?php echo $vechile_code?:"ALL";?> | Mention :- <?php echo $mention?:"ALL";?>| Intender :- <?php echo $intender?:"ALL";?>'
        },
	xAxis: {
        //nishank
       categories: ['Head_Light','Wheel','Handle','Indicator','Seats','Fuel_Tank','Tail_Lamp','Guards','Silencer','Graphics','Color','Front Dome','Speedometer','Over Shape','Design','Mileage','Power','Comfort','Looks','Maintenance','Safety','Carrier','Side Panel','Cover','Foot Rest','Toolbox','None'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
		events: {
                    redraw: function() {
                                console.log(yAxis[0].max);
                    }
                },
   tooltip: {
            shared: false,
            formatter: function() {
                var serie = this.series;
                //NOTE: may cause efficiency issue when we got lots of points, data in series
                //should be change from [x, y] to {"x": x, "y": y, "index": index}
                var index = this.series.data.indexOf(this.point);
                var s = '<b>' + this.x + '</b><br>';
                s += '<span style="color:' + serie.color + '">' + "Number" + '</span>: <b>' + Highcharts.numberFormat(this.y,0) + '</b><br/>';
             
                return s;
            }
        },
          
      
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: ' ',
		//nishank
          data: [ <?php echo join($v1s, ',');?>	 ]
		  
        }]
    });
});
</script>
<script>
$(function () {
    $('#percentage').highcharts({
		
        chart: {
            type: 'column'
        },
		
		 credits: {
            enabled: false
        },

        title: {
            text: ''
        },
		
        subtitle: {
            text: 'Select :- <?php echo $deno;
?> | Rank1 :- <?php echo $rank1?:"ALL";?> | Age Group :- <?php echo $age_group?:"ALL";?> | Panel :- <?php echo $panel?:"ALL";?> | Age :- <?php echo $age?:"ALL";?> | Vechile_name :- <?php echo $vechile_name?:"ALL";?> | Vechile_code :- <?php echo $vechile_code?:"ALL";?> | Mention :- <?php echo $mention?:"ALL";?>| Intender :- <?php echo $intender?:"ALL";?>'
        },
	xAxis: {
    categories: ['Head_Light','Wheel','Handle','Indicator','Seats','Fuel_Tank','Tail_Lamp','Guards','Silencer','Graphics','Color','Front Dome','Speedometer','Over Shape','Over Design','Mileage','Power','Comfort','Looks','Maintenance','Safety','Carrier','Side Panel','Cover','Foot Rest','Toolbox','None'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
		
   tooltip: {
            shared: false,
            formatter: function() {
                var serie = this.series;
                //NOTE: may cause efficiency issue when we got lots of points, data in series
                //should be change from [x, y] to {"x": x, "y": y, "index": index}
                var index = this.series.data.indexOf(this.point);
                var s = '<b>' + this.x + '</b><br>';
                s += '<span style="color:' + serie.color + '">' + "Percentage" + '</span>: <b>' + Highcharts.numberFormat(this.y,0) + ' %</b><br/>';
             
                return s;
            }
        },
          
		  
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: ' ',
		
          data: [ <?php echo join($v2s, ',');?>	 ]
		  
        }]
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

   $('#load').show(); // Show loading animation
   $('#word_cloud_content').hide(); // Hide content until loaded

});

</script>

<?php
if(!mysql_connect("demo.predictly.co","demo",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("csv_import_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
	




$word = mysql_query("Select  ".implode($select,",")."   from $table_name where occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%' ");
$words = array();
while($r = mysql_fetch_array($word)) {
//Nishank foreach in wish based in size of analysis

for($a=0;$a<=sizeof($ranks);$a++){
      array_push($words, $r[$a]);
}
}

?>

<?php //echo join($words,'.');?>

   <script>
d3.select(".save-as-image").on("click.saveAsImage", function () {
    saveSvgAsPng(d3.select('.svg-container svg').node(), 'imrb-<?php echo date("Y-m-d H:i:s");?>.png');
});
      // Declare inputs and initiate wordcloud draw.    
      (function(){
          var text ="<?php echo join($words,'.');?>",
              width = 600,
              height = 400,
              rotate_words = true,
              unique_word_counts = {};
    
          var wordmap = processText(text);
    
          var svg = d3.select('#word_cloud').append('svg');
    
          drawCloud(wordmap, width, height, svg, rotate_words, returnSvg);
        
          // return svg
          function returnSvg(body){
                $('#load').hide(); 
      
			   $('#word_cloud_content').show(); 
              console.log("wordcloud_created");
              console.log(body);
          }
      })();
      
      // Parse a body of text into sorted word counts.
      function processText(text){
          var unique_word_counts = {},
              exclude_words = "a's,able,about,above,according,accordingly,across,actually,after,afterwards,again,against,ain't,all,allow,allows,almost,alone,along,already,also,although,always,am,among,amongst,an,and,another,any,anybody,anyhow,anyone,anything,anyway,anyways,anywhere,apart,appear,appreciate,appropriate,are,aren't,around,as,aside,ask,asking,associated,at,available,away,awfully,be,became,because,become,becomes,becoming,been,before,beforehand,behind,being,believe,below,beside,besides,best,better,between,beyond,both,brief,but,by,c'mon,c's,came,can,can't,cannot,cant,cause,causes,certain,certainly,changes,clearly,co,com,come,comes,concerning,consequently,consider,considering,contain,containing,contains,corresponding,could,couldn't,course,currently,definitely,described,despite,did,didn't,didn`t,different,do,does,doesn't,doing,don`t,don't,done,down,downwards,during,each,edu,eg,eight,either,else,elsewhere,enough,entirely,especially,et,etc,even,ever,every,everybody,everyone,everything,everywhere,ex,exactly,example,except,far,few,fifth,first,five,followed,following,follows,for,former,formerly,forth,four,from,further,furthermore,get,gets,getting,given,gives,go,goes,going,gone,got,gotten,greetings,had,hadn't,happens,hardly,has,hasn't,have,haven't,having,he,he's,hello,help,hence,her,here,here's,hereafter,hereby,herein,hereupon,hers,herself,hi,him,himself,his,hither,hopefully,how,howbeit,however,i'd,i'll,i'm,i've,ie,if,ignored,immediate,in,inasmuch,inc,indeed,indicate,indicated,indicates,inner,insofar,instead,into,inward,is,isn't,it,it'd,it'll,it`s,it's,its,itself,just,keep,keeps,kept,know,knows,known,last,lately,later,latter,latterly,least,less,lest,let,let's,like,liked,likely,little,look,looking,looks,ltd,mainly,many,may,maybe,me,mean,meanwhile,merely,might,more,moreover,most,mostly,much,must,my,myself,name,namely,nd,near,nearly,necessary,need,needs,neither,never,nevertheless,new,next,nine,no,nobody,non,none,noone,nor,normally,not,nothing,novel,now,nowhere,obviously,of,off,often,oh,ok,okay,old,on,once,one,ones,only,onto,or,other,others,otherwise,ought,our,ours,ourselves,out,outside,over,overall,own,particular,particularly,per,perhaps,placed,please,plus,possible,presumably,probably,provides,que,quite,qv,rather,rd,re,really,reasonably,regarding,regardless,regards,relatively,respectively,right,said,same,saw,say,saying,says,second,secondly,see,seeing,seem,seemed,seeming,seems,seen,self,selves,sensible,sent,serious,seriously,seven,several,shall,she,should,shouldn't,since,six,so,some,somebody,somehow,someone,something,sometime,sometimes,somewhat,somewhere,soon,sorry,specified,specify,specifying,still,sub,such,sup,sure,t's,take,taken,tell,tends,th,than,thank,thanks,thanx,that,that's,thats,the,their,theirs,them,themselves,then,thence,there,there's,thereafter,thereby,therefore,therein,theres,thereupon,these,they,they'd,they'll,they're,they've,think,third,this,thorough,thoroughly,those,though,three,through,throughout,thru,thus,to,together,too,took,toward,towards,tried,tries,truly,try,trying,twice,two,un,under,unfortunately,unless,unlikely,until,unto,up,upon,us,use,used,useful,uses,using,usually,value,various,very,via,viz,vs,want,wants,was,wasn't,way,we,we'd,we'll,we're,we've,welcome,well,went,were,weren't,what,what's,whatever,when,whence,whenever,where,where's,whereafter,whereas,whereby,wherein,whereupon,wherever,whether,which,while,whither,who,who's,whoever,whole,whom,whose,why,will,willing,wish,with,within,without,won't,wonder,would,would,wouldn't,yes,yet,you,you'd,you'll,you're,you've,your,yours,yourself,yourselves,zero,a,t,b,c,d,e,,h,i,j,k,l,m,n,o,p,q,r,s,u,v,w,x,y,z,my,me,abundant,accomplished,achieving,active,admirable,adorable,adventurous,admired,affluent,agreeable,alert,aligned,alive,amazing,appealing,appreciate,artistic,astounding,astute,attentive,attractive,auspicious,authentic,awake,aware,beaming,beautiful,best,blessed,bliss,bold,bright,brilliant,brisk,buoyant,calm,capable,centered,certain,charming,cheerful,clear,clever,competent,complete,confident,connected,conscious,considerate,convenient,courageous,creative,daring,dazzling,delicious,delightful,desirable,determined,diligent,discerning,discover,dynamic,eager,easy,efficient,effortless,elegant,eloquent,energetic,endless,enhancing,engaging,enormous,enterprising,enthusiastic,enticing,excellent,exceptional,exciting,experienced,exquisite,fabulous,fair,far-sighted,fascinating,fine,flattering,flourishing,fortunate,free,friendly,fulfilled,fun,generous,genuine,gifted,glorious,glowing,good,good-looking,gorgeous,graceful,gracious,grand,great,handsome,happy,hardy,harmonious,healed,healthy,helpful,honest,humorous,ideal,imaginative,impressive,industrious,ingenious,innovative,inspired,intelligent,interested,interesting,intuitive,inventive,invincible,inviting,irresistible,joyous,judicious,keen,kind,knowing,limitless,lively,loving,lucky,luminous,magical,magnificent,marvelous,masterful,mighty,miraculous,motivated,natural,neat,nice,nurturing,noble,optimistic,outstanding,passionate,peaceful,perfect,persevering,persistent,playful,pleasing,plentiful,positive,powerful,precious,prepared,productive,profound,prompt,prosperous,proud,qualified,quick,radiant,reasonable,refined,refreshing,relaxing,reliable,remarkable,resolute,resourceful,respected,rewarding,robust,safe,satisfied,secure,seductive,self-reliant,sensational,sensible,sensitive,serene,sharing,skillful,smart,smashing,smooth,sparkling,spiritual,splendid,strong,stunning,successful,superb,swift,talented,tenacious,terrific,thankful,thrilling,thriving,timely,trusting,truthful,ultimate,unique,valiant,valuable,versatile,vibrant,victorious,vigorous,vivacious,vivid,warm,wealthy,well,whole,wise,wonderful,worthy,young,youthful,zeal,zest,anger,avoid,awful,ashamed,annoy,abandon,abuse,afraid,alone,attack,alcohol,beg,bore,bad,broken,blame,beer,booze,bomb,cannot,clumsy,confuse,cheat,delay,danger,difficult,dislike,defeat,dead,damage,deny,depress,drug,dirty,dishonest,damage,divorce,disease,dreadful,disaster,dumb,evil,end,excuse,embarrass,enemy,fear,fight,furious,fault,fail,failure,foul,fright,force,false,gossip,greed,guilty,hate,hurt,hide,hunger,horrible,harm,harmful,humiliate,impossible,ignore,insecure,ill,insane,inferior,insult,jealous,kill,lie,lost,loose,miser,no,not,never,offensive,pain,pessimist,problem,poor,poison,quit,reject,revenge,rude,sad,sorry,sorrow,steal,suspicious,suspect,traitor,tension,ugly,upset,un-fair,healthy,pleasant,happy,just,favourable,wanted,PredictlyAId,war,worthless,zero,1,2,3,4,5,6,7,8,9,0,@,$,%,#,vehicle,provide,bike,let,keeping,rider";
    
          var tokenized_text = text.split(/[ '\-\(\)\*":;\[\]|{},.!?]+/);
          tokenized_text.forEach(function(raw_word){
              var word = raw_word.toLowerCase();
              if (word != "" && exclude_words.indexOf(word)==-1 && word.length>1){
                  word in unique_word_counts ?
                      unique_word_counts[word]++ :
                      (unique_word_counts[word] = 1 + Math.random());
              }
          });
    
          var wordmap = d3.entries(unique_word_counts).sort(function(a,b){
              return b.value - a.value;
          });
    
          return wordmap;
      }
    
      // draw our wordcloud.
      function drawCloud(wordmap, width, height, svg, rotate_words, callback){
          var cloud = d3.layout.cloud;
          var max = Math.min(width / 5, height / 5, 100),
              font_size = d3.scale.linear()
                  .domain([ 1, d3.max( wordmap, function(d) { return d.value; })])
                  .range([max / 10, max]),
              fill = d3.scale.category20();
          
          // start cloud simulation to figure out where words should be placed.
          cloud().size([width, height])
              .words(wordmap)
              .timeInterval(20)
              .padding(2)
              .spiral("rectangular")
              .fontSize(function(d) { return font_size(d.value); })
              .font("Impact")
              .text(function(d) { return d.key; })
              .rotate(function() {
                  return rotate_words ? (~~(Math.random() * 2) * 90) : 0;
              })
              .on("end", function(words){
                  // once simulation has found word placements, let's draw the words to an svg.
                  cloud().stop();
                  svg
                      .attr("width", width)
                      .attr("height", height)
                  .append("g")
                      .attr("transform", "translate(" + [width >> 1, height >> 1] + ")")
                  .selectAll("text")
                      .data(words)
                  .enter().append("text")
                      .style("font-family", "Impact")
                      .style("font-size", function(d) { return font_size(d.value) + "px"; })
                      .style("fill", function(d, i) { return fill(i); })
                      .attr("text-anchor", "middle")
                      .attr("transform", function(d) {
                          return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
                      })
                      .text(function(d) { return d.key; })
                 
.on("click", function(d) {
    alert(d.text);
	 $.redirect("table.php#myid",{ search: d.text,Submit:""}); 
  });
                  callback(d3.select('#word_cloud'));
              })
              .start();
          }
    </script>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Branch<i class="fa fa-bar-chart-o"></i> </h3><!--button id="btn-Preview-Image">SVG</button> <button id="save">SVG</button-->
							<?php $url = 'dashboard_tree1.php?analysis[]=' . 
       implode('&analysis[]=', array_map('urlencode', $ranks));?>
							<a href="<?php echo $url  ?>">tets</a>
                        </div>
                        <div class="panel-body">
                              <div id="tree"> </div>
                        </div>
                    </div>
                </div>
            </div>
			
				<script>

// ************** Generate the tree diagram   *****************
var margin = {top: 20, right: 120, bottom: 20, left: 120},
  width = 1200 - margin.right - margin.left,
  height = 900 - margin.top - margin.bottom;
  
var i = 0;
  duration = 750;

var tree = d3.layout.tree()
  .size([height, width]);

var diagonal = d3.svg.diagonal()
  .projection(function(d) { return [d.y, d.x]; });

var svg = d3.select("#tree").append("svg")
  .attr("width", width + margin.right + margin.left)
  .attr("height", height + margin.top + margin.bottom)
  .append("g")
  .attr("transform", "translate(" + margin.left + "," + 
                                    margin.top + ")"); 
									
									
 
console.log("dashboard_tree2_v.php?centre=<?php echo $centre;?>&vichel_group=<?php echo $vichel_group;?>&age_group=<?php echo $age_group;?>&panel=<?php echo $panel;?>&age=<?php echo $age;?>&vechile_name=<?php echo $vechile_name;?>&intender=<?php echo $intender;?>&concept=<?php echo $concept;?>&table_name=<?php echo $table_name; ?>&mention=<?php echo $mention ;?>&vechile_code=<?php echo $vechile_code;?>&mention_no=<?php echo $mention_no;?>&vechicle_before=<?php echo $vechicle_before;?>&vechicle_after=<?php echo $vechicle_after; ?>&rank1=<?php echo $rank1; ?>&rank3=<?php echo $rank3 ;?>&rank2=<?php echo $rank2;?>&rank1_a=<?php echo $rank1_a;?><?php  
      echo '&analysis[]=' . 
       implode('&analysis[]=', array_map('urlencode', $ranks));?> ");
// load the external data

d3.csv("dashboard_tree2_v.php?centre=<?php echo $centre;?>&vichel_group=<?php echo $vichel_group;?>&age_group=<?php echo $age_group;?>&panel=<?php echo $panel;?>&age=<?php echo $age;?>&vechile_name=<?php echo $vechile_name;?>&intender=<?php echo $intender;?>&concept=<?php echo $concept;?>&table_name=<?php echo $table_name; ?>&mention=<?php echo $mention ;?>&vechile_code=<?php echo $vechile_code;?>&mention_no=<?php echo $mention_no;?>&vechicle_before=<?php echo $vechicle_before;?>&vechicle_after=<?php echo $vechicle_after; ?>&rank1=<?php echo $rank1; ?>&rank3=<?php echo $rank3 ;?>&rank2=<?php echo $rank2;?>&rank1_a=<?php echo $rank1_a;?><?php  
      echo '&analysis[]=' . 
       implode('&analysis[]=', array_map('urlencode', $ranks));?> ", function(error, data) {
  // *********** Convert flat data into a nice tree ***************
  // create a name: node map 
  var dataMap = data.reduce(function(map, node) {
    map[node.name] = node;
    return map;
  }, {});

  // create the tree array
  var treeData = [];
  data.forEach(function(node) {
    // add to parent
    var parent = dataMap[node.parent];
    if (parent) {
      // create child array if it doesn't exist
      (parent._children || (parent._children = []))
        // add node to child array
        .push(node);
    } else {
      // parent is null or missing
      treeData.push(node);
    }
  });

  root = treeData[0];
  root.x0 = height / 2;
  root.y0 = 0;
  
  update(root);
});

d3.select(self.frameElement).style("height", "500px");

function update(source) {

  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
    links = tree.links(nodes);

  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = d.depth * 180; });

  // Update the nodes…
 var node = svg.selectAll("g.node")
    .data(nodes, function(d) { return d.id || (d.id = ++i); }); 

  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
    .attr("class", "node")
    .attr("transform", function(d) {
      return "translate(" + source.y0 + "," + source.x0 + ")"; })
    .on("click", click)
      // add tool tip for ps -eo pid,ppid,pcpu,size,comm,ruser,s
      .on("mouseover", function(d) {
        div.transition()
          .duration(200)
          .style("opacity", .9);
        div .html(
            
            "<table>" +
  "<tr >" +

    "<th><center>Name<center></th>" +
	"<th><center>Number<center></th>" +
	 "<th><center>Percentage<center></th>" +
  "</tr>" +
  "<tr >" +


    "<td>"+d.name+"</td>" + 
	"<td>"+d.size+"</td>" + 
		"<td>"+d.percentage+"</td>" + 
   
  "</tr>" +
  "</table>"  
            )
          .style("left", (d3.event.pageX) + "px")
          .style("top", (d3.event.pageY - 28) + "px");
        })
      .on("mouseout", function(d) {
        div.transition()
          .duration(300)
          .style("opacity", 0);
        });

  nodeEnter.append("circle")
    .attr("r", 1e-6)
    .style("fill", function(d) {
      return d._children ? "lightsteelblue" : "#fff"; });

  nodeEnter.append("text")
    .attr("x", function(d) {
      return d.children || d._children ? -13 : 13; })
    .attr("dy", ".35em")
    .attr("text-anchor", function(d) { 
      return d.children || d._children ? "end" : "start"; })
    .text(function(d) { return d.name; })
    .style("fill-opacity", 1e-6);

// add the tool tip
  var div = d3.select("body").append("div")
    .attr("class", "tree_tooltip")
    .style("opacity", 0);

  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
    .duration(duration)
    .attr("transform", function(d) { 
        return "translate(" + d.y + "," + d.x + ")";
      });

  nodeUpdate.select("circle")
    .attr("r", 10)
    .style("fill", function(d) { 
	  return d._children ? "lightsteelblue" : "#fff"; });

  nodeUpdate.select("text")
    .style("fill-opacity", 1);

  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
    .duration(duration)
    .attr("transform", function(d) { return "translate(" + source.y + 
                                             "," + source.x + ")"; })
    .remove();

  nodeExit.select("circle")
    .attr("r", 1e-6);

  nodeExit.select("text")
    .style("fill-opacity", 1e-6);

  // Update the links…
  var link = svg.selectAll("path.link")
    .data(links, function(d) { return d.target.id; });

  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
    .attr("class", "link")
		.attr("stroke-width",   function(d) { return (d.size)/10;})
.attr("stroke", "red")	
    .attr("d", function(d) {
      var o = {x: source.x0, y: source.y0};
      return diagonal({source: o, target: o});
    });

  // Transition links to their new position.
  link.transition()
    .duration(duration)

    .attr("d", diagonal);

  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
    .duration(duration)
    .attr("d", function(d) {
      var o = {x: source.x, y: source.y};
      return diagonal({source: o, target: o});
    })
    .remove();

  // Stash the old positions for transition.
  nodes.forEach(function(d) {
  d.x0 = d.x;
  d.y0 = d.y;
  });
}

// Toggle children on click.
function click(d) {
  if (d.children) {
    d._children = d.children;
    d.children = null;
  } else {
    d.children = d._children;
    d._children = null;
  }
  update(d);
}

</script>			
<?php

echo "<script language='javascript' type='text/javascript'>";
echo "console.log('$centre ');";
echo "console.log('$age_group');";
echo "console.log('$panel ');";
echo "console.log('$age ');";
echo "console.log('$intender ');";
echo "console.log('$vechile_name');";
foreach ($ranks as $value) {
echo "console.log('$value');";}
echo "console.log('$topic');";
echo "</script>";


// echo"select count(serial_no) from $table_name  where occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'";


echo "select
count(case when (".implode($head_light," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as head_light,
count(case when (".implode($wheel," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as wheel,
count(case when (".implode($handle," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as handle,
count(case when (".implode($indicator," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as indicator,
count(case when (".implode($seats," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as seats,
count(case when (".implode($fuel_tank," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as fuel_tank,
count(case when (".implode($tail_lamp," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as tail_lamp,
count(case when (".implode($guards," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as guards,
count(case when (".implode($silencer," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as silencer,
count(case when (".implode($graphics," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as graphics,
count(case when (".implode($color," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as color,
count(case when (".implode($front_dome," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as front_dome,
count(case when (".implode($speedometer," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as speedometer,
count(case when (".implode($over_shape," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as over_shape,

count(case when (".implode($mileage," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as mileage,
count(case when (".implode($power," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as power,
count(case when (".implode($comfort," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as comfort,

count(case when (".implode($maintenance," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as maintenance,
count(case when (".implode($safe," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as safe,
count(case when (".implode($carrier," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as carrier,
count(case when (".implode($side_panel," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as side_panel,
count(case when (".implode($cover," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as cover,
count(case when (".implode($foot_rest," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as foot_rest,
count(case when (".implode($toolbox," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%'then 1 end ) as toolbox,

count(case when (".implode($none," OR ")." ) and  occupation like '%".$centre."%' and rank1  like '%".$rank1."%'  and ( rank2  like '%".$rank2."%' and  rank3  like '%".$rank3."%' ) and marital_status like '%".$age_group."%' and mention like '%".$mentio_no."%' and panel_no like '%".$panel."%' and age like '%".$age."%' and type_of_buyer like '%".$vechile_name."%' and brand_intended like '%".$intender."%' and   reason_choosing_ranked_1_vname  like '%".$concept."%' and pj  like '%".$mention."%' then 1 end ) as none

from $table_name ";



//echo join($words,'.');


 
 echo $string ; 
?>	


</body>
</html>

