<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/16/13
 * Time: 6:54 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<!DOCTYPE HTML>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7"  ng-app="PBS">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8"  ng-app="PBS">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9"  ng-app="PBS">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js"  ng-app="PBS">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PrizeBondSearch</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <?php //Bootstrap CSS Files ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap-responsive.min.css" />
    <?php //Custom CSS Files ?>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('styles/adam/font-awesome/font-awesome.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/adam/style.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/adam/theme.css'); ?>" />
    <?php //Kendo CSS Files ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('KendoUI/styles/kendo.common.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>KendoUI/styles/kendo.metro.min.css" />
    <?php //JS Files ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>KendoUI/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>KendoUI/js/kendo.all.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="styles/adam/font-awesome/font-awesome-ie7.min.css"/>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <?php //Included AngularJS file ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/angular/angular.js"></script>
</head>
<body ng-controller="AdminAppController">