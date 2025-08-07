<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Brand Wings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-weight: 700;
            color: #d91d4b;
            margin-bottom: 30px;
        }

        .filter-buttons {
            margin-bottom: 30px;
        }

        .filter-buttons a {
            display: inline-block;
            margin: 5px;
            padding: 10px 24px;
            background-color: #fff;
            color: #d91d4b;
            border: 2px solid #d91d4b;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .filter-buttons a:hover {
            background-color: #d91d4b;
            color: #fff;
        }

        .brand-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 25px;
            max-width: 900px;
            margin: 0 auto;
        }

        .brand {
            background-color: #fff;
            border-radius: 50%;
            width: 140px;
            height: 140px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .brand img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
        }

        .brand.show {
            opacity: 1;
            transform: scale(1);
        }

        .brand a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .carousel-inner img {
            object-fit: contain;
        }
    </style>
</head>

<body>

    <h1>Daftar Brand Wings</h1>

    <div class="filter-buttons">
        <a href="#" onclick="loadCategory('fabric')">Fabric Care</a>
        <a href="#" onclick="loadCategory('food')">Food</a>
        <a href="#" onclick="loadCategory('beverage')">Beverage</a>
    </div>

    <div id="brand-container" class="brand-grid">
        <!-- Brand logo akan dimasukkan lewat JavaScript -->
    </div>

    <script>


        function toSlug(name) {
            return name.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9\-]/g, '');
        }

        function loadCategory(category) {
            const container = document.getElementById('brand-container');
            container.innerHTML = '';

            data[category].forEach((brand, i) => {
                const div = document.createElement('div');
                div.classList.add('brand');

                // Buat slug dan tautkan ke URL brand
                const brandUrl = `/brands/${toSlug(brand.name)}`;
                div.innerHTML = `<a href="${brandUrl}"><img src="${brand.logo}" alt="${brand.name}"></a>`;

                container.appendChild(div);

                // animasi muncul bertahap
                setTimeout(() => {
                    div.classList.add('show');
                }, i * 150);
            });
        }

        // load kategori awal
        loadCategory('fabric');
    </script>

</body>

</html>