<?php
ob_start();


foreach($travels as $travel){
	?>
	<div class="container">
		<div class="jumbotron">
			<h2>
				<?= utf8_encode($travel['title']);?>
			</h2>
		<?php if(!empty($travel['img'])){
			echo '<img src="' . $travel['img'] . '">';
		}
		?>
			<p><?= utf8_encode($travel['content']); ?></p>
		</div>
	</div>
	<?php
}

$content = ob_get_clean();

require_once 'template.php';