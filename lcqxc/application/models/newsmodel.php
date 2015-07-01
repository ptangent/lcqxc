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

    public function get_newsbyid($newId){

        $this->db->where('id', $newId);
        $query = $this->db->get( self::TBL_NEWS);

        return $query->row_array();
    }

    public function update_count($newId){

        $this->db->where('id', $newId);
        $this->db->set('count', 'count+1', false);
        $this->db->update(self::TBL_NEWS);
        return null;
    }

    public function set_news()
    {
        $this->load->helper('url');



        $data = array(
            'title' => $this->input->post('title'),
            'summary' =>$this->input->post('summary'),
            'time' =>date("Y-m-d"),
            'author' =>"乐诚",
            'count' =>10,
            'content' => $this->input->post('content')
        );

        return $this->db->insert(self::TBL_NEWS, $data);
    }
}
?>