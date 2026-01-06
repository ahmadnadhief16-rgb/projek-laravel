<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Pesantren</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">PESANTREN</a>
        <div>
            <a class="nav-link d-inline text-white" href="/">Home</a>
            <a class="nav-link d-inline text-white" href="/profil">Profil</a>
            <a class="nav-link d-inline text-white" href="/pendaftaran">Pendaftaran</a>
            <a class="nav-link d-inline text-white" href="/tata-tertib">Tata Tertib</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
