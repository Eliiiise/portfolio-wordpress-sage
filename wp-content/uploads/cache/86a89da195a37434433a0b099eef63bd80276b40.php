<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

      <div class="transition"></div>
      <div class="projets">

      <?php
        $nbProjet = 0;
      ?>



      <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $nbProjet++;
        ?>
          <div class="content-projects">
             <div class="projet js-projet">
              <div class="scroll">
                  <img src="<?php echo e($project->thumb); ?>" alt="<?php echo e($project->alt); ?>" title="<?php echo e($project->title); ?>" data-link="<?php echo e($project->link); ?>"class="image-presentation-projet js-image-presentation-projet">
                  <span class="js-span-title-project span-title-project">
                    <h1>
                     <?php $__currentLoopData = $project->name_split; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <span>
                        <h1 class="js-letter-project">
                          <?php echo e($letter); ?>

                        </h1>
                      </span>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </h1>
                  </span>
                  <p class="miniInfo js-miniInfo"><?php echo e($project->date); ?>

                    <?php $__currentLoopData = $project->type_split; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <br>
                       <?php echo e($word); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </p>
                  <p class="nbProjet js-npProjet">0<?php echo e($nbProjet); ?></p>
                </div>
             </div>
          </div>


       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>