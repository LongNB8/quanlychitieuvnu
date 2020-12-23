
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <?php $__currentLoopData = $truong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <img src="<?php echo e(asset('images/'.$t->logo)); ?>">
                    <a href="" class="name_school" style="font-size: 3em; color: #3346ee"><?php echo e($t->ten); ?></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-sm-2"></div>


    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/dsDonviDaotao.blade.php ENDPATH**/ ?>