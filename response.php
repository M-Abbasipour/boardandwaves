<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$favourite=$_POST['favourite'];
$sex=$_POST['sex'];
$age=$_POST['age'];

$to= 'michelleabbasipour@outlook.com, michelleabbasipour@gmail.com';
$subject=$_POST['subject'];
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; ";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
$emailcontent = 
'
<strong>Name:</strong> '.$name.' <br>
<strong>Email:</strong>  '.$email.'<br>
<hr>
<strong>Favourite character:</strong>  '.$favourite.'<br>
<strong>Gender:</strong>  '.$sex.'<br>
<strong>Age:</strong>  '.$age.'<br>
<hr>
<strong>Message:</strong> '.$message.'
';
$mail=mail($to,$subject,$emailcontent,$headers);

?>

<!-- START OF HTML MARKUP -->

<!DOCTYPE html>
<html>

<!-- head -->
<head>
    <?php include 'includes/head.php'; ?>
    <title>response|b&w</title>
</head>

<!-- body -->
<body>

<!-- header -->
<?php include 'includes/header.php'; ?>

<!-- Body > Content Wrapper-->
<div class="body-content-wrapper">
    
<!-- ---------  Body > Content Wrapper > Section 1 (response) --------- -->
<section class="section1" data-speed="10" data-type="background" id="discover-section1">
    <article>
        <div class="container" id="response">
                
            <h1>thank you.</h1>
                    
                    <!-- PHP - if statement -->
                    <?php
                        // Send out the email or output an error message 
                        if($mail) 
                        { 
                    ?>

                    <div>
                        Thank you, 
                        
                        <!-- PHP - print the name -->
                        <b><?php echo $name; ?></b>,
                        
                        <p>Your message below has been received.</p><br><br>
                        <p>Message:</p>
                        
                        <!-- PHP - print the message -->
                        <div><b><?php echo $message; ?> </b></div><br><br>
                
                        <p>Preferences:</p>
                        
                        <!-- PHP - print the age--> 
                        <div>Age:<b><?php echo $age; ?> </b></div>

                        <p>We will be in touch as soon as possible. In the meantime, please do not hesitate to get in touch with any further queries.</p>
                    </div>

                    <!-- PHP - else... -->
                    <?php
                    } 
                    else { // email send has been unsuccessful
                    ?>

                    <div class="mailformtext">
                        <p>&nbsp;</p>
                        <p>Sorry <b>
                            
                        <!-- PHP - print the name -->    
                        <?php echo $name; ?>,</b></p>
                        <p>For some reason the form submission has not been successful.</p>
                        <p>You sent the following:</p> 
                        
                        <!-- PHP - print the message -->
                        <div class="message"><b><?php echo $message; ?> </b></div><br>
                        
                        <p> Please try again.</p>
                    </div>
                    
                    <!-- PHP - end if statement -->
                    <?php 
                    } 
                    ?>

        </div><!-- end of .container & end of #discover-section1-content -->
    </article>
</section><!-- end of section 1 -->

</div><!-- end of body-content-wrapper -->

<!-- SCRIPTS -->
<?php include 'includes/scripts.php'; ?>
    
<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>
    
</body>
</html>