<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guzexs Gaming Official</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0a0e27;
            color: white;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            color: #007bff;
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .subtitle {
            color: #ffc107;
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>GUZEXS GAMING</h1>
        <p class="subtitle">Jelajahi Dunia Gaming Bersama Guzexs! 🎮</p>
        <p>Website sedang dalam tahap pengembangan...</p>
        <p>Featured Products: {{ $featuredProducts->count() }}</p>
        <p>Latest Posts: {{ $latestPosts->count() }}</p>
        <p>Categories: {{ $categories->count() }}</p>
    </div>
</body>
</html>
