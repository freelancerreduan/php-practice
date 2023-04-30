
<?php 

// Variable Store in hear 

    // $name = "Reduan";
    // $myNumber = 300;
    // $address = "saturia, Manikgonj";


    // echo rand($myNumber);
    // echo round(5.8);
    // echo (rand(10, 20));


    // $student = 50;
    // // $ = readline('Enter Sir Count');
    // $sir = 0;
    // if($student == 50 xor  $sir == 10 ){
    //     echo " I Love You Reduan ";
    // }
    // else{
    //     echo "Reduan Tomi |Aita valo kore koro";
    // }
  

    $student = 80;
    $girl = 'Niha';

    if($student > 90 ){
        echo "Student is 90% Good </br> </br>";
    }elseif($student > 70){
        echo "Student is 70% Good </br> </br>";
    }elseif($student > 50 ){
        echo "Student 50% Good </br> </br>";
    }else{
        echo "Student Faild </br> </br>";
    }
    // nl2br('.<br>.');


    // switch ($girl) {
    //     case 'Nandia Rani':
    //         echo "I Love Nadia";
    //         break;
    //     case 'Rafika':
    //         echo "I Love Rafika";
    //         break;
    //     case 'Niha':
    //         echo "I LOve Niha ";
    //         break;
    //     default:
    //         echo "Ami Kayoke Love Kori nah , love Not for me !!";
    //         break;
    // }
    // echo "<br>";
    // Whil Loop
    // $love = 1;

    // while ($love <= 10) {
    //     echo $love."/ I Love Rafika";
    //     echo "<br>";
    //     $love++ ;
    // }


    // echo "<br>";
    // do {
    //     echo $love."/ I love PHP";
    //     echo "<br>";
    //     $love++ ;
    // } while ($love <= 10);
    
    // for ($love; $love < 10 ; $love++) { 
    //     echo $love.". I Love Nadia";
    //     echo "<br>";
    // }
    

    // $love = array("Name" => 'Reduan', 'Phone'=>'01318532992','Location'=>'Saturia');
    // $name_array =
    // foreach ($love as $key=>$value) {
    //     echo  "$key = $value";
    //     echo "<br>";
    // }



    function newNumber(){
        $num = 11;
        if ($num%2==0) {
            echo "Hello World";
        }
        else{
            echo "Result Not Found";
        }
        echo "<br>";
    }

    // Funtion 2
    function red($a , $b){
        $x = $a+$b;
        echo $x;
        echo "<br>";
    }
    newNumber();
    red(25,30);
    red(10,30);
    red(10,20);

    // variable Name hear
    $name = "Reduan";
    $f_name= "Hacker";

    // echo $f_name;
    echo $name, " ", $f_name;

    echo "<br>";
    define("MY_NAme", "Reduan Hacker Boy");
    echo MY_NAme;

    echo "<br>";


    define("TEST","Hello Would! ");
    $name2 = "Hacker Girl GF";

    echo "Your Number is $name2 ".TEST;

    echo "<br>";

    $name = "reduan hacker";
    $change_name = ucwords($name) ;
    echo "<br>";
    echo $change_name;
    echo "<br>";
    $name_3 = strtolower($change_name);
    echo $name_3;

    echo "<br>";
    echo strtoupper($name);
    echo "<br>";




    $test_1 = "Reduan";
    $test_2 = "HackeR";
    $amount = 100;
    $amount2 = 10.560;


    echo "<br>";
    // $str1 = 'best';
    // $str2 = 'world';

    // $say = sprintf('Tivie is the %s in the %s!', $str1, $str2);
    // echo $say;


    $hack =10;
    $hack2 = 20;
    $totall = $hack + $hack2;

    // printf("Hello  and  %2\$d and %f", $amount, $amount2);
    printf("Hello %2\$d Hacker %d Boy", $hack, $hack2);
    echo "<br>";
    echo "<br>";
    printf('Your Wifi Bill %1$d and Totall Pay bill : %1$d' ,$totall);




//  $name = array(" name" = > $check = array("Data") );

 $name = [
   [
    'name' => 'Reduan', 
    'location'=> 'Saturia',
    'img' => 'https://img.freepik.com/free-vector/cartoon-web-design-background_52683-70879.jpg?w=2000'
   ],
   [
    'name' => 'Alamin', 
    'location'=> 'Maingonj',
    'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2BxEcVFQvoaRlsS81kN-V9-wKaQMBT8msCFgO-tZwcIBH1xYGcDNh0uknzgUAlgeZ604&usqp=CAU'
   ],
   [
    'name' => 'Sakib', 
    'location'=> 'saver',
    'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkl9y0wwWHW6j7Vbl0JjXlIt4-FrGbneUlbZGvyxCqQxIuyptFHTBI98Io6l61At79dk8&usqp=CAU'
   ]
    
    ];


echo "<br>";

// $username = "reduddrt";
// $chack_lenth = strlen($username);
// $min =3;
// if ($chack_lenth >= 4 &&  $chack_lenth <= 6 && $username){
//     echo " <h1> Login Successful </h1>";
//     echo "<br>";
//     echo "<h2> Hello Reduan </h2>";
// }


// else{
//     echo "<h1> password error !!! </h1>";
// }

// $username = "reduan";
// $password = "pass";

// if($username == "reduan"){
//     if($password == "pass"){
//         echo " <h1> Hello Admin ,This website is hacked !!! </h1>";
//     }
//     else {
//         echo "<h2>  Passowrd incorrect !  </h2>";
//     }
// }
// else{
//     echo "<h4> user name vhul </h4>";
// }

// $year = 10;

// while ($year <= 200){
    
//     $year++;
// }


echo "<h1> List Create use LOOP </h1>";
for ($i=0; $i <= 10 ; $i+= 2) { 
    echo " Hello Reduan $i <br>  ";
}

for ($test=0; $test <=10 ; $test++) { 
    echo "<br>";
    if ($test == 5) {
        continue;
    }
    echo "Hello Arafat $test <br>";
}


echo "<br>";

for ($run=1; $run <=5 ; $run++) { 
    if( $run ==3){
        continue;
    }
    echo " <h3> Hello Reduan / $run</h3>";
    echo " <h3> hello Arafat 20 </h3>";

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1> Sub Menu Create use Nested LOOP </h1>";
for ($list=1; $list <=5 ; $list++) { 
    echo "<ul> <li> Hello $list </li> </ul>";
    for ($sub_list=1; $sub_list <=5 ; $sub_list++) { 
        echo "------------ Reduan $sub_list <br>";
    }
}



?>