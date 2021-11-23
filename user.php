<!DOCTYPE html>
<html>
<head>
    <title>result</title>
</head>
<body>


 <?php

       $con = mysqli_connect('localhost','root','','webex');

         if(isset($_POST["submit"])){
         extract($_POST);

         if($_POST['pswd'] !== $_POST['Cpswd']){

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

         $firstname = $_POST['name'];
         $lastname = $_POST['uname'];
         $Email = $_POST['email'];
         $phone = $_POST['phone'];
         $password = $_POST['pswd'];
         $Cpassword = $_POST['Cpswd'];

         $sql = "INSERT INTO user (firstname,lastname,Email,phone,password,Cpassword) VALUES ('$firstname','$lastname','$Email','$phone','$password','$Cpassword')";

         // mysql_query($sql) or die(mysql_error());

         if (!mysqli_query($con,$sql))
         {
            echo 'Not Inserted';
            $messag = "There's and error, please check and try again.";
            echo "<script type= 'text/javascript'>alert('$messag');</script>" ;
         }
         else
         {
            echo 'YOU HAVE BEEN REGISTERED';
            $msg = "SUCCESS";
            echo "<script type= 'text/javascript'>alert('$msg');</script>" ;
            header("Location: marketer.php#marketer-signup",true,301);

         }
                } 
            }
        ?>

        </body>
</html>
