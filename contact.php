<?php

// if(isset($_POST['login'])){
//     $userName = $_POST['userName'];
//     $email = $_POST['email'];
// }

if (isset($_POST['create_ac'])) {
    $username = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $job_type = $_POST['job_type'];

    $password_1 = $_POST['password_1st'];
    $password_2 = $_POST['password_2st'];
    print_r($_FILES['upload_img']); 

    // img upload code
    $img_name = $_FILES['upload_img']['name'];
    $tmp_name =$_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name , "upload/".$img_name);
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Virtual Card</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
</head>
<body class =" body-style " >
<div class="container">


    <div class="card" style="background-color:  transparent;">
        <div class="card" style="width:300px">
            <img class="card-img-top" src="upload/<?php if (isset($img_name)) {
                echo $img_name;
            } ?> " alt="Card image" style="width:100%">
            <div class="card-body">
                <p class="card-title"> Name: <?php if (isset($username)) {
                    echo $username ;
                } ?> 
                </p>

                <p>Number: <?php if (isset($number)) {
                    echo $number;
                } ?> </p>

                <p>Email: <?php if (isset($email)) {
                    echo $email;
                } ?> </p>

                <p>Job Type: <?php if (isset($job_type)) {
                    echo $job_type;
                } ?> </p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>



</div>
</body>
</html>
