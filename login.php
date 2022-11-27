

<!DOCTYPE html>
<html lang="en">
  <head>
<style>
body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
}

.login-box {
  width: 360px;
  height: 300px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

form {
  width: 300px;
  margin-left: 20px;
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: white;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color: #49c1a2;
}


.forgot-password {
text-align: right;
float: right;
font-size: 10px
}


.p6 {
text-align: left;
float: left;
font-size: 8px
}

</style>
    <title>Login</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"/>

</head>
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action='insert.php' method="get">
        <label>User Id</label>
        <input type="User Id" placeholder="Enter User Id" name="User Id"/>
        <label>Password</label>
        <input type="password" placeholder="Enter password" name="password" />
        <span class="forgot-password">
        <a href="forgotpassword.html" title="Forgot Password" id="link-reset">Forgot Password?</a>
        </span>
<br>
        <input type="button" value="Submit" name="submit"/>
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="register.php">Sign Up Here</a>
    </p>
  </body>
</html>
