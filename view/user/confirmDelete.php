<form method="<?php echo $method ?>" action="index.php">

    <h5>Confirm delete account by giving information</h1>

    <legend>
        <?php
            if (Session::is_admin()) {
                    echo "<p>fill the user's login to delete</p>";
                }
        ?>

        <label for="login_id">Login</label>
        <input type="text" name="login" id="login_id" value="" required>

        <?php
            if (Session::is_admin()) {
                echo "<p>fill with your admin password</p>";
            }
        ?>

        <label for="mdp_id">Password</label>
        <input type="password" name="password" id="mdp_id" value="" required>    

        <input type='hidden' name='action' value="deleted">
        <input type='hidden' name='controller' value='user'>
        <input type="submit" value="Confirm delete">

    </legend>

</form>