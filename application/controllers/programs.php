<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programs extends CI_Controller {

	public function index(){
		echo "Hello";
	}

	public function problema01($from, $to){
		$total=0;
		for ($i=$from; $i < $to; $i++) { 
			if($this->is_mod_int($i,3) OR $this->is_mod_int($i, 5)){
				echo $i."<br />";
				$total+=$i;
			}
		}
		echo "------<br />";
		echo $total;
	}

	public function is_mod_int($x, $y){
		return ($x%$y==0)? true : false;
	}

	public function problema03($num, $offset = 0){
		set_time_limit(0);
		for ($i=$offset; $i < $num; $i++) { 
			if($this->is_mod_int($num, $i) && $this->is_prime($i)){
				echo $i."<br />";
			}
		}
	}

	public function prime_numbers($num){
		for ($i=0; $i < $num; $i++) { 
			if($this->is_prime($i)){
				echo $i."<br />";
			}
		}
	}

	public function is_prime($x){
		//echo " $x Is prime?";
		if($x == 1){
			//echo "<br>Nope<br><br>";
			return false;
		}
		$divs = 0;
		for ($i=1; $i < $x; $i++) { 
			if($this->is_mod_int($x, $i)){
				//echo "<br>is divisible by $i <br>";
				$divs++;
			}
			if($divs > 1){
				//echo "Divs: $divs => Nope<br><br>";
				return false;
			}
		}
		//echo "YES<br><br>";
		return true;
	}

}

/* End of file programs.php */
/* Location: ./application/controllers/programs.php */