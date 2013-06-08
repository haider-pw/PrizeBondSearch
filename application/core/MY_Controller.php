<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/26/13
 * Time: 5:35 PM
 * To change this template use File | Settings | File Templates.
 */
class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
    }

    function get_LeftMenus(){

    }
}

