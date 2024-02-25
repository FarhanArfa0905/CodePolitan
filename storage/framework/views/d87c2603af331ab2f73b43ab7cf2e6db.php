<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href=  "<?php echo e(asset('bootstrap-5/css/bootstrap.min.css')); ?>" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="<?php echo e(asset('bootstrap-5/js/bootstrap.bundle.min.js')); ?>" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .blog {
            border-bottom: 1px solid lightgrey;
        }
    </style>
</head>
<body>
    <h1>Blog Codepolitan</h1>
    <div>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($post[0]); ?></h5>
                    <p class="card-text"><?php echo e($post[1]); ?></p>
                    <p class="card-text"><small class="text-muted">Last Updated at<?php echo e(date("d M Y H:i", strtotime($post[3]))); ?></small></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjekCodePolitan\my-project\resources\views/posts/index.blade.php ENDPATH**/ ?>