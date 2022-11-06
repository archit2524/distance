<?php
   $fileName = 'JAVA.pdf';
    $filePath = 'C:\wamp64\www\DL\Login_v2\UPLOAD\JAVA.pdf';
    
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
       
?>