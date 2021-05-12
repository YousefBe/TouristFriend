<div>
    <div id="map" class=" map-div "></div>
    @push('map-scripts')
        <script>
            const longlat = [{{ $longtiude }}, {{ $latitude }}];
            var map = tt.map({
                key: "glFWPpb3zzMcEuUWlUPuS79Scum7Kg54",
                container: "map",
                center: longlat,
                zoom: parseInt({{ $zoomLevel }}),
            });
            map.addControl(new tt.FullscreenControl());
            map.addControl(new tt.NavigationControl());
            // console.log(map);
            map.addControl(
                new tt.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true,
                    },
                    trackUserLocation: true,
                })
            );
            // if its a country map , we want to add some popups to the map adding our own data
            if ({{ $mapType === 'country' }}) {
                const POIS = {!! json_encode($POIS) !!};
                const hotels = {!! json_encode($hotels) !!};
                const restaurants = {!! json_encode($restaurants) !!};
                // console.log(POIS);
                console.log(restaurants);
                console.log(hotels);
               if (POIS) {
                POIS.forEach(POI => {
                    const poiLonglat = [POI.longtiude, POI.latitude];
                    // console.log(poiLonglat);
                    setPopup(poiLonglat, 'poi-marker')
                });
               }

            }
            // this function creates popus by taking postion location and element id for styling the popup
            function setPopup(popupLonglat, elementId) {
                var element = document.createElement('div');
                element.id = elementId;

                var marker = new tt.Marker({
                    element: element
                }).setLngLat(popupLonglat).addTo(map);
                var popupOffsets = {
                    top: [0, 0],
                    bottom: [0, -70],
                    "bottom-right": [0, -70],
                    "bottom-left": [0, -70],
                    left: [25, -35],
                    right: [-25, -35],
                };
                var popup = new tt.Popup({
                    offset: popupOffsets
                }).setHTML(
                    "your company name, your company address"
                );
                marker.setPopup(popup);
            }

        </script>
    @endpush

</div>
