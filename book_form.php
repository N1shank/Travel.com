<?php

   

   if(isset($_POST['send']))
   {  
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "book_db";

      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $connect = mysqli_connect($hostname,$username,$password,$databaseName);

      $query = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
      
      $result = mysqli_query($connect,$query);

      if($result)
          {
             echo 'Booking Successful';
          }
         
         else{
            echo 'Booking Failed ! Try Again !!';
         } 

         mysqli_free_result($result);
         mysqli_close($connect);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>