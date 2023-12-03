<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['productId']) && isset($_POST['quantity'])) {
        $productId = $_POST['productId'];
        $quantity = $_POST['quantity'];

        // Update the quantity in the session or database
        // For example, update $_SESSION['giohang'][$productId]['4'] to $quantity
        // Remember to sanitize and validate user input before updating

        echo json_encode(['success' => true]);
        exit();
    }
}

// Send an error response if the request is invalid
echo json_encode(['success' => false, 'error' => 'Invalid request']);
?>