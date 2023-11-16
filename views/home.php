<?php include "header.php" ?>
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
<?php include "footer.php" ?>
