<?php 
include 'dbConfig.php';
	$data= array();
				  
				   
			  $query = $db->query("select City, count(*) as total from data group by City");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
            'City' => (string)$row["City"],
            'Total' => (string)$row["total"],
             
        );

        $data[] = $item;
						
						}
					}
					echo json_encode($data, JSON_UNESCAPED_SLASHES);
   ?>			