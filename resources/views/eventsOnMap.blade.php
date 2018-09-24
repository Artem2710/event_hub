@extends('header')


@section('eventsOnMap')
    <!--Services Area Starts-->
    <style type="text/css">
        #mymap {
            width: 100%;
            height: 100%;
        }
    </style>
    <div id="services" class="services-area section-padding">
        <div class="container events">
            <div class="row">
                <div class="single-contact text-left">
                    <i class="fa fa-home"></i>
                    <h2>Location</h2>
                    <p>123, New York, USA</p> <!--edit here-->
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <div class="banner-btn">
                        <a href="{{route('event')}}">join to event</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mymap"></div>


        <script type="text/javascript">


            var locations = <?php print_r(json_encode($locations)) ?>;


            var mymap = new GMaps({
                el: '#mymap',
                lat: 49.988358,
                lng: 36.232845,
                zoom:12
            });


            $.each( locations, function( index, value ){
                mymap.addMarker({
                    lat: value.lat,
                    lng: value.lng,
                    title: value.city,
                    click: function(e) {
                        alert('This is '+value.city+', gujarat from Ukraine.');
                    }
                });
            });


        </script>
    </div>

    <!--Services Area Ends-->


@endsection