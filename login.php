<?php
include 'inti.php';
include $tem . 'header.php';
?>
 <?php
    include $tem . 'nav.php';
    ?>

        <div class="formdiv">
            <form action="action_page.php">
                <div class="imgcontainer">
                    <img src="<?php echo $img; ?>img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    
                </div>

                
            </form>
        </div>
<?php include $tem . 'footer.php'; ?> 