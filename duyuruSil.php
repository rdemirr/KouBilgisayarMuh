<?php

   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $ID=$_POST['ID'];
  
    	//Kullanıcıyı sil
        mysqli_query($con,"DELETE FROM announcements WHERE ID = '".$ID."'");



    mysql_close($con); // Connection Closed
?>