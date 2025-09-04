<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Inputan</title>
    <link rel="stylesheet" href="css/input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>

<body>
    <h1>Belajar Semua Inputan</h1>

    <div class="container">
        <form class="row g-3" action="hasil.php" method="post">
            <div class="col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-12">
                <label for="file" class="form-label">Masukkan File</label>
                <input class="form-control" type="file" id="file" name="file">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check" name="check" value="true">
                    <label class="form-check-label" for="check">Check me out</label>
                </div>
            </div>
            <div class="col-12">
                <label for="range" class="form-label">Example range</label>
                <input type="range" class="form-range" id="range" name="range">
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Select Date</label>
                <input type="datetime-local" class="form-control" id="date" name="date">
            </div>
            <div class="col-md-6">
                <label for="number" class="form-label">Masukkan Umur</label>
                <input type="number" class="form-control" id="number" name="number">
            </div>
            <div class="col-md-6">
                <label for="month" class="form-label">Masukkan Bulan</label>
                <input type="month" class="form-control" id="month" name="month">
            </div>
            <div class="col-md-6">
                <label for="color" class="form-label">Color picker</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c"
                    title="Choose your color">
            </div>
            <div class="col-12">
                <label for="image" class="form-label">Masukkan gambar</label>
                <input type="image" class="form-control form-control-image" id="image" name="image">
            </div>
            <div class="col-md-6">
                <label for="search" class="form-label">Carilah</label>
                <input type="search" class="form-control" id="search" name="search">
            </div>
            <div class="col-md-6">
                <label for="time" class="form-label">Waktu</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class="col-md-6">
                <label for="url" class="form-label">Masukkan Url</label>
                <input type="url" class="form-control" id="url" name="url">
            </div>
            <div class="col-md-6">
                <label for="week" class="form-label">Input Week</label>
                <input type="week" class="form-control" id="week" name="week">
            </div>
            <div class="col-12">
                <label class="form-label">Pilih Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                    <label class="form-check-label" for="gender1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan" checked>
                    <label class="form-check-label" for="gender2">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Input type Tel</label>
                <input type="tel" class="form-control" id="tel" name="tel">
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <select class="form-select" id="prodi" name="prodi" aria-label="Floating label select example">
                        <option selected>Prodi</option>
                        <option value="TIF">TIF</option>
                        <option value="TKK">TKK</option>
                        <option value="MIF">MIF</option>
                        <option value="TRK">TRK</option>
                    </select>
                    <label for="prodi">Works with selects</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>