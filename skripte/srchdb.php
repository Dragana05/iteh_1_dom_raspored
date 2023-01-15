 <table class="table text-center">

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
            $db_query = "select raspored.*, ispit.naziv from raspored join ispit on raspored.ispit_id=ispit.id
            where ispit.naziv like '%" . $_GET['srch'] . "%' OR datum like '%" . $_GET['srch'] . "%' OR pocetak like '%" . $_GET['srch'] . "%'
            OR kraj like '%" . $_GET['srch'] . "%'";


            $data_query = $db->query($db_query);

            if (mysqli_num_rows($data_query) > 0) {

                while ($row = mysqli_fetch_object($data_query)) { ?>

                 <tr>
                     <td><?php echo $row->naziv; ?></td>
                     <td><?php echo $row->datum; ?></td>
                     <td><?php echo $row->pocetak; ?></td>
                     <td><?php echo $row->kraj; ?></td>
                     <td><i class="fa-solid fa-trash" id="<?php echo $row->id; ?>"></i></td>
                 </tr>
             <?php
                }
            } else {
                ?>
             <td></td>
             <td></td>
             <td>
                 <?php echo 'Nema takve stavke!' ?>
             </td>
             <td></td>
             <td></td>
         <?php
            }
            ?>
     </tbody>

 </table>