<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $donorid = rand(10000, 99999);
    $donationid = rand(10000, 99999);

    if (isset($_POST['anon']) && $_POST['anon'] == '1') {
        $firstName = "Anonymous";
        $lastName = ""; 

    }else{
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"]; 

       }


    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];


    $street = $_POST["street"];
    $city = $_POST["city"];

    $stateA = $_POST["stateA"];
    $zip = $_POST["zip"];

    if (isset($_POST['gradSen']) && $_POST['gradSen'] == '1') {
        $gradSen = 1;
    } else {
        $gradSen = 0;
    }

    if (isset($_POST['alum']) && $_POST['alum'] == '1') {
        $alum = 1;
    } else {
        $alum = 0;

    }

    if (isset($_POST['parents']) && $_POST['parents'] == '1') {
        $parents = 1;
    } else {
        $parents = 0;
    }

    if (isset($_POST['faculty']) && $_POST['faculty'] == '1') {
        $faculty = 1;
    } else {
        $faculty = 0;
    }

    if (isset($_POST['admini']) && $_POST['admini'] == '1') {
        $admini = 1;
    } else {
        $admini = 0;
    }

    if (isset($_POST['Corporation']) && $_POST['Corporation'] == '1') {
        $Corporation = 1;
    } else {
        $Corporation = 0;
    }

    $gradYear = $_POST["gradYear"];

    $amount = $_POST["amount"];

    $pledgeDate = $_POST['pledgeDate'];

    $Payment_Method = $_POST["Payment_Method"];

    $Payment_Plan = $_POST["Payment_Plan"];

    $ccName = $_POST["ccName"];

    $ccNum = $_POST["ccNum"];

    $expire = $_POST["expire"];

    $cvv = $_POST["cvv"];


    try {

        require_once "dbh.inc.php";

        $query = "INSERT INTO donor(donorid,firstName,lastName,
        email,phoneNum,street,city,stateA,zip,student,graduate,parent,faculty,
        admini,corporation,gradYear) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


        $query2 = "INSERT INTO donation(amount,pledgeDate,Payment_Method,
        Payment_Plan,ccName,ccNum,expire,cvv,donationid,donorid) 
        VALUES (?,?,?,?,?,?,?,?,?,?)";

        $stmt = $pdo->prepare($query);

        $stmt2 = $pdo->prepare($query2);

        $stmt->execute([
            $donorid,
            $firstName,
            $lastName,
            $email,
            $phoneNum,
            $street,
            $city,
            $stateA,
            $zip,
            $student,
            $graduate,
            $parent,
            $faculty,
            $admini,
            $corporation,
            $gradYear
        ]);


        $stmt2->execute([
            $amount,
            $pledgeDate,
            $Payment_Method,
            $Payment_Plan,
            $ccName,
            $ccNum,
            $expire,
            $cvv,
            $donationid,
            $donorid
        ]);

        $pdo = null;
        $stmt = null;
        $stmt2 = null;

        header("Location: ./index.php");

        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {

    header("Location: ./index.php");

}