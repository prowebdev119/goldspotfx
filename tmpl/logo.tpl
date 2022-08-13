<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet"
	
    <meta charset="UTF-8">
    
    <link rel="icon" href="template/images/favicon.png" type="image/png" />
    <title>{$settings.site_name}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="template/css/slick.css" rel="stylesheet" >
    <link href="template/css/fontello.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/calc.css" rel="stylesheet" type="text/css"/>
    <link href="template/css/slick-theme.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/jquery-ui.min.js"></script>
    <script src="template/js/waypoints.min.js"></script>
    <script src="template/js/jquery.easypiechart.min.js"></script>
    <script src="template/js/slick.min.js"></script>
    <script src="template/js/scripts.js"></script>
    <script src="template/js/calculator.js"></script>
    <script src="template/js/time.js"></script>
    <script src="template/js/rate.js"></script>
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Visualhyip.com To disable right click option for the entire site AA324 -->
<!----
{literal}
<script type="text/javascript">
document.ondragstart=function(){return false}; //for image 
document.oncontextmenu=function(e){return false}; //for right click disable
document.onkeydown = function(e) {
        if (e.ctrlKey && 
		 	(e.keyCode === 65 ||
             e.keyCode === 67 || 
			 e.keyCode === 73 ||
			 e.keyCode === 74 ||
			 e.keyCode === 80 || 
			 e.keyCode === 83 || 
			 e.keyCode === 85 || 
             e.keyCode === 86 || 
             e.keyCode === 117
			 )) {
            return false;
        } 
		if(e.keyCode==18||e.keyCode==123){return false}
};

</script>

{/literal}---->
<!--To disable right click option for the entire site: ends here-->
</head>
<body ng-app='dqsApp'>
<div id="wrapper" >

    
            <section class="header header-page">
<div class="grid_green50"> 
         {include file="nav.tpl"} 
                    </section>