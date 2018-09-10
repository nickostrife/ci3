<?php
class M_hello extends CI_Model{
    var $halo="Hello World! Model!";
    function katakata() {
        $kalimat=$this->halo." I'm from model!";
        return $kalimat;
    }
}
?>