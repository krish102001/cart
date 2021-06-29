<?php include 'modal.php'; ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">      
          <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                        <span class="icon-bar"></span>    
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button> 
              <a class="navbar-brand" href="index.php">E-Store</a>  
                </div>         
                <div class="collapse navbar-collapse" id="navBar">
                 <ul class="nav navbar-nav navbar-right">
                     <?php if(isset($_SESSION['email'])){ 
                         ?>
                      <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
                     <?php } 
                     else{ 
                         ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a role="button" data-toggle="modal" data-target="#login" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                     <?php } ?>
            </ul>
                </div>
        </div>
</nav>
