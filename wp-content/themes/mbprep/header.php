<?php
// The header for our theme
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- SEO Meta Description -->
  <meta name="description" content="Follow Michael Barto's prep journey and progress updates for natural bodybuilding.">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="logo">
      <a href="<?php echo home_url(); ?>">MBPrep</a>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/about-me'); ?>">About</a></li>
        <li><a href="<?php echo home_url('/progress-updates'); ?>">Progress</a></li>
		<li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
      </ul>
    </nav>
  </header>
