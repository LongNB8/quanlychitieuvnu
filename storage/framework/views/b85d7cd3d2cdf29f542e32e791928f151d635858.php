
<?php $__env->startSection('title'); ?>
Sửa Tiêu Chí
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa Tiêu Chí <?php echo e($tieuchi->ten); ?> </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Sửa Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa tiêu chí</h5>
            <hr>
            <?php echo $__env->make('admin.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(URL::to('/admin/update-tieuchi/'.$tieuchi->id)); ?>" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data" >
              <?php echo e(csrf_field()); ?>

              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên Tiêu chí</label>
                <div class="col-sm-10">
                  <input placeholder="Tên tiêu chí" class="form-control" type="text" name="tentieuchi" value="<?php echo e($tieuchi->ten); ?>">
                </div>
              </div>

                <hr>
                <div class="form-group row">
                <label class="col-sm-2 control-label">Mô tả tiêu chí</label>
                <div class="col-sm-10">
                <textarea placeholder="mô tả tiêu chí" class="form-control" type="text" name="motatieuchi"  ><?php echo e($tieuchi->moTa); ?></textarea>
                  
                </div>
              </div>
           

                    <hr>
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Đơn vị quản lý</label>
                         <div class="col-sm-10">
                            <select  name="donvi"  class="custom-select">
                              
                            <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($tieuchi->ma_dv == $dv->id): ?>
                              <option value="<?php echo e($dv->id); ?>" selected><?php echo e($dv->ten); ?></option>
                              <?php endif; ?>
                              <option value="<?php echo e($dv->id); ?>" ><?php echo e($dv->ten); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
                      </div>
                    </div>
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" id="themtc" name="themtaikhoan" style="color: white; text-align: center">Cập Nhật Tiêu Chí </button>

            </form>
          </div>
        </div>
       
      </div>
    </div> 
    
     <div class="footer">
              <div class="pull-right">
                
              </div>
              <div> <strong>Copyright</strong> Admin &copy; 2020 </div>
            </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/tieuchi/edit_tieuchichung.blade.php ENDPATH**/ ?>