<?php
    use App\Models\Member_groups;
?>


<?php $__env->startSection('title', 'Groups'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Tambah Member Group <?php echo e($group->name); ?></h3>
<form action="<?php echo e(url('groups/storemember/'. $group->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <table class="table">
        <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $cek = Member_groups::where('friends_id', $f->id)
            ->where('groups_id', $group->id)
            ->where('status', 1)
            ->first();
        ?>
        <?php if($cek == NULL): ?>
        <tr>
            <td>

                <?php echo e($cek); ?>

            </td>
            <td><?php echo e($f->nama); ?></td>
            <td><div class="form-check">
                <input class="form-check-input" type="checkbox" name="member<?php echo e($f->id); ?>" value="<?php echo e($f->id); ?>" id="<?php echo e($f->nama); ?>">
                <label class="form-check-label" for="<?php echo e($f->nama); ?>">
                    Pilih
                </label>
            </div></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="text-right">
        <button type="submit" class="btn btn-success">Tambah Member</button>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelpertama\resources\views/groups/createmember.blade.php ENDPATH**/ ?>