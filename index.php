<?php
// Product data array
$products = [
    ["id" => 1, "name" => "Laptop", "price" => 899.99, "image" => "laptop.jpg"],
    ["id" => 2, "name" => "Smartphone", "price" => 499.99, "image" => "smartphone.jpg"],
    ["id" => 3, "name" => "Headphones", "price" => 29.99, "image" => "headphones.jpg"],
    ["id" => 4, "name" => "Smartwatch", "price" => 199.99, "image" => "smartwatch.jpg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-Commerce Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #fff;
            margin: 10px;
            padding: 15px;
            width: 200px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h3 {
            margin: 10px 0;
        }
        .product p {
            margin: 5px 0;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #0056b3;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Our E-Commerce Store</h1>
    <a href="cart.php" class="btn">View Cart</a>
</header>

<div class="container">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h3><?php echo $product['name']; ?></h3>
            <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
            <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" class="btn">Add to Cart</a>
        </div>
    <?php endforeach; ?>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My E-Commerce Store. All Rights Reserved.</p>
</footer>

</body>
</html>
