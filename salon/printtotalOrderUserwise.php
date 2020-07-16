<?php
 
// Include the PDF class
require_once "fpdf/fpdf.php";
 
// Create instance of PDF class
$pdf = new FPDF();
 
// Add 1 page in your PDF
$pdf->AddPage();
 
// Place image on top left with 100px width
$pdf->Image("images/logo.png", 70, 5, 30);
 
// Set Arial Bold font with size 22px
$pdf->SetFont("Arial", "B", 15);
 
// Give margin from left
$pdf->SetX(105);
 
// Write text "Invoice" with 0 width & height (it will still be visible)
$pdf->Cell(100, 5, "Salon Manori");

// Set Arial Bold font with size 22px
$pdf->SetFont("Arial", "B", 11);
$pdf->SetX(105);
$pdf->Cell(100, 15, "Infront of People's Bank");

// Set Arial Bold font with size 22px
$pdf->SetFont("Arial", "B", 11);
$pdf->SetX(105);
$pdf->Cell(100, 25, "Ambalantita");

// Set Arial Bold font with size 22px
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(80);
$pdf->Cell(100, 60, "Total Sales User Wise");

// Move the cursor to next line
$pdf->Ln();

$pdf->SetY(50);

// Give margin from left
$pdf->SetX(10);

// Sets the background color to light gray
$pdf->SetFillColor(209, 207, 207);

// Cell
$pdf->SetFont("Arial", "B", 11);
$pdf->Cell(50, 10, "User Name", 1, 0, "L", true);
$pdf->Cell(50, 10, "Total Sales Value", 1, 0, "L", true);
$pdf->Cell(50, 10, "Total Sales in Cash", 1, 0, "L", true);
$pdf->Cell(40, 10, "Total Sales in Credit", 1, 0, "L", true);
$pdf->Ln();

$conn = mysqli_connect("localhost","root","","salondb");

$result = mysqli_query($conn, 'SELECT sum(inventory_order.inventory_order_total) as order_total, SUM(CASE WHEN inventory_order.payment_status = "cash" THEN inventory_order.inventory_order_total ELSE 0 END) AS cash_order_total, 
SUM(CASE WHEN inventory_order.payment_status = "credit" THEN inventory_order.inventory_order_total ELSE 0 END) AS credit_order_total, 
user_details.user_name 
FROM inventory_order 
INNER JOIN user_details ON user_details.user_id = inventory_order.user_id 
WHERE inventory_order.inventory_order_status = "active" GROUP BY inventory_order.user_id');

// Iterate through each record
while ($row = mysqli_fetch_object($result))
{
    // Create cells with 50px width, 10px height and 1px border
    $pdf->Cell(50, 10,$row->user_name, 1);
    $pdf->Cell(50, 10,'Rs. ' . $row->order_total, 1);
    $pdf->Cell(50, 10,'Rs. ' . $row->cash_order_total, 1);
    $pdf->Cell(40, 10,'Rs. ' . $row->credit_order_total, 1);
 
    // Moving cursor to next row
    $pdf->Ln();
}

$pdf->Ln();
$pdf->SetX(1);

$pdf->SetFont("Arial", "B", 11);
$pdf->Cell(50, 10, "Total Order Value : ", 0, "L", true);

$result_first = mysqli_query($conn, "SELECT sum(inventory_order_total) as total_order_value FROM inventory_order 
WHERE inventory_order_status='active'");

    while ($row = mysqli_fetch_object($result_first))
{

    $pdf->Cell(50, 10,'Rs. ' . $row->total_order_value, 2);

}

$pdf->Ln();
$pdf->SetX(15);

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 10, "Total Cash Order Value : ", 0, "L", true);
$result_second = mysqli_query($conn, "SELECT sum(inventory_order_total) as total_order_value FROM inventory_order 
WHERE payment_status = 'cash' 
AND inventory_order_status='active'");

    while ($row = mysqli_fetch_object($result_second))
{

    $pdf->Cell(50, 10,'Rs. ' . $row->total_order_value, 2);

}
$pdf->Ln();
$pdf->SetX(17);

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(50, 10, "Total Credit Order Value : ", 0, "L", true);
$result_third = mysqli_query($conn, "SELECT sum(inventory_order_total) as total_order_value FROM inventory_order WHERE payment_status = 'credit' AND inventory_order_status='active'");

    while ($row = mysqli_fetch_object($result_third))
{

    $pdf->Cell(50, 10,'Rs. ' . $row->total_order_value, 2);

}
$pdf->Ln();

if (isset($_GET["download"]))
{
    $pdf->output("Invoice.pdf", "F");
    header("Content-type: application/pdf");
    header("Content-disposition: attachment; filename = Invoice.pdf");

    readFile("Invoice.pdf");
    unlink("Invoice.pdf");

}
else
{
    //Render the PDF in your browser
    $pdf->output();
}
 
?>