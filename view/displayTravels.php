<?php
ob_start();

if(!is_null($message)){
	echo '<div class="container"><div class = "alert alert-success" role="alert" >' . $message . '</div></div>';
}
foreach($travels as $travel){
	?>
	<div class="container">
		<div class="jumbotron">
			<h2>
				<?= utf8_encode($travel['title']);?>
			</h2>
		<?php if(!empty($travel['img'])){
			echo '<div class="img-container"><img class="img-fluid topic-img" src="img/' . $travel['img'] . '"></div>';
		}
		?>
			<div class="topic-content"><p><?= utf8_encode($travel['content']); ?></p></div>
			<?php
			if(isset($_SESSION['mail'])){
				?>
				<a class="d-flex justify-content-end" href=<?= '"index.php?delete=' . $travel['id'] . '"'; ?>><button class="btn btn-danger">Supprimer</button></a>
				<?php
			}
			?>
		</div>
	</div>
	<?php
}

$content = ob_get_clean();

require_once 'template.php';