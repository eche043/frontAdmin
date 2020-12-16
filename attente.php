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
	<title>Reservation en attente</title>
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
						<a class ="nav-link" href="#" style="color: white;"> Reservation </a>
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

	<h1 style="text-align: center; margin-top: 30px; margin-bottom: 70px;">Les Reservation en attente</h1>
      <table class="table table-light tableau">
        <thead>
          <tr>
            <th>Numéro</th>
            <th>Salle</th>
            <th>Nom reservant</th>
            <th>Date et heure</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Salle ODA</td>
            <td>Kouamé</td>
            <td>16/12/2020 8:10 à 12:00</td>
            <td><button type="button" class="btn btn-sm btn-success mr-1">Accepter</button><button type="button" class="btn btn-sm btn-danger">Refuser</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Salle Fab</td>
            <td>Doumbia</td>
            <td>17/12/2020 8:10 à 12:00</td>
            <td><button type="button" class="btn btn-sm btn-success mr-1">Accepter</button><button type="button" class="btn btn-sm btn-danger">Refuser</button></td>

          </tr>
          <tr>
            <td>3</td>
            <td>Salle Fab</td>
            <td>Doumbia</td>
            <td>17/12/2020 8:10 à 12:00</td>
            <td><button type="button" class="btn btn-sm btn-success mr-1">Accepter</button><button type="button" class="btn btn-sm btn-danger">Refuser</button></td>
          </tr>
        </tbody>
      </table>
    </div>

		</div>

</body>
</html>