<?php
//load the database configuration file
include 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Import CSV File Data into MySQL </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <script src="https://cdn.jsdelivr.net/jquery.form/4.0.1/jquery.form.min.js" integrity="sha384-MSBAlvUdugJfNRlgXmRfwPbw7SNanf6IaKgQBi1ajJdWoZ9oUYhxC79B5n4gp3y5" crossorigin="anonymous"></script>
  
  
  
  
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
	
  </style>
  
  
  
</head>
<body>

<div class="container">
    <h2>Import CSV File Data into MySQL Database </h2>
	 <a href="city-count.html">task1</a> 
	 <a href="barchat.html">task2</a>
	 <a href="3/index.html">task3</a> 
	 <a href="multiline.php">task4</a> 
	  <a href="Sunburst.html">task5</a> 
	 
	 
	 
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Data
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Data</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>id</th>
                      <th>State</th>
                      <th>City</th>
                      <th>date</th>
                      <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
		           $date= array();
				   $value= array();
			  $query = $db->query("SELECT * FROM data ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							$date[]=$row["date"];
							$value[]=$row["value"];
						}
					}
   			 $date_string = implode(",", $date);
			
   			 $value_string = implode(",", $value);
					
                    //get rows query
                    $query = $db->query("SELECT * FROM data ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){
                        ?>
                    <tr>  
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['State']; ?></td>
                      <td><?php echo $row['City']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['value']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>