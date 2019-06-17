function addMarkersToMap(map, coordinate) {
  map.removeObjects(map.getObjects());
  var marker = new H.map.Marker(coordinate);
  map.addObject(marker);
}
let platform = new H.service.Platform({
  app_id: 'devportal-demo-20180625',
  app_code: '9v2BkviRwi9Ot26kp2IysQ',
  useHTTPS: true
});
let pixelRatio = window.devicePixelRatio || 1;
let defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

let map = new H.Map(document.getElementById('map'),
defaultLayers.normal.map,{
  center: {lat: -37.32167, lng: -59.13316},
  zoom: 13,
  pixelRatio: pixelRatio
});

let behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
let ui = H.ui.UI.createDefault(map, defaultLayers);


function setUpClickListener(map) {
  // Attach an event listener to map display
  // obtain the coordinates and display in an alert box.
  map.addEventListener('tap', function (evt) {
    var coord = map.screenToGeo(evt.currentPointer.viewportX,
      evt.currentPointer.viewportY);

      let coordendas = document.getElementsByClassName('coordenada');
      coordendas[0].value = -Math.abs(coord.lat.toFixed(4));
      coordendas[1].value = -Math.abs(coord.lng.toFixed(4));
    });
  }


  setUpClickListener(map);
