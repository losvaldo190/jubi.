<?php
$rfc=$_POST["rfc"];
$archivo=$_POST["archivo"];

$target_dir  ="docx/"; 
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
$target_file = $target_dir . $rfc."-".$archivo. ".pdf"; 
$uploadOk = 1; 

if(isset($_FILES["fileToUpload"]) &&  
        $_FILES["fileToUpload"]["error"] == 0) { 
        $allowed_ext = array("pdf" => "application/pdf"); 
        $file_name = $_FILES["fileToUpload"]["name"]; 
        $file_type = $_FILES["fileToUpload"]["type"]; 
        $file_size = $_FILES["fileToUpload"]["size"]; 
      
        // Verify file extension 
        $ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
        if (!array_key_exists($ext, $allowed_ext)) { 
            die("Error: Please select a valid file format."); 
        }     
              
        // Verify file size - 2MB max 
        $maxsize = 2 * 1024 * 1024; 
          
        if ($file_size > $maxsize) { 
            die("Error: File size is larger than the allowed limit."); 
        }                     
      
        // Verify MYME type of the file 
        if (in_array($file_type, $allowed_ext)) 
        { 
            // Check whether file exists before uploading it 
            
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  
                  $target_file)) { 
                    echo "The file ".  $_FILES["fileToUpload"]["name"].  
                      " has been uploaded."; 
                }  
                else { 
                    echo "Sorry, there was an error uploading your file."; 
                } 
            
        } 
        else { 
            echo "Error: Please try again."; 
        } 
    } 
    else { 
        echo "Error: ". $_FILES["fileToUpload"]["error"]; 
    } 
?>
