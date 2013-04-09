<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/global/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/global/css/theme.css">
    <link rel="stylesheet" href="<?=base_url();?>/global/css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url();?>/global/css/validationEngine.jquery.css" type="text/css"/>

    <script src="<?=base_url();?>/global/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    	<script src="<?=base_url();?>/global/js/jquery.validationEngine-tr.js" type="text/javascript" charset="utf-8"></script>
    	<script src="<?=base_url();?>/global/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    	<script>
    		jQuery(document).ready( function() {
    			// binds form submission and fields to the validation engine
    			jQuery("#formID").validationEngine();
    		});
    	</script>

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }

        .formError .formErrorContent {
            background: #113355;
        }

        .formError .formErrorArrow div {
            background: #113355;
        }
    </style>
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body class="">
<!--<![endif]-->
<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#"><span class="first">Admin</span> <span class="second">Panel</span></a>
    </div>
</div>
<?=$content;?>

<script src="<?=base_url();?>global/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>

</body>
</html>