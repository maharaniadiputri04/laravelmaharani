<?php $__env->startSection('title', 'Coba'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class= "card-body">
        <h3>Nama Teman : <?php echo e($friend['nama']); ?></h3>
        <h3>No Telepon Teman : <?php echo e($friend['no_telp']); ?></h3>
        <h3>Alamat Teman : <?php echo e($friend['alamat']); ?></h3>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelpertama\resources\views/friends/show.blade.php ENDPATH**/ ?>