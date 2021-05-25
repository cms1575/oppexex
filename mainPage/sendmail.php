<?php 
require("dbset1.php");
$conn = mysqli_connect(
    $address, $conId, $password, $dbname    
  );

$to = trim($_POST['email']); 
echo $to;
$hash = md5(rand(0,1000));
$sql = "insert into auth (hash) VALUES('".$hash."')";
mysqli_query($conn, $sql);

// 받는사람 메일주소 
$subject = '메일 인증'; 
$message = '메일 인증되셨습니다! 해당 링크에 접속 후 서비스를 이용해주시길 바랍니다.
Please click this link to activate your account:
http://localhost/auth.php?auth='.$hash.'
'; 
// html 메일을 보낼 때 꼭 이헤더가 붙어야한다. 
// Additional headers //$headers[] = 'To: Kim<받는사람@gmail.com>'; 
$headers = 'From: webmaster<skku_Team22@gmail.com>\r\n'; 
//$headers[] = 'Cc: Kim1<참조인1@naver.com>,Kim2<참조인2@gmail.com>'; //$headers[] = 'Bcc: 숨은참조인3@gmail.com'; 
$to = "qqfelix587@gmail.com";
        

$subject = "문의가 들어왔습니다.";

$contents = "관리자서버에서 해당 내용을 확인하세요";

$headers = "From: thanksrental@naver.com\r\n";

mail($to, $subject, $contents,  $headers); 

echo "<script language=javascript> alert('메일을 보냈습니다. 메일의 해당 링크를 통해 접속해주세요!');  </script>";
?>
