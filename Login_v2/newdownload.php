<?php

   $con=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($con,"distance_learning");
   $qur="select * from upload";
   $res=mysqli_query($con,$qur);
   while($data=(mysqli_fetch_array($res)))
      {
      echo "<pre>";
       print_r($data[1]); 
       $fileName = $data[1] ;
      $filePath = 'C:\wamp64\www\DL\UPLOAD"'.$fileName.'"';
    
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
       readfile($filePath);       
 

      }
   mysqli_close($con);
      ?>