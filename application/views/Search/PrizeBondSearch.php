<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/25/13
 * Time: 8:21 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<!--Body content-->
<div class="HeaderBlack">Search PrizeBonds</div>
<h3 class="PageHeading">Search Prize Bond</h3>
    <div class="FormElementsStyle">
<?php $FormAttributes = array('class' => 'form-horizontal', 'id' => 'myform');
        echo form_open(base_url().'index.php/search/DisplayWinningNumbers',$FormAttributes);

//This should be the DropDown
$options=array(
    '200'=>'Rs 200/-',
    '750'=>'Rs 750/-',
    '1500'=>'Rs 1500/-'
);
$LabelAttributes=array(
    'class' => 'control-label'
);
echo '<div class="control-group">'.form_label('Prize Bond Type :','PrizeBondType',$LabelAttributes);
echo '<div class="controls">'.form_dropdown('PrizeBondType', $options, '200');
echo "</div></div><br />";

//Draw Date, will show the date in which PrizeBond draw was held.
        $options=array(
            'All'=>'All Draws',
            'Date1'=>'1/2/2013'
        );
        $LabelAttributes=array(
            'class' => 'control-label'
        );
        echo '<div class="control-group">'.form_label('Draw Date :','DrawDate',$LabelAttributes);
        echo '<div class="controls">'.form_dropdown('DrawDate', $options, '200');
        echo "</div></div><br />";

//This should be the TextAreaSearch
$TextArea_attributes=array(
    'name'=>'PBS_TextAreaSearch',
    'placeholder' => 'Enter Prize Bond Numbers Separated with Commas',
    'cols'=>'30',
    'rows'=>'10'
);
$LabelAttributes=array(
    'class' => 'control-label'
);
echo '<div class="control-group">'.form_label('Prize Bond List :','PrizeBondType',$LabelAttributes);
echo '<div class="controls">'.form_textarea($TextArea_attributes);
echo "</div></div><br />";


//This is SubmitButton
$SubmitButtonAttributes=array(
    'type' => 'button',
    'class' => 'btn',
    'id'    => 'PrizeBondSearchBtn',
    'value' => 'Search'
);
echo '<div class="control-group"><div class="controls">'.form_input($SubmitButtonAttributes);
echo "</div></div>";

  // Name , Value
echo form_close(); ?>
    </div>