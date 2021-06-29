<div class="container">
<div id="login" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOGIN</h4>
            </div>
            <div class="modal-body">
                <p>Don't have an account?<a href="signup.php" style="color:blue; text-decoration:none;">Register</a>
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">       
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required="true" class="form-control" pattern=".{6,}">
                           </div>
                   
                    <button type="submit" class="btn btn-primary">LOGIN</button>      
                </form>
                <br>
                <a href="forgot.php" style="color:blue; text-decoration:none;">Forgot Password?</a>
            </div>
        </div>
    </div>
    
</div>

</div>