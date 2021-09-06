<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo e(ucfirst(request()->segment(2))); ?></title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo e(url('storage/app/'.config('app.favicon'))); ?>"/>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    <link rel="stylesheet" href="<?php echo e(asset('admin-panel/css/main.css')); ?>">

    
    <style>
        .custom-control-input:checked ~ .custom-control-label::before {
            border-color: lightgray;
            background-color: gray;
        }

        .dashboard-active {
            background-color:rgba(255,255,255,.9);
            color: #343a40 !important;
        }

        #preview {
            color:#343a40 !important;
        }

    </style>

    <?php echo $__env->yieldContent('css'); ?>
</head>
<?php /**PATH D:\xampp\htdocs\kingdom_vision_pro_2\resources\views/admin/layouts/includes/header.blade.php ENDPATH**/ ?>