<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open("auth/create_group");?>
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><?php echo lang('create_group_heading');?></h4>
                        </div>
                        <div id="infoMessage"><?php echo $message;?></div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Group Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="group_name" id="group_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Description</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="description" id="description" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Company Name:</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="company" id="company" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-rose btn-fill">Create Group</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>
