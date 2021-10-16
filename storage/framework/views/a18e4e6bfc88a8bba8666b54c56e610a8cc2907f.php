
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo e(__('Class Routine')); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo e(asset('public/backEnd/')); ?>/vendors/css/print/bootstrap.min.css"/>
  <script type="text/javascript" src="<?php echo e(asset('public/backEnd/')); ?>/vendors/js/print/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('public/backEnd/')); ?>/vendors/js/print/bootstrap.min.js"></script>
</head>
<style>
 table,th,tr,td{
     font-size: 11px !important;
 }
 
</style>
<body style="font-family: 'dejavu sans', sans-serif;">

<div class="container-fluid"> 
                    
                    <table  cellspacing="0" width="100%">
                        <tr>
                            <td> 
                                <img class="logo-img" src="<?php echo e(url('/')); ?>/<?php echo e(@generalSetting()->logo); ?>" alt=""> 
                            </td>
                            <td> 
                                <h3 style="font-size:22px !important" class="text-white"> <?php echo e(isset(generalSetting()->school_name)?generalSetting()->school_name:'Infix School Management ERP'); ?> </h3> 
                                <p style="font-size:18px !important" class="text-white mb-0"> <?php echo e(isset(generalSetting()->address)?generalSetting()->address:'Infix School Address'); ?> </p> 
                                <p style="font-size:15px !important" class="text-white mb-0"> <?php echo app('translator')->get('lang.class_routine'); ?> </p> 
                          </td>
                            <td style="text-aligh:center"> 
                                
                                <p style="font-size:14px !important; border-bottom:1px solid gray" align="left" class="text-white"><?php echo app('translator')->get('lang.class'); ?>: <?php echo e(@$class->class_name); ?> </p> 
                                <p style="font-size:14px !important; border-bottom:1px solid gray" align="left" class="text-white"><?php echo app('translator')->get('lang.section'); ?>: <?php echo e(@$section->section_name); ?> </p> 
                                <p style="font-size:14px !important; border-bottom:1px solid gray" align="left" class="text-white"><?php echo app('translator')->get('lang.academic_year'); ?>: <?php echo e(@$academic_year->title); ?> (<?php echo e(@$academic_year->year); ?>) </p> 
                               
                          </td>
                        </tr>
                    </table>

                    <hr>
           
                <table class="table table-bordered table-striped" style="width: 100%; table-layout: fixed">
                    
                         
                       <tr>
                            <th><?php echo app('translator')->get('lang.class'); ?> <?php echo app('translator')->get('lang.period'); ?></th>
                            <?php $__currentLoopData = $sm_weekends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm_weekend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th><?php echo e(@$sm_weekend->name); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
               
                        <?php $__currentLoopData = $class_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e(@$class_time->period); ?>

                                <br>
                                <?php echo e(date('h:i A', strtotime(@$class_time->start_time)).' - '.date('h:i A', strtotime(@$class_time->end_time))); ?>

                            </td>

                            <?php $__currentLoopData = $sm_weekends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm_weekend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <td>
                                <?php if(@$class_time->is_break == 0): ?>
                                <?php if(@$sm_weekend->is_weekend != 1): ?>
                                

                                <?php
                                    $assinged_class_routine = App\SmClassRoutineUpdate::assingedClassRoutine(@$class_time->id, @$sm_weekend->id, @$class_id, @$section_id);
                                ?>
                                <?php if(@$assinged_class_routine == ""): ?>

                                <?php if(userPermission(247)): ?>

                                <div class="col-lg-6 text-right">
                                    <a href="<?php echo e(route('add-new-routine', [@$class_time->id, @$sm_weekend->id, @$class_id, @$section_id])); ?>" class="primary-btn small tr-bg icon-only mr-10 modalLink" data-modal-size="modal-md" title="Create Class routine">
                                        <span class="ti-plus" id="addClassRoutine"></span>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <?php else: ?>
                                    <span class=""><?php echo e(@$assinged_class_routine->subject !=""?@$assinged_class_routine->subject->subject_name:""); ?></span>
                                    <br>
                                    <span class=""><?php echo e(@$assinged_class_routine->classRoom!=""?@$assinged_class_routine->classRoom->room_no:""); ?></span></br>
                                    <span class="tt"><?php echo e(@$assinged_class_routine->teacherDetail!=""?@$assinged_class_routine->teacherDetail->full_name:""); ?></span></br>
                                    <?php if(userPermission(248)): ?>

                                    <a href="<?php echo e(route('edit-class-routine', [@$class_time->id, @$sm_weekend->id, @$class_id, @$section_id, @$assinged_class_routine->subject_id, @$assinged_class_routine->room_id, @$assinged_class_routine->id, @$assinged_class_routine->teacher_id])); ?>" class="modalLink" data-modal-size="modal-md" title="Edit Class routine"><span class="ti-pencil-alt" id="addClassRoutine"></span></a>
                                    <?php endif; ?>
                                    <?php if(userPermission(249)): ?>

                                    <a href="<?php echo e(route('delete-class-routine-modal', [@$assinged_class_routine->id])); ?>" class="modalLink" data-modal-size="modal-md" title="Delete Class routine"><span class="ti-trash" id="addClassRoutine"></span></a>
                               
                                    <?php endif; ?>
                                    <?php endif; ?>

                                
                                <?php else: ?>
                                        <?php echo app('translator')->get('lang.weekend'); ?>

                                <?php endif; ?>
                                <?php endif; ?>
                            </td>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                </table>
        </div>  
 

</body>
</html>
    
<?php /**PATH /home/edubangl/infinitytechltd.bou.education/resources/views/backEnd/academics/class_routine_print.blade.php ENDPATH**/ ?>