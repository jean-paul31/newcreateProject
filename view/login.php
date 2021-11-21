<?php

require "navbar.php";

?>
<div class="container">
    <div class="row center">
        <div class="col">
            <div class="col-md-3 offset-4 center-block  my-auto text-center login">
                <form>
                    <div class="mb-3">
                        <label for="mailConnect" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="mailConnect" id="mailConnect">
                    </div>
                    <div class="mb-3">
                        <label for="mdpConnect" class="form-label">Password</label>
                        <input type="password" class="form-control" id="mdpConnect" name="mdpConnect">
                    </div>
                    <button type="submit" class="btn btn-primary" name="connexion">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>