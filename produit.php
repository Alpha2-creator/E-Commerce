<?php
define("LIVRAISON", 1500);
$reference = "N002";
$nom = "Smartphone Itel A70, 64 Go";
$categorie_id = 1;
$prix_achat = 42000;
$prix_vente = 52000;
$stock = 2;





//1 Switch
switch ($categorie_id) {
    case 1:
        $categorie = "Téléphones";
        break;
    case 2:
        $categorie = "Écouteurs et audio";
        break;
    case 3:
        $categorie = "Chargeurs et câbles";
        break;
    case 4:
        $categorie = "Protection";
        break;
    case 5:
        $categorie = "Montres connectées";
        break;
    case 6:
        $categorie = "Accessoires divers";
        break;
    default:
        $categorie = "Catégorie inconnue";


    
}

//2 seuil
$seuil=$categorie_id==1 ? 3:5;

//echo $seuil . '<br>'; 

//3 la marge et la disponibilite
$marge=$prix_vente-$prix_achat;
$disponibilite = $stock > 0 ? "Disponible" : "Sur commande";
//echo $marge . " - " . $disponibilite . '<br>';

//4 l'alerte

if ($stock == 0) {
    $alerte = "Rupture";
} else if ($stock < $seuil) {
    $alerte = "Stock faible";
} else {
    $alerte = "Aucune alerte";
}

$stock_restant = $stock;
$ventes_possibles = 0;

while ($stock_restant > $seuil) {
    $stock_restant = $stock_restant - 1;
    $ventes_possibles = $ventes_possibles + 1;
}


//echo $etat;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $reference ?> – Ndiaga Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">Ndiaga Tech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#menu" aria-controls="menu"
              aria-expanded="false" aria-label="Afficher le menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="catalogue.html">Catalogue</a></li>
          <li class="nav-item"><a class="nav-link" href="panier.html">Panier</a></li>
          <li class="nav-item"><a class="nav-link" href="gestion/connexion.html">Espace de gestion</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!--5 La page -->

  <main class="container py-4">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title h4"><?= $nom ?></h1>
        <p class="card-text text-muted">Réf. <?= $reference ?> · <?= $categorie ?></p>
        <p class="card-text fw-bold">Prix de vente : <?= $prix_vente ?> FCFA</p>
        <p class="card-text fw-bold">Marge : <?= $marge ?> FCFA</p>
        <p class="card-text fw-bold">Stock : <?= $stock ?> (seuil : <?= $seuil ?>)</p>
        <p class="card-text fw-bold">Disponibilité : <?= $disponibilite ?></p>
        <span class="badge text-bg-warning"><?= $alerte ?></span>
      </div>
    </div>

    <!--6 Le panier-->

<table class="table mt-4">
  <thead>
    <tr class="table-dark">
      <th>Quantité</th>
      <th>Produits</th>
      <th>Livraison</th>
      <th>Total à payer</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 1; $i <= 3 && $i <= $stock; $i++) { ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $i * $prix_vente ?> FCFA</td>
        <td><?= LIVRAISON ?> FCFA</td>
        <td><?= $i * $prix_vente + LIVRAISON ?> FCFA</td>
      </tr>
    <?php } ?>
  </tbody>
</table>


      <!--7 Avant l'alerte-->
   
<p class="text-muted small">
Ventes possibles avant l'alerte de stock : <?= $ventes_possibles ?></p>
  </main>
    


  <footer class="bg-dark text-white py-3">
    <div class="container small">
      <p class="mb-1">Ndiaga Tech · Marché Sandaga, Dakar</p>
      <p class="mb-1">Téléphone et WhatsApp : 77 000 00 50 · Ouvert du lundi au samedi, de 9 h à 20 h</p>
      <p class="mb-0">Projet pédagogique · structure fictive</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  <!--8 Les cas de test-->

