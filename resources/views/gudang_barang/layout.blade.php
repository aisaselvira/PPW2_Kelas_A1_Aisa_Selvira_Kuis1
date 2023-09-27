<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabel Perpustakaan Buku</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<style>
    .thead{
        background-color: pink;
    }
    h1{
        text-align: center;
        padding: 20px;
    }
</style>
<body>
    <header>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">GUDANG BARANG</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-9aS5d6iAVcP5z7bF5IdB12pkf2GC930JK6f5Lwr8Qw3lFU5Kn1A1fF1JCfFJ8s5KW" crossorigin="anonymous"></script>
</body>
</html>