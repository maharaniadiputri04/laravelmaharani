<?php $__env->startSection('title', 'Groups'); ?>

<?php $__env->startSection('content'); ?>
<a href="/groups/create" class="btn btn-primary mb-2 btn-sm"><i class="fas fa-plus"></i> Tambah Group</a>
<div class="row">


<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-3">

<div class="card" style="width: 17rem;">
  <div class="card-body">
    <a href="/groups/<?php echo e($group['id']); ?>"class="card-title"><?php echo e($group['name']); ?></a>
    <p class="card-text"><?php echo e($group['description']); ?></p>
  <hr>
  <a href="<?php echo e(url('groups/createmember/'. $group['id'])); ?>" class="card-link btn-primary">Tambah Anggota</a>

<?php $__currentLoopData = $group->member_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($friend->status == 1): ?>
  <li class="mt-2"> <?php echo e($friend->friends->nama); ?> | <a href="<?php echo e(url('groups/deletemember/'. $friend->id)); ?>" class="btn btn-warning btn-sm text-white">hapus</a></li>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php
    $jumlah = $group->member_groups->where('status', 1)->count();
    $jumlah_keluar = $group->member_groups->where('status', 2)->count();
?> <br>
<p>Anggota : <?php echo e($jumlah); ?> anggota
  <br>
  Anggota Keluar : <?php echo e($jumlah_keluar); ?> anggota</p>




  <hr>
    <a href="/groups/<?php echo e($group['id']); ?>/edit" class="card-link btn-warning">Edit Group</a>
    <form action="/groups/<?php echo e($group['id']); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
    <button class="card-link btn-danger">Delete Group</a>
    </form>
  </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="mt-3">
  <?php echo e($groups->links('paginationcustom')); ?>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelpertama\resources\views/groups/index.blade.php ENDPATH**/ ?>