<!DOCTYPE html>
<?php
session_start();


require("dbset1.php");


$conn = mysqli_connect(
    $address, $conId, $password, $dbname    
  );
$token = $_GET['auth'];
$sql = "select * from auth where hash='".$token."'";

if($result=mysqli_fetch_array(mysqli_query($conn, $sql))){

    $_SESSION['token'] = $result['hash'];


    echo "<script type=\"text/javascript\">alert('Hello'); location.href='./select_theme.php'</script>";
    
}else{
    // 8. 아이디가 존재하지 않으면
    echo "<script type=\"text/javascript\">alert('There is no user'); location.href='./ui.php'</script>";

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
    Hi!
</body>
</html>