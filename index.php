<?php
session_start();
include('db_config.php');

$sql = "SELECT * FROM products LIMIT 8";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <h1>Welcome to Sports E-Commerce</h1>
        <h2>Featured Products</h2>
        <div class="products">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product">
                    <img src="<?= $row['image_url']; ?>" alt="<?= $row['name']; ?>">
                    <h3><?= $row['name']; ?></h3>
                    <p><?= $row['description']; ?></p>
                    <p>$<?= number_format($row['price'], 2); ?></p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?= $row['product_id']; ?>">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
    <?php include('footer.php'); ?>


</body>

</html>

<?php $conn->close(); ?>