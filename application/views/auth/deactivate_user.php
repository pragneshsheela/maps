<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open("auth/deactivate/".$user->id);?>
                    	<?php echo form_hidden($csrf); ?>
  						<?php echo form_hidden(array('id'=>$user->id)); ?>
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><?php echo lang('deactivate_heading');?> </h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                            	<?php echo sprintf(lang('deactivate_subheading'), $user->username);?>
                                <label class="col-sm-2 label-on-left">&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="confirm" value="yes" checked="checked"> Yes
                                        </label>
                                    </div>
                                    <div class="radio radio-inline" style="margin- top: 10px; ">
                                        <label>
                                            <input type="radio" name="confirm" value="no"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-rose btn-fill">Submit</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>