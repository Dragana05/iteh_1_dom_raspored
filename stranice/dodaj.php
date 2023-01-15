<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Raspored</title>
</head>

<body>
    <div class="container">

        <div id="dodajform">

            <div class="form mt-3 mb-2">
                <label>Ispit: </label>
                <select class="form-select" id="ispit_id">
                    <?php

                    $db = new mysqli("localhost", "root", "", "raspored");
                    $db_query = "select * from ispit";
                    $data_query = $db->query($db_query);

                    if (mysqli_num_rows($data_query) > 0) {

                        while ($row = mysqli_fetch_object($data_query)) { ?>

                            <option value="<?php echo $row->id; ?>">
                                <?php echo $row->naziv; ?>
                            </option>

                    <?php
                        }
                    } else {
                        echo 'Nema ispita';
                    }

                    ?>
                </select>
            </div>


            
            <div class="form mb-2">
                <label>Datum: </label>
                <input type="text" class="form-control" id="datum">
            </div>
            <div class="form mb-2">
                <label>Pocetak: </label>
                <input type="text" class="form-control" id="pocetak">
            </div>
            <div class="form mb-2">
                <label>Kraj: </label>
                <input type="text" class="form-control" id="kraj">
            </div>
        </div>

        <button class="btn btn-primary btn-lg" id="dodajbutton">
            DODAJ
        </button>

    </div>
</body>

</html>