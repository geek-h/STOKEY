
<?php 

	$username = "root";
	$dbname = "db_gestion";
	$passwd = "";
	$host = "localhost" ;

	$conn_db = new mysqli($host,$username,$passwd,$dbname) ;
	 if ($conn_db->connect_error) {
	 	echo "UNE ERREURE C'EST PRODUITE LORS DE LA CONNECTION , SI CELA PERSISTE VEILLEZ CONTACTER LE DEVELOPPEUR";
	 }else{

	 	$requete1 = "SELECT *FROM stock" ;
	 	$send = $conn_db->query($requete1) ;

	 	echo '<div class="col-md-12">';
	 	echo '<div class="row">'; 
	 	$inp = 0 ;

	 	while ($ligne = $send->fetch_assoc()) {

	 		$inp= $inp+1;
	 		
	 	echo '
	 	<a href="#Modal" data-bs-toggle="modal" class="shadow-lg p-2 mb-3 rounded btn btn-light" style="margin-left:25px" >

	 			
		 	<div  style="max-width: 18rem;">
				  <div class="card-header">'.$ligne['NOM_PRODUIT'].'</div>
				  <div class="card-body">
				    <img width="250px" src="photos/imi_'.$inp.'.jpg">
				  </div>
			</div>
			<div><small class="text-muted">'.$ligne['CODE_PRODUIT'].' /<span style="color:green"> E : '.$ligne['DATE_ENTRER'].'</span> <span style="color:red"> S : '.$ligne['DATE_SORTIE'].'</span></small></div>
		</a>
		';

	 	}

	 	echo '
	 	<div class="shadow-lg p-2 mb-3 rounded" style="margin-left:25px" >
		 	<div  style="max-width: 18rem;">
				  
				  <div class="card-body">
				    <svg xmlns="http://www.w3.org/2000/svg" width="250" style="color:green" height="250" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
					</svg>
				  </div>
			</div>
		</div>
		';

		include('rte.inc.php') ;

	 	echo '</div>';
	 	echo '</div>';
	 }

?>