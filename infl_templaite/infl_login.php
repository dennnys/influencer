	<div class="influencer container">
		<?php 
	if (isset($_SESSION['infl_error'])) {
		$message = '<div class="infl_error"><span>ERROR: '.$_SESSION["infl_error"].'</span></div>';
		echo $message;
		unset($_SESSION['infl_error']);
	} 
 ?>
		<div class="row">
			<form method="POST" class="col-md-5">
				<div class="col-md-12 form-group">
					<label for="infl-login">Login</label><br>
					<input id="infl-login" name="infl-login" type="text" class="form-control">
				</div>
				<div class="col-md-12 form-group">
					<label for="infl-pass">Password</label><br>
					<input id="infl-pass" name="infl-pass" type="text" class="form-control">
				</div>
				<div class="infl-button text-center">
					<div>
						<button class="btn btn-imm" name="infl-btn-login" type="submit">Entre</button>
					</div>
				</div>
			</form>
		</div>

	</div>