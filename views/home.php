<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {

            border-collapse: collapse;
        }
    </style>
</head>
<body>
        <table border="" width="1200">
            <tr>
                <th>SL NO</th>
                <th>Semester</th>
                <th>Code</th>
                <th>Subject</th>
                <th>Credits</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($results as $key=> $result) { ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $result["semester"] ?></td>
                <td><?php echo $result["code"] ?></td>
                <td><?php echo $result["Subject"] ?></td>
                <td><?php echo $result["credits"] ?></td>
                <td><?php echo $result["grade"] ?></td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>
