<?php
require_once "../models/conexion.php"; ?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud php, mysql y ajax</title>
    <link rel="stylesheet" href="css/dataTables.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h1>Crud php, mysql y ajax</h1>

        <table id="example" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>














    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/dataTables.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
        //new DataTable('#example');
        let table = new DataTable('#example', {
            language: {
                url: '//cdn.datatables.net/plug-ins/2.3.7/i18n/es-MX.json',
            },
        });
    </script>
</body>

</html>