<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}
else{
    $user_id = '';
}
if(isset($_POST['send'])){
 
    $msg_id = generate_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);
 
    $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $verify_contact->execute([$name, $email, $number, $message]);
 
    if($verify_contact->rowCount() > 0){
       $warning_msg[] = 'message sent already!';
    }else{
       $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
       $send_message->execute([$msg_id, $name, $email, $number, $message]);
       $success_msg[] = 'message send successfully!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRN Real Estate</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=1">
</head>
<body>
    
    <!-- header section starts  -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends  -->

    <!-- contact section starts  -->
    <section class="contact">
        <div class="row">
            <div class="image">
                <img src="images/contact.png" alt="">
            </div>
            <form action="" method="POST">
                <h3>Get in touch</h3>
                <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
                <input type="email" name="email" required maxlength="50" placeholder="Enter your email ID" class="box">
                <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="Enter your mobile number" class="box">
                <textarea name="message" placeholder="Enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
                <input type="submit" value="Send Message" name="send" class="btn">
            </form>
        </div>
        <form action="">
    </section>
    <!-- contact section ends  -->

    <!--faq section starts-->
    <section class="faq" id="faq">
        <h1 class="heading">FAQ</h1>
        <div class="box-container">
            <div class="box active">
                <h3><span>How to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
                <p>If you want to cancel the Property due to certain reason you can call the Agent/Owner.</p>
            </div>
            <div class="box active">
                <h3><span>When will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
                <p>It all depend on the Property you selected whether it is ready to move or few months later.</p>
            </div>
            <div class="box active">
                <h3><span>How to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
                <p>You can contact them through given details like mobile no or whatsapp.</p>
            </div>
            <div class="box active">
                <h3><span>How to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
                <p>You just have to post the Property and see the magic.</p>
            </div>
        </div>
    </section>
    <!--faq section ends-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- footer section starts  -->
    <?php include 'components/footer.php'; ?>
    <!-- footer section ends  -->

    <!-- custom js file link  -->
    <script src="js/script.js?v=1"></script>

    <?php include 'components/message.php'; ?>
        
</body>
</html>