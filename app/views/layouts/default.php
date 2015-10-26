<!--
 /* ===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license
	=========================== */
-->
<!DOCTYPE html>
<html lang="es">
    <head>
    	<?php echo $this->html->charsetTag("UTF-8"); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">        
        <meta name="generator" content="FlavorPHP 2.0" />
        <title><?php echo $title_for_layout; ?></title>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body>
        <?php echo $content_for_layout ?>
	</body>
    <!-- ================================================== -->
    <?php echo $this->html->includeJs("jquery-1.11.3.min"); ?>
    <!-- ============================================= -->
</html>