<?php

/**
 * membuat database penjualan
 * property sambungan database
 * 
 */
$username = "root";
$password = "";
$database_name = "penjualan";

$sambungan = new PDO("mysql:host=localhost", $username, $password);

$query_membuat_database = "CREATE DATABASE IF NOT EXISTS {$database_name}";
$query_menggunakan_database = "USE {$database_name}";

$sambungan->query($query_membuat_database);
$sambungan->query($query_menggunakan_database);

/**
 * membuat tabel
 * 
 */
$query_tabel_barang = "CREATE TABLE IF NOT EXISTS barang (
	id_barang INT AUTO_INCREMENT,
	nama VARCHAR(50) NOT NULL,
	harga BIGINT NOT NULL,
	stok BIGINT NOT NULL,
	PRIMARY KEY (id_barang)
)";

$sambungan->query($query_tabel_barang);
echo "<kbd>Berhasil membuat tabel barang</kbd>";

$query_tabel_pembeli = "CREATE TABLE IF NOT EXISTS pembeli (
	id_pembeli INT AUTO_INCREMENT,
	nama VARCHAR(50) NOT NULL,
	hp VARCHAR(20) NOT NULL,
	telepon VARCHAR(20) NOT NULL,
	alamat VARCHAR(20) NOT NULL,
	PRIMARY KEY (id_pembeli)
)";

$sambungan->query($query_tabel_pembeli);
echo "<kbd>Berhasil membuat tabel pembeli</kbd>";

$query_tabel_transaksi = "CREATE TABLE IF NOT EXISTS transaksi (
	id_transaksi INT AUTO_INCREMENT,
	id_pembeli INT NOT NULL,
	tanggal DATETIME NOT NULL,
	PRIMARY KEY (id_transaksi),
	FOREIGN KEY (id_pembeli) REFERENCES pembeli(id_pembeli) ON UPDATE cascade ON DELETE cascade
)";

$sambungan->query($query_tabel_transaksi);
echo "<kbd>Berhasil membuat tabel transaksi</kbd>";

$query_tabel_pembelian = "CREATE TABLE IF NOT EXISTS pembelian (
	id_pembelian INT AUTO_INCREMENT,
	id_barang INT NOT NULL,
	id_transaksi INT NOT NULL,
	jumlah BIGINT NOT NULL,
	tanggal DATETIME NOT NULL,
	PRIMARY KEY (id_pembelian),
	FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi) ON UPDATE cascade ON DELETE cascade,
	FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON UPDATE cascade ON DELETE cascade
)";

$sambungan->query($query_tabel_pembelian);
echo "<kbd>Berhasil membuat tabel pembelian</kbd>";

?>
<div>
	<a href="./drop-database.php">
		<button>
			reset database
		</button>
	</a>
</div>
<style>
	body{
		display: flex;
		flex-direction: column;
		gap: .25rem;
		max-width: 500px;
		margin: 0 auto;
		padding: .25rem;
	}
	kbd{
		background-color: #333;
		padding: .25rem;
		border-radius: .15rem;
		color: greenyellow;
	}
</style>