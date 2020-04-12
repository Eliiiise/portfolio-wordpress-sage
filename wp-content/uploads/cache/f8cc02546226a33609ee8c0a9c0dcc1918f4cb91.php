<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="transition"></div>
<div class="contact">
      <div class="title">
        <?php $__currentLoopData = $contact->titre_split; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <span>
            <h1 class="js-letter-project">
              <?php echo e($letter); ?>

            </h1>
          </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="link-contact">
      <?php if( $contact->email ): ?>
       <p>-</p><a href="mailto:<?php echo e($contact->email); ?>">Email</a><p>-</p>
       <?php endif; ?>
       <?php if( $contact->linkedin ): ?>
        <a href="<?php echo e($contact->linkedin); ?>" target="_blank">Linkedin</a><p>-</p>
       <?php endif; ?>
       <?php if( $contact->tel ): ?>
         <a href="<?php echo e($contact->tel); ?>">T.E.L</a><p>-</p>
        <?php endif; ?>
      <?php if( $contact->github ): ?>
        <a href="<?php echo e($contact->github); ?>" target="_blank">Github</a><p>-</p>
       <?php endif; ?>
       <?php if( $contact->instagram ): ?>
         <a href="<?php echo e($contact->instagram); ?>" target="_blank">Insta</a><p>-</p>
        <?php endif; ?>
      </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>