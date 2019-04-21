<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading">Message</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Sender</td>
    	  <td> <?php echo e($message->sender); ?></td>
    	 </tr>

            <tr>
          <td> Phone</td>
          <td> <?php echo e($message->phone); ?></td>
         </tr>

    	 <tr>
    	  <td> Subject</td>
    	  <td> <?php echo e($message->subject); ?></td>
    	 </tr> 

    	 <tr>
    	  <td> Date</td>
    	  <td> <?php echo e(date('F d, Y h:m A', strtotime($message->created_at))); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Message</td>
    	  <td> <?php echo e($message->message); ?></td>
    	 </tr>
 
    </table> 


  


  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>