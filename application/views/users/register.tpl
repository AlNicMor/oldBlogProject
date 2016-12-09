<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title ?></title>
    <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
</head>
<body>
<div id="container">

    <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
    <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>


    <div id="main">
        <h2>Register</h2>
        <br>
        <form action="/users/registerPost" method="post">
            <div class="formregis">
                <label>Username</label><input type="text" name="username"><br>
                <label>Name</label><input type="text" name="name"><br>
                <label>Last Name</label><input type="text" name="last_name"><br>
                <label>Email</label><input type="text" name="email"><br>
                <label>Password</label><input type="password" name="password"><br>
                <label>&nbsp</label><input type="submit" name="registerFormSubmit">


            </div>
        </form>

    </div>


    <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
</div>

</body>
</html>