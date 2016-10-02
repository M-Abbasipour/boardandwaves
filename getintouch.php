<!DOCTYPE html>
<html>

<!-- head -->
<head>
    <?php include 'includes/head.php'; ?>
    <title>get in touch|b&w</title>
</head>

<!-- body -->
<body>

<!-- header -->
<?php include 'includes/header.php'; ?>

<!-- Body > Content Wrapper-->
<div class="body-content-wrapper">

<!-- ---------  Body > Content Wrapper > Section 1 (get in touch) --------- -->
<section class="section1" data-speed="10" data-type="background" id="getintouch-section1">
    <article>
        <div class="container" id="getintouch">
            
                        <h1>contact details.</h1>
            
<div class="vcard">
    
    <span class="fn">Bob Wilson</span>
    
    <div class="org">Bob's Records</div>
    
    <a class="email" href="mailto:hello@bobsrarerecordings.com">
        hello@bobsrarerecordings.com
    </a>
    
    <div class="adr">
        <div class="street-address">Metropolitan Ave</div>
        <span class="locality">Brooklyn</span>, 
        <span class="region">NY</span>, 
        <span class="postal-code">11211</span>
        <span class="country-name">USA</span>
    </div>

    <div class="tel">
        <span class="type">Work</span> +1-650-289-4040
    </div>
    
    <div class="tel">
        <span class="type">Fax</span> +1-650-289-4041
    </div>
    
    
    <a href="files/example%20contact%20details.vcf" class="button blue" id="address-btn">Add to address book</a>
    
</div>
            
            

        </div><!-- end of .container & end of #discover-section1-content -->
    </article>
</section><!-- end of section 1 -->

<!-- ---------  Body > Content Wrapper > Section 2 (form) --------- -->
<section class="section2" data-speed="10" data-type="background" id="getintouch-section2">
    <article>
        <div class="container" id="form">
                
            <h2>form.</h2>
            
<!-- ********************* form ********************* -->
<div id="form-styling">
    <!-- send form date to mail.php file-->
    <form name="myForm" action="response.php" onsubmit="return validateForm();" method="post">

    <!-- hidden field of 'subject' to send the value for the email subject when sent to the site administrator-->
    <input type="hidden" name="subject" value="RE: message submitted from Board&Waves site">

    <!-- ** enter name (required field)** -->
    <div >
        <label for="name" >*Name:</label>
        <input type="text" class="input" name="name" id="name" required placeholder="please enter your name"/>
    </div>

    <!-- ** enter email address (required field) ** -->
    <div>
        <label for="email">*Email:</label>
        <input type="text" class="input" name="email" id="email" required placeholder="please enter your email address"/>
    </div>

    <!-- ** dropdown- age (optional field)** -->
    <div>
        <label>Age:</label>
        <p>Choose your age</p>

        <select name="age">
            <option selected disabled hidden value="">Select your age</option>
            <option value="under 18">under 18</option>
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36-50">36-50</option>
            <option value="over 50">over 50</option>
        </select>
    </div>

    <!-- ** enter message (required field)** -->
    <div class="field">
        <label for="message">*Message:</label><br>
        <textarea class="input textarea" name="message" id="message" required placeholder="please type your message in here" >  
        </textarea>
    </div>

    <!-- ** submit button ** -->
    <div>
        <!-- sends the data to the mail.php file for processig-->
        <input type="submit" value="Submit" name="Submit" class="button green">
    </div>

    </form>
</div><!-- end of form container #form-styling-->
            
            
            

        </div><!-- end of .container & end of #discover-section2-content -->
    </article>
</section><!-- end of section 2 -->
    
</div><!-- end of body-content-wrapper -->

<!-- SCRIPTS -->
<?php include 'includes/scripts.php'; ?>
    
<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>
    
</body>
</html>