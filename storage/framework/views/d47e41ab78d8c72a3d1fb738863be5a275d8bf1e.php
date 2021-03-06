
<?php $__env->startSection('title'); ?>
Sửa Chỉ Số Tiêu Chí
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa Chỉ Số Tiêu Chí <?php echo e($tieuchi->ten); ?> năm <?php echo e($daihan->nam); ?>  </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Sửa Chỉ Số Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa Chỉ Số Tiêu Chí </h5>
            <?php echo $__env->make('admin.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <hr>
            
            <form action="<?php echo e(URL::to('/admin/updatetc'.'/'.$tieuchi->id.'/'.$daihan->id)); ?>" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data" onsubmit = "return(validate());">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

              
              <div class="form-group row">
                      <label class="col-sm-2 control-label">Tiêu chí</label>
                         <div class="col-sm-10">
                            <select  name="tieuchi"  class="custom-select">
                              
                            <?php $__currentLoopData = $tieuchiall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($tc->id == $tieuchi->id): ?>

                              <option value="<?php echo e($tc->id); ?>" selected disabled><?php echo e($tc->ten); ?></option>
                              <?php else: ?>
                              <option value="<?php echo e($tc->id); ?>" disabled><?php echo e($tc->ten); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
                      </div>
                    </div>
            

              

                    <hr>
              <div class="form-group row">
                      <label class="col-sm-2 control-label">Năm</label>
                         <div class="col-sm-10">
                            <select  name="nam"  class="custom-select">
                              
                            <?php for($i=2000; $i<2200; $i=$i+5): ?>
                              <?php if($daihan->nam == $i): ?>
                              <option value="<?php echo e($i); ?>" selected><?php echo e($i); ?></option>
                              <?php else: ?>
                              <option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
                              <?php endif; ?>
                            <?php endfor; ?>
                              
                            </select>
                      </div>
                    </div>
            

             <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu</label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieu" value="<?php echo e($daihan->tong); ?>">
                </div>

              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanh" value="<?php echo e($daihan->xong); ?>">
                </div>
                
              </div>

              <?php for($i=0; $i<5; $i++): ?>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu năm <?php echo e($i+1); ?></label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieunam<?php echo e($i+1); ?>" value="<?php echo e($nganhan[$i]->tong); ?>">
                </div>
                <span id="muctieuloi<?php echo e($i+1); ?>" style="margin-left: 190px; color: red;"></span>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanhnam<?php echo e($i+1); ?>" value="<?php echo e($nganhan[$i]->xong); ?>">
                </div>
                <span id="hoanthanhloi<?php echo e($i+1); ?>" style="margin-left: 190px; color: red;"></span>
              </div>


              <?php endfor; ?>
             

              <?php if(Auth::user()->rule == 1): ?>
              <hr>
                
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Trường</label>
                         <div class="col-sm-10">
                            <select  name="truong"  class="custom-select">
                           
                            <?php $__currentLoopData = $truong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($sch->id == $daihan->ma_truong): ?>
                              <option value="<?php echo e($sch->id); ?>" selected ><?php echo e($sch->ten); ?></option>
                              <?php else: ?>
                              <option value="<?php echo e($sch->id); ?>" ><?php echo e($sch->ten); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
                      </div>
                    </div>
                  <?php endif; ?>


                 
                    
                   
             
             

              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Update Tiêu Chí </button>

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

<script>
    function validate() {
      var hoanthanh = parseInt(document.themtc.hoanthanh.value);
      var muctieu = parseInt(document.themtc.muctieu.value);
      var hoanthanhnam1 = parseInt(document.themtc.hoanthanhnam1.value);
      var muctieunam1 = parseInt(document.themtc.muctieunam1.value);
      var hoanthanhnam2 = parseInt(document.themtc.hoanthanhnam2.value);
      var muctieunam2 = parseInt(document.themtc.muctieunam2.value);
      var hoanthanhnam3 = parseInt(document.themtc.hoanthanhnam3.value);
      var muctieunam3 = parseInt(document.themtc.muctieunam3.value);
      var hoanthanhnam4 = parseInt(document.themtc.hoanthanhnam4.value);
      var muctieunam4 = parseInt(document.themtc.muctieunam4.value);
      var hoanthanhnam5 = parseInt(document.themtc.hoanthanhnam5.value);
      var muctieunam5 = parseInt(document.themtc.muctieunam5.value);
    //  console.log(muctieu,muctieunam1,muctieunam2,muctieunam3,muctieunam4,muctieunam5)
    //  console.log(hoanthanh,hoanthanhnam1,hoanthanhnam2,hoanthanhnam3,hoanthanhnam4,hoanthanhnam5)
      var d = 0;
    
     
     if(muctieunam1 > muctieu) {
        document.getElementById('muctieuloi1').innerHTML = "mục tiêu năm 1 không thể lớn hơn mục tiêu tổng";
        return false;
        
     }
      if( hoanthanhnam1 > hoanthanh) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "hoàn thành năm 1 không thể lớn hơn hoàn thành tổng";
        document.themtc.hoanthanhnam1.focus();
        return false;
     }
     if (muctieunam2 > (muctieu - muctieunam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "mục tiêu năm 2 không thể lớn hơn " + (muctieu - muctieunam1);
        return false;
     } 
     if (hoanthanhnam2 > (hoanthanh - hoanthanhnam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "hoàn thành năm 2 không thể lớn hơn " + (hoanthanh - hoanthanhnam1);
        return false;
     } 

     if (muctieunam3 > (muctieu - muctieunam1 - muctieunam2)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "mục tiêu năm 3 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2);
        return false;
     } 

     if (hoanthanhnam3 > (hoanthanh - hoanthanhnam1 - hoanthanhnam2)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "hoàn thành năm 3 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2);
        return false;
     } 

     if (muctieunam4 > (muctieu - muctieunam1 - muctieunam2 - muctieunam3)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "mục tiêu năm 4 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3);
        return false;
     } 

     if (hoanthanhnam4 > (hoanthanh - hoanthanhnam1 -hoanthanhnam2 - hoanthanhnam3)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML = "hoàn thành năm 4 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3);
        return false;
     } 

     if (muctieunam5 > (muctieu - muctieunam1 - muctieunam2 - muctieunam3 - muctieunam4)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML ="";
        document.getElementById('muctieuloi5').innerHTML = "mục tiêu năm 5 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3 -muctieunam4);
        return false;
     } 

     if (hoanthanhnam5 > (hoanthanh - hoanthanhnam1 -hoanthanhnam2 - hoanthanhnam3 - hoanthanhnam4)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML ="";
        document.getElementById('muctieuloi5').innerHTML = "";
        document.getElementById('hoanthanhloi5').innerHTML = "hoàn thành năm 5 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3 - hoanthanhnam4);
        return false;
     } 

     
     
      
      
      return( true );
   }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\phattrienweb\resources\views/admin/tieuchi/edit_tieuchi.blade.php ENDPATH**/ ?>