<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/16/13
 * Time: 3:00 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PrizeBondSearch</title>


<link rel="stylesheet" type="text/css" href="<?php echo base_url('KendoUI/styles/kendo.common.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>KendoUI/styles/kendo.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/custom.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>KendoUI/js/jquery.min.js"></script>
    <!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.ba-bbq/1.2.1/jquery.ba-bbq.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.ba-bbq.min.js"></script>
    <?php //Jquery Noty Messages ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/noty/layouts/top.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/noty/layouts/topRight.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/noty/themes/default.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/custom-notification.js"></script>

    <!--<script type="text/javascript" src="scripts/jquery.address-1.6.min.js?tracker=track"></script>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>KendoUI/js/kendo.all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

    <?php //This is for Jquery Form Submit ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.form.js"></script>
    <?php //This file will Include all my custom Functions inside. ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/custom-functions.js"></script>


</head>
<body>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="row" style="margin-left:0px;">
            <div style="display:inline-block;">
                <div class="logoBlock">
            <span class="logo">
                <img src="<?php echo base_url('styles/imgs/logo.png'); ?>" alt="">
            </span>
                </div>
            </div>
            <?php //User Info Box
            $this->load->view('FrontSite_Template/ui_Components/user-info-box');
            ?>
        </div>


<?php
        $this->load->view('FrontSite_Template/ui_Components/navbar');
        $this->load->view('FrontSite_Template/ui_Components/BreadCrumbs');
?>

    <div class="span2">
        <!--Sidebar content-->
   <?php $this->load->view('FrontSite_Template/ui_Components/LeftMenu'); ?>
    </div>
    <div class="span9">
