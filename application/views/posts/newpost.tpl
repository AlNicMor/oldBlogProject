<!DOCTYPE html>


 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <style><?php require_once HOME . DS . 'application' . DS . 'includes' . DS . 'main.css.php';?></style>
        
        <script type='text/javascript' src='/application/includes/ckeditor/ckeditor.js'></script>
    </head>
    <body>
        
         <div id="container">
         
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'header.php';?>
         <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'navbar.php';?>
        
         
        <div id="main">
            <h2>New Post</h2>
         <br>
                   <form action="/posts/submitPost" method="post">
                        <h3>Title</h3>
                        <input type="text" name="title"><br>
                        <h3>Category</h3>
                        <?php
                            $options = array();
                            $options[] = "";
                            foreach ( $categories as $d ) {
                              $options[] = "<option value='{$d['category_id']}'>{$d['description']}</option>";
                            }
                        ?>
                        <select size="1" name="category">
                        <?php echo implode("\n", $options); ?>
                        </select>
                        <h3>Content</h3>
                        <textarea name="editor" id="editor" rows="30" cols="100">
                        This is my textarea to be replaced with CKEditor.
                        </textarea>
                        <br>
                        <input type="submit" name="newpostFormSubmit">
                        
                            
                            
                            
                        </form>
  
                            
                        
          </div>
                   
            <?php include HOME . DS . 'application' . DS . 'includes' . DS . 'footer.php';?>
         </div>
        
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
        </script>
             
    </body>
</html>