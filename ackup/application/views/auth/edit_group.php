
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open(current_url());?>

                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><?php echo lang('edit_group_heading');?></h4>
                        </div>
                        <div id="infoMessage"><?php echo $message;?></div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Group Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="group_name" 
                                          id="group_name"
                                          value="<?php  echo $group_name['value']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Description</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="group_description" 
                                          id="group_description"
                                          value="<?php  echo $group_description['value']; ?>"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-rose btn-fill">Save Group</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>

