
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">            
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Ipro Chart</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="col-md-4">
                                <div class="form-group">                                    
                                    <label>Ipro Select</label>
                                    <select id="ipro_check" class="form-control">
                                        <?php if($ipros):
                                            foreach ($ipros as $key => $value) :
                                        ?>    
                                            <option value="<?= $value['ipro_ip'] ?>,<?= $value['ipro_port'] ?>,<?= $value['ipro_unit'] ?>,<?= $value['ipro_sensors'] ?>"><?=$value["ipro_name"] ?> - <?= $value["ipro_ip"] ?></option>
                                        
                                        <?php endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div id="echarts_line" style="height:500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END : ECHARTS -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->   
 
    <!-- END QUICK SIDEBAR -->
</div>