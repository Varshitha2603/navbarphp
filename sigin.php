<html>
<body>
<header>
    <h1>SIGN UP</h1>
</header>
<form action="./view_part/signin.view.php" method="post" novalidate>
    <div>
        <label>UserName</label>
        <input type="text" name="uname" id="uname">
    </div>
    <div>
        <label>Email ID</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="passwrd" id="passwrd">
    </div>
    <div>
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" id="confirmpassword">
    </div>
    <button name="btn_signup">Sign Up</button>
</form>
</body>
</html>