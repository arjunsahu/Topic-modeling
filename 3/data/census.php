<?php 
include 'dbConfig.php';
	$data= array();
				   
			  $query = $db->query("SELECT * FROM data ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $time=strtotime($row["date"]);
                                  $month=date("F",$time);
							 $item = array(
			 
            
		
				
            'Facility' => (string)$row["City"],
            'Census' => (string)$row["value"],
            'Digit2' => (string)$month
			
			
        );

        $data[] = $item;
						
						}
					}
					
			
					echo json_encode($data, JSON_UNESCAPED_SLASHES);




   
?> 

