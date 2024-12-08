<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($number) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    "No" => $i,
                    "Multiplier" => $number,
                    "Answer" => $i * $number
                ];
            }
            return $results;
        }

        $table = multiplication(2);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($table as $row): ?>
        <tr>
            <td><?php echo $row['No']; ?></td>
            <td><?php echo $row['Multiplier']; ?></td>
            <td><?php echo $row['Answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
