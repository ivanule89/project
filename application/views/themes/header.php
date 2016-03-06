<?php
inc_app(getRole(),'session');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?=get_option('site_name');?></title>
<link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.ico">
<link rel="stylesheet" href="<?=base_url();?>assets/themes/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/themes/css/paging.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/themes/css/bootstrap-select.min.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/themes/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/themes/prettify/prettify.css" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>assets/themes/prettify/prettify.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/themes/js/slider.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/themes/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/themes/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/themes/js/custom.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/themes/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/themes/js/jquery.form.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/themes/js/jquery.validate.js"></script>
</head>

<body>

<div class="mainwrapper fullwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1><a href="<?=base_url(getRole().'/home');?>"><?=get_option('site_name');?></a></h1>
        </div><!--logopanel-->
     
        <div class="datewidget"><h6>Tanggal: <?php echo date("d M Y"); ?></h6></div>
        
        <?php inc_app(getRole(),'nav');?>
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
            
            	<span  style="color:#FFF">
                <?php 
				echo 'Selamat Datang <b style="text-decoration:bold">'.getInfoUser('nama').'</b>';
				?>
                </span>
                <?php
				inc_app("themes","userinfo"); 
				?>
            </div><!--headerright-->
    	</div><!--headerpanel-->
        
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><h5><a href="<?=base_url(getRole().'/home');?>">Beranda</a></h5></li> >>
                <li><h5><a href="<?=base_url('home/passwordchange');?>">Ubah Password</a></h5></li> >>
                <li><h5><a href="<?=base_url('login/dologout');?>">Keluar</a></h5></li>
            </ul>
        </div> 
        <!--breadcrumbwidget-->
        
		<div class="pagetitle">
        	<h5><?=get_option('site_app');?></h5> <!--<span>This is a sample description for dashboard page...</span>-->
        </div><!--pagetitle-->
        
      <div class="maincontent">
       	<div class="contentinner content-dashboard">