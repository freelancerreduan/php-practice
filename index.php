
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1> <?php echo " Hello PHP " ?> With Reduan </h1>

    




    <?php include('action.php')  ?>


    <div class="container">

<div class="row">
    <?php 
        $card = 1;
        while ($card <= 4) {
    ?>
    <div class="col-md-3 ">
        <div class="card" style="width: 17rem;">
            <img src="img/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary"> <?php echo "Card No : $card"; ?> </a>
                
                <?php 
                echo "$card $name ";
                ?>
                
            </div>
        </div>
    </div>
    <?php
        $card++;
    }
    ?>
</div>





        <h2 class="text-danger"> Your Year </h2>

        <!-- <form action="" method="post">
            <select name="name" id="name"> 
                Year
                <?php 
                    $year =1;
                    while ($year <=10){

                ?>
                    <option value="<?php echo $year?>"> <?php echo $year?> </option>
                <?php
                        $year++;
                    }
                ?>

            </select>
        </form> -->
        


        
        <!-- <form action="action.php">
            <select name="name" id="name">
                Select Year
                <?php 
                    $nadia = 10;
                    while ($nadia <= 110) {
                    
                ?>
                    <option value="<?php echo $nadia ?>">  <?php echo $nadia ?> </option>
                <?php 
                      $nadia++;  
                    }
                ?>
            </select>
        </form> -->


    <!-- Fainal Test Code Hear -->
        <form action="index.php" method="get">
            <select name="name" id="name" > 
                <?php 
                
                
                $love =10 ;
                while ($love <= 20) {
                
                ?>
                <option value=" <?php echo $love ?> "> <?php echo $love ?> </option>
                <?php 
                $love++;
                }
                ?>
            </select>
        </form>







    </div>

    <!-- <?php


        echo "Our Home page";
        echo "<br>";

        $user = "hacker";
        $chack ="hackerw";
        

        // if ($user === $chack) {
        //     echo "Hello Reduan Login Successfuly";
          
        // }elseif($user == 123){
        //     echo "Hello User Login Successfuly";
        // }
        // else{
        //     echo "Login Faild , Your Account Locked!";
        // }

        echo "<br>";
        $admin = ($user == $chack) ? "Hello Nadia Rani" : "I Love YOu ";

        echo "My Result Is $admin";



    ?> -->


    <ul>
        <?php 
            for ($user=1; $user <=5 ; $user++) { 
                echo "<li>User $user </li>";
            }
        ?>
        
    </ul>

    
    
    
    
    
    <ul>
        <li>Reduan 1 
            <ul>
                <li>hello</li>
                <li>hello</li>
                <li>hello</li>
            </ul>
        </li>
        <li> Rafika
            <ul>
                <li>hello</li>
                <li>hello</li>
                <li>hello</li>
            </ul>
        </li>
        <li>helo </li>
    </ul>
    <?php 


























echo "<br>";
echo "<br>";
echo "<br>";
?>
</body>
</html>
