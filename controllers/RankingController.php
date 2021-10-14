<?php
class RankingController
{
    //function for recover all patient  
    public function getAllRanking()
    {
        $patient = Ranking::getAll();
        return $patient;
    }

    public function getAllRankingrlt()
    {
        $patient = Ranking::getRanking();
        return $patient;
    }

    public function addRanking()
    {
        if (isset($_POST['ranking'])) :
            $data = array(
                'date' => $_POST['date'],
                'classement' => $_POST['classement'],
                'description' => $_POST['description'],
                'id_sportif' => $_POST['id_sportif'],
            );
            $result = Ranking::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Ranking Ajouté*');
            } else {
                Session::set('info', 'Veuillez réessayer*');
            }
        endif;
    }
}
