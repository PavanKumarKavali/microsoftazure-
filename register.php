<!DOCTYPE html>

<html lang="en">

<head>
    <title>Register</title>
    <style>
/*#344a72,,,#D071F9*/
            body {
            background-color: #344a72;
            font-family: "Roboto", sans-serif;
        }
        
        .signup-box {
            width: 360px;
            height: 680px;
            margin: auto;
            background-color: white;
            border-radius: 3px;
        }
        
        h1 {
            text-align: center;
            padding-top: 15px;
        }
        
        h4 {
            text-align: center;
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
        
        input[type="submit"] {
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
        
        p1 {
            text-align: center;
            padding-top: 0px;
            font-size: 10px;
        }
        
        #sel {
            width: 315px;
            height: 40px;
        }
        /*700px width for example*/
        
        #sel option {
            width: 700px;
            /*default would be inherit*/
            height: 60px;
            /*just changed for example*/
        .btn
        {
            width: 100%;
            padding:8px 10px;
            font-size: 15px;
            border:0;
            background:#344a72;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }
        .btn:hover
        {
            background: rgb();
        }





    </style>
</head>

<body>




    <div class="signup-box">
        <h1>Register Now!</h1>
        <h4>
            <U>It's only takes a minute</U>
        </h4>
        <form action='insert.php' method="post">
            <label>User Type</label>
            <select id="sel" name="usertype">
<option value="not selected" selected hidden value="">--------------------------SELECT--------------------------</option>
<U><option value="USER">USER</option></U>
<U><option value="HOSPITAL">HOSPITAL</option></U>
<U><option value="DOCTOR">DOCTOR</option></U>
<U><option value="MEDICAL STORE">MEDICAL STORE</option></U>
<U><option value="DIAGNOSIS CENTER">DIAGNOSIS CENTER</option></U>
</select>


            <label>User Id</label>
            <input type="text" placeholder="Enter 12-digit Aadhar Number" required="!" name="UserId" />
            <p1 style:color:"Blue">
                <center>For <u>Hospitals</u> and <u>Diagnosis centers</u> use your desired user id</center>
                </style>
            </p1>
            <label>User Name</label>
            <input type="text" placeholder="Enter User Name" required="!" name="UserName" />
            <label>Email Id</label>
            <input type="text" placeholder="Enter Email Id" required="!" name="EmailId" />
            <label>Mobile Number</label>
            <input type="Mobile Number" placeholder="Enter 10-digit Mobile Number" required="!" name="Phone" />

            <label>Password</label>
            <input type="password" placeholder="Enter Password" required="!" name="password" />
           <input type="Submit" value="Register" class="btn" name="submit" href="login.php"/>

        </form>
        <p>
            By clicking the Sign Up button,you agree to our <br />
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
    </div>
    <p class="para-2">
        Already have an account? <a href="login.php">Login here</a>
    </p>
</body>

</html>