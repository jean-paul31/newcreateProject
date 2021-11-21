<?php
session_start();

require "controller/connexion.php";

?>

<div class="col-md-4 offset-4 center-block  my-auto signIn">
    <form action="" method="post" class="form-group">
        <div>
            <label for="mailConnect">email:</label>
            <input type="email" name="mailConnect" id="mailConnect" class="form-control">
        </div>
        <div>
            <label for="mdpConnect">mot de passe:</label>
            <input type="password" name="mdpConnect" id="mdpConnect" class="form-control">
        </div>
        <br>
        <div>
            <input type="submit" class="btn btn-primary" value="connexion" name="connexion">
        </div>
    </form>
    <?php
    if (isset($erreur)) {
        echo "<p class='text-danger'>" . $erreur . "</p>";
    }
    ?>
</div>
<?php require "foot.php" ?>