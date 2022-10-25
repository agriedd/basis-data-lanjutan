<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basis Data Lanjutan</title>
	<script src="./tailwind.js"></script>
</head>

<body class="m-0 p-0">
	<div class="grid grid-cols-1 justify-items-center gap-4">

		<div class="max-w-lg p-3">
			<ul class="flex gap-2">

				<li class="translate-y-1 transition-all duration-75">
					<a href="./" class="px-4 py-3 rounded-lg border-slate-300 text-slate-600 bg-slate-100 border-b-0 transition-all duration-100">
						Awal
					</a>
				</li>
				<li class="active:translate-y-1 transition-all duration-75">
					<a href="./barang.php" class="px-4 py-3 rounded-lg border-b-4 border-slate-300 text-slate-600 bg-slate-50 hover:bg-slate-100 active:border-b-0 transition-all duration-100">
						Barang
					</a>
				</li>
				<li class="active:translate-y-1 transition-all duration-75">
					<a href="./pembeli.php" class="px-4 py-3 rounded-lg border-b-4 border-slate-300 text-slate-600 bg-slate-50 hover:bg-slate-100 active:border-b-0 transition-all duration-100">
						Pembeli
					</a>
				</li>
				<li class="active:translate-y-1 transition-all duration-75">
					<a href="./transaksi.php" class="px-4 py-3 rounded-lg border-b-4 border-slate-300 text-slate-600 bg-slate-50 hover:bg-slate-100 active:border-b-0 transition-all duration-100">
						Transaksi
					</a>
				</li>
			</ul>
		</div>
		<div class="max-w-lg w-full p-3">
			<h1 class="text-6xl font-bold font-serif mb-4 text-slate-700">Membuat Basis Data</h1>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Membuat <i>database</i> baru dengan nama
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">penjualan</code>
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
CREATE DATABASE IF NOT EXISTS <code class="text-blue-400">penjualan</code></pre>
			</div>
		</div>
		<div class="w-full">
			<div class="mx-auto max-w-lg">
				<div class="flex justify-start gap-1">
					<a href="./migrations.php" class="px-4 py-3 rounded-lg border-b-4 border-teal-300 text-teal-500 bg-teal-100 hover:bg-teal-200 active:border-b-0 transition-all duration-100 active:translate-y-1 flex">
						Bangun Database
					</a>
					<a href="./drop-database.php" class="px-4 py-3 rounded-lg border-b-4 border-pink-300 text-pink-500 bg-pink-100 hover:bg-pink-200 active:border-b-0 transition-all duration-100 active:translate-y-1 flex">
						Reset Database
					</a>
				</div>
			</div>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Menggunakan <i>database</i>
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">penjualan</code>
					sebagai database aktif
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
USE <code class="text-blue-400">penjualan</code></pre>
			</div>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Membangun skema tabel
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">Barang</code>
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
CREATE TABLE IF NOT EXISTS <code class="text-green-400">barang</code> (
	<code class="text-blue-400">id_barang</code> INT AUTO_INCREMENT,
	<code class="text-blue-400">nama</code> VARCHAR(50) NOT NULL,
	<code class="text-blue-400">harga</code> BIGINT NOT NULL,
	<code class="text-blue-400">stok</code> BIGINT NOT NULL,
	PRIMARY KEY (<code class="text-blue-400">id_barang</code>)
);</pre>
			</div>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Membangun skema tabel
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">Pembeli</code>
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
CREATE TABLE IF NOT EXISTS <code class="text-green-400">pembeli</code> (
	<code class="text-blue-400">id_pembeli</code> INT AUTO_INCREMENT,
	<code class="text-blue-400">nama</code> VARCHAR(50) NOT NULL,
	<code class="text-blue-400">hp</code> VARCHAR(20) NOT NULL,
	<code class="text-blue-400">telepon</code> VARCHAR(20) NOT NULL,
	<code class="text-blue-400">alamat</code> VARCHAR(20) NOT NULL,
	PRIMARY KEY (<code class="text-blue-400">id_pembeli</code>)
);</pre>
			</div>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Membangun skema tabel
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">Transaksi</code>
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
CREATE TABLE IF NOT EXISTS <code class="text-green-400">transaksi</code> (
	<code class="text-blue-400">id_transaksi</code> INT AUTO_INCREMENT,
	<code class="text-blue-400">id_pembeli</code> INT NOT NULL,
	<code class="text-blue-400">tanggal</code> DATETIME NOT NULL,
	PRIMARY KEY (<code class="text-blue-400">id_transaksi</code>),
	FOREIGN KEY (<code class="text-blue-400">id_pembeli</code>) REFERENCES <code class="text-green-400">pembeli</code>(<code class="text-blue-400">id_pembeli</code>) ON UPDATE cascade ON DELETE cascade
);</pre>
			</div>
		</div>
		<div class="max-w-lg w-full p-3">
			<div class="font-thin">
				<p>
					Membangun skema tabel
					<code class="rounded-md border-b-2 bg-slate-100 border-slate-300 text-slate-500 text-sm px-2">Pembelian</code>
				</p>
			</div>
		</div>
		<div class="w-full bg-slate-800">
			<div class="mx-auto max-w-lg w-full">
				<pre class="text-slate-200 bg-slate-800 rounded-md p-3 text-sm font-mono">
CREATE TABLE IF NOT EXISTS <code class="text-green-400">pembelian</code> (
	<code class="text-blue-400">id_pembelian</code> INT AUTO_INCREMENT,
	<code class="text-blue-400">id_barang</code> INT NOT NULL,
	<code class="text-blue-400">id_transaksi</code> INT NOT NULL,
	<code class="text-blue-400">jumlah</code> BIGINT NOT NULL,
	<code class="text-blue-400">tanggal</code> DATETIME NOT NULL,
	PRIMARY KEY (<code class="text-blue-400">id_pembelian</code>),
	FOREIGN KEY (<code class="text-blue-400">id_transaksi</code>) REFERENCES <code class="text-green-400">transaksi</code>(<code class="text-blue-400">id_transaksi</code>) ON UPDATE cascade ON DELETE cascade,
	FOREIGN KEY (<code class="text-blue-400">id_barang</code>) REFERENCES <code class="text-green-400">barang</code>(<code class="text-blue-400">id_barang</code>) ON UPDATE cascade ON DELETE cascade
);</pre>
			</div>
		</div>
	</div>
</body>

</html>