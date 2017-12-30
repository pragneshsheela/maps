<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">List of Orders</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Line Item Name</th>
                                        <th>Order Id</th>
                                        <th>Status</th>
                                        <th>Item Count</th>
                                        <th>Seller Name</th>
                                        <th>Email</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($orders)) {
                                            foreach ($orders as $key => $value) {
                                    ?>
                                            <tr>
                                                <td><?php echo $value['line_item_name']; ?></td>
                                                <td><?php echo $value['order_id']; ?></td>
                                                <td><?php echo $value['status']; ?></td>
                                                <td><?php echo $value['item_count']; ?></td>
                                                <td><?php echo $value['seller_name']; ?></td>
                                                <td><?php echo $value['email']; ?></td>
                                                <td class="text-right">
                                                    <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                </td>
                                            </tr>      
                                    <?php     
                                            }
                                        } 
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>