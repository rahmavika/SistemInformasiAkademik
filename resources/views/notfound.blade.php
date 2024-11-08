<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(45deg, #5E97F6, #0F52BA);
            overflow: hidden;
        }
        .container {
            text-align: center;
            color: #fff;
            animation: appear 1s ease;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        p {
            font-size: 1.2em;
            margin-top: 0;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .btn:hover {
            background-color: #0056b3;
        }
        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .circles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 20s linear infinite;
        }
        .circle:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 15%;
        }
        .circle:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 40%;
            left: 50%;
        }
        .circle:nth-child(3) {
            width: 150px;
            height: 150px;
            top: 80%;
            left: 80%;
        }
        @keyframes animate {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-1000px);
            }
        }
    </style>
</head>
<body>
    <div class="circles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <div class="container">
        <h1>404 - Halaman Tidak Ditemukan</h1>
        <p>Maaf, halaman yang Anda cari tidak dapat ditemukan.</p>
        <a href="/" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
