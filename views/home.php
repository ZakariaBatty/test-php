<?php
$data = new SportifController();
$sportif = $data->getAllSportif();
if (isset($_POST['ranking'])) :
    $exitRanking = new RankingController();
    $exitRanking->addRanking();
endif;
if (isset($_POST['sport'])) :
    $exitSport = new SportifController();
    $exitSport->addSportif();
endif;
$ran = new RankingController();
$ranking = $ran->getAllRankingrlt();
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include('./views/include/alerts.php'); ?>
                        <ol class="breadcrumb">
                            <div class="">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalsportif">
                                    <i class="fas fa-plus"> add sportif</i></button>
                            </div>
                        </ol>
                        <div class="modal fade" id="modalsportif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">add sportif</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="">
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput">Nom</label>
                                                    <input type="test" class="form-control" id="formGroupExampleInput" name="nom" placeholder="nom">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">Prénom</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="prenom" placeholder="Prénom">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">Date De Naissance</label>
                                                    <input type="date" class="form-control" id="formGroupExampleInput2" name="dateDeNaissance" placeholder="Date De Naissance">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">Sport</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="sport" placeholder="Sport">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">Numero De License</label>
                                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="numeroDeLicense" placeholder="Numero De License">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="sport" value="Ajouter">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="table-responsive">
                <h6 class="modal-title" id="exampleModalLabel">all sportif</h6>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Nom & Prénom</th>
                            <th>Date De Naissance</th>
                            <th>Sport</th>
                            <th>Numero De License</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sportif as  $sport) : ?>
                            <tr>
                                <td><?php echo $sport['nom'] . ' ' . $sport['prenom']; ?></td>
                                <td><?php echo $sport['dateDeNaissance'] ?></td>
                                <td><?php echo $sport['sport'] ?></td>
                                <td><?php echo $sport['numeroDeLicense'] ?></td>
                                <td>
                                    <div class="">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $sport['id']; ?>">
                                            <i class="fas fa-plus"> add ranking</i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal<?php echo $sport['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="exampleModalLabel">add ranking</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <input type="hidden" name="id_sportif" value="<?php echo $sport['id']; ?>">
                                                        <div class="form-row">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">date</label>
                                                                <input type="date" class="form-control" id="formGroupExampleInput" name="date" placeholder="date">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput2">classement</label>
                                                                <input type="number" class="form-control" id="formGroupExampleInput2" name="classement" placeholder="classement">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput2">description</label>
                                                                <input type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="Description">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="submit" class="btn btn-primary" name="ranking" value="Ajouter">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <h6 class="modal-title" id="exampleModalLabel">all ranking</h6>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Nom & Prénom</th>
                            <th>Date De Naissance</th>
                            <th>Sport</th>
                            <th>Numero De License</th>
                            <th>Date</th>
                            <th>Classement</th>
                            <th> Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ranking as  $rank) : ?>
                            <tr>
                                <td><?php echo $rank['nom'] . ' ' . $rank['prenom']; ?></td>
                                <td><?php echo $rank['dateDeNaissance'] ?></td>
                                <td><?php echo $rank['sport'] ?></td>
                                <td><?php echo $rank['numeroDeLicense'] ?></td>
                                <td><?php echo $rank['date'] ?></td>
                                <td><?php echo $rank['classement'] ?></td>
                                <td><?php echo $rank['description'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>