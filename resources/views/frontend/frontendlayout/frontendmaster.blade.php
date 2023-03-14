<!DOCTYPE html>

<html dir="rtl" lang="fa" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {!! SEO::generate() !!}
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/logo/icon.jpg')}}" />

    <script src="{{ asset('js/sweetalert.min.js') }}"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="{{  asset('frontend/css/all.min.css') }}" >

    <link rel="stylesheet" href="{{  asset('frontend/css/feather.css') }}" >
    <link rel="stylesheet" href="{{  asset('frontend/css/materialdesignicons.min.css') }}" >
    <link rel="stylesheet" href="{{  asset('frontend/css/customstyle.css') }}" >

    <link rel="stylesheet" href="{{  asset('frontend/css/flag-icon.min.css') }}" >


        <link href="{{  asset('frontend/css/themertl.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{  asset('frontend/css/customrtl.css') }}" >













@yield('style')
</head>
<body>

<!-- Navigation-->
@include('frontend.frontendlayout.menu')



@yield('content')



@yield('script')

@include('sweet::alert')
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
<script src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>
<script type="text/javascript">
   /* var player = videojs('my-videos', {
        playbackRates: [0.5, 1, 1.25,1.5, 2],
        fluid:true,
        plugins: {
            hotkeys: {
                volumeStep: 0.1,
                seekStep: 5,
                enableModifiersForNumbers: false
            },
        },
    });
*/
    videojs("video_1", {
        playbackRates: [0.5, 1, 1.25,1.5, 2],
        fluid:true,
        plugins: {
            hotkeys: {
                volumeStep: 0.1,
                seekStep: 5,
                enableModifiersForNumbers: false
            },
        }}, function() {

        var player = this;
        player.controlBar.addChild('QualitySelector');
    });


</script>







<!-- pages-->
@include('frontend.frontendlayout.footer')
</body>
</html>
