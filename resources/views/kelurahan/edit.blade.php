<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Form Edit Data Kelurahan</h1>

        <form action="/kelurahan/{{ $kelurahan->id }}" method="POST">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $kelurahan->id }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Kelurahan</label>
                <input type="text" name="kode" class="form-control" value="{{ $kelurahan->kode }}">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                <input type="text" class="form-control" name="nama_kecamatan"
                    value="{{ $kelurahan->nama_kelurahan }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pilih Kecamatan</label>
                <select class="form-select" name="kecamatan_id" aria-label="Default select example">
                    <option selected value="{{ $kelurahan->kecamatan->id }}">{{ $kelurahan->kecamatan->nama_kecamatan }}
                    </option>
                    @foreach ($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <select class="form-select" name="status" aria-label="Default select example">
                    <option selected value="{{ $kecamatan->nama_kecamatan }}"> {{ $kecamatan['status'] }}</option>
                    <option value="aktif">Aktif</option>
                    <option value="non-aktif">Non-Aktif</option>
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
