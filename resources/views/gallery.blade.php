<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
</head>
<body>
    <h1>{{ $item['name'] }}</h1>
    <p><strong>Дата:</strong> {{ $item['date'] }}</p>
    <div>
        <img src="{{ asset($item['full_image']) }}" alt="Full Image" />
    </div>
    <p><strong>Описание:</strong> {{ $item['desc'] }}</p>
    <a href="/">Назад на главную</a>
</body>
</html>