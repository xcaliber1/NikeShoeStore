<!DOCTYPE html>
<html>
<head>
    <title>{{ __('Stock alert') }}</title>
</head>
<body>
    <p>{{ __('The following products are going out of stock: ') }}</p>
    @foreach ($listProducts as $product)
        <p>{{ __('Product Name: ' . $product->name) }}</p>
        <p>{{ __('Current Stock: ' . $product->quantity) }}</p>
        <p>{{ __('Alert If Below: ' . $product->quantity_alert) }}</p>
        <hr>
    @endforeach
</body>
</html>
