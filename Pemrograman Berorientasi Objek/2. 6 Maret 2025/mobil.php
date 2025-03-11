<?php
class mobil {

	private $pemilik = "Ferry";
	private $merk = "Ferrari";

	public function __construct(){
		echo "Ini berasal dari Constructor Mobil";
	}
	public function hidupkan_mobil(){
		return "Hidupkan mobil $this->merk punya $this->pemilik";
	}

    public function __destruct(){
        echo "Ini berasl dari Destructor Mobil";
}
}

$mobil_Ferry = new mobil();
echo "\n";
echo $mobil_Ferry->hidupkan_mobil();
echo "\n";
?>