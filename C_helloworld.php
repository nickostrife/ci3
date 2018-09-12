<?php
class C_helloworld extends CI_Controller{
    function index() {
        ?>
        <html>
        <head>
            <title>Hello World Berbagai Bahasa!</title>
        </head>
        <body>
            <?php echo "Hello World English";?>
        </body>
        </html>
        <?php
    }

    function daftar() {
        $this->load->model ("m_hello");
        $data=array();
        $judulapp="Daftar Bahasa dan Kosa Kalimat";
        $data["judulapp"]=$judulapp;
        $data["abahasa"]=$this->m_hello->abahasa;
        $data["akalimat"]=$this->m_hello->akalimat;
        $this->load->view("v_c_v_hellodaftar", $data);
    }

    function kamus() {
        $this->load->model("m_hello");
        $data=array();
        $data["abahasa"]=$this->m_hello->abahasa;
        $data["akalimat"]=$this->m_hello->akalimat;
        $this->load->view("v_c_v_hellokamus", $data);
    }

    function talkmix($langid="EN") {
        $this->load->model("m_hello");
        $data=array();
        $data["halo"]=$this->m_hello->katakan($langid);
        $this->load->view("v_c_v_hellovar", $data);
        }

    function talka($langid) {
        $this->load->model("m_hello");
        $data=array();
        $data["halo"]=$this->m_hello->abahasa[$langid];
        $data["halo"]=$data["halo"].">>".$this->m_hello->akalimat[$langid];
        $this->load->view("v_c_v_hellovar", $data);
    }

    function talk($langid="EN") {
        $this->load->model ("m_hello");
        $data["halo"]=$this->m_hello->bilang($langid);
        $this->load->view("v_c_v_hellovar", $data);
    }

    function says($langid="EN") {
        $this->load->model ("m_hello");
        $data=array();
        $langname="English ";
        $data["halo"]=$langname.">>".$this->m_hello->halo;
        switch ($langid) {
            case "ID":
                $langname="Indonesia ";
                $data["halo"]=$langname.">>"."Halo dunia!";
                break;
            case "AR":
                $langname="Arabian ";
                $data["halo"]=$langname.">>"."Ahlan dunia!";
                break;
        }
        $this->load->view("v_c_v_hellovar", $data);
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