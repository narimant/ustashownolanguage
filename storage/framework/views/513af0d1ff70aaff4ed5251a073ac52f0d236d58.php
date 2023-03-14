<!DOCTYPE html>

<html dir="rtl" lang="fa" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php echo SEO::generate(); ?>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('frontend/logo/icon.jpg')); ?>" />

    <script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/all.min.css')); ?>" >

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/feather.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/materialdesignicons.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/customstyle.css')); ?>" >

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flag-icon.min.css')); ?>" >


        <link href="<?php echo e(asset('frontend/css/themertl.min.css')); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/customrtl.css')); ?>" >













<?php echo $__env->yieldContent('style'); ?>
</head>
<body>

<!-- Navigation-->
<?php echo $__env->make('frontend.frontendlayout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->yieldContent('content'); ?>



<?php echo $__env->yieldContent('script'); ?>

<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
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
<?php echo $__env->make('frontend.frontendlayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\ustashow\ustashow\resources\views/frontend/frontendlayout/frontendmaster.blade.php ENDPATH**/ ?>