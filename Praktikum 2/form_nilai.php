<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI SISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h4 class="p-3 mb-2 bg-light text-dark">Sistem Penilaian</h4>
    <h1 class="text-center">Form Nilai Siswa</h1>
    <div class="font-weight-bold" class="container-fluid">
        <div class="row mx-auto w-50 mt-5">
            <div class="col-12">
                <form method="POST" action="nilai_siswa.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="UI/UX">UI/UX</option>
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Basis Data">Basis Data</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-4">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-4">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-4">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
</body>
</html>