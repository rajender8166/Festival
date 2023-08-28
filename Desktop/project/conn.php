<?php
     $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
     $email=$_POST['email'];
     $password=$_POST['password'];

     //database conn
     $conn=new mysqli('localhost','root','','festival');
     if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
     }else{
        $stmt= $conn->prepare("insert into register(firstName,lastName,email,password)values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->execute();   
        echo"Registration Successfully...";
        $stmt->close(); 
        $conn->close();   

     }

?>