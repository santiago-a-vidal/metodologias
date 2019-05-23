

function addMarkerToGroup(group, coordinate, html) {
    let marker = new H.map.Marker(coordinate);
    marker.setData(html);
    group.addObject(marker);
}


//Esta es la funcion que permite agregar todos los amrcadores en un mapa
function addInfoBubble(map) {

    let group = new H.map.Group();



    map.addObject(group);
    group.addEventListener('tap', function (evt) {

        let bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
        content: evt.target.getData()
    });
    ui.addBubble(bubble);
    }, false);
//Estos son marcadores harcodeados
    addMarkerToGroup(group, {lat: -37.311726, lng: -59.128931},
        '<div ><a href=>Uriburu y Montiel</a>' +
        '</div><div >Basura<br>Cantidad: Media</div>');


    addMarkerToGroup(group, {lat: -37.330662, lng: -59.128889},
        '<div ><a href=>Constitucion y Paz</a>' +
        '</div><div >Basura<br>Cantidad: Alta</div>');

//Estos son marcadores que trae de la base de datos
//le puse <100 porque no se como saber la cantidad de denuncias que hay cargadas en la base, entonces le mande 100 y fue
for(let i =0 ; i< 100 ; i++){
  //Busca en el map.tpl los elementos que tienen esa id
let latitud = document.getElementById('latitud ' + i);
let longitud = document.getElementById('longitud ' + i);
let descripcion = document.getElementById('descripcion ' + i);

//Corrobora que no sean nulo, porque al poner <100 hay una bocha que no van a existir
 if(latitud !== null &  longitud !== null){

   //agarra el valor del elemento que se selecciono anteriormente
   latitud = latitud.value;
   longitud = longitud.value;
   descripcion = descripcion.value;

//para poder insertar un marcardor necesitas usar la funcion addMarkerToGroup que es de la api
//Esta funcion te pide que insertes un objeto que contenga latitud y longitud de marcador
//entonces cree un objeto ubicacion con atributos: latitud y longitud, que tomaran los valores correspondientes
//de los formularios
    const ubicacion = {
      lat: latitud,
      lng: longitud
  };

  //la forma de llamar a los atributos del objeto "ubicacion" es como esta escrito aca
    addMarkerToGroup(group, {lat:ubicacion["lat"], lng:ubicacion["lng"]} ,informacion);

}


}
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
    zoom: 14,
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
      alert('Las coordenadas a cargar son latitud - longitud  ' + Math.abs(coord.lat.toFixed(4)) +
          ((coord.lat > 0) ? 'N' : 'S') +
          ' ' + Math.abs(coord.lng.toFixed(4)) +
           ((coord.lng > 0) ? 'E' : 'W'));
    });
  }

setUpClickListener(map);
