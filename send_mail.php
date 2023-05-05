<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4" name="name" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" name="email" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="subject" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="send" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<?php

if(isset($_POST["send"]))
{
$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "prince.grimbyte@gmail.com";

$headers = "From: $from";

mail($to,$subject,$message,$headers);
echo "mail sent";

}