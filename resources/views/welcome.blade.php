<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
    <h1>Данные из JSON</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Preview Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <td>
                        <a href="{{ url('gallery/' . $index) }}">
                            <img src="{{ $item['preview_image'] }}" alt="Preview" />
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>