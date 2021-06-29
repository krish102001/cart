<?php include 'modal.php'; ?>
<footer>
    <div class="row">
        <div class="col-sm-4">
            <h3>Information</h3>
            <a href="about.php">About us</a>
            <br>
            <a href="contact.php">Contact us</a>
        </div>
        <div class="col-sm-4">
            
            <h3>My Account</h3>
            <?php if(isset($_SESSION['email'])){ ?>
            <a href="logout.php">Logout</a>
            <?php } 
            else{
               ?>
            <a role="button" data-toggle="modal" data-target="#login">Login</a>
            <br>
            <a href="signup.php">Sign Up</a>
            <?php } ?>
        </div>
         <div class="col-sm-4">
            <h3>Contact Us</h3>
            <p>+91 7839929573</p>
        </div>
    </div>
</footer>
