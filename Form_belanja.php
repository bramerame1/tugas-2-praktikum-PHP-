<?php


$nama = "";
$produk = "";
$jumlah = "";
$harga = "";

if (isset($_POST['proses'])) {
	$nama = $_POST['Customer'];
	$produk = $_POST['produk'];
	$jumlah = $_POST['jumlah'];

	if ($produk == "Sepatu jordan") {
		$harga = 2200000 * $jumlah;
	} elseif ($produk == "Sepatu nike") {
		$harga = 1250000 * $jumlah;
	} elseif ($produk == "Sepatu reebok") {
		$harga = 1800000 * $jumlah;
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEPATU BRANDED</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
	<h1 class="mx-3">SEPATU BRANDED</h1>

	<div class="container-fluid">
		<div class="card d-flex">
			<div class="row">
				<div class="col-8">
					<div class="Form mt-4 mx-5">
						<form action="form_belanja.php" method="post">
							<div class="form-group row">
								<label for="Customer" class="col-2 col-form-label">pelanggan</label>
								<div class="col-4">
									<input id="Pelanggan" required name="Pelanggan" placeholder="Nama pelanggan" type="text" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-2">Pilih Produk</label>
								<div class="col-8">
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_0" type="radio" class="custom-control-input" value="sepatu jordan">
										<label for="produk_0" class="custom-control-label">Sepatu jordan</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" required id="produk_1" type="radio" class="custom-control-input" value="sepatu nike">
										<label for="produk_1" class="custom-control-label">Sepatu nike</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_2" type="radio" class="custom-control-input" value="sepatu reebok">
										<label for="produk_2" class="custom-control-label">Sepatu reebok</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="text" class="col-2 col-form-label">Jumlah</label>
								<div class="col-2">
									<input id="text" value="0" required name="jumlah" placeholder="Jumlah" type="number" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-1 col-8">
									<button name="proses" type="submit" class="btn btn-success">Pesan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-4">
					<div class="list-group position-relative">
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
							Daftar Harga :
						</button>
						<button type="button" class="list-group-item list-group-item-action">Sepatu jordan: 2.200.000</button>
						<button type="button" class="list-group-item list-group-item-action">Sepatu nike: 1.350.000</button>
						<button type="button" class="list-group-item list-group-item-action">Sepatu reebok: 1.800.000</button>
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card mt-2 pb-2">
			<div class="row">
				<div class="col-12 d-flex flex-column px-4">
					<span>Nama Pelanggan : <?= $nama; ?> </span>
					<span>Produk Yang Dibeli : <?= $produk; ?> </span>
					<span>Jumlah : <?= $jumlah; ?></span>
					<span>Total Belanja : <?= $harga; ?></span>
				</div>
			</div>
		</div>
	</div>
</body>

</html>