<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pakistanihaider
 * Date: 26/05/13
 * Time: 14:13
 * To change this template use File | Settings | File Templates.
 */
?>
<!-- BEGIN WRAP -->
<div id="wrap">

<!-- BEGIN TOP BAR -->
<div id="top">
    <!-- .navbar -->
<?php $this->load->view('Admin_Views/ui_Components/navBar'); ?>
    <!-- /.navbar -->
</div>
<!-- END TOP BAR -->


<!-- BEGIN HEADER.head -->
<?php $this->load->view('Admin_Views/ui_Components/HeaderHead'); ?>
<!-- END HEADER.head -->

<!-- BEGIN LEFT  -->
<div id="left">
    <!-- .user-media -->
<?php $this->load->view('Admin_Views/ui_Components/UserMedia'); ?>
    <!-- /.user-media -->
    <!-- BEGIN MAIN NAVIGATION -->
<?php $this->load->view('Admin_Views/ui_Components/LeftMenu'); ?>
    <!-- END MAIN NAVIGATION -->
</div>
<!-- END LEFT -->

<!-- BEGIN MAIN CONTENT -->
<?php $this->load->view('Admin_Views/ui_Components/Body_Contents'); ?>
<!-- END CONTENT -->


<!-- #push do not remove -->
<div id="push"></div>
<!-- /#push -->
</div>
<!-- END WRAP -->

<div class="clearfix"></div>
