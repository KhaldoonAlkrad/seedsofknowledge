<?php
include 'inti.php';
include $tem . 'header.php';
?>
<?php
include $tem . 'nav.php';
?>

<div class="container">
    <h2>New User</h2>
    <form class="form-horizontal" action="register.php" method="POST">
        <div class="form-group">

            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" required>
            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-10">          
                <input type="password" class="form-control" id="cpwd" placeholder="Verify password" name="cpwd" required>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">

            </div>
        </div>
        <div class="radio">
            <label><input type="radio" name="role" value="student" required>Student</label>
            <label><input type="radio" name="role" value="teacher" required>Teacher</label>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
            <?php
            $user = new user("", "", "", "", ""); //nieuwe parameters
            $msg = $user->checkaccountinput();
            ?>
            <span class=error> <?php echo $msg; ?> </span>
        </div>
    </form>
</div>










<?php include $tem . 'footer.php'; ?>