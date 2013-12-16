<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

    <head>
        <title>Tutoriel Google Maps</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et
        qu'elle ne peut pas être redimensionnée par l'utilisateur -->
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <!-- Inclusion de l'API Google MAPS -->
        <!-- Le paramètre "sensor" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function initialiser() {
                //var latlng = new google.maps.LatLng(46.779231, 6.659431);
                var latlng = new google.maps.LatLng(31.630218,-8.015999);
                //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
                //de définir des options d'affichage de notre carte
                var options = {
                    center: latlng,
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                
                //constructeur de la carte qui prend en paramêtre le conteneur HTML
                //dans lequel la carte doit s'afficher et les options
                var carte = new google.maps.Map(document.getElementById("carte"), options);

                //création du marqueur
				var marqueur = new google.maps.Marker({
					position: new google.maps.LatLng(31.630299,-8.015999),
					map: carte,
					draggable: true,
					icon: "./pol.png"
				});
				google.maps.event.addListener(marqueur, 'click', function() {
			        alert("Le marqueur a été cliqué.");//message d'alerte
			    });
				/****************Nouveau code****************/
				
				//chemin du tracé
				var parcoursBus = [
					new google.maps.LatLng(31.630000,-8.015999),
					new google.maps.LatLng(31.639000,-8.015999)
				];
				
				var traceParcoursBus = new google.maps.Polyline({
					path: parcoursBus,//chemin du tracé
					strokeColor: "#FF0000",//couleur du tracé
					strokeOpacity: 1.0,//opacité du tracé
					strokeWeight: 2//grosseur du tracé
				});
				
				//lier le tracé à la carte
				//ceci permet au tracé d'être affiché sur la carte
				traceParcoursBus.setMap(carte);

				/****************Nouveau code****************/
	
				
				//sommets du polygone
				var parcelleHeig = [
					new google.maps.LatLng(31.630000,-8.015999),
					new google.maps.LatLng(31.630000,-8.015000),
					new google.maps.LatLng(31.639000,-8.015000),
					new google.maps.LatLng(31.639000,-8.015999)
				];

				polygoneParcelleHeig = new google.maps.Polygon({
					paths: parcelleHeig,//sommets du polygone
					strokeColor: "#0FF000",//couleur des bords du polygone
					strokeOpacity: 0.8,//opacité des bords du polygone
					strokeWeight: 2,//épaisseur des bords du polygone
					fillColor: "#0FF000",//couleur de remplissage du polygone
					fillOpacity: 0.35////opacité de remplissage du polygone
				});

				//lier le polygone à la carte
				//ceci permet au polygone d'être affiché sur la carte
				polygoneParcelleHeig.setMap(carte);

            }
        </script>
    </head>

    <body onload="initialiser()">
        <div id="carte" style="width:100%; height:100%"></div>
    </body>
</html>

<!-- http://maps.googleapis.com/maps/api/geocode/json?latlng=31.627696,-8.009509&sensor=true -->