//<?php

define("FILENAME", "data/demo.db");
$connection = new PDO('sqlite:' . FILENAME);

// === Simple Querying*/

// foreach ($connection->query("SELECT * FROM trees") as $row) {
//     print $row["id"] . ", " . $row["height"] . ", " . $row["germanName"] . PHP_EOL;
// }

// $statement = $connection->query("SELECT MAX(height) FROM trees");
// $result = $statement->fetch();

// var_dump($result);

// === Prepared Statements

// ====== mit anonymen Parametern

// $sql = "SELECT germanName, height FROM trees WHERE height > ?"; // 1
// $statement = $connection->prepare($sql); // 2
// $statement->execute([30]); // 3

// while ($row = $statement->fetch()) {
//     print $row["germanName"] . " (" . $row["height"] . " m)" . PHP_EOL;
// }

// ====== mit benannten Parametern

// $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
// $statement = $connection->prepare($sql); // 2
// $statement->execute([
//     "minHeight" => 10
// ]); // 3

// while ($row = $statement->fetch()) {
//     print $row["germanName"] . " (" . $row["height"] . " m)" . PHP_EOL;
// }

// ====== mit benannten Einzelergebnissen

/*$sql = "SELECT COUNT(*) as num FROM trees WHERE height > ?"; // 1
$stmt = $connection->prepare($sql); // 2
$stmt->execute([15]); // 3

$result = $stmt->fetch();

print $result['num'] . " Bäume sind über 15 m hoch." . PHP_EOL;*/

// 06.10.2026

$minHeight = filter_input(INPUT_GET, "h") ?? 10;

$sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
$statementResults = $connection->prepare($sql); // 2
$statementResults->execute([
    "minHeight" => $minHeight
]); // 3

$sql = "SELECT COUNT(*) as num FROM trees WHERE height > :minHeight"; // 1
$statementNumber = $connection->prepare($sql); // 2
$statementNumber->execute([
    "minHeight" => $minHeight
]); // 3
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baumkataster Köln 2020</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        th,
        td {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
        }

        tbody>tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }
    </style>
</head>
<body>
    <h1>Baumbestand in Köln 2020</h1>

    <p>Suchen Sie nach Bäumen mit einem bestimmten Namen:</p>

    <!-- Formular -->
    <form method="post">
        
    </form>
    
    <table>
        <thead>
            <tr>
                <th>Deutscher Name</th>
                <th>Höhe</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $statementResults->fetch()): ?>
                <tr>
                    <td><?= $row["germanName"] ?></td>
                    <td><?= $row["height"] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>



    ?>