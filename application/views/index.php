<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Pagination</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
    <body>
        <div class="container">
            <h3>CodeIgniter Database Pagination</h3>
            <div class="column">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= $student->id; ?></td>
                                <td><?= $student->first_name; ?></td>
                                <td><?= $student->last_name; ?></td>
                                <td><?= $student->email; ?></td>
                                <td><?= $student->phone ;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
            </div>
        </div>
    </body>
</html>