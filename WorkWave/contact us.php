<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Wave - Job Portal</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles contact us.css">
</head>
<body>
    <header>
    <main>
       <section id="contact" class="contact">
    <div class="contact-container">

        <!-- Left section for the image -->
        <div class="image-section">
            <img src="Images/contact-image.png" alt="Contact Us Image">
             
             <!-- Right section for the contact information and form -->
             
             <div class="contact-info">
             <h1>Let's Talk!<br> We'll be happy to assist you.</h1><br><br>
          

              <!-- Contact Information with Icons -->
                <p>
                    <img src="Images/phone.png" alt="Phone Icon" class="contact-icon1">
                    <strong>Phone:</strong> +94 771111111
                </p>
                <p>
                    <img src="Images/email.png" alt="Email Icon" class="contact-icon2">
                    <strong>Email:</strong> support@workwave.com
                </p>
                <p>
                    <img src="Images/facebook.png" alt="Facebook Icon" class="contact-icon3">
                    <strong>Facebook:</strong> <a href="https://facebook.com/workwave">facebook.com/workwave</a>
                </p>
             </div>
       </div> 
      
        <!-- Right section for the form -->
        <div class="form-section">
        <div class="intro">
        <h1> Contact us...</h1>
        <h2>Got questions or feedbacks?</h2><br>
                
        <p>We are here to assist you with any job-related inquiries or feedbacks. Please fill out the form below and we’ll get back to you as soon as possible.</p>
        </div>
            
 <form id="contact-form" method = "POST" action = "insert.php">
    <label for="name">Name *</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="phone">Your Phone Number *</label>
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

    <label for="email">Your Email *</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" required>

    <label for="message">Your Message *</label>
    <textarea id="message" name="message" rows="5" placeholder="Type your message here" required></textarea>


    <button type="submit">Send</button>
</form>

       </div>
    </div>
</section>
      
    </main>
    
     <script src="JS/script.js"></script>

</body>
</html>
<?php
    include("footer.php");
?>