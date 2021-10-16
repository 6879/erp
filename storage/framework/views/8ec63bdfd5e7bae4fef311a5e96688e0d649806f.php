
<?php if(userPermission(1) && menuStatus(1)): ?>
<li data-position="<?php echo e(menuPosition(1)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student-dashboard')); ?>">
        <span class="flaticon-resume"></span>
        <?php echo app('translator')->get('lang.dashboard'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(11) && menuStatus(11)): ?>
<li data-position="<?php echo e(menuPosition(11)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student-profile')); ?>">
        <span class="flaticon-resume"></span>
        <?php echo app('translator')->get('lang.my_profile'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(20) && menuStatus(20)): ?>
<li data-position="<?php echo e(menuPosition(20)); ?>" class="sortable_li">
    <a href="#subMenuStudentFeesCollection" data-toggle="collapse" aria-expanded="false"
    class="dropdown-toggle" href="#">
        <span class="flaticon-wallet"></span>
        <?php echo app('translator')->get('lang.fees'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuStudentFeesCollection">
        <?php if(moduleStatusCheck('FeesCollection')== false ): ?>
        <li data-position="<?php echo e(menuPosition(21)); ?>">
            <a href="<?php echo e(route('student_fees')); ?>"><?php echo app('translator')->get('lang.pay_fees'); ?></a>
        </li>
        <?php else: ?>
        <li  data-position="<?php echo e(menuPosition(21)); ?>">
            <a href="<?php echo e(route('feescollection/student-fees')); ?>">b@lang('lang.pay_fees')</a>
        </li>

        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
<?php if(userPermission(22) && menuStatus(22)): ?>
<li  data-position="<?php echo e(menuPosition(22)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_class_routine')); ?>">
        <span class="flaticon-calendar-1"></span>
        <?php echo app('translator')->get('lang.class_routine'); ?>
    </a>
</li>
<?php endif; ?>

<?php if(userPermission(800) && menuStatus(800)): ?>
            <li data-position="<?php echo e(menuPosition(800)); ?>" class="sortable_li">
                <a href="#subMenuLessonPlan" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                    <span class="flaticon-calendar-1"></span>
                    <?php echo app('translator')->get('lang.lesson'); ?>
                </a>
                <ul class="collapse list-unstyled" id="subMenuLessonPlan">
                  <?php if(userPermission(810) && menuStatus(810)): ?>
                        <li data-position="<?php echo e(menuPosition(810)); ?>">
                            <a href="<?php echo e(route('lesson-student-lessonPlan')); ?>">Lesson plan</a>
                        </li>
                        <?php endif; ?>
                 <?php if(userPermission(815) && menuStatus(815)): ?>
                          <li data-position="<?php echo e(menuPosition(815)); ?>">
                            <a href="<?php echo e(route('lesson-student-lessonPlan-overview')); ?>">Lesson plan overview</a>
                        </li>
                  <?php endif; ?>
                </ul>
            </li>
<?php endif; ?>
<?php if(userPermission(23) && menuStatus(23)): ?>
<li  data-position="<?php echo e(menuPosition(23)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_homework')); ?>">
        <span class="flaticon-book"></span>
        <?php echo app('translator')->get('lang.home_work'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(26) && menuStatus(26)): ?>
<li  data-position="<?php echo e(menuPosition(26)); ?>" class="sortable_li">
    <a href="#subMenuDownloadCenter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
    href="#">
        <span class="flaticon-data-storage"></span>
        <?php echo app('translator')->get('lang.download_center'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuDownloadCenter">
        <?php if(userPermission(27) && menuStatus(27)): ?>
            <li  data-position="<?php echo e(menuPosition(27)); ?>">
                <a href="<?php echo e(route('student_assignment')); ?>"><?php echo app('translator')->get('lang.assignment'); ?></a>
            </li>
        <?php endif; ?>
        
        <?php if(userPermission(31) && menuStatus(31)): ?>
            <li  data-position="<?php echo e(menuPosition(31)); ?>">
                <a href="<?php echo e(route('student_syllabus')); ?>"><?php echo app('translator')->get('lang.syllabus'); ?></a>
            </li>
        <?php endif; ?>
        <?php if(userPermission(33) && menuStatus(33)): ?>
            <li  data-position="<?php echo e(menuPosition(33)); ?>">
                <a href="<?php echo e(route('student_others_download')); ?>"><?php echo app('translator')->get('lang.other_download'); ?></a>
            </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
<?php if(userPermission(35) && menuStatus(35)): ?>
<li  data-position="<?php echo e(menuPosition(35)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_my_attendance')); ?>">
        <span class="flaticon-authentication"></span>
        <?php echo app('translator')->get('lang.attendance'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(36) && menuStatus(36)): ?>
<li  data-position="<?php echo e(menuPosition(36)); ?>" class="sortable_li">
    <a href="#subMenuStudentExam" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
    href="#">
        <span class="flaticon-test"></span>
        <?php echo app('translator')->get('lang.examinations'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuStudentExam">
        <?php if(userPermission(37) && menuStatus(37)): ?>
            <li  data-position="<?php echo e(menuPosition(37)); ?>">
                <a href="<?php echo e(route('student_result')); ?>"><?php echo app('translator')->get('lang.result'); ?></a>
            </li>
        <?php endif; ?>
        <?php if(userPermission(38) && menuStatus(38)): ?>
            <li  data-position="<?php echo e(menuPosition(38)); ?>">
                <a href="<?php echo e(route('student_exam_schedule')); ?>"><?php echo app('translator')->get('lang.exam_schedule'); ?></a>
            </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>


<?php if(userPermission(39) && menuStatus(39)): ?>
<li  data-position="<?php echo e(menuPosition(39)); ?>" class="sortable_li">
    <a href="#subMenuLeaveManagement" data-toggle="collapse" aria-expanded="false"
        class="dropdown-toggle">
        <span class="flaticon-slumber"></span>
        <?php echo app('translator')->get('lang.leave'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuLeaveManagement">

        <?php if(userPermission(40) && menuStatus(40)): ?>

            <li  data-position="<?php echo e(menuPosition(40)); ?>">
                <a href="<?php echo e(route('student-apply-leave')); ?>"><?php echo app('translator')->get('lang.apply_leave'); ?></a>
            </li>
        <?php endif; ?>

        <?php if(userPermission(44) && menuStatus(44)): ?>

            <li  data-position="<?php echo e(menuPosition(44)); ?>">
                    <a href="<?php echo e(route('student-pending-leave')); ?>"><?php echo app('translator')->get('lang.pending_leave_request'); ?></a>
            </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
<?php if(userPermission(45) && menuStatus(45)): ?>
<li  data-position="<?php echo e(menuPosition(45)); ?>" class="sortable_li">
    <a href="#subMenuStudentOnlineExam" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
    href="#">
        <span class="flaticon-test-1"></span>
        <?php echo app('translator')->get('lang.online_exam'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuStudentOnlineExam">

    <?php if(moduleStatusCheck('OnlineExam') ==false ): ?>
        <?php if(userPermission(46) && menuStatus(46)): ?>
            <li  data-position="<?php echo e(menuPosition(46)); ?>">
                <a href="<?php echo e(route('student_online_exam')); ?>"><?php echo app('translator')->get('lang.active_exams'); ?></a>
            </li>
        <?php endif; ?>
        <?php if(userPermission(47) && menuStatus(47)): ?>
            <li  data-position="<?php echo e(menuPosition(47)); ?>">
                <a href="<?php echo e(route('student_view_result')); ?>"><?php echo app('translator')->get('lang.view_result'); ?></a>
            </li>
        <?php endif; ?>

        <?php elseif(moduleStatusCheck('OnlineExam') == true ): ?>

        <?php if(userPermission(2046) && menuStatus(2046)): ?>
        <li  data-position="<?php echo e(menuPosition(2046)); ?>"> 
            <a href="<?php echo e(route('om_student_online_exam')); ?>">  <?php echo app('translator')->get('lang.active_exams'); ?> </a>
        </li>     
        <?php endif; ?>                           
                            
        <?php if(userPermission(2047) && menuStatus(2047)): ?>                   
        <li  data-position="<?php echo e(menuPosition(2047)); ?>">                                            
            <a href=" <?php echo e(route('om_student_view_result')); ?> ">  <?php echo app('translator')->get('lang.view_result'); ?> </a>
        </li> 
        <?php endif; ?>                               
                            
        <?php if(userPermission(2048) && menuStatus(2048)): ?>                  
        <li  data-position="<?php echo e(menuPosition(2048)); ?>">                                            
            <a href="<?php echo e(route('student_pdf_exam')); ?> " class="active"> PDF <?php echo app('translator')->get('lang.exam'); ?> </a>
        </li> 
        <?php endif; ?>                               
                            
        <?php if(userPermission(2049) && menuStatus(2049)): ?>                   
        <li  data-position="<?php echo e(menuPosition(2049)); ?>">                                            
            <a href=" <?php echo e(route('student_view_pdf_result')); ?> ">  PDF <?php echo app('translator')->get('lang.exam'); ?> <?php echo app('translator')->get('lang.result'); ?> </a>
        </li>  
        <?php endif; ?>

    <?php endif; ?>

    </ul>
</li>
<?php endif; ?>
<?php if(userPermission(48) && menuStatus(48)): ?>

<li  data-position="<?php echo e(menuPosition(48)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_noticeboard')); ?>">
        <span class="flaticon-poster"></span>
        <?php echo app('translator')->get('lang.notice_board'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(49) && menuStatus(49)): ?>
<li  data-position="<?php echo e(menuPosition(49)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_subject')); ?>">
        <span class="flaticon-reading-1"></span>
        <?php echo app('translator')->get('lang.subjects'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(50) && menuStatus(50)): ?>
<li  data-position="<?php echo e(menuPosition(50)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_teacher')); ?>">
        <span class="flaticon-professor"></span>
        <?php echo app('translator')->get('lang.teacher'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(51) && menuStatus(51)): ?>
<li  data-position="<?php echo e(menuPosition(51)); ?>" class="sortable_li">
    <a href="#subMenuStudentLibrary" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
    href="#">
        <span class="flaticon-book-1"></span>
        <?php echo app('translator')->get('lang.library'); ?>
    </a>
    <ul class="collapse list-unstyled" id="subMenuStudentLibrary">
        <?php if(userPermission(52) && menuStatus(52)): ?>
            <li  data-position="<?php echo e(menuPosition(52)); ?>">
                <a href="<?php echo e(route('student_library')); ?>"> <?php echo app('translator')->get('lang.book_list'); ?></a>
            </li>
        <?php endif; ?>
        <?php if(userPermission(53) && menuStatus(53)): ?>
            <li  data-position="<?php echo e(menuPosition(53)); ?>">
                <a href="<?php echo e(route('student_book_issue')); ?>"><?php echo app('translator')->get('lang.book_issue'); ?></a>
            </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
<?php if(userPermission(54) && menuStatus(54)): ?>
<li  data-position="<?php echo e(menuPosition(54)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_transport')); ?>">
        <span class="flaticon-bus"></span>
        <?php echo app('translator')->get('lang.transport'); ?>
    </a>
</li>
<?php endif; ?>
<?php if(userPermission(55) && menuStatus(55)): ?>
<li  data-position="<?php echo e(menuPosition(55)); ?>" class="sortable_li">
    <a href="<?php echo e(route('student_dormitory')); ?>">
        <span class="flaticon-hotel"></span>
        <?php echo app('translator')->get('lang.dormitory'); ?>
    </a>
</li>
<?php endif; ?>

 <?php echo $__env->make('chat::menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 <!-- Zoom Menu -->
                    <?php if(moduleStatusCheck('Zoom') == TRUE): ?>
                       
                        <?php echo $__env->make('zoom::menu.Zoom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                  
                    <!-- BBB Menu -->
                    <?php if(moduleStatusCheck('BBB') == true): ?>
                        <?php echo $__env->make('bbb::menu.bigbluebutton_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>

                    <!-- Jitsi Menu -->
                    <?php if(moduleStatusCheck('Jitsi')==true): ?>
                        <?php echo $__env->make('jitsi::menu.jitsi_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><?php /**PATH /home/edubangl/SMS.infinitytechltd.education/resources/views/backEnd/partials/student_sidebar.blade.php ENDPATH**/ ?>