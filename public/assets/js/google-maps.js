function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 19.031344, lng: 72.901851};
    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 10,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'MMRDA COLONY, CHEMBUR' // Title Location
    });
}
