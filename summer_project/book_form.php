<?php
    $hostName="localhost";
    $dbUser="root";
    $dbPassword="";
    $dbName="book_db";
    $connection=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
    if(isset($_POST['send']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $people=$_POST['people'];
        $arrivals=$_POST['arrivals'];
        $leaving=$_POST['leaving'];

        $request=" insert into book_form_details(name, email, phone, address, location, people, arrivals, leaving) values ('$name','$email','$phone','$address','$location','$people','$arrivals','$leaving')";

        mysqli_query($connection,$request);

        header('location:book.html');

    }
    else
    {
        echo 'Error!';
    }
    
?>
