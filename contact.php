<?php include_once('header.php');

if(isset($_POST['submit'])){

     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $subject = $_POST['subject'];
     $massage = $_POST['Massage'];

     if(empty($name)){
          $error = "Name is Required";
     }
     else if(empty($email)){
          $error = "Email is Required";
     }
     else if(empty($mobile)){
          $error = "Mobile is Required";
     }
     else{
          $to = "alifurrahman1999@gmail.com";
          $massage = "Name:-".$name."\r\n";
          $massage .= "Email:-".$email."\r\n";
          $massage .= "Moblile:-".$mobile."\r\n";
          $massage .= "Subject:-".$subject."\r\n";
          $massage .= "Message:-".$massage."\r\n";

          // Always set content-type when sending HTML email
          $headers = "MIME-Version: 1.0"."\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
          // More headers
          $headers .= 'From:'.$email."\r\n";
          // $headers .= 'Cc: myboss@example.com' . "\r\n";

          $sent_email = mail($to,$subject,$massage,$headers);

          if($sent_email == true){
               $success = "Massage Sent Success";
          }
          else{
               $error = "Massage Sent Failed";
          }
  
     }
}


?>

<section class="contact_area">
    <div class="container">
          <div class="row">
               <div class="col-md-6 offset-md-3">
                    <div class="contact_from">
                         <h3>contact Us</h3>
                         <hr>
                         <?php if(isset($error)) : ?>
                              <div class="alert alert-danger">
                                   <?php echo $error ?>
                              </div>
                         <?php endif; ?>
                         <?php if(isset($success)) : ?>
                              <div class="alert alert-success">
                                   <?php echo $success ?>
                              </div>
                         <?php endif; ?>
                         <form action="" method="POST">
                              <div class="from_group">
                                   <label for="name_id">Name</label>
                                   <input class="form-control" type="text" name="name" id="name_id" placeholder="Type Your name" value="<?php
                                        if(isset($_POST['name'])){
                                             echo $_POST['name'];
                                        }
                                   ?>">
                              </div>

                              <div class="from_group">
                                   <label for="email_id">Email</label>
                                   <input class="form-control" type="email" name="email" id="email_id" placeholder="Type Your Email" value="<?php
                                        if(isset($_POST['email'])){
                                             echo $_POST['email'];
                                        }
                                   ?>">
                              </div>

                              <div class="from_group">
                                   <label for="mobile_id">Mobile</label>
                                   <input class="form-control" type="text" name="mobile" id="mobile_id" placeholder="Type Your Mobile" value="<?php
                                        if(isset($_POST['mobile'])){
                                             echo $_POST['mobile'];
                                        }
                                   ?>">
                              </div>

                              <div class="from_group">
                                   <label for="subject_id">Subject</label>
                                   <input class="form-control" type="text" name="subject" id="subject_id" placeholder="Type Your Subject" value="<?php
                                        if(isset($_POST['subject'])){
                                             echo $_POST['subject'];
                                        }
                                   ?>">
                              </div>

                              <div class="from_group">
                                   <label for="massage_id">Massage</label>
                                   <textarea class="form-control" name="Massage" id="massage_id" placeholder="Type Your massage" value="<?php
                                        if(isset($_POST['Massage'])){
                                             echo $_POST['Massage'];
                                        }
                                   ?>"></textarea>
                              </div>

                              <div class="from_group btns">
                                   <input class="btn btn-success" type="submit" name="submit" id="submit_id" value="Submit">
                              </div>
                         </form>
                    </div>
                </div>
          </div>
    </div>
</section>






<?php include_once('footer.php') ?>