<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">library_books</i>
                    </div>
                    <?php 
                        if(!empty($success_msg)){
                            echo '<p class="statusMsg">'.$success_msg.'</p>';
                        }elseif(!empty($error_msg)){
                            echo '<p class="statusMsg">'.$error_msg.'</p>';
                        }
                    ?>
                    <form method="post" enctype="multipart/form-data"> 
                    <div class="card-content">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <legend></legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <legend>Order Importer</legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle">
                                        <img src="<?php echo base_url() ?>public/assets/img/placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div>
                                        <span class="btn btn-round btn-rose btn-file">
                                            <span class="fileinput-new">Add File</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" id="upload" name="upload" />

                                        </span>
                                        <br />
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <legend></legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <legend></legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div>
                                        <input class="btn btn-success" type="submit" value="submit">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
</div>