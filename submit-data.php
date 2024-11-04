<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = json_decode(file_get_contents("php://input"), true);

    // Save the form data to an Excel file or database
    // You can use a library like PHPExcel to work with Excel files

    // Respond with a success message
    $response = ["success" => true, "formData" => $formData];
    echo json_encode($response);
} else {
    http_response_code(400);
    echo json_encode(["error" => "Invalid request"]);
}
?>
