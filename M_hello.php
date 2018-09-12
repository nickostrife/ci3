<?php
class M_hello extends CI_Model{
    var $halo="Hello World!";

    var $abahasa=array(
        "EN"=>"Hello World!",
        "ID"=>"Halo Dunia!",
        "AR"=>"Ahlan Dunia!"
    );

    function katakan($langid) {
        $alangid=array_keys($this->abahasa);
        $langid=in_array($langid, $alangid)?$langid:"EN";
        $kalimat=$this->abahasa[$langid].">>".$this->akalimat[$langid];
        return $kalimat;
    }

    var $akalimat=array(
        "EN"=>"Inggris",
        "ID"=>"Indonesia",
        "AR"=>"Arab"
    );

    function katakata() {
        $kalimat=$this->halo." I'm from model!";
        return $kalimat;
    }

    function bilang($langid) {
        $langname="English ";
        $kalimat=$langname.">>".$this->m_hello->halo;
        switch ($langid) {
            case "ID":
                $langname="Indonesia ";
                $kalimat=$langname.">>"."Halo dunia!";
                break;
            case "AR":
                $langname="Arabian "    ;
                $kalimat=$langname.">>"."Ahlan dunia!";
                break;
        }
        return $kalimat;
    }
}
?>