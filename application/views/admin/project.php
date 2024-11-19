<div class="container-fluid">

    <!-- Card start -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="card-title">Project List <div class="card-title float-md-right" style="float:right"><a class="btn btn-success" href="<?php echo base_url('admin/addProject'); ?>">Add Project</a></div></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basicExample" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($projects) && count($projects)>0){ 
                                $i=1;
                            foreach ($projects as $project) {

                            
                            $delete_style = ($project->is_active == '0')?"color: red":"";
                            $delete_msg = ($project->is_active == '0')?"Active":"Deactive";
                            
                        ?>
                        <tr >
                            <th scope="row"><?php echo $i; ?></th>
                            <td><a href="<?php echo base_url('admin/project/'.$project->id.'/jobs') ?>"><?php echo $project->project_name; ?></a></td>
                            <td>
                                <a href="<?php echo base_url('admin/editProject/'.$project->id) ?>"><span class="icon-edit"></span>
                                </a>&nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Are you sure want to <?php echo $delete_msg; ?> this project ?')" href="<?php echo base_url('admin/deleteProject/'.$project->id) ?>" style="<?php echo  $delete_style; ?>"><span class="icon-trash"></span></a>
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