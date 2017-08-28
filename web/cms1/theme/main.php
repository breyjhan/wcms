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
		<?php get_header(); ?>

		<?php if(is_home()){
			get_page('home');
		}else{
			get_page('page');
		}
		?>

		<?php get_footer(); ?>
</body>
</html>