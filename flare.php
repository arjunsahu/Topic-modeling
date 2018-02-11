<?php 
include 'dbConfig.php';
	$data= array();
				   
			  $query = $db->query("SELECT * FROM data where State='Del' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
			 
            
		
				
            'date' => (string)$row["date"],
			'value' => $row["value"],
			
			
        );

        $data[] = $item;
						
						}
					}
					
			echo '{
 "date": "STATE",
 "children": [
  {
   "date": "State",
   "children": [
    {
     "date": "Del",
     "children":';
					echo json_encode($data, JSON_UNESCAPED_SLASHES);
		echo' },
    {
     "date": "MH",
     "children":';			
					
		$data1= array();
				   
			  $query = $db->query("SELECT * FROM data where State='MH' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
			 
            
		
				
            'date' => (string)$row["date"],
			'value' => $row["value"],
			
			
        );

        $data1[] = $item;
						
						}
					}			
		echo json_encode($data1, JSON_UNESCAPED_SLASHES);
		
        echo'},
    {
     "date": "TN",
     "children":';
$data2= array();
				   
			  $query = $db->query("SELECT * FROM data where State='TN' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
			 
            
		
				
            'date' => (string)$row["date"],
			'value' => $row["value"],
			
			
        );

        $data2[] = $item;
						
						}
					}			
		echo json_encode($data2, JSON_UNESCAPED_SLASHES);
		

        echo'},
    {
     "date": "KA",
     "children":';
$data3= array();
				   
			  $query = $db->query("SELECT * FROM data where State='KA' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
			 
            
		
				
            'date' => (string)$row["date"],
			'value' => $row["value"],
			
			
        );

        $data3[] = $item;
						
						}
					}			
		echo json_encode($data3, JSON_UNESCAPED_SLASHES);
		

echo'   }
	
	
	
	
	
   ]
  }

  
  
 
  
 
 

 ]
}
  
';













		
					
   ?>	