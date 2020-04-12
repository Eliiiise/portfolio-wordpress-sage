<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="transition"></div>
<div class="info">
      <div class="bloc">
            <div class="bloc-left">
            </div>
            <div class="bloc-right">
              <div class="title">
                <?php $__currentLoopData = $info->titre_split; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <span>
                    <h1 class="js-letter-project">
                      <?php echo e($letter); ?>

                    </h1>
                  </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
      </div>
      <div class="bloc">
            <div class="bloc-left">
              <p>Qui suis-je ?</p>
            </div>
            <div class="bloc-right">
              <p><?php echo e($info->presentation); ?></p>
            </div>
      </div>
      <div class="bloc">
            <div class="bloc-left">
              <p>Compétences</p>
            </div>
            <div class="bloc-right">
              <p><?php echo e($info->competence); ?></p>
            </div>
      </div>
      <div class="bloc">
            <div class="bloc-left">
              <p><?php echo e($info->date_formation_1); ?><br><b><?php echo e($info->lieu_formation_1); ?></b></p>
            </div>
            <div class="bloc-right">
              <p><?php echo e($info->formation_1); ?></p>
            </div>
      </div>
      <div class="bloc">
            <div class="bloc-left">
              <p><?php echo e($info->date_formation_2); ?><br><b><?php echo e($info->lieu_formation_2); ?></b></p>
            </div>
            <div class="bloc-right">
              <p><?php echo e($info->formation_2); ?></p>
            </div>
      </div>
       <div class="bloc">
             <div class="bloc-left">
               <p><?php echo e($info->date_formation_3); ?><br><b><?php echo e($info->lieu_formation_3); ?></b></p>
             </div>
             <div class="bloc-right">
               <p><?php echo e($info->formation_3); ?></p>
             </div>
       </div>
       <div class="bloc">
             <div class="bloc-left">
               <p><?php echo e($info->date_formation_4); ?><br><b><?php echo e($info->lieu_formation_4); ?></b></p>
             </div>
             <div class="bloc-right">
               <p><?php echo e($info->formation_4); ?></p>
             </div>
       </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>