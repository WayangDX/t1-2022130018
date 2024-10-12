<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'product')</title>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Pixel', sans-serif;
            background-color: #333;
            color: #fff;
        }
        .navbar {
            background-color: #444;
            padding: 10px;
            border-bottom: 2px solid #666;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #ccc;
        }
        .navbar-brand:hover {
            color: #fff;
        }
        .nav-link {
            font-size: 18px;
            color: #fff;
        }
        .nav-link:hover {
            color: #ccc;
        }
        .nav-link.active {
            font-weight: bold;
            color: #fff;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #444;
            border: 2px solid #666;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .container h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        footer {
    background-color: #444;
    color: #fff;
    text-align: center;
    padding: 10px;
    border-top: 2px solid #666;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
}
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #333;
            padding: 20px;
            border-right: 2px solid #666;
            transition: all 0.3s ease-in-out;
        }
        .sidebar-hide {
            left: -250px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 10px;
            border-bottom: 1px solid #666;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #fff;
        }
        .sidebar ul li a:hover {
            color: #8cf1b3;
        }
        .toggle-sidebar {
            position: fixed;
            top: 10px;
            left: 260px;
            font-size: 24px;
            cursor: pointer;
        }
        .hide-sidebar {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            background-color: #cb1010;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 24px;
            cursor: pointer;
            color: #fff;
        }
        .open-sidebar {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1;
            background-color: #34c759;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 24px;
            cursor: pointer;
            color: #fff;
            display: none;
        }
    </style>

    @vite(['resources/sass/app.scss'])
</head>
<body>

    <!-- Toggle Sidebar -->
    <div class="toggle-sidebar" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="hide-sidebar" style="position: absolute; top: 10px; left: 10px;" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </div>
        <div class="open-sidebar" style="position: fixed; top: 10px; left: 10px;" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li><a href="{{ route('dashboard') }}">Produk</a></li>
            <li><a href="{{ route('products.index') }}">Barang</a></li>
            <li><a href="{{ route('products.create') }}">Tambah Product</a></li>
            <li><a href="#">Kategori</a>
                <ul>
                    <li><a href="#">Cat Food </a></li>
                    <li><a href="#">Cat Snack</a></li>
                    <li><a href="#">Cat Medicine</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Content Section -->
    <div class="container" style="margin-left: 250px;">
        @yield('body')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Product Cat - All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src =" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ksmD9mqmhMmmzOz6cpK1 yzoKpvx4NR0FtI4nR7KcLeYlBiXJjkz4zrbjZFLGFpMt" crossorigin="anonymous"></script>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var hideSidebar = document.querySelector('.hide-sidebar');
            var openSidebar = document.querySelector('.open-sidebar');
            if (sidebar.classList.contains('sidebar-hide')) {
                sidebar.classList.remove('sidebar-hide');
                hideSidebar.style.display = 'block';
                openSidebar.style.display = 'none';
            } else {
                sidebar.classList.add('sidebar-hide');
                hideSidebar.style.display = 'none';
                openSidebar.style.display = 'block';
            }
        }
    </script>
    @vite(['resources/js/app.js'])
</body>
</html>
