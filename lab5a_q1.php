<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    
    $name = "Aryssa Batrisya binti Abdul Khalid";
    $matricNumber = "A1220243";
    $course = "Bachelor of Computer Science (Software Engineering with Honours)";
    $yearOfStudy = "Year 3";
    $address = "17-8-1 Danau Impian Condominium, Taman Desa, KL";
    ?>
    <table border="1" cellpadding="10">
        <tr>
            <td><b>Name</b></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><b>Matric Number</b></td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td><b>Course</b></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><b>Year of Study</b></td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td><b>Address</b></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
