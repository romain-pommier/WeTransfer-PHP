<?php
ob_start();
?>






<body>
	<h2>Inscription à l'espace membre </h2>
		<div class=" pos container h-100">
				<div class="d-flex justify-content-center h-100">
					<div class="user_card">
						<div class="d-flex justify-content-center">
							<div class="brand_logo_container">
								<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
							</div>
						</div>
						<div class="d-flex justify-content-center form_container">
							<form  method="post">
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" name="loginregister" class="form-control input_user" value="<?php if (isset($_POST['login'])) {
    echo htmlentities(trim($_POST['login']));
}
?>" placeholder="username">
								</div>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" name="passregister" class="form-control input_pass" value="<?php if (isset($_POST['pass'])) {
    echo htmlentities(trim($_POST['pass']));
}
?>" placeholder="password">
								</div>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" name="pass_confirmregister" class="form-control input_pass" value="<?php if (isset($_POST['pass_confirm'])) {
    echo htmlentities(trim($_POST['pass_confirm']));
}
?>" placeholder="password Confirm">
								</div>
								<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" name="inscription" class="btn login_btn">
						</div>
							</form>
						</div>


					</div>
				</div>
			</div>
</body>

<?php

$content = ob_get_clean();


require('template.php');
