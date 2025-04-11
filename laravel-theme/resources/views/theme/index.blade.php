<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Theme Switcher</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-color: {{ $theme === 'dark' ? '#333' : '#fff' }};
            color: {{ $theme === 'dark' ? '#fff' : '#000' }};
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            background: {{ $theme === 'dark' ? '#444' : '#f8f9fa' }};
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .btn-light { background-color: #f1c40f; color: #000; }
        .btn-dark { background-color: #2c3e50; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Theme Switcher</h1>
        <p>Mode saat ini: <strong>{{ ucfirst($theme) }}</strong></p>

        <a href="/theme/light" class="btn btn-light">Mode Terang</a>
        <a href="/theme/dark" class="btn btn-dark">Mode Gelap</a>
    </div>
</body>
</html>