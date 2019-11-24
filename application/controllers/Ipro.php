<?php

class Ipro extends CI_Controller {
    public function __construct(){
        parent::__construct();        
        $this->load->library('session');
        $this->load->helper('url');

        $this->load->model('ipros_model');
       
        $user_id = $this->session->userdata('id');
        if(!$user_id){
            redirect('user/index');
        }
    }

    public function index(){
        
    }

    public function excute_python(){
        //$ipro_value = $this->input->post("ipro");
        $ip = '166.253.148.213';
        $port = 12345;
        $unit = 232;
        $sensors = implode( ",", [105,100,120] );
        
        $filepath = FCPATH."ipro/iPro.py $ip $port $unit $sensors";
        echo $filepath;
        $command = escapeshellcmd('python '.$filepath);
        
        exec($command,  $status, $return );

        echo "<pre>";
        var_dump( $status );
        var_dump( $return );
        echo "</pre>";
        
    }

}