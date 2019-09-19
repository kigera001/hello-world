<?php
 include_once 'medicineserver.php';

        $medicine_company=(isset($_POST['medicine company']));
        $medicine_name=(isset($_POST['medicine name']));
        $medicine_batch_number= (isset($_POST['medicine batch number']));
        $mfg_date= (isset($_POST['mfg date']));
        $expiry_date= (isset($_POST['expiry date']));
        $date_of_entry= (isset($_POST['date of entry']));
        $quantity= (isset($_POST['quantity(total units)']));
        $price_per_unit= (isset($_POST['price per unit']));



		// add medicine if there are no errors in the form
		
 $sql = "INSERT INTO medicine (medicine company, medicine name, medicine batch number, mfg date, expiry date, date of entry, quantity(total units), price per unit)    VALUES('$medicine_company','$medicine_name','$medicine_batch_number', '$mfg_date', '$expiry_date', '$date_of_entry', '$quantity', '$price_per_unit')";
                mysqli_query($conn, $sql);
				header("location: ../addmedicine.php");




?>