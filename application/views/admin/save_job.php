<div class="container-fluid">

    <div class="row gx-3">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title"><?php echo !empty($job->id)?"Edit":"Add New" ?> Job</h5>
                </div>
                <div class="card-body">
                    <?php if($this->session->flashdata('success')){?>
                    <p class="success-msg"><?php  echo $this->session->flashdata('success');?></p>	
                    <?php } ?>
                    <?php if($this->session->flashdata('error')){?>
                    <p class="error-msg"><?php  echo $this->session->flashdata('error');?></p>	
                    <?php } ?>
                    <!-- Row start -->
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/project/'.$project_id.'/saveJobs') ?>">
                    <input type="hidden" name="project_id" value="<?php echo !empty($job->project_id)?$job->project_id:Null ?>">
                    <input type="hidden" name="job_id" value="<?php echo !empty($job->id)?$job->id:Null ?>">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Job Name<span style="color:red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="job_name" id="job_name" placeholder="Enter Job Name" value="<?php echo !empty($job->job_name)?$job->job_name:set_value('job_name') ?>">
                            <?php $job_name = form_error('job_name'); if(isset($job_name)) { ?>
                            <span style="color:red"><?php echo $job_name; ?></span>
                            <?php } ?>
                            </div>
                        </div>
                      
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </form>
                    <!-- Row end -->
                </div>
            </div>
        </div>

    </div>

</div>