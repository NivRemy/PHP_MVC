<?php
ob_start();

?>

<div class="container">
		<div class="jumbotron">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" name="mail" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="password" class="form-control" id="pwd">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

<?php

$content = ob_get_clean();

require_once 'template.php';