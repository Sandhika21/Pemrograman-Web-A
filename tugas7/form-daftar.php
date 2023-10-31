<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
	<header class="text-center">
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="nama" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" id="nama" name="name" class="form-control">
            </div>            
        </div>
		<div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="alamat" class="col-form-label">Alamat</label>
            </div>
            <div class="col-auto">
                <textarea id="alamat" name="alamat" class="form-control" rows="3">
            </div>            
        </div>
		<div class="form-check form-check-inline">
            <label class="form-check-label" for="P"><input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"> Perempuan</label>
            <label class="form-check-label" for="L"><input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki"> Laki-Laki</label>
        </div>
		<div class="row g-3 align-items-center">
            <div class="col-auto">
    			<label for="agama">Agama </label>
            </div>
            <div class="col-auto">
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="sekolah_asal" class="col-form-label">Sekolah Asal</label>
            </div>
            <div class="col-auto">
                <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control">
            </div>            
        </div>
        <button type="submit" name="daftar">Daftar</button>		
		</fieldset>
	
	</form>
	
	</body>
</html>