<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="..\Public\css\formulaireAdmin.css">
  </head>
  <body>
    <form action="../index.php?action=admin" method="post" class="login-form">
        <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input name="user" class="login-username" autofocus="true" required="true" placeholder="Username" />
  <input type="password" name="pass" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
</form>
<div class="underlay-black"></div>
  </body>
</html>
