<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<div class="container flex flex-column-center" style="min-height: 450px;">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2><?php echo $page->single_quote;?></h2>
		</div>
	</div>
</div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
