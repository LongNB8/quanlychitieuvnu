
<?php $__env->startSection('title'); ?>
Đổi mật khẩu
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Đổi mật khẩu </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Đổi mật khẩu </strong> </li>
          <li class="breadcrumb-item active"> <strong>
                    <?php
                                $massage = Session::get('massage');
                                if(!empty($massage)){
                                    echo '<span class="text-align"><h50 text-align="center" color="red">'.$massage.'</h50></span>';
                                    Session::put('massage', null);
                                }
                            ?>
            </strong></li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Đổi mật khẩu</h5>
            <hr>
            <?php echo $__env->make('admin.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(URL::to('/admin/account/change-pass'.'/'.$account->id)); ?>" class="themtieuchi" method="POST" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

             
             

           
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="pass" >
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password new</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="passnew" >
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Re-password new</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="repassnew" >
                </div>
              </div>

              
          
           
              

                  
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Change </button>

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
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\phattrienweb\resources\views/admin/account/change_pass.blade.php ENDPATH**/ ?>