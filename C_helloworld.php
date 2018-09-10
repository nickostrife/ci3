<?php
class C_helloworld extends CI_Controller{
    function index(){
        echo "Ini adalah controller Index!";
    }

    function viewmurni() {
        //pengganti fungsi c_v_hello
        $this->load->view ("v_c_v_hello");
    }
    function viewvar() {
        //pengganti fungsi c_v_hellovar
        $data=array();
        $data["halo"]="Hello World!";
        $this->load->view("v_c_v_hellovar", $data);
    }
    function modelproperty(){
        //pengganti fungsi c_v_m_helloprop
        $this->load->model("m_hello");
        $data=array();
        $data["halo"]=$this->m_hello->halo;
        $this->load->view("v_c_v_hellovar", $data);
    }
    function modelmethod(){
        //pengganti fungsi c_v_m_hellomethod
        $this->load->model("m_hello");
        $data=array();
        $data["halo"]=$this->m_hello->katakata();
        $this->load->view("v_c_v_hellovar", $data);
    }
}

?>