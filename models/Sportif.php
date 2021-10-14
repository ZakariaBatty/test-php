<?php

class Sportif
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM sportif');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function add($data)
    {

        $stmt = DB::connect()->prepare(
            'INSERT INTO sportif (nom,prenom,dateDeNaissance,sport,numeroDeLicense)
             VALUES(:nom,:prenom,:dateDeNaissance,:sport,:numeroDeLicense)'
        );
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':dateDeNaissance', $data['dateDeNaissance']);
        $stmt->bindParam(':sport', $data['sport']);
        $stmt->bindParam(':numeroDeLicense', $data['numeroDeLicense']);
        if ($stmt->execute()) :
            return 'ok';
        else :
            return 'error';
        endif;
        $stmt = null;
    }
}
