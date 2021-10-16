
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('lang.exam_schedule'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('lang.exam_schedule'); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(url('dashboard')); ?>"><?php echo app('translator')->get('lang.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('lang.examinations'); ?></a>
                    <a href="#"><?php echo app('translator')->get('lang.exam_schedule'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="main-title">
                        <h3 class="mb-30"><?php echo app('translator')->get('lang.select_criteria'); ?></h3>
                    </div>
                </div>
                <?php if(userPermission(218)): ?>
                    <div class="col-lg-4 text-md-right text-left col-md-6 mb-30-lg">
                        <a href="<?php echo e(route('exam_schedule_create')); ?>" class="primary-btn small fix-gr-bg">
                            <span class="ti-plus pr-2"></span>
                            <?php echo app('translator')->get('lang.add_exam_schedule'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php if(session()->has('message-success') != ""): ?>
                        <?php if(session()->has('message-success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('message-success')); ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(session()->has('message-danger') != ""): ?>
                        <?php if(session()->has('message-danger')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session()->get('message-danger')); ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="white-box">
                        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'exam_schedule_report_search', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                            <div class="col-lg-4 mt-30-md">
                                <select class="w-100 bb niceSelect form-control<?php echo e($errors->has('exam') ? ' is-invalid' : ''); ?>"
                                        name="exam">
                                    <option data-display="Select Exam *"
                                            value=""><?php echo app('translator')->get('lang.select'); ?> <?php echo app('translator')->get('lang.exam'); ?> *
                                    </option>
                                    <?php $__currentLoopData = $exam_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(@$exam->id); ?>"><?php echo e(@$exam->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('exam')): ?>
                                    <span class="invalid-feedback invalid-select" role="alert">
                                        <strong><?php echo e($errors->first('exam')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-4 mt-30-md">
                                <select class="w-100 bb niceSelect form-control <?php echo e($errors->has('class') ? ' is-invalid' : ''); ?>"
                                        id="select_class" name="class">
                                    <option data-display="<?php echo app('translator')->get('lang.select_class'); ?> *"
                                            value=""><?php echo app('translator')->get('lang.select_class'); ?> *
                                    </option>
                                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(@$class->id); ?>" <?php echo e(( old("class") == $class->id ? "selected":"")); ?>><?php echo e(@$class->class_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('class')): ?>
                                    <span class="invalid-feedback invalid-select" role="alert">
                                        <strong><?php echo e($errors->first('class')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-4 mt-30-md" id="select_section_div">
                                <select class="w-100 bb niceSelect form-control<?php echo e($errors->has('section') ? ' is-invalid' : ''); ?>"
                                        id="select_section" name="section">
                                    <option data-display="<?php echo app('translator')->get('lang.select_section'); ?> "
                                            value=""><?php echo app('translator')->get('lang.select_section'); ?> 
                                    </option>
                                </select>
                                <?php if($errors->has('section')): ?>
                                    <span class="invalid-feedback invalid-select" role="alert">
                                        <strong><?php echo e($errors->first('section')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12 mt-20 text-right">
                                <button type="submit" class="primary-btn small fix-gr-bg">
                                    <span class="ti-search pr-2"></span>
                                    <?php echo app('translator')->get('lang.search'); ?>
                                </button>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if(isset($assign_subjects)): ?>

        <section class="mt-20">
            <div class="container-fluid p-0">
                <div class="row mt-40">
                    <div class="col-lg-6 col-md-6">
                        <div class="main-title">
                            <h3 class="mb-30"><?php echo app('translator')->get('lang.exam_schedule'); ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php echo e(url('exam-schedule/print', [$exam_id, $class_id, $section_id])); ?>"
                           class="primary-btn small fix-gr-bg pull-right" target="_blank"><i
                                    class="ti-printer"> </i> <?php echo app('translator')->get('lang.print'); ?></a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <table class="display school-table school-table-style" cellspacing="0" width="100%">
                            <thead>
                            <?php if(session()->has('success') != "" || session()->has('danger') != ""): ?>
                                <tr>
                                    <td colspan="20">
                                        <?php if(session()->has('success') != ""): ?>

                                            <div class="alert alert-success">
                                                <?php echo e(session()->get('success')); ?>

                                            </div>

                                        <?php else: ?>

                                            <div class="alert alert-success">
                                                <?php echo e(session()->get('danger')); ?>

                                            </div>

                                    </td>

                                    <?php endif; ?>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <th width="10%"><?php echo app('translator')->get('lang.date'); ?></th>
                                <?php $__currentLoopData = $exam_periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_period): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th><?php echo e(@$exam_period->period); ?>

                                        <br><?php echo e(date('h:i A', strtotime(@$exam_period->start_time)).'-'.date('h:i A', strtotime(@$exam_period->end_time))); ?>

                                    </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $exam_schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(@$exam_date->date != ""? dateConvert(@$exam_date->date):''); ?></td>
                                    <?php $__currentLoopData = $exam_periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_period): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            // $assigned_routine = getScheduleSubject($class_id, $section_id, $exam_id, $exam_period->id, $exam_date);
                                           // $assigned_routine = App\SmExamSchedule::assignedRoutine($class_id, $section_id, $exam_id, $assign_subject->subject_id, $exam_period->id);
                                            $assigned_routine = App\SmExamSchedule::examScheduleSubject($class_id, $exam_date->section_id, $exam_id, $exam_period->id, $exam_date->date);
                                        ?>

                                        <td>
                                            <?php if($assigned_routine): ?>
                                            
                                            <div class="col-lg-6">
                                                <span class=""><?php echo e(@$assigned_routine->classRoom->room_no); ?></span>
                                                <br>
                                                <span class=""><?php echo e($assigned_routine->className->class_name.'('.$assigned_routine->section->section_name.')'); ?>-><?php echo e(@$assigned_routine->subject->subject_name); ?></span>
                                            </div>
                                            
                                                

                                            <?php endif; ?>
                                        </td>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edubangl/infinitytechltd.bou.education/resources/views/backEnd/examination/exam_schedule_new.blade.php ENDPATH**/ ?>