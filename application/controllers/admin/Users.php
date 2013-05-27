<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pakistanihaider
 * Date: 27/05/13
 * Time: 07:43
 * To change this template use File | Settings | File Templates.
 */
class Users extends PBS_AdminController{
    function __construct(){
        parent::_construct();
        $this->load->library('form_validation');
    }
}