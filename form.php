<?php
if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['msg'];
 
        //database details.
        $host = "localhost";
        $username = "formdb_user";
        $password = "cucumberband123";
        $dbname = "form_entriesdb";
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO contactform_entries (firstname_fld, lastname_fld, email_fld, sub_fld, msg_fld) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Message has been sent successfully!";
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
      //connection closed.
        mysqli_close($con);
    }
?>