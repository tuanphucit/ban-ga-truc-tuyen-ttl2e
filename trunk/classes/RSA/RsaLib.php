<?php
	require_once 'BigInteger.php';
	class RSA{
		public $p, $q, $n, $m, $e, $d;
		public $space = 'a';
		
		public function __construct($e, $d){
			if ($e != 0){
				$this->e = $e;
				$this->d = $d;
				return;
			}
		}
		
		public function genarateKey(){
			$this->p = new Math_BigInteger();
			$this->p = $this->p->randomPrime(new Math_BigInteger(0x7FFF),new Math_BigInteger(0x7FFFFFFF));
			$this->q = new Math_BigInteger();
			$this->q = $this->p->randomPrime(new Math_BigInteger(0x7FFF),new Math_BigInteger(0x7FFFFFFF));
			
			$this->p = new Math_BigInteger('26083');
			$this->q = new Math_BigInteger('10267');
			
			$p = $this->p->subtract(new Math_BigInteger(1));
			$q = $this->q->subtract(new Math_BigInteger(1));
			$this->n = $this->p->multiply($this->q);
			$this->m = $p->multiply($q);
			
			$this->e = $this->findE();
			$this->d = $this->findD();
		}
		
		private function findE(){
			$maxprime = new Math_BigInteger(0);
			$base     = new Math_BigInteger(100);
			do{
				$maxprime = $maxprime->add($base);
				$e = $maxprime->randomPrime(new Math_BigInteger(2),new Math_BigInteger($maxprime));
			}while ($e->gcd($this->m)->toString() != '1');
			return $e;
		}
		
		private function findD(){
			$n1 = $this->m;
			$n2 = $this->e;
			$b1 = new Math_BigInteger(0);
			$b2 = new Math_BigInteger(1);
			
			$q = $n1->divide($n2);
			$r = $q[1];
			$q = $q[0];
			
			while ($r->toString() != "0"){
				$t  = $b2;
				$t1 = $b2->multiply($q);
				$b2 = $b1->subtract($t1);
				$b1 = $t;
				
				$n1 = $n2;
				$n2 = $r;
				
				$q = $n1->divide($n2);
				$r = $q[1];
				$q = $q[0];
			};
			$b2 = $b2->divide($this->m);			
			$b2 = $b2[1];
			return $b2; 
		}
		
		public function encrypt ($m,  $e,  $n){
			if ($e == 0){
				$e = $this->e;
				$n = $this->n;
			}
			$result = '';
			$length  = strlen($m);
			$keySize =  7;
			$radix   = new Math_BigInteger(256);
			$i = 0;
			$value = new Math_BigInteger(0);
			while ($i < $length){
				$value = $value->multiply($radix);
				$value = $value->add(new Math_BigInteger(ord($m[$i++])));
				if (($i % $keySize == 0)||($i == $length)){
					$temp = $value->powMod($e,$n);
					$result = $result.$this->space.($temp->toString());
					$value = new Math_BigInteger(0);
				}
			}
			return $result;
		}
		
		public function encrypt2 ($m,  $e,  $n){
			if ($e == 0){
				$e = $this->d;
				$e = $this->n;
			}
			$arr    = explode($this->space, $m);
			$result = "";
			for ($i=1; $i<sizeof($arr); $i++){
				$temp = new Math_BigInteger($arr[$i]);
				$temp = $temp->powMod($e,$n);
				$result = $result.$this->space.($temp->toString());
			}
			
			return $result;
		}
		
		public function decrypt ($m,  $d,  $n){
			if ($d == 0){
				$d = $this->d;
				$n = $this->n;
			}
			$arr    = explode($this->space, $m);
			$result = "";
			for ($i=1; $i<sizeof($arr); $i++){
				$temp = new Math_BigInteger($arr[$i]);
				$temp = $temp->powMod($d,$n);
				$result .= ($this->number2text($temp));
			}
			
			return $result;
		}
		
		public function number2text($number){
			$radix   = new Math_BigInteger(256);
			$result = "";
			while ($number->toString() != '0'){
				$temp = $number->divide($radix);
				$result = chr((int)($temp[1]->toString())).$result;
				$number = $temp[0];
			}
			return $result;
		}
	}
	
//	***********************************Example of Genarate Key
//	$rsa = new RSA(0,0);
//	$rsa->genarateKey();
//	$e = ($rsa->e);
//	$d = ($rsa->d);
//	$n = ($rsa->n);
//	echo "Private Key E= ".$e->toString()."<br>";
//	echo "Public  Key D= ".$d->toString()."<br>";
//	echo "Modular     N= ".$n->toString()."<br>";
//	
//	echo "<br>";
//	
//	$en = $rsa->encrypt(new Math_BigInteger(123), 0, 0);
//	$de = $rsa->decrypt(new Math_BigInteger($en), 0, 0);
//	echo "Message M = 123<br>";
//	echo "Encrypted Message: ".$en."<br>";
//	echo "Decrypted Message: ".$de."<br>";
	
//	***********************************Example of Encrypt and Decrypt
//	$rsa = new RSA(0,0);
//	$m   = "nothing can change my love";
//	$en = $rsa->encrypt($m, new Math_BigInteger('29'), new Math_BigInteger('1256512651197146873'));
//	$de = $rsa->decrypt($en, new Math_BigInteger('1126528581821944661'), new Math_BigInteger('1256512651197146873'));
//	echo "Message M = abc<br>";
//	echo "Encrypted Message: ".$en."<br>";
//	echo "Decrypted Message: ".$de."<br>";
?>