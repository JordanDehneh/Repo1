<!doctype html>
<html lang="en">
  <head>
      <style>
      :root {
  --input-padding-x: .75rem;
  --input-padding-y: .75rem;
}
.h1{
    color: rgb(145, 6, 6);
}
html,
body {
  height: 100%;
  
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  
}

.form-signin {
  width: 100%;
  max-width: 420px;
  padding: 15px;
  margin: auto;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group > input,
.form-label-group > label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group > label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0; /* Override default <label> margin */
  line-height: 1.5;
  color: #495057;
  cursor: text; /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown) ~ label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */
@supports (-ms-ime-align: auto) {
  .form-label-group > label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .form-label-group > label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="POST" action="sin.php"  >
      <div class="text-center mb-4">
        <img class="mb-4" src="b.png" alt="" width="200" height="200">
        <h1 style="color:rgb(6, 156, 51)" >Employee Communication</h1>
        
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="t1" class="form-control" >
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="t2" id="inputPassword" class="form-control">
        <label for="inputPassword">Password</label>
      </div>

     
      <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      <div class="mt-5 mb-3 text-muted text-center">
        <a href="cc">sign up</a>
      </div>

    </form>
  </body>
</html>

<?php

if( isset(  $_POST['t1'] )  )
{
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    include "cc.php";
    $sql = "select * from user where email = '" . $t1 . "' and ";
    $sql = $sql . "password = '" . $t2 . "'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        if($row = $result->fetch_assoc())
        {
            session_start();
            $_SESSION['use'] = $t1;
            header("Location: page2.php");
        }
    }
    else
    {
        echo "<div class='alert alert-danger'> Invalid Login </div>";
    }
    $conn->close();
}