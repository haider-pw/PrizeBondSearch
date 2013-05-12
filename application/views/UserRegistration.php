<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/26/13
 * Time: 10:35 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<!--Body content-->
<div class="HeaderBlack">Sign Up New Member</div>
<h3 class="PageHeading">Join Us to receive our VIP Services.</h3>
<div class="FormElementsStyle">
    <?php $FormAttributes = array('class' => 'form-horizontal', 'id' => 'UserRegistrationForm', 'name' => 'UserRegistrationForm');
    echo form_open(base_url().'ManageUsers/RegisterUser',$FormAttributes);

//Username TextBox
    $username=array(
        'name'=>'username',
        'id' => 'username',
        'placeholder' => 'Type Username Here',
        'type'  => 'text'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Username :','Username',$LabelAttributes);
    echo '<div class="controls">'.form_input($username);
    echo "</div></div>";

//Password TextBox
    $Password_attributes=array(
        'name'  =>  'password',
        'id' => 'password',
        'placeholder' => 'Your Password Here',
        'type'  => 'password'
    );
    $ConfirmPassword_attributes=array(
        'name'  =>  'ConfirmPassword',
        'id' => 'ConfirmPassword',
        'placeholder' => 'Confirm Password',
        'type'  => 'password'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Password :','password',$LabelAttributes);
    echo '<div class="controls">'.form_input($Password_attributes);
    //This input is for confirm password
    echo form_input($ConfirmPassword_attributes)."</div></div>";

//Full Name TextBox field.
    $FullName_attributes=array(
        'name'  =>  'FullName',
        'placeholder' => 'Your Full Name Here',
        'type'  => 'text'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Full Name :','FullName',$LabelAttributes);
    echo '<div class="controls">'.form_input($FullName_attributes);
    echo "</div></div>";

//Email TextField.
    $Email_attributes=array(
        'name'  =>  'email',
        'placeholder' => 'Your Email Here',
        'type'  => 'email'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Email :','email',$LabelAttributes);
    echo '<div class="controls">'.form_input($Email_attributes);
    echo "</div></div>";

//Phone/Mobile Number.
    $phone_attributes=array(
        'name'  =>  'phone',
        'placeholder' => 'Your Phone/Mobile Here',
        'type'  => 'text'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Phone/Mobile :','phone',$LabelAttributes);
    echo '<div class="controls">'.form_input($phone_attributes);
    echo "</div></div>";

//City TextField.
    $Email_attributes=array(
        'name'  =>  'city',
        'placeholder' => 'Your City Name Here',
        'type'  => 'text'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('City :','city',$LabelAttributes);
    echo '<div class="controls">'.form_input($Email_attributes);
    echo "</div></div>";

//Address TextArea.
    $TextArea_attributes=array(
        'name'  =>  'address',
        'placeholder' => 'Your Address Here',
        'rows' => '3'
    );
    $LabelAttributes=array(
        'class' => 'control-label'
    );
    echo '<div class="control-group">'.form_label('Address :','Address',$LabelAttributes);
    echo '<div class="controls">'.form_textarea($TextArea_attributes);
    echo "</div></div>";


//This is SubmitButton
    $SubmitButtonAttributes=array(
        'type' => 'button',
        'class' => 'btn',
        'id'    => 'RegisterUserBtn',
        'value' => 'Sign Up'
    );
    echo '<div class="control-group"><div class="controls">'.form_input($SubmitButtonAttributes);
    echo "</div></div>";
    echo form_close(); ?>
</div>
<script language="JavaScript">
    $(document).ready(function(e){

        //Submit The Form if the Form is Valid.
        $('#RegisterUserBtn').click(function(e){
            var user_n = $("#username").val().length;
            var user_name = $("#username").val();
            if(user_n==0){
                var msg = 'Username Field is Required';
                WarningNotification(msg);
                return;
            }

            if(user_n>0 && user_n<5)
            {
                var msg = 'Username Must be at least 5 characters long';
                WarningNotification(msg);
                return;
            }

            var pw = $("#password").val();
            var c_pw = $("#ConfirmPassword").val();

            if(pw.length==0)
            {
                var msg = 'Password is Required, Please Enter Password';
                WarningNotification(msg);
            }
            if(pw.length<6)
            {
                var msg = 'Password must be at least 6 characters long.';
                WarningNotification(msg);
            }
            if( pw!=c_pw)
            {
                var msg = 'Password and Confirm Password do not match';
                WarningNotification(msg);
                return;
            }
            var AjaxRegistrationForm = $("#UserRegistrationForm");
            AjaxFormSubmit(AjaxRegistrationForm);
        });

        $("#username").blur(function(){
            var Username = $(this).val();
            AjaxUsernameCheck(Username);
        });   //--- End of search username   ---//
     });


    function AjaxUsernameCheck(Username){
        $.ajax({
            url: "<?php echo base_url() ?>ManageUsers/CheckUsername/"+Username,
            type: "post",
            success: function(output){

                var data = output.split(":::");
                if(data[0]== "error")
                {
                    var msg=data[1];
                    ErrorNotification(msg);
                    return 0;
                }else
                if(data[0]== "success")
                {
                    var msg=data[1];
                    SuccessNotification(msg);
                    return 1;
                }
            },
            error : function(output){
                var msg='Some Database Error';
                ErrorNotification(msg);
            }
        });
    }



</script>