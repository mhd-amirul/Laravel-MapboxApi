@extends('layouts.app')

@section('container')
    <div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Mapbox
                    </div>
                    <div class="card_body">
                        <div id='map' style='width: 100%; height: 70vh;'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Form
                    </div>
                    <div class="card_body pb-3">
                        <div class="row m-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Longtitude</label>
                                    <input id="long-map-api" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lat-map-api">Latitude</label>
                                    <input id="lat-map-api" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="map-place-name">Place name</label>
                                    <input id="map-place-name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p id="map-api-key" hidden>{{ env('MAPBOX_KEY') }}</p>

        @push('scripts')
            <script>
                const token = document.getElementById('map-api-key').innerHTML;

                mapboxgl.accessToken = token;

                const map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v12',
                    center: [115.2191170114541, -8.653244367664342],
                    zoom: 9,
                });

                map.on('click', function(e) {
                    const lngLat = e.lngLat;

                    document.getElementById('long-map-api').value = lngLat.lng
                    document.getElementById('lat-map-api').value = lngLat.lat

                    fetch('https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat.lng + ',' + lngLat.lat + '.json?types=place&access_token=' + mapboxgl.accessToken)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('map-place-name').value = data.features[0].place_name;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            </script>
        @endpush
    </div>
@endsection
