<?php
ob_start();

?>
	<div class="container">
		<div class="jumbotron">
			<form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="title">Titre</label>
					<div class="col-sm-10">
						<input class="form-control" id="title" type="text" name="title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="content">Contenu</label>
					<div class="col-sm-10">
						<textarea id="content" type="textarea" name="content" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="img">Image</label>
					<div class="col-sm-10">
						<input id="img" type="file" name="img">
					</div>
				</div>
				<div class="form-group">
					<button type="submit">Créer voyage</button>
				</div>
			</form>
		</div>
	</div>

<?php

$content = ob_get_clean();

require_once 'template.php';