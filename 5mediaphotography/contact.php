<?php 

error_reporting(E_ALL ^ E_NOTICE); ///// hide all notices from PHP

if(isset($_POST['submitted'])) {
    
    if(trim($_POST['contactName']) === '') {
        $nameError =  'Forgot your name!'; 
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    
    if(trim($_POST['email']) === '')  {
        $emailError = 'Forgot to enter in your e-mail address.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'You entered an invalid email address.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
        
    if(trim($_POST['comments']) === '') {
        $commentError = 'You forgot to enter a message!';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
        
    if(!isset($hasError)) {
        
        $emailTo = '5mediaphotography@gmail.com'; ///// YOUR email address /////
        $subject = 'Inquiry message from '.$name;
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Name: $name \n\nEmail: $email \n\nMessage: $comments";
        $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        
        ///// sets boolean value to TRUE /////
        $emailSent = true;
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>5 Media Photography | Atlanta Wedding And Lifestyle Photographers</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon16.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon32.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon48.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon64.ico"/>
<link href="actualsite.css" rel="stylesheet" type="text/css">
<meta name="format-detection" content="telephone=no">
</head>
<body>
    <div id="wrapper">
    <div id="header">
    	<div id="socialicons">
        	<a href="https://www.facebook.com/5mediaphotography" target="_blank"><img src="images/socialnetwork/facebook.png" alt="facebook" height="20" width="20"/></a>
            <a href="https://twitter.com/5mediaphotos" target="_blank"><img src="images/socialnetwork/twitter.png" alt="twitter" height="20" width="20"/></a>
            <a href="https://vimeo.com/fivemedia" target="_blank"><img src="images/socialnetwork/vimeo.png" alt="vimeo" height="20" width="20"/></a>
        </div> <!--end socialicon-->
        <a href="index.html"><img style="display:block; margin-left:350px; margin-bottom:5px; margin-top:5px; "src="images/logos/5medialogo.png" alt="5 media photography logo" width="250" height="180"/></a>
          <div id="nav">
        	<nav class="multi_drop_menu">
        	<ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="http://5mediaphotos.com/" target="_blank">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
          	</ul>
          </nav>
        </div> <!--end nav-->
    </div> <!--end header-->
   	<div id="contactmain">
        <div id="contactsubmain">
        	<h1>Contact Us!</h1>
                
                <div class="p1">Thanks for visiting. Tell a friend that knows a friend and visit us again.</div>
                <div class="p2">Be sure to contact us for your photo needs at 678-682-0308 or<br>by filing out the form to the right.</div>
                <div class="p3">Ciao :)</div>

                <!-- <ul id="contactInfo">
                    <li>5 Media Photography</li>
                    <li>Chuck Obaze | Lead Photographer</li>
                    <LI>www.5mediaphotography.com</LI>
                    <li>~Capturing Moments That Count~</li>
                    <li> P : 678-682-0308</li>
                    <li> F : 770-559-1726</li>
                    <li>Facebook : <a href="https://www.facebook.com/5mediaphotography">www.facebook.com/5mediaphotography</a></li>
                    <li>Twitter: @5Mediaphotos</li>

                </ul>  
                -->


        	</div> <!--end contactsubmain-->

         
           
        <div id="contactform">
            <?php if(isset($emailSent) && $emailSent == true) { ?>
                <div class="p1">Thank you. Your email was sent.</div>
            <?php } else { ?>    

            <?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Error submitting the form</p>
                    <?php } ?>
                
                    <form id="contact-us" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <div class="formblock">
                            <label class="screen-reader-text">Name</label>
                            <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField name"/>
                            <?php if($nameError != '') { ?>
                                <br /><span class="error"><?php echo $nameError;?></span> 
                            <?php } ?>
                        </div>

                        <div class="formblock">
                            <label class="screen-reader-text">Email</label>
                            <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" />
                            <?php if($emailError != '') { ?>
                                <br /><span class="error"><?php echo $emailError;?></span>
                            <?php } ?>
                        </div>
                        
                        <div class="formblock">
                            <label class="screen-reader-text">Message</label>
                             <textarea name="comments" id="commentsText" class="txtarea requiredField" cols="60" rows="10"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                            <?php if($commentError != '') { ?>
                                <br /><span class="error"><?php echo $commentError;?></span> 
                            <?php } ?>
                        </div>
                        
                            <button name="submit" type="submit" class="subbutton">Submit</button>
                            <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>    
        </div> <!--end contactform-->
        <?php } ?>
        
      </div> <!--end contactmain-->
        <div style="height:10px;color:white;clear:both;"></div> <!-- end margin (this div provides the bottom space between the footer and the submit button. It sits on the footer-->
    	<div id="footer">
    	<div id="copyright">
        	<p>&copy; 5 Media Photography 2013. All Rights Reserved</p>
        </div>
    </div> <!--end footer-->
    </div> <!--end wrapper-->
</body>
</html>
