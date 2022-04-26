<?php

namespace App\Dao;

use App\Model\Plats;
use Core\AbstractDao;

class PlatsDao extends AbstractDao
{


    public function getAll(): array
    {
        $sth = $this->dbh -> prepare("SELECT * FROM plats");
        $sth -> execute();
        $result = $sth -> fetchAll(\PDO::FETCH_ASSOC);

        for ($i = 0 ; $i < count($result) ; $i++) {
            $a = new Plats();
            $result[$i] = $a -> setIdPlat($result[$i]['id_plat'])
                -> setNom($result[$i]['nom'])
                -> setDescription($result[$i]['description'])
                -> setDateCreation($result[$i]['date_creation'])
                -> setDateModification($result[$i]['date_modification']);
        }

        return $result;
    }
}