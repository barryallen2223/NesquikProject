@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div id="map-canvas"></div>
@endsection

@section('scripts')
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key=AIzaSyBQtSElnuM2JqDGa7jODM8wHx7lgSewcAM&libraries=places&region=GB={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&region=GB'></script>
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
                center: new google.maps.LatLng({{ $viewData["latitude"] }}, {{  $viewData["longitude"] }}),
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
            var places = @json($viewData["mapUbications"]);

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

            var searchBox = new google.maps.places.SearchBox(document.getElementById('search-places'));

            google.maps.event.addListener(searchBox, 'places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    var marker = new google.maps.Marker({
                        map: map,
                        title: place.name,
                        position: place.geometry.location,
                        icon:image
                    });

                    bounds.extend(place.geometry.location);
                });
                map.fitBounds(bounds);
            });
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
@endsection

@section('styles')
    <style>
        #search-places {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 100;
            width: 300px;
            padding: 5px;
            font-size: 16px;
            background-color: #fff;
            border-radius: 3px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection
