<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
    </head>
    <body>
     <div id="container">
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>
        
         
        <div id="main"><h1>All Posts!</h1>
 
        <?php 
            if ($posts):
            foreach ($posts as $a): ?>
 
            <article>
                <header>
                    <h1><a href="/posts/fullarticle/<?php echo $a['post_id']; ?>"><?php echo $a['title']; ?></a></h1>
                    <p><?php echo $a['description']; ?></p>
                    <p>Published on: <time pubdate="pubdate"><?php echo $a['timestamp']; ?></time> by <strong><?php echo $a['username']; ?></strong></p>
                </header>
                <p><?php echo $a['text']; ?></p>
                <p><a href="/posts/fullarticle/<?php echo $a['post_id']; ?>">Comments</a></p>
                <hr/>
            </article>
        <?php 
            endforeach;
            else: ?>
 
        <h1>Welcome!</h1>
        <p>We currently do not have any articles.</p>
 
        <?php endif; ?>
            
         </div>
        
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
      </div>
       
    </body>
</html>