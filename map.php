<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Map</title>
		<link rel="stylesheet" href="styles.css" />
		<script src="https://unpkg.com/leaflet@latest/dist/leaflet.js"></script>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@latest/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet-control-geocoder@latest/dist/Control.Geocoder.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@latest/dist/Control.Geocoder.css" />
	</head>
	<body>
		<header>
			<h1>MAP</h1>
		</header>
		<ul>
			<li class="map"><a href="http://localhost:3000/chat">Chat</a></li>
			<li class="map"><a href="index.php">Index</a></li>
			<li class="map"><a href="config.php">Config</a></li>
			<li class="map"><a href="m.php">Mailer Utility</a></li>
		</ul>
		<div id="map" style="width:100%;height:500px;"></div>
		<script>
			let map=L.map("map").setView([0,0],2)
			let osm=L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(map)
			let gs=L.tileLayer("https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",{
				subdomains:["mt0","mt1","mt2","mt3"]
			}).addTo(map)
			let ows=L.tileLayer.wms("https://ows.mundialis.de/services/service?",{
				layers:"TOPO-OSM-WMS"
			}).addTo(map)
			let bl={
				"Google Satellite":gs,
				"Mundialis":ows,
				"Open Street Map":osm
			}
			let ol={
				"Marker":L.marker([0,0]).addTo(map)
			}
			L.control.scale().addTo(map)
			L.Control.geocoder().addTo(map)
			L.control.layers(bl,ol).addTo(map)
			map.doubleClickZoom.disable()
map.on("dblclick",e=>{
        let coord=map.mouseEventToLatLng(e.originalEvent)
        L.marker([coord.lat,coord.lng]).addTo(map).bindPopup(e.latlng.toString())
        L.circle([coord.lat,coord.lng],{color:"#FF0000FF",fillColor:"#00FF00FF",fillOpacity:0.3,radius:100000}).addTo(map)
})
		</script>
	</body>
</html>
