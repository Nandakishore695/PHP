<!-- <?php print_r($_SERVER) ?> -->
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["userName"])) {
        $name_Name = $_POST["userName"];
	    $from =$_POST["userEmail"];
	    $user_Phone =$_POST["userPhoneNumber"];
	    $user_Message=$_POST["userMessage"];
	    $subject="Profound Infra Enquiry Form Details";
        $receiver="nandakishore695@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers = `From: $from`;
        echo $message ="
        <html>
        <head>
            <title>HTML email</title>
        </head>
        <body>
            <table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
                <tr>
                    <td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='https://profoundinfra.com/wp-content/themes/profoundinfra/assets/img/Profound-Infra-Logo-01-Email.png' width:'200' ></td>
                </tr>
                <tr>
                    <td width='50%' align='right'>&nbsp;</td>
                    <td align='left'>&nbsp;</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Subject: </td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$subject."</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Full Name :</td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name_Name."</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email Address :</td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$user_Message."</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Phone Number:</td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$user_Phone."</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message :</td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$user_Message."</td>
                </tr>
                <tr>
                    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'></td>
                    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'></td>
                </tr>
            </table>
        </body>
        </html> 
    ";
    }
    if(mail($receiver,$subject,$message,$headers)){
        //Success Message
        echo "<script type='text/javascript'>  window.location='http://localhost/wordpress/thank-you/'; </script>";
    }else{
        //Fail Message
        echo "The message could not been sent!";
    }
}
?>
