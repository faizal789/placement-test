<?php


class koneksi
{
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "klasemen";
		$this->conn = mysqli_connect($servername, $username, $password, $databasename);
	}


	public function lihatklasemen()
	{
		$query = "SELECT * FROM klasemen ORDER BY poin DESC, selisih DESC";
		$hasil = $this->conn->query($query);
		return $hasil;
	}


	public function tambahdata()
	{
		$tim = $_POST['tim'];
		$m = $_POST['m'];
		$s = $_POST['s'];
		$k = $_POST['k'];
		$p = $m + $s + $k;
		$gm = $_POST['gm'];
		$gk = $_POST['gk'];
		$selisih = $gm - $gk;
		$poin = 3 * $m + $s;

		$query = "INSERT INTO klasemen(tim,pertandingan,menang,seri,kalah,golmasuk,golkemasukan,selisih,poin)VALUES('$tim','$p','$m','$s','$k','$gm','$gk','$selisih','$poin')";
		$hasil = $this->conn->query($query);
		header('location:halamanadmin.php');

	}

	public function hapusdata($tim)
	{
		$query = "DELETE FROM klasemen WHERE tim = '$tim'";
		$hasil = $this->conn->query($query);
		header('location:halamanadmin.php');
	}

	public function updateklasemen()
	{
		$tim = $_POST['tim'];
		$m = $_POST['m'];
		$s = $_POST['s'];
		$k = $_POST['k'];
		$p = $m + $s + $k;
		$gm = $_POST['gm'];
		$gk = $_POST['gk'];
		$selisih = $gm - $gk;
		$poin = 3 * $m + $s;

		$query = "UPDATE klasemen SET pertandingan = '$p', menang ='$m', seri = '$s',kalah = '$k', golmasuk ='$gm',golkemasukan = '$gk',selisih = '$selisih',poin = '$poin' WHERE tim = '$tim'";
        $hasil = $this->conn->query($query);
        header('location:halamanadmin.php');
	}
}



 $koneksi = new koneksi();

 if (isset($_GET['tambahdata'])) {
  	$koneksi->tambahdata();
  }

 if (isset($_GET['hapusbaris'])) {
  	$koneksi->hapusdata($_GET['hapusbaris']);
  } 

  if (isset($_GET['updateklasemen'])) {
  	$koneksi->updateklasemen();
  } 


?>