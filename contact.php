       <!-- contact
    ================================================== -->
       <section style='color:#003026;' id="contact">
        <div style='color:#003026;' class="row">

            <div class="col-twelve">

                <h2 style='color:black;text-align:center;' class="h01 animate-this" data-animate="fadeInRight">
                  Contact Shayna
               </h2>

                <p style='text-align:center;font-size:1.5em;'>E-mail: <a style='color:#8c8cff;' href="mailto:shayna@shaynak112.com">shayna@shaynak112.com</a></p>
                <p style='text-align:center;font-size:1.5em;'>Phone: 647-963-6315</p>

                <div style='color:#003026;text-align:center;' class="buttons">
                        <a href="https://www.linkedin.com/in/shayna-kingsbury-33189234/" style='color:#003026;' class="button" target='_blank'>LinkedIn</a>
                        <a href="https://github.com/shaynak112" style='color:#003026;' class="button" target='_blank'>GitHub</a>
                </div>

                <br/>
                <br/>
                <br/>

                <div class='col-twelve' align='center'>

                    <form name="contactform" style='margin:0 auto;' method="post" action="">

                <div>
                <label for="yourName" >Your name: </label>
                  <input id="yourName" type="text" style='width:30%;' placeholder="Name" name="yourName"/>
                </div>

                <div>
                <label for="email">Your e-mail address: </label>
                  <input id="email" type="text" style='width:30%;' placeholder="Email" name="email"/>
                </div>

                <div>
                <label for="phone">Your phone number: </label>
                  <input id="phone" type="text" style='width:30%;' placeholder="Phone Number" name="phone"/>
                </div>

                <div>
                <label for="message">Your message: </label>
                </div>
                <div>
                  <textarea cols='50%' id="message" placeholder="Message" name="message" style='width:40%;'> </textarea>
                </div>


                  <input type="submit" value="Submit" name="Submit" id="Submit">

                  </form>

                  <?php

            
                ini_set("SMTP","mail.shaynak112.com");
                ini_set("smtp_port","25");
                ini_set('sendmail_from', 'test@shaynak112.com');

                $from = "Sender <test@shaynak112.com>";
                $to = "Shayna <shayna@shaynak112.com>";
                $subject = "Message from Portfolio Website";

                $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

                if(isset($_POST['Submit']))
                {
                  $contactName = $_POST['yourName'];
                  $contactEmail = $_POST['email'];
                  $contactPhone = $_POST['phone'];
                  $contactBody = $_POST['message'];
                  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;

                  mail($to,$subject,$message,$from);
                }

             
             /* $formVal = new formValidation();

              $validateName = $formVal->inputTextLogic($contactName);
              $vvalidateEmail = $formVal->emailLogic($contactEmail);
              $validatePhone = $formVal->phoneLogic($contactPhone);
              $validateBody = $formVal->inputTextLogic($contactBody);


              if($validateName=='' && $validateEmail=='' && $validatePhone=='' && $validateBody=='')
               {
                  mail($to,$subject,$message,$from);
                  echo "<br/>Message sent";
               }
               else
               {
                  echo "<br/>Please fill out all fields correctly.";
               }
                }*/

                ?>
                 
                </div>  <!-- end div class col 12 form-->
                </div>  <!-- end div class col 12 for whole contact us section-->
                    
            </div> <!--end row-->
        
       </section> <!-- /contact Us -->