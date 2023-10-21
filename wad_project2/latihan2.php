<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Kalkulator PHP</title>
</head>
<body class="text-center">
    <div class="container mt-5 text-center">
        <h1 class="display-4 mt-5 mb-5">Kalkulator</h1>

        <form method="post" action="proses_hitung.php" class="form-inline justify-content-center text-center -inline-block">

            <!--Form 1 Input-->
            <div class="form-group mr-2 ml-2">
                <label for="angka" class = "mr-2">Angka: </label>
                <input type="number" class="form-control" id="angka" name="angka" required>
            </div>

            <!--Form 2 Input-->
            <div class="form-group mr-2 ml-2">
                <label for="operasi" class="mr-2">Operasi: </label>
                <select class="form-control" id="operasi" name="operasi" required><br>
                    <option value="+">Tambah</option>
                    <option value="-">Kurang</option>
                    <option value="*">Kali</option>
                    <option value="/">Bagi</option>
                </select>
            </div>
            
            <!--Buttonnya-->
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>
</body>
</html>