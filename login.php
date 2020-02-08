<?php
 if(!session_start()){
    session_start();
}
if(isset($_SESSION['login'])){
    header("Location: index.php");
}


if(isset($_POST['submit'])) 
{ 
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if($name != "" && $pass != ""){

        $_SESSION['login'] = "true";
        header("Location: index.php");

    }
}

?>

<!Doctype html>
<html>

<body>


<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    Name:
    <input type="text" name="username" id="username" >
    <br>
    Password:
    <input type="text" name="password">
    <br>
    <input type="submit" name="submit"  value="Login">
    <br>
    </form>

</body>
</html>