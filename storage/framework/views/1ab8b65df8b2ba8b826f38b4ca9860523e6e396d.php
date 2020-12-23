
<?php $__env->startSection('title'); ?>
Cập nhật tiến độ công việc
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Cập nhật hoàn thành công việc của tiêu chí : <?php echo e($tentc); ?> năm <?php echo e($nam); ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Cập nhật Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa tiêu chí</h5>
            <?php echo $__env->make('admin.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <hr>
            <form action="<?php echo e(URL::to('/admin/tieuchi'.'/'.$id)); ?>" class="capnhattc" method="POST" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoàn thành" class="form-control" type="number" name="hoanthanh" value="<?php echo e($hoanthanh); ?>">
                </div>
              </div>
              



              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Update </button>

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
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/tieuchi/edit_tieuchi_nganhan.blade.php ENDPATH**/ ?>