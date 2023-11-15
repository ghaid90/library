<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .menu-item {
            margin-bottom: 15px;
        }

        .menu-item h3 {
            margin: 0;
        }

        .menu-item p {
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Restaurant Menu</h1>
    </header>

    <main>
        <?php
        // Define menu items as an associative array
        $menu_items = array(
            array("name" => "Spaghetti Bolognese", "price" => "$12.99", "description" => "Classic Italian dish with meat sauce."),
            array("name" => "Chicken Alfredo", "price" => "$14.99", "description" => "Creamy Alfredo sauce with grilled chicken."),
            array("name" => "Margherita Pizza", "price" => "$10.99", "description" => "Fresh mozzarella, tomatoes, and basil."),
            array("name" => "Grilled Salmon", "price" => "$18.99", "description" => "Freshly grilled salmon fillet."),
        );

        // Display menu items
        foreach ($menu_items as $item) {
            echo '<div class="menu-item">';
            echo '<h3>' . $item["name"] . '</h3>';
            echo '<p><strong>Price:</strong> ' . $item["price"] . '</p>';
            echo '<p><strong
