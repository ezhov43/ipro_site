<?php  ?>
    
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
        <!-- BEGIN PAGE HEADER-->           
            
            <div class="row">
                <div class="col-md-12">                   
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase">Users</span>
                            </div>
                        </div>
                        <div class="portlet-body">                           
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="user_table">
                                <thead>
                                    <tr>             
                                        <th> No </th>
                                        <th>  </th>
                                        <th> Full Name </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Role </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($users) > 0): ?>
                                        <?php foreach($users as $key => $value): ?>
                                            <tr class="odd gradeX" data-id="<?= $value['id'] ?>">
                                                <td> <?= $key+1 ?> </td>
                                                <td class="avatar"> <?php if($value["avatar"]){ ?>
                                                    <img src="/<?=$value["avatar"]?>" alt="" />
                                                    <?php }else{ ?>
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
                                                    <?php } ?>    
                                                </td>
                                                <td> <?= $value['first_name'] ?> <?= $value['last_name'] ?> </td>
                                                <td> <?= $value['username'] ?> </td>
                                                <td> <?= $value['email'] ?> </td>
                                                <td> <?= $value['type'] ?> </td>
                                                <td>
                                                    <button class="btn btn-primary mt-sweetalert btn_reset" 
                                                        data-title="Do you want to Edit Role?" 
                                                        data-type="warning" 
                                                        data-allow-outside-click="true" 
                                                        data-show-confirm-button="true"
                                                        data-show-cancel-button="true" data-cancel-button-class="btn-danger" data-cancel-button-text='No' data-confirm-button-text='Yes' data-confirm-button-class="btn-info">Edit </button>
                                                    <button class="btn btn-danger mt-sweetalert btn_remove" 
                                                        data-title="Do you want to remove this User?" 
                                                        data-type="warning" 
                                                        data-allow-outside-click="true" 
                                                        data-show-confirm-button="true"
                                                        data-show-cancel-button="true" data-cancel-button-class="btn-danger" data-cancel-button-text='No' data-confirm-button-text='Yes' data-confirm-button-class="btn-info">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>                   
                </div>
            </div>
        </div>    
    </div>
    <!-- END CONTENT -->   

    <div id="edit_role_modal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="javascript:;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Role</h4>
                    </div>
                    <div class="modal-body">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;">
                            <div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                <div class="row">
                                    <div class="col-md-12">      
                                        <div class="alert alert-danger" role="alert" style="display:none" id="error_msg">
                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                            <span class="sr-only">Error:</span>
                                            User already exists
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" name="username" class="form-control" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
			                                <select class="form-control" name="role">
                                                <?php 
                                                   foreach($types as $key => $value): 
                                                ?>
                                                <option <?= $value['id'] ?>><?= $value['type'] ?></option>
                                                <?php endforeach; ?>
			                                </select>				                           
                                        </div>   

                                        <input type="hidden" name="id" class="form-control" />                                                
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                        <button type="submit" class="btn green" id="edit_role">Edit User</button>                        
                    </div>   
                </form>         
            </div>
        </div>
    </div>
 
    <!-- END QUICK SIDEBAR -->
</div>
