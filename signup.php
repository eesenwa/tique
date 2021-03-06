<html>
<head>
<link rel="icon" href="src/logo.png">
<link rel="stylesheet" type="text/css" href="css/signup.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<title> Sign up - Tique</title>
</head>
<body class="home_bg">

<div class="menu_bar_holder" >
				<a href="index.php" class="closing_link_im"><img src='src/logo.png' style="float:left; padding-left: 5px; max-width:50px;"></a>
				<a onclick="signUpShow();"><div><input type='button' class="menuButton" value='Sign in' name='next'></div></a>
				<a href="faq.php"><div><input type='button' class="menuButton" value='FAQ'  name='next'></div></a>
				<a href='about.php'><div><input type='button' class="menuButton" value='About'  name='next'></div></a>
				<a href="index.php"> <div><input type='button' class="menuButton" value='Home' src='index.php' name='next'></div></a>
</div>

<div style='clear:both; height:40px; width:100%;'></div>


<div style="padding:20px;" align="center" id='maindiv'>
<div class='signupdiv' align="center" id="signupdiv">	
	<div style='width:100%; background-color:rgba(230, 20, 20, 0.9); color:white;'>
		<p class="header" style="text-align:center; text-shadow:0px 1px 0px black; font-size:18px; color:white; padding-top: 10px; padding-bottom:10px; width:100%;" >Signing up takes seconds</p> 
	</div>


	<label for="student" align="left" style="padding-bottom:15px;">
		    <input type="radio" value="student" name="ts" id="student" onchange="change_forms()" checked> <span>I'm a student</span>
	</label>


	<label for="teacher" align="left" style="margin-bottom:15px;">
		    <input type="radio" value="teacher" name="ts" id="teacher" onchange="change_forms()"> <span>I'm a teacher</span>
	</label>

	
	<div style="padding-bottom:5px; margin:0 auto;">
		<span id='error_message' valign="bottom" class='subtext' style="font-size:15px; color:rgb(230, 30, 30);"></span>
	</div>

	<div id="form_holder">
		<form id='signup_student' action='login_redirect.php' method="POST" name='student' onsubmit="return studentValidation()">
			<input class='textfield' id='studentEmail' placeholder='Email or Phone' name='s_email' onkeyup="studentEmailTest()" onfocusout="studentEmailTest(); studentValidation();" autofocus> 
				<img id='studentEmailValid' src='src/invalid.png' style="visibility:hidden;">
				<br><br>
			<input type='password' id='studentPass' class='textfield' placeholder='Password' name='s_pass' onkeyup="studentPasswordTest()" onfocusout="studentPasswordTest(); studentValidation();">
				<img id='studentPassValid' src='src/invalid.png' style="visibility:hidden;">
				<br><br>
			<input type='password' id='studentPassConf' class='textfield' placeholder='Confirm Your Password' onkeyup="studentPasswordConfirmTest()" onfocusout="studentPasswordConfirmTest(); studentValidation();" name='pass_confirm'>
				<img id='studentPassConfirmValid' src='src/invalid.png' style="visibility:hidden;">
				<br><br>
			<input class='textfield' id='groupCode' placeholder='Group Code (Optional)' name='group_code' onkeyup="studentGroupCodeTest()" onfocusout="studentGroupCodeTest(); studentValidation();">
				<img id='groupCodeValid' src='src/invalid.png' style="visibility:hidden;">
				<br><br>
			<input type='button' class="myButton" onclick="studentSubmission()" value='Join Tique' valign="bottom">
			<p class='subtext'>By signing up, you agree to our <a href='#'>terms</a> of service.</p>
		</form>	


		<form id='signup_teacher' action='login_redirect.php' method="POST" style="visibility:hidden;float:center;" onsubmit="return teacherValidation()">
			<input id='fn' class='textfield' placeholder='First name' name='fname' onkeyup="fName();" onfocusout="fName(); teacherValidation();" autofocus>
				<img id='firstNameValid' src='src/invalid.png' style="visibility:invisible;">
				<br><br>
			<input id='ln' class='textfield' placeholder='Last name' name='lname' onkeyup="lName();" onfocusout="lName(); teacherValidation();">
				<img id='lastNameValid' src='src/invalid.png' style="visibility:invisible;">
				<br><br>
			<input id='e' class='textfield' placeholder='Email or Phone' name='t_email' onkeyup="teacherEmailTest();" onfocusout="teacherEmailTest(); teacherValidation();">
				<img id='emailValid' src='src/invalid.png' style="visibility:invisible;">
				<br><br>
			<input id='p' type='password' class='textfield' placeholder='Password' name='t_pass' onkeyup="teacherPasswordTest()" onfocusout="teacherPasswordTest(); teacherValidation();">
				<img id='passValid' src='src/invalid.png' style="visibility:invisible;">
				<br><br>
			<input id='pc' type='password' class='textfield' placeholder='Confirm Your Password' name='t_pass_confirm' onkeyup="teacherPasswordConfirmTest()" onfocusout="teacherPasswordConfirmTest(); teacherValidation();">
				<img id='passConfValid' src='src/invalid.png' style="visibility:invisible;">
				<br><br>
			<input type='button' class="myButton" type='button' onclick="teacherSubmission()" value='Join Tique'>
			<p class='subtext'>By signing up, you agree to our <a href='#'>terms</a> of service.</p>
		</form>	
	</div>

</div>


	</div>
</div>

	<script> 
		var debug = true;


		var PASSWORD_MIN_LENGTH = 6;
		var PASSWORD_MAX_LENGTH = 15;
		var STUDENT_FORM_HEIGHT = '500px';
		var TEACHER_FORM_HEIGHT = '540px';

		var form = document.getElementById('signup_teacher');
		var fname = document.getElementById('fn');
		var lname = document.getElementById('ln');
		var email = document.getElementById('e');
		var pass = document.getElementById('p');
		var passC = document.getElementById('pc');


		if(debug) {
			PASSWORD_MIN_LENGTH = 1;
		}

		

		function teacherSubmission() {
			if(teacherValidation() || debug) {
				var teacher_form = document.getElementById('signup_teacher');
				
				fname = document.getElementById('fn').value;
				lname = document.getElementById('ln').value;
				email = document.getElementById('e').value;
				pass = document.getElementById('p').value;
				passC = document.getElementById('pc').value;

				teacher_form.submit();

			}
		}

		function teacherValidation() {
			var a = document.getElementById('firstNameValid');
			var b = document.getElementById('lastNameValid');
			var c = document.getElementById('emailValid');
			var d = document.getElementById('passValid');
			var e = document.getElementById('passConfValid');

			var bool = true;
			if(fname.value == '' || lname.value == '' || email.value == '' || pass.value == '' || passC.value == '') {
				return false;
			}

			if(c.src.indexOf('invalid.png') != -1 && c.style.visibility == 'visible') {
				if(!validEmail(email.value)) {
					errorMessage('Invalid email');
				}else {
					errorMessage('Email must have .edu domain');
				}
				bool = false;
			}else if(d.src.indexOf('invalid.png') != -1 && d.style.visibility == 'visible') {
				if(pass.length < PASSWORD_MIN_LENGTH) {
					errorMessage('Password must be at least 6 characters long');
				}else {
					errorMessage('Password length cannot exceed 15 characters');
				}
				bool = false;
			}else if(e.src.indexOf('invalid.png') != -1 && e.style.visibility == 'visible') {
				errorMessage('Password confirmation must match password');
				bool = false;
			}
			else {
				errorMessage('');
			}
			return bool;
		}

		
		function fName() {
			var img = document.getElementById('firstNameValid');
			if(fname.value == "") {
				img.style.visibility = 'hidden';
			}
			else if(validName(fname.value)){
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}
			else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}

		function lName() {
			var img = document.getElementById('lastNameValid');
			if(lname.value == "") {
				img.style.visibility = 'hidden';
			}
			else if(validName(lname.value)){
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}
			else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}

		function teacherEmailTest() {
			var text = email.value;
			var img = document.getElementById('emailValid');
			
			if(text == "") {
				img.style.visibility='hidden';
			}

			else if(validEmail(text)){
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}

			else if(validPhone(text)) {
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}

			else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}

		function teacherPasswordTest() {
			var text = pass.value;
			var img = document.getElementById('passValid');
			if(text == "") {
				img.style.visibility='hidden';
			}
			else if(validPassword(text)){
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}
		function teacherPasswordConfirmTest() {
			var text = passC.value;
			var img = document.getElementById('passConfValid');
			teacherPasswordTest();
			if(text == ""){
				img.style.visibility='hidden';
			}
			else if(validPasswordConf(text)) {
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}













		function studentSubmission() {
			if(studentValidation() || debug) {
				var student_form = document.getElementById('signup_student');
				student_form.submit();
			}

		}

		function studentValidation() {
			var text_a = document.getElementById('studentEmail').value;
			var text_b = document.getElementById('studentPass').value;
			var text_c = document.getElementById('studentPassConf').value;
			var text_d = document.getElementById('groupCode').value;
			var a = document.getElementById('studentEmailValid');
			var b = document.getElementById('studentPassValid');
			var c = document.getElementById('studentPassConfirmValid');
			var d = document.getElementById('groupCode');


			var bool = true;
			if(text_a == '' || text_b == '' || text_c == '') {
				return false;
			}

			if(a.src.indexOf('invalid.png') != -1 && a.style.visibility == 'visible') {
				errorMessage('Invalid email or phone');
				bool = false;
			}else if(b.src.indexOf('invalid.png') != -1 && b.style.visibility == 'visible') {
				var password = document.getElementById('studentPass').value;
				if(password.length < PASSWORD_MIN_LENGTH) {
					errorMessage('Password must be at least 6 characters long');
				}else {
					errorMessage('Password length cannot exceed 15 characters');
				}
				bool = false;
			}else if(c.src.indexOf('invalid.png') != -1 && c.style.visibility == 'visible') {
				errorMessage('Password confirmation must match password');
				bool = false;
			}else if(d.src.indexOf('invalid.png') != -1 && d.style.visibility == 'visible') {
				errorMessage('Invalid group code');
				bool = false;
			}
			else {
				errorMessage('');
			}
			return bool;
		}

		function studentEmailTest() {
			var text = document.getElementById('studentEmail').value;
			var img = document.getElementById('studentEmailValid');
			
			if(text == "") {
				img.style.visibility='hidden';
			}

			else if(validEmail(text)){
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}
			else if(validPhone(text)) {
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}
			else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}



		function studentPasswordTest() {
			var text = document.getElementById('studentPass').value;
			var img = document.getElementById('studentPassValid');
			if(text == "") {
				img.style.visibility='hidden';
			}
			else if(validPassword(text)){
				
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}
		function studentPasswordConfirmTest() {
			var text = document.getElementById('studentPassConf').value;
			var img = document.getElementById('studentPassConfirmValid');
			studentPasswordTest();
			if(text == ""){
				img.style.visibility='hidden';
			}
			else if(validPasswordConfirm(text)) {
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}

		function studentGroupCodeTest() {
			var text = document.getElementById('groupCode').value;
			var img = document.getElementById('groupCodeValid');
			if(text == ""){
				img.style.visibility='hidden';
			}
			else if(validGroupCode(text)) {
				img.src = 'src/valid.png';
				img.style.visibility='visible';
			}else {
				img.src = 'src/invalid.png';
				img.style.visibility='visible';
			}
		}

		function getChecked() {
			var button_group = document.getElementsByName('ts');
			for(var i = 0; i < button_group.length; i++) {
				if(button_group[i].checked) {
					return button_group[i];
				}
			}
		}

		function change_forms() {
			var button = getChecked();
			clearForms();
			var holder = document.getElementById("form_holder");
			var stud = document.getElementById('signup_student');
			var teach = document.getElementById('signup_teacher');
			if(button.value == "student") {
				document.getElementById('signupdiv').style.height = STUDENT_FORM_HEIGHT;
				holder.insertBefore(stud, teach);
				teach.style.visibility='hidden';
				teach.reset();
				stud.style.visibility='visible';
				stud.reset();
				document.getElementById('studentEmail').focus();
			}else {
				document.getElementById('signupdiv').style.height = TEACHER_FORM_HEIGHT;
				holder.insertBefore(teach, stud);
				stud.style.visibility='hidden';
				stud.reset();
				teach.style.visibility='visible';
				teach.reset();
				document.getElementById('fn').focus();
			}
		} 

		function clearForms() {
			var icons = document.getElementById('signupdiv').getElementsByTagName('img');
			for(var i = 0; i < icons.length; i++) {
				icons[i].style.visibility = 'hidden';
			}
			errorMessage('');
		}

		function validEmail(email) {
   			 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		return re.test(email);
		}

		function validName(myString) {
  			return !(/\d/.test(myString));
  		}


		function validPhone(phone) {
			phone = phone.replace(/ /g, '').replace(/-/g, '');
	   		return !isNaN(phone) && phone.length >= 10 && phone.length < 14;
		}

		function validPassword(text) {
			return text.length >= PASSWORD_MIN_LENGTH && text.length <= PASSWORD_MAX_LENGTH;
		}

		function validPasswordConfirm(text) {
			return document.getElementById('studentPass').value == document.getElementById('studentPassConf').value;
		}

		function validPasswordConf(text) {
			return pass.value == passC.value;
		}

		function validGroupCode(code) {
			return true;
		}

		function errorMessage(message) {
			document.getElementById('error_message').innerHTML = message;
		}
	</script>
</body>

</html>
