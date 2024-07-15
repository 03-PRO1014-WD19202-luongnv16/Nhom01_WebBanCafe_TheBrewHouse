<!DOCTYPE html>
<html>
<head>
    <title>Product Search</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Product Search</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Search: <input type="text" name="search_term">
        <input type="submit" name="submit" value="Search">
    </form>

    <?php
    // Gia sử bạn có một mảng sản phẩm
    $products = array(
        array("id" => 1, "name" => "Product A", "price" => 9.99),
        array("id" => 2, "name" => "Product B", "price" => 14.99),
        array("id" => 3, "name" => "Product C", "price" => 19.99),
        array("id" => 4, "name" => "Product D", "price" => 24.99)
    );

    if(isset($_POST['submit'])) {
        $search_term = $_POST['search_term'];
        echo "<h2>Search Results:</h2>";
        echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>";
        foreach($products as $product) {
            if(stripos($product['name'], $search_term) !== false) {
                echo "<tr>
                    <td>".$product['id']."</td>
                    <td>".$product['name']."</td>
                    <td>$".$product['price']."</td>
                </tr>";
            }
        }
        echo "</table>";
    }
    ?>
</body>
</html>