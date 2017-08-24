<div id="container">
	<h1><?php echo $page->page_title; ?></h1>

	<div id="body">

		<?php if(isset($page) && count($page) > 0){
			include 'content/'.$page->page_id.'.php'; 
		}?>

	</div>

</div>