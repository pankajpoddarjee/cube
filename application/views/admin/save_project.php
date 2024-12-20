<div class="container-fluid">

    <div class="row gx-3">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title"><?php echo !empty($project->id)?"Edit":"Add New" ?> Project</h5>
                </div>
                <div class="card-body">
                    <?php if($this->session->flashdata('success')){?>
                    <p class="success-msg"><?php  echo $this->session->flashdata('success');?></p>	
                    <?php } ?>
                    <?php if($this->session->flashdata('error')){?>
                    <p class="error-msg"><?php  echo $this->session->flashdata('error');?></p>	
                    <?php } ?>
                    <!-- Row start -->
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/saveProject') ?>">
                    <input type="hidden" name="project_id" value="<?php echo !empty($project->id)?$project->id:Null ?>">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Project Name<span style="color:red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Enter Project Name" value="<?php echo !empty($project->project_name)?$project->project_name:set_value('project_name') ?>">
                            <?php $project_name = form_error('project_name'); if(isset($project_name)) { ?>
                            <span style="color:red"><?php echo $project_name; ?></span>
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