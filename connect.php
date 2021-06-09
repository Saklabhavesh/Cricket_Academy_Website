<?php
        if(isset($_POST["done"])){
            
            $Name = $_POST["fullname"];
            $email = $_POST["mail"];
            $age = $_POST["age"];
            $no = $_POST["no"];
            $rad = $_POST["radio"];
            $sub = "Welcome to Bhavesh Cricket Academy";
            $msg = "Congrats $Name you're Successfully registered!!\n\nDetails :\nName : $Name\nAge : $age years \nContact : $no\nCamp selected : $rad camp \n\nYou will be under the guidance of coach : Sir. Dilip Vengeskar \n\nFor further queries please contact Rahul :+917055667554\n\nOR\n\nYou can reach to our nearest center\n\nThank You:)";
            
            if(mail($email, $sub, $msg)){
                echo '<script>alert("Successfully Registered!\nwe have sent an email to '$email'
                ")</script>';
            }
            
            header("Location: https://bhaveshacademy.000webhostapp.com/index.html#section-5")
            
            
            
        }
?>

