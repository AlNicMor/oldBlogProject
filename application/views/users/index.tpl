<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title ?></title>
        <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
    </head>
    <body>
     <div id="container">
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>
        
         
        <div id="main">
            <h2>Login</h2>
         <br>
                   <form action="/users/login" method="post">
                        <div class="formregis">
                        <label>Username</label><input type="text" name="username"><br>
                        <label>Password</label><input type="password" name="password"><br>
                        <label>&nbsp</label><input type="submit" name="loginSubmit">
                        
  
                            
                        
                        </div>
                   </form>
            
         </div>
        
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
      </div>
       
    </body>
</html>