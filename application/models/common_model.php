<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/27/13
 * Time: 3:34 PM
 * To change this template use File | Settings | File Templates.
 */
class common_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    function get_by_join($columns, $PTable, $joins, $where=array(), $single=FALSE){
        $this->db->select($columns);
        $this->db->from($PTable);
        foreach($joins as $k => $v){
            $this->db->join($v['table'], $v['condition'], $v['joinType']);
        }
        $this->db->where($where);
        $query = $this->db->get();
        $result = $query->result_array();
        if($single) {
            return $result[0];
        }
        return $result;
    }
}
