<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-color: #9DB2BF;
        font-family: 'Nunito', Arial;
    }

    h1{
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        background-color: #ffff;
    }



   
</style>
<body>
    <h1><strong>Form Pemeriksaan</strong></h1>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <form>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Nama </label> 
            <div class="col-8">
            <input id="text1" name="nama" placeholder="Your Answer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal Pemeriksaan </label> 
            <div class="col-8">
            <input id="tanggal" name="tanggal"  type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">TTL </label> 
            <div class="col-8">
            <input id="tanggal" name="tanggal" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Jenis Kelamin </label> 
            <div class="col-8">
            <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
                <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                </div>
            </div>
            <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
                <label for="radio_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Jenis Tes </th>
      <th scope="col">Hasil Pemeriksaan</th>
      <th scope="col">Normal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tekanan darah</td>
      <td>-</td>
      <td>120/80 mmhg</td>
    </tr>
    <tr>
      <td>Asam urat</td>
      <td>-</td>
      <td>Pria : < 7 mg/dl <br> Wanita: < 6 mg/dl</td>
    </tr>
    <tr>
      <td>Kolesterol total</td>
      <td>-</td>
      <td>< 200 mg/dl</td>
    </tr>
    <tr>
      <td>Gula darah</td>
      <td>-</td>
      <td>Puasa: 70-110 mg/dl <br> 2 jam setelah makan: 100-150 mg/dl <br> Sewaktu/acak : 70-125 mg/dl</td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    </div>
</body>
</html>