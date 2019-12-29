<?php
include('config.php');
// fetching admin email where mail will send

$sql ="SELECT emailId from tblemail";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0):
foreach($results as $result):
$adminemail=$result->emailId;
endforeach;
endif;
if(isset($_POST['submit']))
{
// getting Post values  
$name=$_POST['name'];
$email=$_POST['emailaddres'];
$phoneno=$_POST['phonenumber'];
$city=$_POST['city'];
$uip = $_SERVER ['REMOTE_ADDR'];
$isread=0;
// Insert quaery
$sql="INSERT INTO  tblcontactdata(FullName,EmailId,PhoneNumber,City,UserIp,Is_Read) VALUES(:fname,:email,:phone,:city,:uip,:isread)";
$query = $dbh->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phoneno,PDO::PARAM_STR);

$query->bindParam(':city',$city,PDO::PARAM_STR);

$query->bindParam(':uip',$uip,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
///mail function for sending mail
/*
$to=$email.",".$adminemail; 
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:PHPGurukul Contact Form Demo<info@phpgurukul.com>'."\r\n";
$ms.="<html></body><div>
<div><b>Name:</b> $name,</div>
<div><b>Phone Number:</b> $phoneno,</div>
<div><b>Email Id:</b> $email,</div>";
$ms.="<div style='padding-top:8px;'><b>Message : </b>$message</div><div></div></body></html>";
mail($to,$subject,$ms,$headers);
*/




echo "<script>alert('Your info submitted successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Lush_Luxe</title>

<!-- Stylesheets -->
<link href="css\style.css" rel="stylesheet">
<link href="css\responsive.css" rel="stylesheet">
<link rel="icon" href="images\favicon.ico" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

  <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->

     <!-- Main Header -->
    <?php include 'header.php'; ?>
    <!-- End Main Header -->
    


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title-2.jpg);">
        <div class="rotate-text">Lush & Luxe Design</div>
        <div class="container">
            <div class="content-box">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    
    <!-- contact-info-section -->
    <section class="contact-info-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <h2>Fill the contact form</h2>
                           <div class="text">Get A Call Back in Just 1o Mints You can send a tip, suggest something, make an offer or simply ask a question. Just don’t hesitate to get in touch!</div>
                        <div class="info-box clearfix">
                            <div class="single-info">
                                <div class="icon-box"><i class="flaticon-house"></i></div>
                                <h3>Meet Us</h3>
                                <p>Architecture Downtown St,<br>Melbourne Australia</p>
                            </div>
                            <div class="single-info">
                                <div class="icon-box"><i class="flaticon-phone-call-1"></i></div>
                                <h3>Phone</h3>
                                <p><a href="tel:+880(+1) 1245 - 15487- 258">(+1) 1245 - 15487- 258</a><br><a href="tel:+880(+1) 1245 - 15487- 258">(+1) 1245 - 15487- 258</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-md-12 form-column">
                    <div class="contact-form-area">
                        <form name="ContactForm" method="post"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name"  autocomplete="off" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="emailaddres" class="form-control" placeholder="Email" required autocomplete="off">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phonenumber" class="form-control" placeholder="Phone" maxlength="10" required autocomplete="off">
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="city" class="form-control" placeholder="Your Message!!"  autocomplete="off" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" name="submit">
                                    <input type="submit" value="" name="submit">
                                    Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- google-map-section -->
 <?php include 'footer.php'; ?>

    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
<script src="js\jquery.js"></script>
<script src="js\popper.min.js"></script>
<script src="js\bootstrap.min.js"></script>

<script src="js\owl.js"></script>
<script src="js\wow.js"></script>
<script src="js\validation.js"></script>
<script src="js\jquery.fancybox.js"></script>
<script src="js\appear.js"></script>
<script src="js\isotope.js"></script>
<script src="js\parallax.min.js"></script>
<script src="js\jquery.countTo.js"></script>
<script src="js\jquery.mCustomScrollbar.concat.min.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js\gmaps.js"></script>
<script src="js\map-helper.js"></script>

<!-- main-js -->
<script src="js\script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
