<?php
if(isset($_FILES['files'])){
 
   foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
	$file_name = time().$_FILES['files']['name'][$key];
	$file_size = $_FILES['files']['size'][$key];
	$file_tmp  = $_FILES['files']['tmp_name'][$key];
	$file_type = $_FILES['files']['type'][$key];	
        	
     
        $desired_dir="images/";
   
        $result =   move_uploaded_file($file_tmp,$desired_dir.$file_name);
         
        }
        if ($result) {
        	echo "Images uploaded !!";
        }
    }
   
?>