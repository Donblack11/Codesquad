<!DOCTYPE html>
<html>
<head>
    <title>result</title>
</head>
<body>


 <?php

       $con = mysqli_connect('localhost','root','','webex');

         if(isset($_POST["signup"])){
         extract($_POST);

         if($_POST['psw'] !== $_POST['cpsw']){

            // echo "password does not match";
            $message = "Password does not match, check and try again.";
            echo "<script type= 'text/javascript'>alert('$message');</script>" ;
        }
        else{

            if(!$con)
        {
            echo 'Not connected to server';
        }

         if(!mysqli_select_db($con, 'webex'))
        {
          echo 'Database not selected';
        }

         $firstname = $_POST['fname'];
         $lastname = $_POST['lname'];
         $Email = $_POST['email'];
         $phone = $_POST['phone'];
         $password = $_POST['psw'];
         $Cpassword = $_POST['cpsw'];

         $sql = "INSERT INTO user (firstname,lastname,Email,phone,password,Cpassword) VALUES ('$firstname','$lastname','$Email','$phone','$password','$Cpassword')";

         // mysql_query($sql) or die(mysql_error());

         if (!mysqli_query($con,$sql))
         {
            $messag = "There's and error, please check and try again.";
            echo "<script type= 'text/javascript'>alert('$messag');</script>" ;
         }
         else
         {
             // header("Location: marketer.php#marketer-signup",true,301);
            $msg = "You have been successfully registered, please proceed to login.";
            echo "<script type= 'text/javascript'>alert('$msg');</script>" ;
           
         }
                } 
            }
        ?>

        </body>
</html>
