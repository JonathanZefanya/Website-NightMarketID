<!DOCTYPE html>
<html>
<head>
    <title>Product Data</title>
</head>
<body>
    <h1>Product Data</h1>
    <ul>
        @foreach ($data as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
