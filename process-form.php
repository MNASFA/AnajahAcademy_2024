<?php 
    
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
            
           
        
           
	
        if(!empty($name) && !empty($email) && !empty($phone)){
            $link = mysqli_connect("localhost" , "root" , "root" , "anajah_academydb");

            if($link == false){
                die(mysqli_connect_error());
            }
            $sql = "INSERT INTO clients (Name , Email , Phone) values ('$name' , '$email' , '$phone')";
            //send email
            include 'send.php';
            if(mysqli_query($link , $sql)){
                // echo("Record inserted succesfully...");
                echo '<script>
                    window.location.href = "pages/thanks.html";
                </script>';
 
            }
            else {
                echo '<script>
                    window.location.href = "pages/Error.html";
                </script>';
            }

        }else{
            echo '<script>alert("Remplir Tout les champs !!!!!")
                    window.location.href = "pages/contact.php"; 
            </script>';
            
        }
   

?>