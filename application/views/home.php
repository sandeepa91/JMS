<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter @ Milinda </title>
    </head>
    
    <body>
    <div class="span12">
        <nav class="nav">
           <?php
        $currentUser = $this->session->userdata('login_user');
        echo "Weclome " . $currentUser['user'];
        echo "<br> You are logged in at " . $currentUser['logtime'];
        ?>   
        </nav>
  
            
        </div>
        
        <h1>
            Welcome to the Home :-D
        </h1>
        
   <a href="<?php echo base_url() . "index.php/user/logout/" ?>"><button type="button" class="btn btn-primary">Logout</button> </a> 
    </body>
    
</html>