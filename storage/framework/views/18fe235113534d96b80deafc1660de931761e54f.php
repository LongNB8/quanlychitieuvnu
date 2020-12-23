
<?php $__env->startSection('title'); ?>
Tất cả tiêu chí
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Danh sách tiêu chí ngắn hạn : <?php echo e($tentc); ?></h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/index')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Dữ liệu</a> </li>
            <li class="breadcrumb-item active"> <strong>Danh sách tiêu chí </strong> </li>
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
        <div class="col-lg-12"> </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Tất cả tiêu chí </h5>
              </div>
              <div class="ibox-content collapse show">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          
                          <th>Tiêu Chí</th>
                          <th>Năm</th>
                          <th>Hoàn Thành</th>
                          <th>Tổng</th>
                          <th>Cập nhật</th>
                          
                         
                        </tr>
                      </thead>
                      <?php $__currentLoopData = $nganhan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                         <tr>
                          
                          <td><?php echo e($tentc); ?></td>
                          <td><?php echo e($tc->nam); ?></td>
                          <td><?php echo e($tc->xong); ?></td>
                          <td><?php echo e($tc->tong); ?></td>
                          
                         
                          
                          <td>
                            <span class="sua" style="font-size: 22px"><a href="<?php echo e(URL::to('/admin/tieuchi'.'/'.$tc->id .'/edit')); ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></span>
                          
                          </td>
                        </tr>
                      </tbody>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                <!-- phan trang -->
                <div class="phantrang">
                
                  
                </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      
        
      
       
        
      </div>
      
<!-- start footer -->
      <div class="footer">
        <div class="pull-right">
         
        </div>
        <div> <strong>Copyright</strong> Ademin &copy; 2020 </div>
      </div>
    
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\phattrienweb\resources\views/admin/tieuchi/all_tieuchi_nganhan.blade.php ENDPATH**/ ?>