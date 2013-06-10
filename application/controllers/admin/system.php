<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 6/9/13
 * Time: 11:23 PM
 * To change this template use File | Settings | File Templates.
 */

class System extends Backend_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        echo 'System Index Action';
    }
}