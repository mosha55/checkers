<html>
  <head>
    <title>Google recapcha demo - Codeforgeek</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <h1>Google reCAPTHA Demo</h1>
    <form id="comment_form" action="cap.php" method="post">
      <input type="email" placeholder="Type your email" size="40"><br><br>
      <textarea name="comment" rows="8" cols="39"></textarea><br><br>
      <input type="submit" name="submit" value="Post comment"><br><br>
      <div class="g-recaptcha" data-sitekey="6LfGEI0UAAAAAJgVQsl5ctKT6cigUlPyDtbhvitE"></div>
    </form>
  </body>
</html>


<?php

        $email;$comment;$captcha;
        if(isset($_POST['email']))
          $email=$_POST['email'];
        if(isset($_POST['comment']))
          $comment=$_POST['comment'];
        if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfGEI0UAAAAAOWlTvbe-AI6YxAquR5fZHTWBMQS&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        else
        {
          echo '<h2>Thanks for posting comment.</h2>';
        }
?>
