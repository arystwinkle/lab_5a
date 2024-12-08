<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    $multiplier = 2; 
    $multiplicationTable = multiplication($multiplier);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        foreach ($multiplicationTable as $row) {
            echo "<tr>";
            echo "<td>{$row['no']}</td>";
            echo "<td>{$row['multiplier']}</td>";
            echo "<td>{$row['answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
