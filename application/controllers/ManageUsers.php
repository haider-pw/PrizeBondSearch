<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/27/13
 * Time: 9:59 AM
 * To change this template use File | Settings | File Templates.
 */
class ManageUsers extends Frontend_Controller
{
    protected $_timestamp = 'today';
    function __construct(){
        parent::__construct();
        $this->load->model('CommonModel');
    }

    function CheckUsername($username){
        $u =$this->CommonModel->get('PBS_Users',array('Username' => $username));
        $data['users'] = $u;

        if(array_key_exists(0,$data['users']))
        {
            echo "error::: Username already Exist";
        }
        else
        {
            echo "success::: Username is available";
        }

    }
    function login(){
        if($_POST && $_POST!=''){
/*            $where=array(
                'Username' => $_POST['Username'],
                'Password' => $this->CommonModel->hash($_POST['Password'])
            );*/

                    $where=array(
                        'Username' => $_POST['Username'],
                        'Password' => $_POST['Password']
                    );
           $result= $this->CommonModel->login($where);
            if ($result===TRUE){
                echo 'success:::You Have Been Logged In Correctly.';
            }
            else{
                echo "error:::User not found with the given Credentials.";
            }
        }

    }

    function logout(){
        $this->CommonModel->logout();
    }
    function isLoggedIn(){
        if($this->session->userdata('LoggedIn')){
            echo '1';
        }
        else{
            echo '2';
        }
/*        $result=$this->CommonModel->loggedin();
        if($result==TRUE){
            echo 'Hello';
        }
        else{
            echo 'Not Logged In';
        }*/
    }
    public function RegisterUser(){
        if($_POST && $_POST!=''){
            $table='pbs_users';
            $data=array(
                'Username' => $_POST['username'],
                'Password' => $_POST['password'],
                'FullName' => $_POST['FullName'],
                'Email'    => $_POST['email'],
                'Phone'    => $_POST['phone'],
                'City'     => $_POST['city'],
                'address'  => $_POST['address'],
                'IsActive' => '1',
                'GroupID'  => '1',
                'RegistrationDate' => $this->_timestamp,
                'LastLogin' => $this->_timestamp
            );
            $u['users'] =$this->CommonModel->get('PBS_Users',array('Username' => $_POST['username']));
                //this checks if username already exist.
            if(array_key_exists(0,$u['users']))
            {
                echo "error::: Username already Exist";
            }
            else {

                //this checks if email already exist.
                $u['emails'] =$this->CommonModel->get('PBS_Users',array('Username' => $_POST['username']));
                if(array_key_exists(0,$u['emails']))
                {
                    echo "error::: Email Already Exist";
                }
                else
                {
                    //if username and email don't exist, then insert new record.
                    $result=$this->CommonModel->insert($table, $data);
                    if($result==0){
                        echo 'error:::There is some Problem in Creating your Account.';
                    }
                    else {
                        echo 'success:::Your Account Have Been Successfully Created.';
                    }
                }
            }
        }

        else{
            echo 'error:::Something is Wrong, data is not Posting or Posting Empty';
        }
    }
}
