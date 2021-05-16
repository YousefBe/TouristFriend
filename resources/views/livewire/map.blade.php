<div>
    <div id="map" class=" map-div " wire:ignore></div>

    <div class="flex justify-between ">
        <div class="flex items-center  w-1/2">
            <span class="text-sm mr-1">residence hotel</span>
            <select class="form-select mt-1 appearance-none mr-2  w-2/3" wire:model="hotelLocation">
              <option value="">choose your hotel</option>
                @foreach ($hotels as $hotel)
                <option value="{{ trim($hotel->longtiude) . ',' . trim($hotel->latitude) }}">
                        {{ $hotel->name }}</option>
                @endforeach
            </select>
        </div>
        @if ($mapType === 'country' || $mapType === 'hotel')
            <div class="flex items-center w-1/2 ">
                <span class=" mr-1 text-sm">to point</span>
                <select class="form-select mt-1 appearance-none mr-2 w-2/3" wire:model="endPos">
                    <option value="">to point</option>
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->longtiude . ',' . $restaurant->latitude }}">
                            {{ $restaurant->name }}</option>
                    @endforeach
                    @foreach ($POIS as $poi)
                        <option value="{{ $poi->longtiude . ',' . $poi->latitude }}">{{ $poi->name }}</option>
                    @endforeach
                    @foreach ($cities as $city)
                        <option value="{{ $city->longtiude . ',' . $city->latitude }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            @else
            <p class=" mr-1 text-lg font-bold mt-2"> to {{$destination->name}}</p>
        @endif
        <button
            class="bg-green-700 hover:bg-white hover:text-green-700 px-1 transition ease-in-out duration-300 py-1 rounded text-white focus:outline-none"
            wire:click="createRoute">submit</button>
    </div>
    @if ($results)
        <div class=" bg-white mb-12 p-4 h-auto">
            <div class="flex">
                <i class="fas fa-route mr-4"></i>
                <p class=" text-base font-semibold italic "> distance im KMs : {{ $distanceTraveledInKms }}</p>
            </div>
            <div class="flex mt-2">
                <i class="fas fa-clock mr-4"></i>
                <p class=" text-base font-semibold italic "> ETA : {{ $eta }}</p>
            </div>
        </div>

    @endif

    @push('map-scripts')
        <script>
            const placeData = {
                name: '',
                elementId: '',
            }
            const longlat = [{{ $longtiude }}, {{ $latitude }}];
            // console.log(longlat.join(','));
            var map = tt.map({
                key: "glFWPpb3zzMcEuUWlUPuS79Scum7Kg54",
                container: "map",
                center: longlat,
                zoom: parseInt({{ $zoomLevel }}),
            });
            const hotels = {!! json_encode($hotels) !!};
            if (hotels) {
                hotels.forEach((Hotel) => {
                    placeData.name = Hotel.name;
                    placeData.elementId = 'hotel-marker';
                    const HotelLongLat = [Hotel.longtiude, Hotel.latitude];
                    setPopup(HotelLongLat, placeData)
                })
            }

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
            if ({{ $mapType === 'country' ? 1 : 0 }} || {{ $mapType === 'hotel' ? 1 : 0 }}) {

                const POIS = {!! json_encode($POIS) !!};
                const restaurants = {!! json_encode($restaurants) !!};
                const cities = {!! json_encode($cities) !!};
                // console.log(cities);
                // console.log(POIS);
                // console.log(restaurants);
                // console.log(hotels);
                if (POIS) {
                    POIS.forEach(POI => {
                        const poiLonglat = [POI.longtiude, POI.latitude];
                        // console.log(poiLonglat);
                        // console.log(POI);s
                        placeData.name = POI.name;
                        placeData.elementId = 'poi-marker';
                        setPopup(poiLonglat, placeData)
                    });
                }
                if (restaurants) {
                    restaurants.forEach((res) => {
                        placeData.name = res.name;
                        placeData.elementId = 'res-marker';
                        const resLongLat = [res.longtiude, res.latitude];
                        setPopup(resLongLat, placeData)
                    })
                }
                if (cities) {
                    cities.forEach((city) => {
                        placeData.name = city.name;
                        placeData.elementId = 'city-marker';
                        const cityLongLat = [city.longtiude, city.latitude];
                        setPopup(cityLongLat, placeData)
                    })
                }

            } else {
                const destination = {!! json_encode($destination) !!};
                console.log(destination);
                placeData.name = destination.name;
                destinationLongLat = [destination.longtiude, destination.latitude];
                placeData.elementId = 'poi-marker';
                setPopup(destinationLongLat, placeData)
            }

            livewire.on('createRoute', (props) => {
                // console.log(props.startPos);
                // console.log(props.endPos);
                const locations = `${props.startPos}` + ":" + `${props.endPos}`;
                createRoute(locations);
                MapFocusPosititon = props.startPos.split(',');
                // console.log(MapFocusPosititon);
                moveMap(MapFocusPosititon);
            });
            // this function creates popus by taking postion location and element id for styling the popup
            function setPopup(popupLonglat, placeData) {
                // console.log(placeData);
                var element = document.createElement('div');
                element.id = placeData.elementId;

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
                    `<h1>${placeData.name}</h1>
                                    `
                );
                marker.setPopup(popup);
            }

            function secondsToMinutes(time) {
                myTime = Number(time);
                var h = Math.floor(myTime / 3600);
                var m = Math.floor(myTime % 3600 / 60);
                var s = Math.floor(myTime % 3600 % 60);

                var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
                var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
                var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
                return hDisplay + mDisplay + sDisplay;
            }

            function createRoute(locations) {
                let distanceToDistination = null;
                let timeToReachDistination = null;
                if (map.getLayer('route')) {
                    map.removeLayer('route');
                    map.removeSource('route');
                }
                // console.log(locations);
                tt.services.calculateRoute({
                        key: 'glFWPpb3zzMcEuUWlUPuS79Scum7Kg54',
                        traffic: false,
                        locations: locations
                    })
                    .then(function(response) {
                        var geojson = response.toGeoJson();
                        // console.log(geojson.features[0].properties.summary);
                        distanceToDistination = geojson.features[0].properties.summary.lengthInMeters;
                        timeToReachDistination = geojson.features[0].properties.summary.travelTimeInSeconds;
                        console.log(distanceToDistination);
                        console.log(timeToReachDistination);
                        const formatedTime = secondsToMinutes(timeToReachDistination);
                        Livewire.emit('resultsAreFound', distanceToDistination, formatedTime);
                        // console.log(formatedTime);
                        map.addLayer({
                            'id': 'route',
                            'type': 'line',
                            'source': {
                                'type': 'geojson',
                                'data': geojson
                            },
                            'paint': {
                                'line-color': '#2faaff',
                                'line-width': 4
                            }
                        });
                    })
            }

            function moveMap(location) {
                map.flyTo({
                    center: location,
                    zoom: 14,
                });
            }

        </script>
    @endpush

</div>
