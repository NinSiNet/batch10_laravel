<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('css/blog-home.css')); ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php echo $__env->make('part.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 

  <!-- Page Content -->
  <?php echo $__env->yieldContent('content'); ?>
  
  <!-- /.container -->

  <!-- Footer -->
 
  <?php echo $__env->make('part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap core JavaScript -->
     <!--  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 -->
 <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/batch10_blog/resources/views/template.blade.php ENDPATH**/ ?>