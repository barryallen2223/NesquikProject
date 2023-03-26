<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key=<?php echo e(env('GOOGLE_MAPS_API_KEY')); ?>&libraries=places&region=GB'></script>
<script defer>
	function initialize() {
		var mapOptions = {
			zoom: 13,
			minZoom: 6,
			maxZoom: 17,
			zoomControl:true,
			zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			},
			center: new google.maps.LatLng(<?php echo e($viewData["latitude"]); ?>, <?php echo e($viewData["longitude"]); ?>),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			panControl:false,
			mapTypeControl:false,
			scaleControl:false,
			overviewMapControl:false,
			rotateControl:false
	  	}
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var image = new google.maps.MarkerImage("assets/images/pin.png", null, null, null, new google.maps.Size(40,52));
        var places = <?php echo json_encode($viewData["mapUbications"], 15, 512) ?>;

        for(place in places)
        {
            
            place = places[place];
            if(place.latitud && place.longitud)
            {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitud, place.longitud),
                    icon:image,
                    map: map,
                    title: place.name
                });
                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        infowindow.setContent(generateContent(place))
                        infowindow.open(map, marker);
                    }
                })(marker, place));
            }
        }
	}
	google.maps.event.addDomListener(window, 'load', initialize);

    function generateContent(place)
    {
        var content = `
       
                            Place Title:`+place.name+`
                            Address:`+place.address+``;

    return content;

    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/home/index.blade.php ENDPATH**/ ?>