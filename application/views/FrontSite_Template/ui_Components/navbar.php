<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/24/13
 * Time: 6:27 AM
 * To change this template use File | Settings | File Templates.
 */?>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
        <ul class="nav">
            <li class="active"><a href="#home">Home</a></li>
            <li class="divider-vertical"></li>
<?php
if($this->CommonModel->loggedin()==TRUE){
    ?>
    <li><a href="#VirtualVault">Virtual Vault</a></li>
            <li class="divider-vertical"></li>
<?php }
?>
            <li><a href="#PrizeDetails">Prizes Detail</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#DrawShedule">Draw Shedule</a></li>
            <li class="divider-vertical"></li>
            <li><a href="AdvanceSearch">Advance Search</a></li>
            <li class="divider-vertical"></li>
            <li><a href="ContactUs">Contact Us</a></li>
        </ul>
            <ul class="nav pull-right" id="LoggedInMenu">
            <?php $this->load->view('FrontSite_Template/ui_Components/navbar_loginbtns') ?>
            </ul>
        </div>
    </div>
    <script language="javascript">


    </script>
</div>