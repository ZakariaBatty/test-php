<?php
class SportifController
{
    //function for recover all patient  
    public function getAllSportif()
    {
        $patient = Sportif::getAll();
        return $patient;
    }

    public function addSportif()
    {
        if (isset($_POST['sport'])) :
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'dateDeNaissance' => $_POST['dateDeNaissance'],
                'sport' => $_POST['sport'],
                'numeroDeLicense' => $_POST['numeroDeLicense'],
            );
            $result = Sportif::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Sportif Ajouté*');
            } else {
                Session::set('info', 'Veuillez réessayer*');
            }
        endif;
    }
}
