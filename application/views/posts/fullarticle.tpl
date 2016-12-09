<!DOCTYPE html>


 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?> | Full Article</title>
        <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
    </head>
    <body>
        
         <div id="container">
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>
        
         
        <div id="main">
                <h1><?php echo $title; ?></h1>
            
                <p>Published on: <time pubdate="pubdate"><?php echo $datePublished; ?></time> by <strong><?php echo $user; ?></strong></p>
            <p>
                <?php echo $articleBody; ?>
            </p>
            <hr/>
        
        <?php 
            if ($comments):
            foreach ($comments as $a): ?>
        
        <div>
            
            <header>
                    
                    <p><?php echo $a['username']; ?></p>
                    <p>Published on: <time pubdate="pubdate"><?php echo $a['timestamp']; ?></time></p>
            </header>
            
            <p><?php echo $a['text']; ?></p>
            <hr/>
        </div>
         <?php 
            endforeach;
            else: ?>
        
        <p>No comments yet</p>
        <?php endif; ?>
            
         <?php 
                if (isset($_SESSION['username'])){ ?>
                
                        <form action="/posts/commentPost" method="post">
                        <div class="formregis">
                        
                        <textarea name="text" id="text" rows="4" cols="50"></textarea><br>
                        <label>&nbsp</label><input type="submit" name="commentSubmit">
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
  
                            
                        
                        </div>
                   </form>  <?php } ?>
         
        <br><br><a href="/">Back to article list</a>
             </div>
             
             <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
        </div>
    </body>
</html>