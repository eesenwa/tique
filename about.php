<html>
<head>
<link rel="icon" href="src/logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="css/about.css">

<title> Tique</title>
</head>

<body class="home_bg" style="width:100%">

<div class="overlay" id='overlay'>
    <div class='sign_up_prompt' id='sign_up_prompt' style='background-color:rgba(250,250, 250,1.0);'>
        <div style="width:100%; height:16%; text-align:center; background-color:rgba(210, 20, 20, 0.9);">
            <a class='close_button' onclick="signUpHide();"><div style='width:20px; height:100%; float:right; padding-top:1%; padding-right: 2%; text-align:center;font-family: "Gill Sans", "Gill Sans MT", sans-serif; font-size: 20px; color: rgba(30, 30, 30, 0.9);'> <span style="color:rgb(250, 250, 250);">x</span> </div></a>
            <div style='padding-top:3%;'>
                <span style="color:white; font-size:18px; font-weight:100;">Sign in to Tique</span>
            </div>
        </div>
        <div style='width:100%; height:25%; '>
            <img src='src/logo.png' style="max-width:35px; padding-top:4%;">
        </div>
        <div style="width:100%; height:70%; text-align:center;"> 
            <div style="padding-left:10%; padding-right:10%;">
                <input class='textfield' placeholder='Email or Phone' name='email' autofocus> 
                <div style="width:100%; height:5%"></div>
                <input class='textfield' type='password' placeholder='Password' name='pass'>
                <div style="width:100%; height:5%"></div>
                <input type='button' class="myButton"  onclick="teacherSubmission()" value='Sign in'>
            </div>
        </div>
    </div>
</div>

<div id="container">
    <div>
        <div class="menu_bar_holder" >
                <a href="index.php" class="closing_link_im"><img src='src/logo.png' style="padding-left:5px; float:left; max-width:50px;"></a>
                <a onclick="signUpShow();"><div><input type='button' class="menuButton" value='Sign in' name='next'></div></a>
                <a href="faq.php"><div><input type='button' class="menuButton" value='FAQ'  name='next'></div></a>
                <a href='about.php'><div><input type='button' class="menuButton" value='About'  name='next'></div></a>
                <a href="index.php"> <div><input type='button' class="menuButton" value='Home' src='index.php' name='next'></div></a>
        </div>
        <div style='height:60px; width:100%'></div>
        <div class="about_bg" style="min-height:70%; min-width:300px; ">

                <div class="heading1" id="main-header" style="word-wrap: break-word; margin:0 auto; width:90%; ">

                    <div style="width:100%; margin:0 auto; max-width:900px; min-height:90%; background: white; border-radius:6px; padding:2.5%; ">
                    <div style='float: center;margin 0 auto; text-align:center;'>
                        <img style="width:40%; max-width:300px" src="src/tique_text_2.png">
                        <hr width="50%">
                    </div>
                        <h1> What is Tique? </h1>
                        <div style='width:100%; text-align: left;'>
                            <p>How can I get better? It's a simple question that drives us and drives everyone who uses our app. What we've found is that it can be answered by knowing two simple things: what am I doing well and what am I doing not so well. But trying to evaluate accurately is nearly impossible; we tend not be honest with ourselves. When you ask feedback from friends and family also tends not be useful because they do not want to hurt your feelings. When feedback is given anonymously, it used as an opportunity of vengeance or ones true voice is hushed by the preformulated questions that ask you to rate them on a numerical scale.</p>
                            
                            <p>Tique offers a simple solution. Your students, your friends, anyone (who you've given your code to) can anonymously give you genuine feedback through two buttons- plus and minus. Discover yours today.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<script  type="text/javascript">

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
</html>
