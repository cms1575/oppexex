<!doctype HTML>

<head>
	<meta charset="UTF-8">
	<title>GMyou &ndash; Welcome!</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
   

</head>
<body>
	<div class="main-container">
		<div class="main-wrap">
		<header>
			
			<div class="logo-wrap">
				<img src="logo.png">
			</div>
		</header>
		<section class="login-input-section-wrap">
         <form name='sendmail' action="sendmail.php" method="post">
            <div class="login-input-wrap">	
				<input placeholder="Email" type="text" name="email">
			</div>
			
			<div class="login-button-wrap">
				<button onclick="check();">Verify Email to join Us</button>
			</div>
         </form>
			
			
		</section>
		<script> 
         function check() { 
            form = document.sendmail; 
            if ( form.form_user.value == '' ) 
            { alert('받는사람의 메일 주소를 입력해주세요.'); 
            form.form_user.focus(); return false; } 
            /*if ( form.subject.value == '' ) { alert('메일 제목을 입력해주세요.'); form.subject.focus(); return false; }*/ 
			form.submit(); }
      </script>
		<footer>
			<div class="copyright-wrap">
			<span>@Made by Team 22.</span>
			</div>
		</footer>
		</div>
	</div>
</body>