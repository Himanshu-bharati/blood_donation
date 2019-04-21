<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">

  <div class="panel-heading">
  <div class="pull-right"><a href="<?php echo e(url('admin/delete/support/'.$support->id)); ?>">Delete</a></div>

  <i class="fa fa-ticket"></i> Support Message</div>
  <div class="panel-body">

<table class="table">
  
  <tr>
    <td>Name</td>
    <td> <?php echo e($support->name); ?></td>
  </tr>  

<tr>
    <td>Email</td>
    <td> <?php echo e($support->email); ?></td>
  </tr>  

  <tr>
    <td>Created at</td>
    <td> <?php echo e(date('F d, Y h:m A', strtotime($support->created_at))); ?></td>
  </tr>  

  <tr>
    <td>Message</td>
    <td> <?php echo e($support->message); ?></td>
  </tr>  



</table>
   

   
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>