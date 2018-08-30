(function(L, document) {

var latlon = [ 50.849223,5.687635];

var maps = [];

  $( ".map" ).each(function( index, element ) {


	maps[ index ] = L.map( $( this ).attr('id'),
	                       { measureControl: true} ).setView( latlon, 12);


	 maps[ index ].on('measurefinish', function(evt) {
			      writeResults(evt);
      });
      
function writeResults(results) {

       alert( JSON.stringify(
          {
            area: results.area,
            areaDisplay: results.areaDisplay,
            lastCoord: results.lastCoord,
            length: results.length,
            lengthDisplay: results.lengthDisplay,
            pointCount: results.pointCount,
            points: results.points
          },
          null,
          2
        ) );
  }      

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 21,
		attribution: '',
		id: 'mapbox.light'
	}).addTo( maps[ index ]);
	
	});

if( maps.length > 1 )
{
        maps[0].sync(maps[1]  );
		maps[1].sync(maps[0]  );
}
		//maps[0].sync(maps[1], {offsetFn: L.Sync.offsetHelper([0, 0], [1, 0.5] )} );
		//maps[1].sync(maps[0], {offsetFn: L.Sync.offsetHelper([0, 0], [1, 0.5] )} );


})(window.L, window.document);