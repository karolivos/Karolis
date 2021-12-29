<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $message = trim($_POST['message']);
    
    if(!empty($name) && !empty($email) && !empty($number) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include ('db.php');
            $from = "$email";
            $to ="karolivos1@gmail.com";
            $subject = "Nauja žinutė";
            $author = 'Nuo: '.$name.', '.$email.', '.$number;
            $msg = htmlspecialchars($message);
            header("Location: #");
            // mail($to, $subject, $author, $msg, $from, $number);
            // echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
        }
    }
};




