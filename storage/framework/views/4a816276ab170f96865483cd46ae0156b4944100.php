<!DOCTYPE html>
<html>
<head>
<?php echo $__env->yieldContent('title'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo e(mix('/css/app.css')); ?>">
<script src="https://unpkg.com/react@16.6.3/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@16.6.3/umd/react-dom.production.min.js"></script>
<script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<style>
    html, body {
        /* background-color: red; */
    }
</style>
</head>
<body>
<div id="root"></div>
<script type="text/javascript" src="<?php echo e(mix('/js/app.js')); ?>"></script>
</body>
</html><?php /**PATH H:\venkat\lr\react-l\resources\views/app.blade.php ENDPATH**/ ?>