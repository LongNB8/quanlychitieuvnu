
<?php $__env->startSection('title'); ?>
Sửa tài khoản
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa tài khoản </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Sửa tài khoản </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa tài khoản</h5>
            <hr>
            <?php echo $__env->make('admin.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(URL::to('/admin/account'.'/'.$account->id)); ?>" class="themtieuchi" method="POST" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

              <div class="form-group row">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input placeholder="username" class="form-control" type="text" name="name" value=<?php echo e($account->name); ?>>
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="pass" value=<?php echo e($account->password); ?>>
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input placeholder="email" class="form-control" type="email" name="email" value=<?php echo e($account->email); ?>>
                </div>
              </div>
            

          
             
              <hr>
                
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Trường</label>
                         <div class="col-sm-10">
                            <select  name="truong"  class="custom-select">
                            <?php $__currentLoopData = $truong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($sch->id == $account->ma_truong): ?>
                              <option value="<?php echo e($sch->id); ?>" selected><?php echo e($sch->ten); ?></option>
                              <?php else: ?>
                              <option value="<?php echo e($sch->id); ?>" ><?php echo e($sch->ten); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
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
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/account/edit_account.blade.php ENDPATH**/ ?>