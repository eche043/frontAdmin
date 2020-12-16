<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name ="viewport" content ="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="admin.js">
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
	<title>Equipement</title>
</head>
<body>
	<nav class="navbar bg-dark">
			  <div class="container">
			    <a class="navbar-brand" href="#">
			      <img src="image/logo.jpg" alt="" width="30" height="30">
			    </a>
			    <button class="btn btn-danger my-2 my-sm-0 btn-sm" type="submit">Se déconnecter</button>
			  </div>
			</nav>
			<div class="row">
		<div class="col-2">
			<nav class ="navbar bg-dark text-white">
				<ul class ="nav navbar-nav">
					<li class ="nav-item">
						<a class ="nav-link" href="admin.php" style="color: white;"> Tableau de bord </a>
					</li>
				
					<li class ="nav-item">
						<a class ="nav-link" href="attente.php" style="color: white;"> Reservation </a>
					</li>
					<li class ="nav-item">
						<a class ="nav-link" href="salles.php" style="color: white;"> Salles </a>
					</li>
					<li class ="nav-item">
						<a class ="nav-link" href="equipement.php" style="color: white;"> Equipements </a>
					</li>
					
				</ul>
			</nav>
		</div>
		<div class="col-10">

	<h1 style="text-align: center; margin-top: 30px; margin-bottom: 70px;">Nos salles</h1> 
	<!--Boutont modal-->
	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong" type="button">Ajouter un équipement</button>
      <table class="table table-striped tableau">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>quantité</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ordinateur</td>
            <td>ordinateur imac</td>
            <td>50</td>
            
          </tr>
          <tr>
            <td>Vidéo projecteur</td>
            <td>description de l'équipement</td>
            <td>50</td>

          </tr>
          <tr>
            <td>tablette</td>
            <td>description de l'équipement</td>
            <td>50</td>
            
          </tr>
        </tbody>
      </table>
    </div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajout d'equipement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Ajout d'equipement</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #FF5733;" action="#">

            <div class="form-row">
                <div class="col">
                    <!-- Nom de la salle -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Nom de l'équipement</label>
                    </div>
                </div>
            
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="text" id="description" class="form-control" aria-describedby="descriptionAria">
                <label for="materialRegisterFormPhone">Description</label>
                
            </div>

            <div class="md-form">
                <input type="text" id="quantite" class="form-control" aria-describedby="descriptionAria">
                <label for="materialRegisterFormPhone">Quantité</label>
                
            </div>
                
            <hr>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>