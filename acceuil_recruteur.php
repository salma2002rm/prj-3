<!DOCTYPE html>
<html>
<head>
    <title>Liste des candidats</title>
    <link rel="stylesheet" type="text/css" href="page_acceuil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVpTOIvn0wfxlYjOd+qnBKKtKTfUKBywFPrhJQ=="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/52a7b4bdf1.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Offres d'emploi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            

<li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Offres d'emploi</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-3">
    <h1>Liste des candidats</h1>

    <!-- Formulaire de recherche -->
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>

    <!-- Tableau des offres d'emploi -->
    <table class="table mt-3">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Score</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('config.php');

                // Requête SQL pour récupérer les offres d'emploi
                $sql = "SELECT * FROM affichage_score";
                $result = mysqli_query($conn, $sql);

                // Boucle pour afficher chaque offre d'emploi sous forme de ligne de tableau
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['cv_id'] . "</td>";
                        echo "<td>" . $row['Nom'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Score'] . "</td>";
                        echo "<td><a href='acceuil_recruteur.php?id=" . $row['id'] . "' class='btn btn-primary'><i class='fas fa-search'></i> Voir Cv</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Aucune offre d'emploi trouvée.</td></tr>";
                }

                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>