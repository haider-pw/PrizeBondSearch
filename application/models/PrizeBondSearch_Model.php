<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/16/13
 * Time: 6:20 PM
 * To change this template use File | Settings | File Templates.
 */

class PrizeBondSearch_Model extends CI_Model{

    function ShowAllPBS(){
       $query = $this->db->query('Select * from pbs_prizebonds');
        return $query->result();
    }

    function DisplayWinningNumbers($BondType, $BondNumbers){
        $this->db->select('*');
        $this->db->from('PrizeBondDraw');
        foreach($BondNumbers as $BondNumber){
            $this->db->like('PBD_PBNumber', $BondNumber);
        }
        $this->db->where('PBD_PBType', $BondType);
        $query = $this->db->get();
        return $query->result();
    }
}