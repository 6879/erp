<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-9">
            <h3><?php echo e($testimonial->name); ?></h3>
            <h6 ><?php echo e($testimonial->designation); ?>, <?php echo e(@$testimonial->institution_name); ?></h6>
            <p class="mt-3"><?php echo e(@$testimonial->designation); ?></p>
        </div>
        <div class="col-md-3">
            <img src="<?php echo e(asset(@$testimonial->image)); ?>" width="100px" height="100px">
        </div>
    </div>
<?php /**PATH /home/edubangl/SMS.infinitytechltd.education/resources/views/backEnd/testimonial/testimonial_details.blade.php ENDPATH**/ ?>