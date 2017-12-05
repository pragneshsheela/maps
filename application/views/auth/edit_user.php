<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open(uri_string());?>

                        <?php echo form_hidden('id', $user->id);?>
                        <?php echo form_hidden($csrf); ?>
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><?php echo lang('edit_user_heading');?></h4>
                        </div>
                        <div id="infoMessage"><?php echo $message;?></div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">First Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="first_name" 
                                          id="first_name"
                                          value="<?php  echo $first_name['value']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Last Name</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="last_name" 
                                          id="last_name"
                                          value="<?php  echo $last_name['value']; ?>"  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Company Name:</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="company" 
                                          id="company"
                                          value="<?php  echo $company['value']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Phone</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input 
                                          class="form-control" 
                                          type="text" 
                                          name="phone" 
                                          id="phone"
                                          value="<?php  echo $phone['value']; ?>"  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Password</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="password" name="password" id="password" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Confirm Password</label>
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control" type="password" name="password_confirm" id="password_confirm" />
                                    </div>
                                </div>
                            </div>
                            <?php if ($this->ion_auth->is_admin()): ?>

                              <h3><?php echo lang('edit_user_groups_heading');?></h3>
                              <?php foreach ($groups as $group):?>
                                  <?php
                                      $gID=$group['id'];
                                      $checked = null;
                                      $item = null;
                                      foreach($currentGroups as $grp) {
                                          if ($gID == $grp->id) {
                                              $checked= ' checked="checked"';
                                          break;
                                          }
                                      }
                                  ?>
                                  <div class="checkbox checkbox-inline">
                                      <label>
                                          <input 
                                              type="checkbox" 
                                              name="groups[]"
                                              value="<?php echo $group['id'];?>"
                                              <?php echo $checked;?>>
                                              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                      </label>
                                  </div>
                              <?php endforeach?>
                          <?php endif ?>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-rose btn-fill">Edit Users</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>

