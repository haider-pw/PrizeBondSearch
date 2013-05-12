<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/16/13
 * Time: 7:24 PM
 * To change this template use File | Settings | File Templates.
 */

class Search extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PrizeBondSearch_Model');
    }

    function DisplayWinningNumbers(){
        $BondType = 750;
        if($_POST && $_POST['PBS_TextAreaSearch']!=''){
            $BondNumbers = explode("," , $_POST['PBS_TextAreaSearch']);
           $Winners = $this->PrizeBondSearch_Model->DisplayWinningNumbers($BondType, $BondNumbers);
            var_dump($Winners);
        }
        else{
            echo 'you didn\'t Enter any thing';
        }
    }
}