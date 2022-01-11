<?php

    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$count_users              = mysqli_query($conn, "SELECT COUNT(*) as count FROM users");
$count_furniture          = mysqli_query($conn, "SELECT COUNT(*) as count FROM furnitures");
$count_category_furniture = mysqli_query($conn, "SELECT COUNT(*) as count FROM categories_furniture");
$count_order              = mysqli_query($conn, "SELECT COUNT(*) as count FROM orders");

// Count Total salary today
$total_salary = mysqli_query($conn, "SELECT SUM(price) FROM orders");

$ex_users        = mysqli_fetch_assoc($count_users);
$ex_furnitures   = mysqli_fetch_assoc($count_furniture);
$ex_categories   = mysqli_fetch_assoc($count_category_furniture);
$ex_orders       = mysqli_fetch_assoc($count_order);

$ex_total_salary = mysqli_fetch_assoc($total_salary);



