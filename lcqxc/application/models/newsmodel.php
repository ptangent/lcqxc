<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmodel extends CI_Model {

    const TBL_NEWS = "news";
    var $id   = '';
    var $agent = '';
    var $time    = '';

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_news($num,$offset){

            $query = $this->db->get( self::TBL_NEWS,$num,$offset);
            return $query->result_array();

        return $query->row_array();
    }

}
?>