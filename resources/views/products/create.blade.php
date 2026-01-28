<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <div class="">
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
            @method('POST')
            <div class="">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Product Name">
            </div>
            <div class="">
                <label for="">Quantity</label>
                <input type="number" name="qty" placeholder="Product Quantity">
            </div>
            <div class="">
                <label for="">Price</label>
                <input type="number" name="price" placeholder="Product Price" step="0.01">
            </div>
            <div class="">
                <label for="">Description</label>
                <textarea name="description" placeholder="Product Description"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Save a New Product" />
            </div>
        </form>
    </div>
</body>
</html>