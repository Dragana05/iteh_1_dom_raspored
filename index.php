<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sort/jquery.sortableTable.css">
    <link rel="stylesheet" href="style.css">
    <title>Raspored</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mt-4">Moj Raspored učenja</h1>

        <a href="stranice/dodaj.php">
            <button class="btn btn-primary btn-lg" id="dodajbutton">
                DODAJ
            </button>
        </a>


        <input type="text" class="form-control mt-3" id="srchraspored">




        <div class="rasporedtable">

            <table class="table text-center ui-sortable-table">

                <thead>
                    <tr>
                        <th>Ispit</th>
                        <th>Datum</th>
                        <th>Pocetak učenja</th>
                        <th>Kraj učenja</th>
                        <th></th>
                    </tr>
                </thead>


                <tbody>

                    <?php
                    $db = new mysqli("localhost", "root", "", "raspored");
                    $db_query = "select raspored.*, ispit.naziv from raspored join ispit on raspored.ispit_id=ispit.id";
                    $data_query = $db->query($db_query);

                    if (mysqli_num_rows($data_query) > 0) {

                        while ($row = mysqli_fetch_object($data_query)) { ?>

                            <tr>
                                <td><?php echo $row->naziv; ?></td>
                                <td><?php echo $row->datum; ?></td>
                                <td><?php echo $row->pocetak; ?></td>
                                <td><?php echo $row->kraj; ?></td>
                                <td><i class=" fa-solid fa-trash" id="<?php echo $row->id; ?>"></i></td>
                            </tr>
                    <?php

                        }
                    } else {
                        echo 'Nema ispita';
                    }
                    ?>
                </tbody>

            </table>
        </div>




    </div>
    <script src="https://kit.fontawesome.com/14ebaea159.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="sort/jquery.slim.min.js"></script>
    <script src="sort/jquery.sortableTable.js"></script>
    <script src="javas.js"></script>
</body>

</html>