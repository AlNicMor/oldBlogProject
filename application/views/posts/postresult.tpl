<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Post Result</title>
        <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
    </head>
    <body>
     <div id="container">
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>
        
         
        <div id="main">
            <h1><?php if (isset($title)) echo $title; ?></h1>
         <br>
        
        <?php 
        if (isset($errors)) 
        {
            echo '<ul>';
            foreach ($errors as $e)
            {
                echo '<li>' . $e . '</li>';
            }
            echo '</ul>';
        } 
         
        if (isset($saveError))
        {
            echo "<h2>Error saving data. Please try again.</h2>" . $saveError;
        }
        ?>
         <a href="/posts/index">Back to index</a>
         </div>
        
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
      </div>
       
    </body>
</html>