<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telah REGISTER</title>
</head>

<body>
    <h1>SILAKAN LOGIN</h1>

    <table border="1">
        <tr>
            <td>First Name</td>
            <td><?= $_POST['first_name']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?= $_POST['last_name']; ?></td>
        </tr>
    </table>
</body>

</html>