<!--
 /* ===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license	
	=========================== */
-->
<!DOCTYPE html>
<html lang="en">
  <head>		
    <?php echo $this->html->charsetTag("UTF-8"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">        
    <meta name="generator" content="FlavorPHP 2.0" />
    <title><?php echo $title_for_layout; ?></title>
	  <?php echo $this->html->includeCss("bootstrap/css/bootstrap.min"); ?>
    <?php echo $this->html->includeCss("bootstrap/css/bootstrap-theme.min"); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body role="document">    	
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{App name}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>                
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>    
    <div class="container theme-showcase" role="main">
		  <?php echo $content_for_layout ?>          				 
		</div>		
		<!-- ================================================== -->
		<?php echo $this->html->includeJs("jquery-1.11.3.min"); ?>
		<?php echo $this->html->includeJs("bootstrap.min"); ?>
		<!-- ============================================= -->
	</body>
</html>