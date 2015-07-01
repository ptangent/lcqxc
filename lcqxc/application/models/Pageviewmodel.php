<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pageviewmodel extends CI_Model {

    const TBL_PV = "pageview";
    var $id   = '';
    var $agent = '';
    var $time    = '';

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_pvs(){

            $query = $this->db->get( self::TBL_PV);
            return $query->result_array();

        return $query->row_array();
    }

    public function set_pvs()
    {
        $this->load->helper('url');

        $data = array(
            'agent' => $_SERVER['HTTP_USER_AGENT'],
            'time' => date('y-m-d h:i:s',time())
        );

        return $this->db->insert(self::TBL_PV, $data);
    }

    public function  get_count()
    {
       return $this->db->count_all(self::TBL_PV);
    }
//    public function get_news($slug = FALSE){
//        if ($slug === FALSE)
//        {
//            $query = $this->db->get(TBL_USERS);
//            return $query->result_array();
//        }
//
//        $query = $this->db->get_where(TBL_USERS, array('slug' => $slug));
//        return $query->row_array();
//    }


//    function get_last_ten_entries()
//    {
//        $query = $this->db->get('entries', 10);
//        return $query->result();
//    }
//
//    function insert_entry()
//    {
//        $this->title   = $_POST['title']; // 请阅读下方的备注
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->insert('entries', $this);
//    }
//
//    function update_entry()
//    {
//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
//    }

}
?>