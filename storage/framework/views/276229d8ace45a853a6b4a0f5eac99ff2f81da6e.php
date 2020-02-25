<?php
$config = [
    'appName' => config('app.name'),
];
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?> data-test="1">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo e(config('app.name')); ?></title>

  <link rel="stylesheet" href="<?php echo e(mix('dist/default/css/app.css')); ?>">
</head>
<body class="sidebar-fixed sidebar-lg-show">
  <div id="app"></div>

  
  <script>
    window.config = <?php echo json_encode($config, 15, 512) ?>;
  </script>

  
  <script src="<?php echo e(mix('dist/default/js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH /usr/share/nginx/html/resources/views/default.blade.php ENDPATH**/ ?>