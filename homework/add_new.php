<?php
include("connection.php");
if(isset($_POST['submit'] ) && $_POST['submit']=='submit')
{
      //  echo'data submitted';
      $name=$_POST['name'];
      $username=$_POST['username'];
      $password=$_POST['password'];


      $query="INSERT INTO users(name,username,password) VALUES ('$name','$username','$password')";
      //$db->insert($query);


      $result=$db->insert($query);
      if($result)
      {
        header ("Location: index.php");

      }
      else{
        "Error";

      }

}

else {

    die("somethis went wrong");
}



?>