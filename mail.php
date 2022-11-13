<?php

if(isset($_POST['submit'])){


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $appDate = $_POST['app-date'];
    $appTime = $_POST['app-time'];
    $pno = $_POST['pno'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $message = $_POST['message-box'];


    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont("Arial", "", 16);
    $pdf->Cell(0, 10, "Appoitment Detail", 1, 1, 'C');
    
    $pdf->Cell(50, 10, "Name", 1, 0);
    $pdf->Cell(0, 10, $fname." ".$lname, 1, 1);

    $pdf->Cell(50, 10, "Appiontment Date", 1, 0);
    $pdf->Cell(0, 10, $appDate, 1, 1);

    $pdf->Cell(50, 10, "Appiontment Time", 1, 0);
    $pdf->Cell(0, 10, $appTime, 1, 1);

    $pdf->Cell(50, 10, "Phone Number", 1, 0);
    $pdf->Cell(0, 10, $pno, 1, 1);

    $pdf->Cell(50, 10, "Email Address", 1, 0);
    $pdf->Cell(0, 10, $email, 1, 1);

    $pdf->Cell(50, 10, "City", 1, 0);
    $pdf->Cell(0, 10, $city, 1, 1);

    $pdf->Cell(50, 10, "State", 1, 0);
    $pdf->Cell(0, 10, $state, 1, 1);

    $pdf->Cell(50, 10, "Pincode", 1, 0);
    $pdf->Cell(0, 10, $pincode, 1, 1);

    $pdf->Cell(50, 10, "Message", 1, 0);
    $pdf->MultiCell(0, 10, $message, 1, 1);


    // $pdf->Output('D','appointment.pdf');
    $pdf->output();
}

?>