<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kategori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Styling */
        .navbar-custom {
            background-color: white;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-custom img {
            height: 50px;
        }

        .navbar-custom h1 {
            font-size: 24px;
            font-weight: 700;
            color: #d91d4b;
            margin: 0;
        }

        /* Kategori Links */
        .category-links {
            padding: 15px 30px;
        }

        .category-links a {
            margin: 5px 10px 5px 0;
            display: inline-block;
            padding: 8px 16px;
            background-color: #f8f9fa;
            color: #d91d4b;
            border: 1px solid #d91d4b;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .category-links a:hover {
            background-color: #d91d4b;
            color: white;
        }

        /* Card Animasi */
        .category-card:hover {
            transform: scale(1.03);
            transition: all 0.3s ease;
        }

        .category-card img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        /* Footer (Opsional) */
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
            color: #888;
        }

        /* Grid container untuk brand */
        .brand-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 25px;
            margin-top: 20px;
            text-align: center;
        }

        /* Item tiap brand (kotak) */
        .brand-item {
            width: 150px;
            height: 150px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.5s ease;
            border-radius: 8px;
            /* Ini membuat kotaknya tumpul (tidak bulat) */
        }

        /* Logo brand di dalamnya */
        .brand-item img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            transition: 0.3s ease;
            border: 2px solid #ddd;
            border-radius: 4px;
            /* Tambahan jika mau kotaknya ada sudut sedikit lembut */
        }

        /* Efek hover gambar */
        .brand-item img:hover {
            transform: scale(1.05);
            border-color: #007bff;
        }

        /* Efek animasi muncul */
        .brand-item.show {
            opacity: 1;
            transform: scale(1);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .category-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            text-align: center;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }

        .category-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .category-card h3 {
            font-size: 18px;
            font-weight: 600;
            margin: 15px 0;
            color: #333;
        }

        .category-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .category-card.show {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-grid .brand-item {
            width: 150px;
            text-align: center;
        }

        .brand-grid .brand-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            /* opsional, bisa dihapus kalau mau benar-benar kotak */
            border: 1px solid #ddd;
            transition: 0.3s;
        }


        .brand-grid .brand-item img:hover {
            transform: scale(1.05);
            border-color: #007bff;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="navbar-custom">
        <img src="{{ asset('storage/img/logo-wings.png') }}" alt="Logo Wings">
        <h1>Kategori</h1>
    </div>

    <!-- Navigasi Kategori -->
    <div class="category-links d-flex flex-wrap">
        @foreach (\App\Models\Category::all() as $category)
            <a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
        @endforeach
    </div>

    <!-- Konten Utama -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer (opsional) -->
    <div class="footer">
        &copy; {{ date('Y') }} Wings Corp. All rights reserved.
    </div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const items = document.querySelectorAll('.brand-item');
        items.forEach((item, i) => {
            setTimeout(() => {
                item.classList.add('show');
            }, i * 150);
        });
    });
</script>


</html>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll('.category-card');
        cards.forEach((card, i) => {
            setTimeout(() => {
                card.classList.add('show');
            }, i * 150);
        });
    });
</script>