<?php 
include 'dbConfig.php';
	$data= array();
				   
			  $query = $db->query("SELECT * FROM data");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
            'date' => (string)$row["date"],
            'value' => (string)$row["value"],
             
        );

        $data[] = $item;
						
						}
					}
					echo json_encode($data, JSON_UNESCAPED_SLASHES);
   ?>			