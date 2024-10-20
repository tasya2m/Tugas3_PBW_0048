<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Tambah Data</h4>
        <hr class="mt-0">
<!-- Form tambah data-->
<form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data"><!-- menambah method untuk aksi-->
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
              <label for="Select" class="form-label">Jenis Kelamin</label>
              <select id="Select" class="form-select" id="jns_kelamin" name="jns_kelamin">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
    <div class="mb-3">
              <label for="gambar" class="form-label">Foto</label>
              <input class="form-control" id="gambar" name="gambar" type="file" required>
            </div>

    <button type="submit" class="btn btn-primary">submit</button>
    </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>