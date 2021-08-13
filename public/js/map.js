mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YW5jb25jZXB0IiwiYSI6ImNrcnlwNGFkOTEyaDUyb244MmxyajA4MmsifQ.3-1ZX8F1rq2tJWT22jow3g';
var map = new mapboxgl.Map({
    container: 'contact-map',
    style: 'mapbox://styles/titanconcept/ckryp1uv16ilw17plgn35p2hp',
    center: [-96.78881347668334, 32.79041060859208],
    zoom: 14,
    scrollZoom: false,
});
var marker = new mapboxgl.Marker()
    .setLngLat([-96.78881347668334, 32.79041060859208])
    .addTo(map);
