<!DOCTYPE html>
<html lang="en">

<head>
    <title>BidStars Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>
    <div class="banner">
        <section class="center">
            <h1>Register</h1>
            <form action="connectdbregist.php" method="POST" id="regist">
                <div class="txt_field">
                    <input type="text" id="fname" name="fname" required>
                    <span></span>
                    <label>First Name</label>
                </div>
                <div class="txt_field">
                    <input type="text" id="lname" name="lname" required>
                    <span></span>
                    <label>Last Name</label>
                </div>
                <div class="txt_field">
                    <input type="email" id="mail" name="mail" required>
                    <span></span>
                    <label>Email address</label>
                </div>
                <div class="txt_field">
                    <input type="number" id="phno" name="phno" required>
                    <span></span>
                    <label>Mobile Number</label>
                </div>
                <!--------
                <div class="colour">
                    <p>Age: </p>
                    <input type="radio" id="option-1" name="age" value=">=18">
                    <label for id="option-1"> >=18</label>
                    <input type="radio" id="option-2" name="age" value="<18">
                    <label for id="option-2"> below 18</label>
                </div>
                <br> 
                <div class="colour">
                    <p>Payment mode: </p>
                    <input type="radio" id="option-1" name="payment" value="Net Banking" >
                    <label for id="option-1"> Net Banking</label>
                    <input type="radio" id="option-2" name="payment" value="Debit/Credit Card" >
                    <label for id="option-2"> Debit/Credit Card</label>
                </div>
                ------>
                <br>
                <div class="signup_link" onclick="checkfields()">
                    <input type="submit" class="entry" value="submit">
                    </div>
                    <a href="login.php" class="button">Got to login page</a>
            </form> 
        </section>
      </div>
      <script>
          function checkfields()
          {
            var name1 = document.getElementById('fname').value;
            var name2 = document.getElementById('lname').value;
            var Mail = document.getElementById('mail').value;
            var phone = document.getElementById('phno').value;
            var op1 =document.getElementById('option-1');
            var op1 =document.getElementById('option-2');
            if(!empty(name1)||!empty(name2)||!empty(Mail)||!empty(phone)||!empty(op1)||!empty(op2))
            {
                document.getElementById('regist').submit();
            }
            else{
                alert("All fields are not filled.");
                   document.getElementById('regist').reset();
                }
           }
      </script>
</body>

</html>
