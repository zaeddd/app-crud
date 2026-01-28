<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div class="">
        <form method="POST" action="{{ route('product.update', $product->id) }}">
            @csrf
            @method('put')
            <div class="">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}">
            </div>
            <div class="">
                <label for="">Quantity</label>
                <input type="number" name="qty" placeholder="Product Quantity" value="{{ $product->qty }}">
            </div>
            <div class="">
                <label for="">Price</label>
                <input type="number" name="price" placeholder="Product Price" step="0.01" value="{{ $product->price }}">
            </div>
            <div class="">
                <label for="">Description</label>
                <input type="text" name="description" placeholder="Product Description" value="{{ $product->description }}">
            </div>
            <div class="button">
                <input type="submit" value="Update" />
                
            </div>
        </form>
    </div>
</body>
</html>