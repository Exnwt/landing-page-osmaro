// to get current year





/** google_map js **/

function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

const links = document.querySelectorAll('a[href^="#"]');


    function scrollSlider(direction) {
        const slider = document.querySelector(".fasilitas_slider");
        const scrollAmount = 320; // Geser sejauh 320px setiap klik
        slider.scrollBy({ left: direction * scrollAmount, behavior: "smooth" });
    }





