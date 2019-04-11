

<?php
ob_start();

?>

<div class="pos container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                </div>
            </div>

            <div class="d-flex justify-content-center form_container">
                <form method="post">

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                            <input type="text" name="login" class="form-control input_user" value="" placeholder="username" required>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password" required>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" name="connexion" class="btn login_btn" value="Connexion">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <div class="mt-4">
        <form class="d-flex justify-content-center links" method="post">
                    Don't have an account?
                     <button  type='submit' name="registeraccess"  class="ml-2">Sign Up</button>
        </form>

    </div>
</div>

<?php

$content = ob_get_clean();


require('template.php');
