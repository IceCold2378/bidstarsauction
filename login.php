<!DOCTYPE html>
<html lang="en">

<head>
    <title>BidStars Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">

        </div>

        <section class="center">
            <h1>Login</h1>
            <form action="auctiondb.php" method="POST" id="loginpg">
                <div class="txt_field">
                    <input type="text" id="username" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" id="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <!-----------
                <div class="colour">
                    <label for id="question">Security question</label>
                    <br><br>
                    <select name="question" id="question">
                    <option class="colour" value="q1">Which is better a sedan or a SUV?</option>
                    <option class="colour" value="q2">What is your favourite music artists most recent song?</option>
                    <option class="colour" value="q3">What do you prefer tomatoes,pineapples or mangoes?</option>
                    </select>
                    <br><br>
                    <label for id="answer">Security Question Answer:</label>    
                    <input type="text" id="answer" name="answer">
                </div>
---->
                <div class="signup_link" onclick="checkfields()">
                <input type="submit" value="submit">
                    </div>
                    <a href="index.php" class="button">Go To Main Page</a>
           </form> 
             </section>
      </div>
      <script>
          function checkfields()
          {
            var Uname = document.getElementById('username').value;
            var passw = document.getElementById('password').value;
            var Q = document.getElementById('question').value;
            var ans = document.getElementById('answer').value;
            if(!empty(Uname) && !empty(passw) && !empty(Q) && !empty(ans))
            {
                document.getElementById('loginpg').submit();
            }
            else{
                alert("All fields are not filled.");
                   document.getElementById('loginpg').reset();
                }
           }
      </script>
</body>

</html>