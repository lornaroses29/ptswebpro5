<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTS WEB PRO 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Tambah Data </h1>
    <form action="{{ route('student.store') }}" method="post">
      @csrf
    <div class="mb-2">
          <input type="text" name="student" class="form-control" placeholder="Nama">
    </div>
    <div class="mb-2">
          <input type="text"name="gender" class="form-control" placeholder="Jenis Kelamin">
        </div>
    <div class="mb-2">
          <input type="text"name="class" class="form-control" placeholder="Kelas">
        </div>
        <div class="mb-2">
          <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
      </form>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>