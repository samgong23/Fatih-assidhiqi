<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fuzzy extends CI_Model {

	public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_aturan');
		$this->load->model('model_variable');
		$this->load->model('model_laporan');
		$this->load->model('model_desa');
		$this->load->helper('form');

    }

    public function kurvaTurun($a,$b,$x){
    	if ($x <= $a){
    		return 1 ;
    	}else if ($x > $a & $x < $b){
    		return ($b - $x)/($b - $a);
    	}else if ($x > $b){
    		return 0;
    	}
    }

    public function KurvaNaik($a,$b,$x){
    	if ($x <= $a){
    		return 0 ;
    	}else if ($x > $a & $x < $b){
    		return ($x - $a)/($b - $a);
    	}else if ($x > $b){
    		return 1;
    	}
    }



    public function deFuzzy($n,$z,$a){
    	$zSementara = 0;
    	$aSementara = 0;
    	for ($i=1; $i <= $n; $i++) { 
    		$zSementara = $zSementara + ($z[$i] * $a[$i] );
    		$aSementara = $aSementara + $a[$i] ; 
    	}
    	return round($zSementara/$aSementara,3);
    }

    public function nilaiKeanggotaan($x,$id){
    	$min = $this->model_variable->get_min($id);
        $max = $this->model_variable->get_max($id);
    	$a = array();
    		$a[1] = round($this->kurvaTurun($min,$max,$x),3);
    		$a[2] = round($this->KurvaNaik($min,$max,$x),3);
    	return $a;
    }

    public function fuzzy($nilai1,$nilai2){
    	$Naturan = $this->model_aturan->jumlah_data();
    	$var1 = $this->nilaiKeanggotaan($nilai1,2);
    	$var2 = $this->nilaiKeanggotaan($nilai2,3);
    	$min = $this->model_variable->get_min(1);
        $max = $this->model_variable->get_max(1);
    	$z = array();
    	$a = array();
    	$n = 1;
        for ($m=1; $m <= $Naturan; $m++) {
            $variable1=$this->model_aturan->variable1($m);
            $variable2=$this->model_aturan->variable2($m);
            $logika=$this->model_aturan->logika($m);
            $kesimpulan=$this->model_aturan->kesimpulan($m);
    		
            if($variable1 == "banyak"){
    			$i = 2;
    		}else if($variable1 == "sedikit"){
    			$i = 1;
    		}

    		if($variable2 == "tinggi"){
    			$k = 2;
    		}else if($variable2 == "rendah"){
    			$k = 1;
    		}
    		
    		if($logika == "dan"){
    			if($var1[$i] < $var2[$k]){
                    $a[$n] = $var1[$i];
                }else{
                    $a[$n] = $var2[$k];
                }
    		}else{
    			if($var1[$i] < $var2[$k]){
                    $a[$n] = $var2[$k];
                }else{
                    $a[$n] = $var1[$i];
                }
    		}


    		if($kesimpulan == "tinggi"){
    			$z[$n] = round( ($a[$n] * ( $max - $min )) + $min ,3);
    		}else if($kesimpulan == "rendah"){
    			$z[$n] = round($max-($a[$n]*($max-$min)),3);
    		}
    		$n = $n+1;
    	}
        $n = $n-1;
    	$hasil = $this->deFuzzy($n,$z,$a);
        
    	return ($hasil/$max)*100;
    }
}