<?php
require_once('td.php');
$query = "SELECT d.firstName,d.lastName,do.amount,do.pledgeDate FROM donor as d,donation as do
where d.donorid = do.donorid
AND do.amount ORDER BY do.amount DESC
LIMIT 10;";

$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reportStyle.css">
    <title>Top Donors</title>
</head>


<body class>

    <div class="wrapper">
        <div class="linker">
            <a href="index.php"><span class="spanner">&#8592;</span></a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Top 10 Donors this Year</h2>
                    </div>
                    <div class="card-body">
                        <table class="table1">
                            <tr>
                                <th></th>
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Donation Amount </th>
                                <th> Donation Date </th>
                            </tr>
                            <tr>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td> <?php echo $i                ?></td>
                                    <?php $i = $i + 1; ?>
                                    <td> <?php echo $row['firstName'] ?></td>
                                    <td> <?php echo $row['lastName'] ?></td>
                                    <td> <?php echo '$' . $row['amount'] ?></td>
                                    <td> <?php echo $row['pledgeDate'] ?></td>


                                    </tr>
                                    <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>