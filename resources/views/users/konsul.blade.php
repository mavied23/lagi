<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatqu Apotik Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #95dafa;
        }
        .navbar .navbar-expand-lg {
            background-color: #e6f2ff;
        }
        .hero-section {
            background-color: #141718;
            padding: 5rem 0;
        }
        .hero-section .container {
            display: flex;
            align-items: center;
        }
        .hero-section .hero-text {
            flex: 1;
        }
        .hero-section .hero-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-section .hero-image img {
            max-width: 100%;
            max-height: 400px;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
            color: #555;
        }
        .service-item {
            background-color: #aff8fd;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;

        }
        .service-item h3 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .service-item p {
            line-height: 1.6;
        }
        .container {
            margin-top: 30px;
            padding: 20px;
            background-color: #95dafa;
            border-radius: 5px;
        }

        .footer {
            background-color: #5C88C4;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        .footer p {
            font-size: 0.9rem;
            color: #fff;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .btn-halodoc {
            background-color: #7380bd;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-halodoc:hover {
            background-color: #18ebeb;
            cursor: pointer;
        }
        .service-item:hover {
            background-color: #d9eafc;
            cursor: pointer;
        }
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../resources/img/obat.jpeg');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }
        header {
            position: relative;
            text-align: center;
            padding: 150px 0;
        }
        @media (max-width: 768px) {
        .service-item {
            margin-bottom: 20px;}
        }
        @media (max-width: 480px) {
        .service-item {
        width: 100%;}
        }
        .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .card {
      width: 200px;
      height: 150px;
      margin: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: hidden;
      background-size: cover;
      position: relative;
    }

    .card-title {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: #fff;
      font-weight: bold;
    }

    .lihat-semua {
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }

    .lihat-semua a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
    }

   /* Center the dropdown button and menu */
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  max-height: 200px; /* Set the maximum height of the dropdown menu */
  overflow-y: auto; /* Add a scrollbar when the content exceeds the maximum height */
}

.dropdown-scrollable {
  padding: 10px;
}

.dropdown-item:hover {
  background-color: #f0f0f0;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">Sehatqu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kelayakan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">

              </li>
            </ul>
          </div>
            @auth
                 <p style="font-size: 23px;">Selamat datang, {{ Auth::user()->name }}!</p>
            @else
                @if (session('user_name'))
                    <p>Selamat datang, {{ session('user_name') }}!</p>
                @endif
            @endauth
      </nav>



      <a href="{{ url()->previous() }}">Kembali ke halaman sebelumnya</a>
<br>
  <h1>Pilih Dokter</h1>

  <div class="box bg-light border p-4 mb-4 rounded shadow-sm">
    <h2 class="h5">Box Title</h2>
    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
    <button class="btn btn-primary">Click me</button>
  </div>
</body>
</html>
