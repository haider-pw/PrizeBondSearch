<?php
if($this->CommonModel->loggedin()!=TRUE){
    ?>
<li class="dropdown">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
    <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
        <!-- Login form here -->
        <?php $this->load->view('FrontSite_Template/ui_Components/LoginForm'); ?>
    </div>
</li>
<li class="divider-vertical"></li>
<li class="pull-right"><a href="<?php echo base_url() ?>#register">Sign Up</a></li>

<?php
}
else{?>

<li class="logout"><a href="<?php echo base_url() ?>#ManageUsers/logout">Logout</a></li>
<?php
}
?>