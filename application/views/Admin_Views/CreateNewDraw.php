<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/17/13
 * Time: 1:45 AM
 * To change this template use File | Settings | File Templates.
 */

// Change the css classes to suit your needs
echo $this->load->view('Admin_Views/u_templates/header');
$attributes = array('class' => '', 'id' => '');
echo form_open('/admin/DashBoard/SetNewDraw', $attributes); ?>

<p>
    <label for="BondType">Bond Type <span class="required">*</span></label>
    <?php echo form_error('BondType'); ?>

    <?php // Change the values in this array to populate your dropdown as required ?>
    <?php $options = array(
    ''  => 'Please Select',
    '200'    => 'Rs200/-',
    '250'    => 'Rs250/-',
    '750'    => 'Rs750/-',
    '1500'    => 'Rs1,500/-',
    '7500'    => 'Rs7,500/-',
    '15000'    => 'Rs15,000/-',
    '25000'    => 'Rs25,000/-',
    '40000'    => 'Rs40,000/-',
); ?>

    <br /><?php echo form_dropdown('BondType', $options, set_value('BondType'))?>
</p>

<p>
    <label for="DrawDate">Draw Date <span class="required">*</span></label>
    <?php echo form_error('DrawDate'); ?>
    <br /><input id="DrawDate" type="text" name="DrawDate" id="DrawDate"  value="<?php echo set_value('DrawDate'); ?>"  />
</p>

<p>
    <label for="FirstPrize">First Prize <span class="required">*</span></label>
    <?php echo form_error('FirstPrize'); ?>
    <br />

    <?php echo form_input( array( 'name' => 'FirstPrize','class' => 'k-textbox', 'type' =>'Text', 'value' => set_value('FirstPrize') ) )?>
</p>
<p>
    <label for="SecondPrize">Second Prize <span class="required">*</span></label>
    <?php echo form_error('SecondPrize'); ?>
    <br /><input id="SecondPrize" type="text" name="SecondPrize" class="k-textbox"  value="<?php echo set_value('SecondPrize'); ?>"  />
</p>

<p>
    <label for="ThirdPrize">Third Prize <span class="required">*</span></label>
    <?php echo form_error('ThirdPrize'); ?>
    <br />

    <?php echo form_textarea( array( 'name' => 'ThirdPrize', 'class' => 'k-editor-textarea', 'id' => 'ThirdPrize', 'rows' => '5', 'cols' => '80', 'value' => set_value('ThirdPrize') ) )?>
</p>

<p>
    <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
<script>
    $(document).ready(function(e){
        $('#DrawDate').kendoDatePicker({
            format:"dd-MM-yyyy"
        })
    });
</script>
<?php
$this->load->view('Admin_views/u_templates/footer')
?>
