<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yashikajaiswal30@gmail.com';
        $mail->Password   = 'aurmddwyknpnrzby';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('yashikajaiswal30@gmail.com');
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Order Received';
        $mail->Body    = "
            <h2>Order Details</h2>
            <p><strong>Product Name:</strong>  {$_POST['pr_name']}</p>
            <p><strong>Product Quantity:</strong>  {$_POST['quantity']}</p>
            <p><strong>Subtotal:</strong> Rs {$_POST['price']}</p>
            <p><strong>GST:</strong> Rs {$_POST['gst']}</p>
            <p><strong>Total:</strong> Rs {$_POST['total']}</p>
            <h2>Address  Details</h2>
            <p><strong>Address:</strong>  {$_POST['address_one']} , {$_POST['address_two']} ,{$_POST['code']}  </p>
            <h2>User  Details</h2>
            <p><strong>Phone:</strong>  {$_POST['phone']}</p>
            <p><strong>Name:</strong> {$_POST['name']}</p>
            <p><strong>Email:</strong>  {$_POST['email']}</p>

        ";

        // Send to admin
        
        if ($mail->send()) {
            // Send confirmation email to the user
            $confirmationMail = new PHPMailer(true);
            $confirmationMail->isSMTP();
            $confirmationMail->Host = 'smtp.gmail.com';
            $confirmationMail->SMTPAuth = true;
            $confirmationMail->Username = 'yashikajaiswal30@gmail.com';
            $confirmationMail->Password = 'aurmddwyknpnrzby';
            $confirmationMail->SMTPSecure = 'ssl';
            $confirmationMail->Port = 465;

            // Recipients for confirmation email
            $confirmationMail->setFrom('yashikajaiswal30@gmail.com', 'Yashika');
            $confirmationMail->addAddress($_POST["email"], $_POST["name"]);

            // Confirmation email content
            $confirmationMail->isHTML(true);
            $confirmationMail->Subject = 'Bill Details';
            $confirmationMail->Body = "
                <h2>Thank you for your order, {$_POST['name']}!</h2>
                <p>Your product will be delivered soon.</p>
                <h3>Product Details:</h3>
                
               <p><strong>Name:</strong>  {$_POST['pr_name']}</p>
             <p><strong>Quantity:</strong> Rs {$_POST['quantity']}</p>
                <p><strong>Subtotal:</strong> Rs {$_POST['price']}</p>
                <p><strong>GST:</strong> Rs {$_POST['gst']}</p>
                <p><strong>Total:</strong> Rs {$_POST['total']}</p>
            ";

            // Send confirmation email
            if ($confirmationMail->send()) {
                echo  " <html>
    <head>
        <!-- SweetAlert2 CDN -->
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Message Send Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'index.php';
            });
        </script>
    </body>
    </html>";

            } else {
                echo "
                <script>
                    swal('Error!', 'Message could not be sent to the user. Please try again.', 'error');
                </script>
                ";
            }
        }
    } catch (Exception $e) {
        echo "
        <script>
            swal('Error!', 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}', 'error');
        </script>
        ";
    }
}
?>

</body>
</html>
