<?php


    require 'function.php';

    if (isset($_POST["submit"])){

        if( tambahdata($_POST) >0){

         echo
         "<script>
            alert('data berhasil dimasukkan');
            document.location.href ='index.php';
         </script>" ; 
         
        }
        else{
        echo
            "<script>
               alert('data gagal dimasukkan');
               document.location.href ='input-data.php';
            </script>
            "; 

        }
    }

    

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bd-data">


    <div class="card-input" style="width: 50rem;">
    <div class="card-body">
      <div class="card-text">
      <h1><span> Hai </span>,Selamat Datang</h1>
      <h4>Input Data Wakafmu!</h4>
      </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama: *</label>
        <br>
        <input type="text" class="form-control" name="donatur" id="exampleInputPassword1">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ID: *</label>
        <br>
        <input type="text" class="form-control" name="id" id="exampleInputPassword1">
      </div>
    
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Paket: *</label>
        <br>
        <select name="paket" id="">
          <option value="">Pilihi paket</option>
          <option value="Paket 1">Paket 1</option>
          <option value="Paket 2">Paket 2</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kategori: *</label>
        <br>
        <select name="kategori" id="">
          <option value="">Pilihi Kategori</option>
          <option value="Uang">Uang</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kategori: *</label>
        <br>
        <select id="">
          <option value="">Pilihi metode pembayaran</option>
          <option value="">Kredit</option>
          <option value="">Tunai</option>
          <option value="">Lainnya</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nominal: (Isi dengan angka saja)*</label>
        <br>
        <input type="text" class="form-control" name="nominal" id="exampleInputPassword1">
      </div>
      <br>
    
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</div>
      
</body>
</html>