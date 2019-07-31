<?php
ob_start();

if(!is_null($message)){
	echo '<p>' . $message . '</p>';
}
foreach($travels as $travel){
	?>
	<div class="container">
		<div class="jumbotron">
			<h2>
				<?= utf8_encode($travel['title']);?>
			</h2>
		<?php if(!empty($travel['img'])){
			echo '<img src="img/' . $travel['img'] . '">';
		}
		?>
			<p><?= utf8_encode($travel['content']); ?></p>
			<?php
			if(isset($_SESSION['mail'])){
				?>
				<a href=<?= '"index.php?delete=' . $travel['id'] . '"'; ?>><button class="btn btn-danger">Supprimer</button></a>
				<?php
			}
			?>
		</div>
	</div>
	<?php
}

$content = ob_get_clean();

require_once 'template.php';