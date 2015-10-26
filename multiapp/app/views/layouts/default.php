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
        <title><?php echo $title_for_layout; ?></title>
        <?php echo $this->html->charsetTag("UTF-8"); ?>
        <meta name="generator" content="FlavorPHP 2.0" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body>
        <?php echo $content_for_layout ?>
        <!-- ================================================== -->
        <?php echo $this->html->includeJs("jquery-1.11.3.min"); ?>
		<!-- ============================================= -->
	</body>
</html>