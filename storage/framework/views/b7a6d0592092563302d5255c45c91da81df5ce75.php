<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li> <?php echo $user['name']; ?> is a <?php echo $user['gender']; ?> </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
