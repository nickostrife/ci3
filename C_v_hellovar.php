<?php
class C_v_hellovar extends CI_controller{
    function index() {
        $data=array();
        $data ["halo"]="Hello World!";
        $this->load->view("v_c_v_hellovar", $data);
    }
}
?>