<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open("auth/create_user");?>
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><?php echo lang('create_user_heading');?></h4>
                        </div>
                        <div id="infoMessage"><?php echo $message;?></div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">First Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="first_name" id="first_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Last Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="last_name" id="last_name" />
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
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="email" name="email" id="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Phone</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="phone" id="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Password</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="password" id="password" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Confirm Password</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="text" name="password_confirm" id="password_confirm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-rose btn-fill">Create Users</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>
