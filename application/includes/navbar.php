<?php

$login = "<a href='/users/index'> Login</a>";
$logout = "<a href='/users/logout'> Logout</a>";
$newpost = "<a href='/posts/newpost'>New Post</a>";
$register = "<a href='/users/register'>Register</a>";

?>


<div class="navbar">
    <div class="menunav">
        <h3>Menu</h3>
    </div>
                    <ul>
                        <li>
                            <a href="/posts/index"> Home</a></li>
                        <li>
                            <?php 
                                
                                if (isset($_SESSION['username'])){
                                    echo $logout;
                                }
                                else{
                                    echo $login;
                                }
                                
    
                            ?></li>
                        
                        
                        <li>
                            <?php
                                
                                if (!isset($_SESSION['username'])){
                                    echo $register;
                                }
                            
                         ?></li>
                        
                        <li>
                            
                             <?php 
                                
                                if (isset($_SESSION['username'])){
                                    echo $newpost;
                                }
                            
                        ?></li>
                    </ul>             
</div>