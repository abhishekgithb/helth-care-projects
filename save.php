<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $time = $_POST['seclect'];
        $message = $_POST['message'];
        echo "$Name <br>  $time <br> $Email <br> $Phone";

        $coon = mysqli_connect("localhost","root","");
        
        if($coon){

            echo"Successfull connect";

            


            $sql = "INSERT INTO `HealthCare1`.`contact` ( `Name`,  `Email`,  `Phone`, `Time`, `Message`) VALUES ( '$Name',   '$Email', '$Phone' ,' $time', '$message')";
            $result = mysqli_query($coon,$sql);

            header("Location: submit.php");
        }
        else{
            header("Location: notSubmit.php");
        }
        
    }
    else{
        header("Location: notSubmit.php");
    }
    
?>