<!-- Il faut démontrer qu'on sait intégrer Open Street Map donc je retire Google Map -->
<!--
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5730.17916582336!2d3.0732463526177143!3d44.10214349493454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b24b17ede661c3%3A0xf92248de51dd6835!2sAMIO%202iSA%20Sesame%20PEI!5e0!3m2!1sfr!2sfr!4v1595805853693!5m2!1sfr!2sfr" style="border:0" allowfullscreen></iframe>
</div>
-->
<div class="container-fluid map">
    <div id="map">
        <!-- Ici la map : -->
    </div>
</div>
<!-- Fichiers Javascript -->
<!-- Je l'intégre ici le code JS : choix volontaire fait en conscience -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<script type="text/javascript">
    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat = 44.103168;
    var lon = 3.076985;
    var macarte = null;
    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 15,
            maxZoom: 200
        }).addTo(macarte);
        var marker = L.marker([44.103168, 3.076985]).addTo(macarte);
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
<!-- Fin du Script : OpenStreetMap -->
