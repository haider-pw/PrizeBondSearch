<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/17/13
 * Time: 1:50 AM
 * To change this template use File | Settings | File Templates.
 */

class PrizeBondAdmin_Model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function InsertNewDraw($LuckyDraw){
        $this->db->set($LuckyDraw);
        $this->db->insert('PrizeBondSearch');
    }



    // --------------------------------------------------------------------

    /**
     * function SaveForm()
     *
     * insert form data
     * @param $form_data - array
     * @return Bool - TRUE or FALSE
     */

    function SaveForm($form_data)
    {
        $this->db->insert('prizebonddraw', $form_data);

        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }

        return FALSE;
    }
}