<?php

class Raspored
{
    public $id;
    public $predmet_id;
    public $pocetak;
    public $kraj;

    public function obrisiStavku($id)
    {
        $db = new mysqli("localhost", "root", "", "raspored");
        $db_query = "delete from raspored where id=" . $id;
        $db->query($db_query);
    }
}
