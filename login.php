<?php



if(isset($_POST['username']) && ($_POST['password'])){
    echo "Hello Hacker";
}




?>

<form action="login.php" method="post">
    <label for="username">UserName</label>
    <input type="text">

    <label for="password">Password</label>
    <input type="text">

    <button type="submit"> Login </button>
</form>