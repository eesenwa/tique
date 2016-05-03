<html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<head>
<link rel="icon" href="src/logo.png">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/signup.css">

<title> Tique</title>
</head>

<body class="home_bg" style="width:100%">
<div class="overlay" id='overlay'>
	<div class='sign_up_prompt' id='sign_up_prompt' style='background-color:rgba(250,250, 250,1.0);'>
		<div style="width:100%; height:10%; text-align:center;">
			<a class='close_button' onclick="signUpHide();"><div style='width:20px; height:100%; float:right; padding-top:1%; padding-right: 2%; text-align:center;font-family: "Gill Sans", "Gill Sans MT", sans-serif; font-size: 18px; color: rgba(30, 30, 30, 0.9);'> <span style="color:rgb(130, 130, 130);">x</span> </div></a>
			<div style='padding-top:2%;'>
				<span style="color:rgb(180, 40, 40);">Sign in to Tique</span>
				<hr width='70%'>
			</div>
		</div>
		<div style='width:100%; height:25%; '>
			<img src='src/logo.png' style="max-width:30px; padding-top:4%;">
		</div>
		<div style="width:100%; height:70%; text-align:center;"> 
			<div style="padding-left:15%; padding-right:15%;">
				<input class='textfield' placeholder='Email or Phone' name='email' autofocus> 
				<div style="width:100%; height:5%"></div>
				<input class='textfield' type='password' placeholder='Password' name='pass'>
				<div style="width:100%; height:5%"></div>
				<input type='button' class="myButton" style="width:90%;" onclick="teacherSubmission()" value='Sign in'>
			</div>
		</div>
	</div>
</div>
<div id="container">


	<div class="home" >
	<div class="home_header">
		<div class="menu_bar_holder" >
				<a href="index.html" class="closing_link_im"><img src='src/logo.png' style="float:left; padding-left: 5px; max-width:50px;"></a>
				<a onclick="signUpShow();"><div><input type='button' class="menuButton" value='Sign in' name='next'></div></a>
				<a href="faq.html"><div><input type='button' class="menuButton" value='FAQ'  name='next'></div></a>
				<a href='about.html'><div><input type='button' class="menuButton" value='About'  name='next'></div></a>
				<a href="index.html"> <div><input type='button' class="menuButton" value='Home' src='index.html' name='next'></div></a>
		</div>
		
		<div class="header_title" style="min-height:70%;">
			<div class="logo">
				<a href='#' onclick="newPhrase();"> <img style="padding:10px; width:85%; max-width:450px" src="src/tique_text_2.png"></a>
				<div class="heading2"> Anonymous feedback </div>
			</div>

			<div class="headings">
				<div class="heading1" id="main-header" style="word-wrap: break-word; margin:0 auto; width:85%; ">
				<span id='title_caption' style="font-size:120%; font-size: 3.5vw; color:black; letter-spacing:2px;"> Discover your pluses and minuses. </span></div>
				<a href="signup.html">
				<input type='submit' class="myButton" type='submit' value='Sign Up' name='signup'>
				</a>
			</div>
		</div>
	</div>
	</div>


	<div class="home_bg" style="background:#F7F7F7; height:90%; width:100%; clear:both;">
	<hr>
		<div class="heading1" style="font-size:40px; font-weight:400"> 
			<p> How It Works</p> 
			<hr width="30%"> 
		</div>
		

		<div class="infographic" style=" padding-left:2%; padding-right:2%; width:100%" >
			<div class="segment">
				<p class="heading3"> Link Up</p>
				<img style="width:100%; " src="src/graphic_1.png">
				<p class="heading4" >Students find their teachers quickly with a 5-digit group code.</p>
			</div>
			<div class="segment">
				<p class="heading3"> Feedback</p>
				<img style="width:100%; " src="src/graphic_2.png">
				<p class="heading4">Students can evaluate their teachers with constructive criticism or encouragement.</p>
			</div>
			<div class="segment">
				<p class="heading3"> Improve</p>
				<img style="width:100%; " src="src/graphic_3.png">
				<p class="heading4">Teachers can track their progress through feedback statistics. </p>
			</div>
		</div>
	</div>





	<div class="home_bg" style="background:#F7F7F7; height:90%; width:100%; clear:both">
	<hr>

		<div class="heading1" style="font-size:35px"> 
			<p> Why <span style="color:rgba(227, 27, 27, 0.9)"> <i>Our</i> </span> Feedback?</p> 
			<hr width="30%"> 
		</div>

		<div>
			<div style="width:60%; float:left; padding-top:-10%">
				<div class="bullet_list" style="padding-top: 0%">
					<ul><li><p> 
						<b style="font-size:120%;">No Spam: </b> Curses and foul-language are automatically filtered out. Useless or destructive comments are voted out by the community.
					</p></li></ul>
				</div>
				
				<div class="bullet_list">
					<ul><li><p> 
						<b style="font-size:120%;" >Realtime Feedback: </b> Teachers can view Tiques as they are made to continually
	change and improve rather than just at the end of the semester.
					</p></li></ul>
				</div>

				<div class="bullet_list">
					<ul><li><p> 
						<b style="font-size:120%;" >Quantitative Metrics: </b> 	Numbers accompany Tiques when they are made and two weeks after
	to allow teachers to objectively track their progress.
					</p></li></ul>
				</div>
			</div>

			<div style="width:40%; float:left">
				<img style="width:100%; max-width:350px; max-height:400px; float:right" src="src/graphic_4.png">
			</div>
		</div>
	</div>

	<div style="width:100%; height:1px; clear:both; background-color:rgba(0, 0, 0, 0);"></div>


</div>

<div class="closing">
	<div class='closing_inner'>
		<div style='width:100%'>
			<div ><a class='closing_link'> About</a></div> <p>
			<div><a class='closing_link'> Privacy</a></div><p>
			<div><a class='closing_link'> Legal</a></div><p>
		</div>
		<div style='width:100%; font-size:12px;'> <p> &#169; 2016, Tique </p></div>
	</div>
</div>


<script  type="text/javascript">
	var phrases = ["Discover your pluses and minuses.",
					"Give critiques anonymously",
					"Get critiqued anonymously",
					"Because there's always room for improvement."];
	var index = 0;

	function signUpShow() {
		document.getElementById('overlay').style.backgroundColor = 'rgba(0,0,0,0.8)';
		document.getElementById('overlay').style.zIndex = '1';
		document.getElementById('overlay').display = 'block';

		document.getElementById('sign_up_prompt').display = 'block';
	}

	

	function signUpHide() {
		document.getElementById('overlay').style.backgroundColor = 'rgba(0,0,0,0.0)';
		document.getElementById('overlay').style.zIndex = '-1';
		document.getElementById('overlay').display = 'none';
		document.getElementById('sign_up_prompt').display = 'none';
		document.getElementById('sign_up_prompt').style.zIndex = '-10';
	}
	
</script>
</body>
