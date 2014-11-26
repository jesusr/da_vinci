<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">https://github.com/h5bp/html5-boilerplate/blob/master/.htaccess-->
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'da_vinci') . '/js/plugins/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print $scripts; ?>
</body>
</html>
