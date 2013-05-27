<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pakistanihaider
 * Date: 27/05/13
 * Time: 06:03
 * To change this template use File | Settings | File Templates.
 */
if(LoggedIn()){
?>

<div class="user-info-box">
    <section>
        <?php echo anchor('pakistanihaider@gmail.com','<i class="icon-user"></i> '.$this->session->userdata('FullName').'<br />');?>
        <?php echo anchor('','<i class="icon-wrench"></i> Settings<br />'); ?>
        <?php echo anchor('','<i class="icon-off"></i> Logout')?>
    </section>
</div>
<?php
}
    ?>