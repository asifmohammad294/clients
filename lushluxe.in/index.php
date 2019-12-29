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

<title>Lush&Luxe</title>

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

       
    <!--Main Slider-->

    <section class="main-slider style-three">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    
                    <li data-index="rs-10" data-transition="slotzoom-horizontal" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-delay="9000" data-rotate="0" data-saveperformance="off" class="rev-slidebg" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images\main-slider\slider-4.jpg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" data-basealign="slide" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":100,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="full" data-hoffset="['0','0','0','0']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="shape" data-voffset="['0','0','0','0']" data-whitespace="normal" data-width="full" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" id="slide-1687-layer-1" style="z-index: 1;background-color:rgba(31, 31, 31, 0.75);border-color:rgba(31, 31, 31, 0.75);border-width:0px;">
                    </div>
                    
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['650','650','650','450']" data-whitespace="normal" data-hoffset="['-530','15','15','15']" data-voffset="['-200','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"3000","split":"chars","speed":5000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <span class="rotate-text">EXTERIOR & INTERIONR DESIGN</span>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['1500','650','650','450']" data-whitespace="normal" data-hoffset="['1150','15','15','15']" data-voffset="['0','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":10000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","split":"chars","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <div class="title-text"><div class="text-2">Architecture</div></div>
                    </div>

                    
                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['2','2','2','2']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h1>Uniqu<span>e</span></h1>
                    </div>


                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['113','113','113','80']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h2>Creative & morden</h2>
                    </div>
                    
                    </li>
                    
                    <li data-index="rs-11" data-transition="slotzoom-horizontal" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images\main-slider\slider-2.jpg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" data-basealign="slide" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":100,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="full" data-hoffset="['0','0','0','0']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="shape" data-voffset="['0','0','0','0']" data-whitespace="normal" data-width="full" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" id="slide-1687-layer-1" style="z-index: 1;background-color:rgba(31, 31, 31, 0.75);border-color:rgba(31, 31, 31, 0.75);border-width:0px;">
                    </div>
                    
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['650','650','650','450']" data-whitespace="normal" data-hoffset="['-530','15','15','15']" data-voffset="['-200','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"3000","split":"chars","speed":5000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <span class="rotate-text">EXTERIOR & INTERIONR DESIGN</span>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['1500','650','650','450']" data-whitespace="normal" data-hoffset="['1150','15','15','15']" data-voffset="['0','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":10000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","split":"chars","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <div class="title-text"><div class="text-2">Architecture</div></div>
                    </div>

                    
                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['2','2','2','2']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h1>Uniqu<span>e</span></h1>
                    </div>


                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['113','113','113','80']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h2>Creative & morden</h2>
                    </div>
                    
                    </li>
                    
                    <li data-index="rs-15" data-transition="slotzoom-horizontal" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images\main-slider\slider-3.jpg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" data-basealign="slide" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":100,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="full" data-hoffset="['0','0','0','0']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="shape" data-voffset="['0','0','0','0']" data-whitespace="normal" data-width="full" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" id="slide-1687-layer-1" style="z-index: 1;background-color:rgba(31, 31, 31, 0.75);border-color:rgba(31, 31, 31, 0.75);border-width:0px;">
                    </div>
                    
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['650','650','650','450']" data-whitespace="normal" data-hoffset="['-530','15','15','15']" data-voffset="['-200','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"3000","split":"chars","speed":5000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <span class="rotate-text">EXTERIOR & INTERIONR DESIGN</span>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="100%" data-width="['1500','650','650','450']" data-whitespace="normal" data-hoffset="['1150','15','15','15']" data-voffset="['0','-70','-50','-50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":10000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","split":"chars","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <div class="title-text"><div class="text-2">Architecture</div></div>
                    </div>

                    
                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['2','2','2','2']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h1>Uniqu<span>e</span></h1>
                    </div>


                    <div class="tp-caption tp-resizeme centred" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','650','650','450']" data-hoffset="['15','15','15','15']" data-voffset="['113','113','113','80']" data-x="['middle','middle','middle','middle']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h2>Creative & morden</h2>
                    </div>
                    
                    </li>
                    
                </ul>
            </div>
        </div>
        <!--Scroll Dwwn Btn-->
        <div class="mouse-btn-down scroll-to-target" data-target=".service-style-three">
            <div class="scroll-arrow-box">
                <span class="scroll-arrow"></span>
            </div>
            <div class="scroll-btn-flip-box">
                <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
            </div>
        </div>
    </section>
    <!--End Main Slider-->



    <!-- service-style-two -->
    <section class="service-style-two service-style-three">
        <div class="container">
            <div class="inner-content">
                <div class="three-item-carousel owl-theme owl-carousel nav-style-one">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images\resource\service-8.jpg" alt="">
                            </figure>
                            <div class="caption-box">
                                <div class="count-text">01</div>
                                <h4>Lighting</h4>
                               <!--  <a href="proect.php">REad More</a> -->
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box"><i class="flaticon-interior"></i></div>
                                <h4><a href="single-service.html">Lighting</a></h4>
                               <!--  <div class="text">Hop deco is an interactive platform that puts you in touch with professional budget.a</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images\resource\service-9.jpg" alt="">
                            </figure>
                            <div class="caption-box">
                                <div class="count-text">02</div>
                                <h4>Interior Design</h4>
                               <!--  <a href="single-service.html">REad More</a> -->
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box"><i class="flaticon-interior"></i></div>
                                <h4><a href="single-service.html">Interior Design</a></h4>
                               <!--  <div class="text">Hop deco is an interactive platform that puts you in touch with professional budget.a</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images\resource\service-10.jpg" alt="">
                            </figure>
                            <div class="caption-box">
                                <div class="count-text">03</div>
                                <h4>Architecture Services</h4>
                              <!--   <a href="single-service.html">REad More</a> -->
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box"><i class="flaticon-interior"></i></div>
                                <h4><a href="single-service.html">Architecture Services</a></h4>
                              <!--   <div class="text">Hop deco is an interactive platform that puts you in touch with professional budget.a</div>
 -->                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- about-style-three -->
    <section class="about-style-three">
        <div class="container">
            <div class="top-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 title-column">
                        <div class="sec-title">
                            <span class="top-title">Our story</span>
                            <h1>Interior Design <span>service.</span></h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 text-column">
                        <div class="text">
                          Sense Interiors prime focus is on providing the superior service of interior designing. The designing for any kind of space can create an atmosphere or create an impression of their lifestyle. The designing of a project & space includes analyzing the concepts, developing designs and clinch the best way to reach the desired goal. Our team develops the idea of making you living precious and luxuries.
                        </div>
                    </div>

                   
                </div>
            </div>
            <div class="lower-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images\resource\about-3.jpg" alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequre et dolore magnam aliquam quaerat voluptatem.at. Duis aute irure dolor in reprehenderit in voluptate.</div>
                        </div>
                    </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 title-column">
                        <div class="sec-title">
                           <!--  <span class="top-title">Our story</span>
 -->                            <h1>Why Us <span>?</span></h1>
                        </div>
                    </div>

                   
                </div>
            </div>
             <div class="lower-content">
                <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 work-column wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="work-block-one">
                            <h4>Interior Expertise</h4>
                           <!--  <div class="count-text">01</div> -->
                           <div class="text">
                         <p> Our team together bring with them, more than a decade of experience delivering successful Design &amp; Turnkey projects</p>
                        </div>
                          <!--   <div class="link"><a href="#">REad More</a></div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 work-column wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="work-block-one">
                            <h4>SEAMLESS PROJECT DELIVERY</h4>
                           <!--  <div class="count-text">01</div> -->
                          <p>On Time – On Budget – On Quality Project is our promise.</p>
                          <!--   <div class="link"><a href="#">REad More</a></div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 work-column wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="work-block-one">
                            <h4>BEST VALUE</h4>
                           <!--  <div class="count-text">01</div> -->
                           <p>We work only with the best, at LUSHLUXE you can avail the Services from best Brands in the Interior Space at the most reasonable pricing</p>
                          <!--   <div class="link"><a href="#">REad More</a></div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 work-column wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="work-block-one">
                            <h4>LUSHLUXE ASSURANCE</h4>
                           <!--  <div class="count-text">01</div> -->
                          <p>At LUSHLUXE, Quality is our utmost priority for every product &amp; installation done by us, we provide you a no question asked 12 Months Warranty.</p>
                          <!--   <div class="link"><a href="#">REad More</a></div> -->
                        </div>
                    </div>
                   
                </div>
            </div>


        </div>
    </section>
    <!-- about-style-three end -->


    <!-- video-section -->
    <section class="video-style-two centred" style="background-image: url(images/background/video-bg.jpg);">
        <div class="parallax-scene parallax-scene-2 anim-icons">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
        </div>
        <div class="container">
            <div class="inner-content">
                <span class="top-text">NEW VIDEO PRESENTATION</span>
                <h1>Lush & Luxe</h1>
                <a href="#" class="video-link lightbox-image" data-caption=""><i style="font-size: 110px;" class="fas fa-smile-wink"></i></a>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- fact-counter -->
    <section class="fact-counter alternate-2 centred">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="235">0</span>
                        </div>
                        <div class="text"><h3>Happy Clients</h3></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="376">0</span>
                        </div>
                        <div class="text"><h3>Amazing works</h3></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="10">0</span><span>+</span>
                        </div>
                        <div class="text"><h3>Awards winning</h3></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="25">0</span>
                        </div>
                        <div class="text"><h3>operated Years</h3></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter end -->


    <!-- recent-project -->
    <section class="recent-project">
        <div class="project-title wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">Project</div>
        <div class="container">
            <div class="sec-title">
                <span class="top-title">Recently finished</span>
                <h1>Recent <span>Projects</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-10.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work</h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-10.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-11.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work</h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-11.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-12.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work </h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-12.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-13.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work</h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-13.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-14.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work</h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-14.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="single-project-1.html"><img src="images\gallery\project-15.jpg" alt=""></a></figure>
                            <div class="caption-box"><h4>Interior Work</h4></div>
                            <div class="text">Architecture</div>
                            <div class="icon-box"><a href="images\gallery\project-15.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more centred"><a href="project.php">Load More Works</a></div>
        </div>
    </section>
    <!-- recent-project end -->


    <!-- client-style-two -->
    <section class="client-style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                    <div class="sec-title">
                        <span class="top-title">CORPORATION</span>
                        <h1>OUR CLIENTS & <span>PARTNERS</span></h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content centred">
                        <ul class="clients-logo clearfix">
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-3.png" alt=""></a></figure></li>
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-4.png" alt=""></a></figure></li>
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-5.png" alt=""></a></figure></li>
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-2.png" alt=""></a></figure></li>
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-1.png" alt=""></a></figure></li>
                            <li class="logo"><figure><a href="#"><img src="images\clients\clients-6.png" alt=""></a></figure></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client-style-two end -->


    <!-- news-section -->
   <!--  <section class="news-section news-style-two">
        <div class="container">
            <div class="sec-title centred">
                <span class="top-title">Latest News</span>
                <h1>News & <span>Blog</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="blog-single.html"><img src="images\resource\news-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i>25 Feb 2019</li>
                                <li><i class="fa fa-tag"></i>Architecture, Intorior</li>
                            </ul>
                            <h4><a href="blog-single.html">The 2019 Oscars justo Greenroom by  Rolex Goes Deep.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="blog-single.html"><img src="images\resource\news-4.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i>26 Feb 2019</li>
                                <li><i class="fa fa-tag"></i>Architecture, Intorior</li>
                            </ul>
                            <h4><a href="blog-single.html">Aenean tristique justo et nibh molestie non porttitor</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="blog-single.html"><img src="images\resource\news-5.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i>26 Feb 2019</li>
                                <li><i class="fa fa-tag"></i>Architecture, Intorior</li>
                            </ul>
                            <h4><a href="blog-single.html">Many of our projects cannot be featured in this section</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
    <!-- news-section end -->
     <!-- testimonial-section -->
     <section class="testimonial-section sec-pad">
        <div class="container">
            <div class="sec-title">
                <span class="top-title">Client Feedback</span>
                <h1>Testim<span>onial.</span></h1>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">
                <div class="testimonial-block-one">
                    <div class="text">
                        <p>I do sincerely appreciate and respect team of sense interior, as they are continuos improving in design technology and timely completion of projects which enables them to achieve their goals. I wish them for more and more success in the coming years and wish them good luck;</p>
                    </div>
                    <div class="author">
                       <!--  <figure class="author-thumb"><img src="images\resource\testimonial-1.png" alt=""></figure> -->
                        <div class="author-info text-center">
                            <h5>-Subodh Singh</h5>
                           <!--  <span>CEO, InDesign</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="text">
                        <p>It is a pleasure to work with Lushluxe. Together we created our Office Interior Decoration! The interior designing, planning &amp; decoration is just GREAT! Lushlue and all the member are very cooperative and complying with all my wishes and needs and went further on then what is expected. Overall... GOOD JOB! </p>
                    </div>
                    <div class="author">
                        <!-- <figure class="author-thumb"><img src="images\resource\testimonial-2.png" alt=""></figure> -->
                        <div class="author-info text-center">
                            <h5>-Gita Aggarwal</h5>
                           <!--  <span>CEO, InDesign</span> -->
                        </div>
                    </div>
            </div>
            <div class="testimonial-block-one">
                    <div class="text">
                        <p>Lushluxe  has changed my life and my way of living. No wonder they have the perfect knowledge and skills in the field of interior designing and are the best in what they do. Their quality of work is outstanding and their design concepts are simply marvelous.It transformed my home into a paradise and I was very fortunate that I had approached them for renovating my home at the right time. </p>
                    </div>
                    <div class="author">
                        <!-- <figure class="author-thumb"><img src="images\resource\testimonial-2.png" alt=""></figure> -->
                        <div class="author-info text-center">
                            <h5>-Saurav Ashwini</h5>
                           <!--  <span>CEO, InDesign</span> -->
                        </div>
                    </div>
               
        </div>
    </section> 
    <!-- testimonial-section end -->



    <!-- call-to-action -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Request A Call Back</h2>
                        <div class="text">We value your relationship with us; you can contact us for any queries related to our services and their estimations.</div>
                       
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="appointment-form wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <form name="ContactForm" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name"  autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="emailaddres" class="form-control" placeholder="Email" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phonenumber" class="form-control" placeholder="Phone" maxlength="10" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="Your Message!!"  autocomplete="off" required>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" name="submit">
                                    <input type="submit" value="" name="submit">
                                    Send REquest</button>
                                </div>
                            </form>
                        </div>
                        <div class="google-map-area">
                            <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974" data-icon-path="images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12" data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                                }'>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action end -->


    <!-- main-footer -->
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
<script src="js\parallax.min.js"></script>
<script src="js\jquery.mCustomScrollbar.concat.min.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js\gmaps.js"></script>
<script src="js\map-helper.js"></script>

<!--Revolution Slider-->
<script src="revolution\js\jquery.themepunch.revolution.min.js"></script>
<script src="revolution\js\jquery.themepunch.tools.min.js"></script>
<script src="revolution\js\revolution.extension.actions.min.js"></script>
<script src="revolution\js\revolution.extension.carousel.min.js"></script>
<script src="revolution\js\revolution.extension.kenburn.min.js"></script>
<script src="revolution\js\revolution.extension.layeranimation.min.js"></script>
<script src="revolution\js\revolution.extension.migration.min.js"></script>
<script src="revolution\js\revolution.extension.navigation.min.js"></script>
<script src="revolution\js\revolution.extension.parallax.min.js"></script>
<script src="revolution\js\revolution.extension.slideanims.min.js"></script>
<script src="revolution\js\revolution.extension.video.min.js"></script>
<script src="js\main-slider-script.js"></script>

<!-- main-js -->
<script src="js\script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
