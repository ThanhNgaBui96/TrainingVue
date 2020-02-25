<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TEST</title>
</head>
<body class="sidebar-fixed sidebar-lg-show">
<div id="app2">
    <h1 class="font-bold">Example Project</h1>

    <test-message></test-message>
</div>
</body>
<script>
    Vue.component('test-message', {
      template: '<h1>NDDDD</h1>'
    });

  const app = new Vue({
    el: '#app2',
  });
</script>
<!-- <script src="<?php echo e(mix('js/vue-test-app.js')); ?>"></script>   -->
</html><?php /**PATH /usr/share/nginx/html/resources/views/sample.blade.php ENDPATH**/ ?>