<script src="<?php echo e(asset('public/backEnd/')); ?>/js/main.js"></script>

<div class="container-fluid mt-30">
    <div class="student-details">
        <div class="student-meta-box">
            <div class="single-meta">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="content_info">

                       
                    <div class="single-meta">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="value text-left">
                                    <?php echo app('translator')->get('lang.content_title'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="name">
                                    <?php if(isset($ContentDetails)): ?>        
                                        <?php echo e(@$ContentDetails->content_title != ""? $ContentDetails->content_title:''); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-meta">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="value text-left">
                                    <?php echo app('translator')->get('lang.content_type'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="name">
                                    <?php if(isset($ContentDetails)): ?>
                                        <?php if($ContentDetails->content_type == "sy"): ?>
                                            <?php echo app('translator')->get('lang.syllabus'); ?>
                                        <?php elseif($ContentDetails->content_type == "as"): ?>
                                            <?php echo app('translator')->get('lang.assignment'); ?>
                                        <?php else: ?>
                                            <?php echo app('translator')->get('lang.other_downloads'); ?>
                                        <?php endif; ?>        
                                        
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-meta">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="value text-left">
                                    <?php echo app('translator')->get('lang.upload'); ?> <?php echo app('translator')->get('lang.date'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="name">
                                    <?php if(isset($ContentDetails)): ?>            
                                        <?php echo e(@$ContentDetails->upload_date != ""? dateConvert(@$ContentDetails->upload_date):''); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-meta">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="value text-left">
                                    <?php echo app('translator')->get('lang.created_by'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="name">
                                   <?php if(isset($ContentDetails)): ?>
                                   <?php echo e(@$ContentDetails->users->full_name); ?>

                                   <?php endif; ?>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="single-meta">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="value text-left">
                                <?php echo app('translator')->get('lang.available_for'); ?>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="name">
                                <?php if(isset($ContentDetails)): ?>
                                    <?php if($ContentDetails->available_for_admin == 1): ?>
                                        <p><?php echo app('translator')->get('lang.all_admins'); ?></p>
                                    <?php endif; ?>
                                    <?php if($ContentDetails->available_for_all_classes == 1): ?>
                                        <p><?php echo app('translator')->get('lang.all_classes'); ?></p>
                                    <?php endif; ?>
                                    <?php if($ContentDetails->class != ""): ?>
                                        <p><?php echo app('translator')->get('lang.class'); ?>: <?php echo e($ContentDetails->classes->class_name); ?></p>
                                    <?php endif; ?>
                                    <?php if($ContentDetails->section != ""): ?>
                                        <p><?php echo app('translator')->get('lang.section'); ?>: <?php echo e($ContentDetails->sections->section_name); ?></p>
                                    <?php endif; ?>

                                    <?php if($ContentDetails->section ==null): ?>
                                    <p><?php echo app('translator')->get('lang.section'); ?>: All Sections</p>
                                <?php endif; ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(@$ContentDetails->source_url != ""): ?>
                <div class="single-meta">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="value text-left">
                                <?php echo app('translator')->get('lang.source_url'); ?> 
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="name">
                                <?php if(isset($ContentDetails)): ?>
                                    <?php if(@$ContentDetails->source_url != ""): ?>
                                        <?php if(moduleStatusCheck('VideoWatch')== TRUE): ?>
                                                <a class="primary-btn small fix-gr-bg" target="_blank" href="<?php echo e(url('videowatch/view/'.$ContentDetails->id)); ?>"><?php echo app('translator')->get('lang.click_here'); ?></a>
                                        <?php else: ?>
                                            <a class="primary-btn small fix-gr-bg" target="_blank" href="<?php echo e(@$ContentDetails->source_url); ?>"><?php echo app('translator')->get('lang.click_here'); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            <div class="single-meta">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="value text-left">
                            <?php echo app('translator')->get('lang.attach_file'); ?> 
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="name">
                          
                            <?php if(@$ContentDetails->upload_file != ""): ?>
                            <?php
                                    $files_ext=pathinfo($ContentDetails->upload_file, PATHINFO_EXTENSION);
                            ?>
                       
                             <?php if($files_ext=='jpg' || $files_ext=='jpeg' || $files_ext=='heic' || $files_ext=='png'|| $files_ext=='mp4'|| $files_ext=='mp3'|| $files_ext=='mov'|| $files_ext=='pdf'): ?>
                                <a class="dropdown-item viewSubmitedHomework" id="show_files" href="#"> <span class="pl ti-download"></span></a>
                      
                                    
                                <?php else: ?> 
                                    <a href="<?php echo e(url(@$ContentDetails->upload_file)); ?>" download> <?php echo app('translator')->get('lang.download'); ?>  <span class="pl ti-download"></span>
                                <?php endif; ?>
                             </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-meta">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="value text-left">
                            <?php echo app('translator')->get('lang.description'); ?>  
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="name">
                            <?php if(isset($ContentDetails)): ?>
                            <?php echo e(@$ContentDetails->description); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="file-preview" style="display: none">
            <?php
            $std_file =$ContentDetails->upload_file;
            $ext =strtolower(str_replace('"]','',pathinfo($std_file, PATHINFO_EXTENSION)));
            $attached_file=str_replace('"]','',$std_file);
            $attached_file=str_replace('["','',$attached_file);
            $preview_files=['jpg','jpeg','png','heic','mp4','mov','mp3','mp4','pdf'];
           
        ?>

            <?php if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='heic'): ?>
                <img class="img-responsive mt-20" style="width: 100%; height:auto" src="<?php echo e(asset($attached_file)); ?>">
                <?php elseif($ext=='mp4' || $ext=='mov'): ?>
                <video class="mt-20 video_play" width="100%"  controls>
                    <source src="<?php echo e(asset($attached_file)); ?>" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
            <?php elseif($ext=='mp3'): ?>
            <audio class="mt-20 audio_play" controls  style="width: 100%">
                <source src="<?php echo e(asset($attached_file)); ?>" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>

            <?php elseif($ext=='pdf'): ?>
            
            
            <object data='<?php echo e(asset($attached_file)); ?>' type="application/pdf" width="100%" height="800">
    
                <iframe src='<?php echo e(asset($attached_file)); ?>' width="100%"height="800">
                    <p>This browser does not support PDF!</p>
                </iframe>
    
            </object>
            <?php endif; ?>
            <?php if(!in_array($ext,$preview_files)): ?>
                
                <div class="alert alert-warning">
                    <?php echo e($ext); ?> File Not Previewable</a>.
                </div>
            <?php endif; ?>
            <div class="mt-40 d-flex justify-content-between">
                
                <?php
                    $set_filename=time().'_'.$std_file;
                ?>
                <a class="primary-btn tr-bg" download="<?php echo e($set_filename); ?>" href="<?php echo e(asset($attached_file)); ?>"> <span class="pl ti-download"> <?php echo app('translator')->get('lang.download'); ?></span></a> 
                
        </div>
        <hr>
        </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
<script>
      $('#show_files').on('click', function() {
        $('.file-preview').show();
        $('.content_info').hide();
    });
</script>
<script type="text/javascript">
    jQuery('.has-modal').on('hidden.bs.modal', function (e) {
    //   console.log('closed');
    //   jQuery('#viewSubmitedHomework video').attr("src", jQuery("#viewSubmitedHomework  video").attr("src"));
      $('.video_play').get(0).play();
      $('.video_play').trigger('pause');
      
      $('.audio_play').get(0).play();
      $('.audio_play').trigger('pause');
    });
    </script>
<?php /**PATH /home/edubangl/infinitytechltd.bou.education/resources/views/backEnd/studentPanel/uploadContentDetails.blade.php ENDPATH**/ ?>