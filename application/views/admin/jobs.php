<div class="container-fluid">

    <!-- Card start -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="card-title">Jobs List <strong class="">(<?php echo get_project_name_by_id($project_id);?>)</strong><div class="card-title float-md-right" style="float:right"><a class="btn btn-success" href="<?php echo base_url('admin/project/'.$project_id.'/addJobs'); ?>">Add Jobs</a></div></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basicExample" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($jobs) && count($jobs)>0){ 
                                $i=1;
                            foreach ($jobs as $job) {

                            
                            $delete_style = ($job->is_active == '0')?"color: red":"";
                            $delete_msg = ($job->is_active == '0')?"Active":"Deactive";
                            
                        ?>
                        <tr >
                            <th scope="row"><?php echo $i; ?></th>
                            <td><a href="<?php echo base_url('admin/project/'.$project_id.'/jobs/'.$job->id.'/estimate') ?>"><?php echo $job->job_name; ?></a></td>
                            <td>
                                <a href="<?php echo base_url('admin/project/'.$project_id.'/editJobs/'.$job->id) ?>"><span class="icon-edit"></span>
                                </a>&nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Are you sure want to <?php echo $delete_msg; ?> this Job ?')" href="<?php echo base_url('admin/project/'.$project_id.'/deleteJobs/'.$job->id) ?>" style="<?php echo  $delete_style; ?>"><span class="icon-trash"></span></a>
                        </td>
                        </tr>
                        <?php
                            $i++; }
                        }else{ 
                        ?>
                            <tr>
                            <td colspan="3">No Record Found</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	<!-- Card end -->

   
</div>