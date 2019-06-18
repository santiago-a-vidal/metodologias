
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

function addMarkerToGroup(group, coordinate, html) {
    let marker = new H.map.Marker(coordinate);
    marker.setData(html);
    group.addObject(marker);
}
/**
 * An event listener is added to listen to tap events on the map.
 * Clicking on the map displays an alert box containing the latitude and longitude
 * of the location pressed.
 * @param  {H.Map} map      A HERE Map instance within the application
 */


//Esta es la funcion que permite agregar los marcadores
function addInfoBubble(map) {

    let group = new H.map.Group();
    map.addObject(group);
    group.addEventListener('tap', function (evt) {

        let bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {

        content: evt.target.getData()
    });

    ui.addBubble(bubble);
    }, false);
      let longitud = document.getElementsByClassName('longitud');
       let latitud = document.getElementsByClassName('latitud');
       let imagen = document.getElementsByClassName('imagen');
       let descripcion= document.getElementsByClassName('descripcion');
       let estado = document.querySelectorAll('#estadoForm');
       let id_denuncia= document.querySelectorAll("#idForm");
       let completar;
       let completada;
       //iteramos las denuncias y las insertamos en el mapa
       for(let i = 0; i < latitud.length; i++){

        if (id_denuncia[i].value<0){
          completar = " ";
       }
      else{
        completar = '<div><a href="completarDenuncia/'+id_denuncia[i].value+'">COMPLETAR</a></div>';

      }
      if (estado[i].value==1){
        completada = "<p>completada</p>";
     }
    else{
      completada = "";

    }
    console.log(completada);

      addMarkerToGroup(group, {lat: latitud[i].innerHTML, lng: longitud[i].innerHTML},
                   '<div class="descripcion"><div><a> <img class="imgDenuncia" src="'+imagen[i].innerHTML+'"></a>' +
                       '</div><div> '+descripcion[i].innerHTML+'</div>'+completar+completada+'</div>');



       }
}
addInfoBubble(map) ;
