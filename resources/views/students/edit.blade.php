<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Data Kelas</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Ada yang Error.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <input type="text" name="student" class="form-control" value="{{ $student->student }}"
                        placeholder="Nama">
                </div>
                <div class="mb-2">
                    <input type="text" name="gender" class="form-control" value="{{ $student->gender }}"
                        placeholder="Jenis Kelamin">
                </div>
                <div class="mb-2">
                    <input type="text" name="class" class="form-control" value="{{ $student->class }}"
                        placeholder="Kelas">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Update"
                        class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>