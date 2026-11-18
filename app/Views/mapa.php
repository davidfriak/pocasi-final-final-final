<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <style>
        #mapa {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
        <?= $this->include("layout/navbar");?>
    <h1>Interaktivní Mapa</h1>
    <div id="mapa"></div>

    <script>
        // Inicializace mapy
        const mapa = L.map('mapa').setView([49.5, 15.5], 7);

        // Přidání map tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19
        }).addTo(mapa);

        // Přidání markeru
        L.marker([50.08, 14.44]).addTo(mapa)
            .bindPopup('Praha')
            .openPopup();

        L.marker([49.195225, 16.607989]).addTo(mapa)
            .bindPopup('Brno');
        L.marker([49.0668864, 17.4798311]).addTo(mapa)
            .bindPopup('Restaurace Koníček');

        var polygon = L.polygon([
            [49.0668864, 17.4798311],
            [49.1715594, 17.5119478],
            [49.2266553, 17.6663375]
        ]).addTo(mapa);

        var polygon1 = L.polygon([
            [49.0668864, 17.4798311],
            [49.1162611, 17.4278806]
        ]).addTo(mapa);

        var circle = L.circle([49.1162611, 17.4278806], {
            color: 'purple',
            fillColor: 'rgb(150, 245, 158)',
            fillOpacity: 0.2,
            radius: 600
        }).addTo(mapa)
            .bindPopup('Jalubí');
            
    </script>
</body>
</html>