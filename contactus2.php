<!DOCTYPE html>
<html lang="en">

<head>
    <title>BidStars Contact Us Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">

        </div>

        <section class="center">
            <h1>Contact Us Form</h1>
            <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
            <form action="process.php" method="POST" id="contactpg"> 
                <div class="txt_field">
                    <input type="text" id="username" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="email" id="Email" name="Email" required>
                    <span></span>
                    <label>Email Address</label>
                </div>
                <div class="txt_field">
                    <input type="text" id="Subject" name="Subject" required>
                    <span></span>
                    <label>Subject</label>
                </div>
                <textarea class="textarea" id="textarea" name="textarea" placeholder="Enter your message..."></textarea>
                <div class="signup_link" onclick="checkfields()">
                <button class="btn btn-success" name="btn-send">Submit</button>
                    </div>
                    <a href="index.php" class="button">Go To Main Page</a>
           </form> 
            </section>
      </div>
      <script>
          function checkfields()
          {
            var Uname = document.getElementById('username').value;
            var Email = document.getElementById('Email').value;
            var Sub = document.getElementById('Subject').value;
            var Msg= document.getElementById('textarea').value;
            if(!empty(Uname) && !empty(Email) && !empty(Sub) && !empty(Msg))
            {
                document.getElementById('contactpg').submit();
            }
            else{
                alert("All fields are not filled.");
                   document.getElementById('contactpg').reset();
                }
           }
      </script>
</body>

</html>