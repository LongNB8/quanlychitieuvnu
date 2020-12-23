
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="chitieu-select">
            <form method="post" action="<?php echo e(route('loctruong', $select_tr)); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <label for="Lựa chọn">Lựa chọn:</label>
                <select name="tieuchi" id="tieuchi" class="custom-select">
                <?php $__currentLoopData = $option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($op==$select_op): ?>
                        <option value="<?php echo e($op); ?>" selected><?php echo e($op); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($op); ?>"><?php echo e($op); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <button type="submit" class="btn btn-success">Lọc</button>

            </form>
        </div>


    </div>




    <table class="responstable">
        <thead>
        <tr>
            <th>Stt</th>
            <th>Tiêu chí</th>
            <th>Năm</th>
            <th>Hoàn thành</th>
            <th>Tổng</th>
            <th>Đơn vị</th>
            <th>Trường</th>
            <th>Phần trăm</th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0;$i<count($daihan);$i++): ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo e($daihan[$i]-> ma_tc); ?></td>
                <td><?php echo e($daihan[$i]->nam); ?></td>
                <td><?php echo e($daihan[$i]->xong); ?></td>
                <td><?php echo e($daihan[$i]->tong); ?></td>
                <td><?php echo e($daihan[$i]->don_vi); ?></td>
                <td><?php echo e($daihan[$i]->ma_truong); ?></td>
                <td><?php echo e($daihan[$i]->phantram*100); ?> %</td>

            </tr>
        <?php endfor; ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/truong.blade.php ENDPATH**/ ?>