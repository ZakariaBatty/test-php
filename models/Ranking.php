<?php

class Ranking
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM ranking');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getRanking()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM ranking LEFT JOIN sportif ON ranking.id_sportif = sportif.id');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function add($data)
    {

        $stmt = DB::connect()->prepare(
            'INSERT INTO ranking (date,classement,description,id_sportif)
             VALUES(:date,:classement,:description,:id_sportif)'
        );
        $stmt->bindParam(':date', $data['date']);
        $stmt->bindParam(':classement', $data['classement']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id_sportif', $data['id_sportif']);
        if ($stmt->execute()) :
            return 'ok';
        else :
            return 'error';
        endif;
        $stmt = null;
    }
}
