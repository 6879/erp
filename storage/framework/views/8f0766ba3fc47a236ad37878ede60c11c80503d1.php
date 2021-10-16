
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('lang.update'); ?> <?php echo app('translator')->get('lang.course'); ?> <?php echo app('translator')->get('lang.details'); ?> <?php echo app('translator')->get('lang.heading'); ?> <?php echo app('translator')->get('lang.section'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('lang.course'); ?> <?php echo app('translator')->get('lang.details'); ?> <?php echo app('translator')->get('lang.heading'); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('lang.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('lang.front_settings'); ?></a>
                    <a href="#"> <?php echo app('translator')->get('lang.course'); ?> <?php echo app('translator')->get('lang.details'); ?> <?php echo app('translator')->get('lang.heading'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-title">
                                <h3 class="mb-30">
                                    <?php echo app('translator')->get('lang.update'); ?> <?php echo app('translator')->get('lang.course'); ?> <?php echo app('translator')->get('lang.details'); ?> <?php echo app('translator')->get('lang.heading'); ?>
                                     
                                </h3>
                            </div> 

                                <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'course-details-heading-update',
                                'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>


                            <div class="white-box">
                                <?php if(session()->has('message-success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo app('translator')->get('lang.inserted_message'); ?>
                                    </div>
                                <?php elseif(session()->has('message-danger')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo app('translator')->get('lang.error_message'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="add-visitor <?php echo e(isset($update)? '':'isDisabled'); ?>">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="input-effect">
                                                <input
                                                    class="primary-input form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                                                    type="text" name="title" autocomplete="off"
                                                    value="<?php echo e(isset($update)? ($SmCoursePage != ''? $SmCoursePage->title:''):''); ?>">
                                                <label> <?php echo app('translator')->get('lang.title'); ?><span>*</span></label>
                                                <span class="focus-border"></span>
                                                <?php if($errors->has('title')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('title')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="input-effect mt-25">
                                                <div class="input-effect">
                                                    <textarea class="primary-input form-control" cols="0" rows="5" name="description" id="description"><?php echo e(isset($update)? ($SmCoursePage != ''? $SmCoursePage->description:''):''); ?></textarea>
                                                    <label> <?php echo app('translator')->get('lang.description'); ?> <span>*</span> </label>
                                                    <?php if($errors->has('description')): ?>
                                                        <span class="text-danger" role="alert">
                                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="input-effect mt-25">
                                                <input
                                                    class="primary-input form-control<?php echo e($errors->has('button_text') ? ' is-invalid' : ''); ?>"
                                                    type="text" name="button_text" autocomplete="off"
                                                    value="<?php echo e(isset($update)? ($SmCoursePage != ''? $SmCoursePage->button_text:''):''); ?>">
                                                <label> <?php echo app('translator')->get('lang.button_text'); ?><span>*</span></label>
                                                <span class="focus-border"></span>
                                                <?php if($errors->has('button_text')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('button_text')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="input-effect mt-25">
                                                <input
                                                    class="primary-input form-control<?php echo e($errors->has('button_text') ? ' is-invalid' : ''); ?>"
                                                    type="text" name="button_url" autocomplete="off"
                                                    value="<?php echo e(isset($update)? ($SmCoursePage != ''? $SmCoursePage->button_url:''):''); ?>">
                                                <label> <?php echo app('translator')->get('lang.button_url'); ?><span>*</span></label>
                                                <span class="focus-border"></span>
                                                <?php if($errors->has('button_url')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('button_url')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row no-gutters input-right-icon mt-35">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input class="primary-input form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" id="placeholderInput" type="text"
                                                       placeholder="<?php echo e(isset($update)? ($SmCoursePage->image !="") ? getFilePath3($SmCoursePage->image) :trans('lang.image') .' *' :trans('lang.image') .' *'); ?>"
                                                       readonly>
                                                <span class="focus-border"></span>
                                                <?php if($errors->has('image')): ?>
                                                    <span class="invalid-feedback mb-10" role="alert">
                                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="primary-btn-small-input" type="button">
                                                <label class="primary-btn small fix-gr-bg"
                                                       for="browseFile"><?php echo app('translator')->get('lang.browse'); ?></label>
                                                <input type="file" class="d-none" id="browseFile" name="image">
                                            </button>

                                        </div>


                                    </div>
                                    <span class="mt-10"> <?php echo app('translator')->get('lang.image'); ?>(1420px*450px)</span>
                                    <?php 
                                        $tooltip = "";
                                        if(userPermission(526)){
                                                $tooltip = "";
                                            }else{
                                                $tooltip = "You have no permission to add";
                                            }
                                    ?>
                                    <div class="row mt-40">
                                        <div class="col-lg-12 text-center">
                                            <button class="primary-btn fix-gr-bg submit" data-toggle="tooltip" title="<?php echo e(@$tooltip); ?>">
                                                <span class="ti-check"></span>
                                                <?php if(isset($update)): ?>
                                                    <?php echo app('translator')->get('lang.update'); ?>
                                                <?php else: ?>
                                                    <?php echo app('translator')->get('lang.save'); ?>
                                                <?php endif; ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </section>


    <div class="modal fade admin-query" id="showimageModal">
        <div class="modal-dialog modal-dialog-centered large-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('lang.course'); ?> <?php echo app('translator')->get('lang.details'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body p-0">
                    <div class="container student-certificate">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="mt-20">
                                    <section class="container box-1420">
                                        <div class="banner-area" style="background: linear-gradient(0deg, rgba(124, 50, 255, 0.6), rgba(199, 56, 216, 0.6)), url(<?php echo e(@$SmCoursePage->image != ""? @$SmCoursePage->image : '../img/client/common-banner1.jpg'); ?>) no-repeat center;background-size: 100%">
                                            <div class="banner-inner">
                                                <div class="banner-content">
                                                    <h2 style="color: whitesmoke"><?php echo e(@$SmCoursePage->title); ?></h2>
                                                    <p style="color: whitesmoke"><?php echo e(@$SmCoursePage->description); ?></p>
                                                    <a class="primary-btn fix-gr-bg semi-large" href="<?php echo e(@$SmCoursePage->button_url); ?>"><?php echo e(@$SmCoursePage->button_text); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="mt-10 row">
                                        <div class="col-md-6">
                                            <div class="academic-item">
                                                <div class="academic-img">
                                                    <img class="img-fluid" src="<?php echo e(asset(@$SmCoursePage->main_image)); ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="academic-text mt-30">
                                                <h4>
                                                    <?php echo e(@$SmCoursePage->main_title); ?>

                                                </h4>
                                                <p>
                                                    <?php echo e(@$SmCoursePage->main_description); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edubangl/infinitytechltd.bou.education/resources/views/backEnd/course/courseDetailsHeading.blade.php ENDPATH**/ ?>