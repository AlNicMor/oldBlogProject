<?php include('variables.php'); ?>

<div id="header">
    <h1><?php echo $heading; ?></h1>
    <?php if (isset($_SESSION['username'])){
                                    echo "Logged in as <strong>" . $_SESSION['username'] . "</strong>";
    }?>
</div>