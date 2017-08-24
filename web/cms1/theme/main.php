<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="theme/assets/css/style.min.css">
    <title></title>
  </head>
  <body>
		<?php include 'inc_header.php'; ?>

		<?php if(isset($page->page_slug) && ($page->page_slug == 'home')||($page->page_slug == 'index')){
			include 'home.php';
		}else{
			include 'page.php';
		}
		?>

		<?php include 'inc_footer.php'; ?>
</body>
</html>