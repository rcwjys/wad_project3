<?php 

    require 'koneksi.php';

    $sql = "SELECT * FROM students";

    $results = mysqli_query($conn, $sql);

    $students = mysqli_fetch_all($results, MYSQLI_ASSOC);

    mysqli_free_result($results);
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars("{$student['id']}") ?></td>
                <td><?php echo htmlspecialchars("{$student['name']}") ?></td>
                <td><?php echo htmlspecialchars("{$student['nim']}") ?></td>
                <td><?php echo htmlspecialchars("{$student['address']}") ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>