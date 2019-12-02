<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Ipro Tester</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS -->
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?= base_url() ?>assets/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />

    <link href="<?= base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?= base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?= base_url() ?>assets/pages/css/profile.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?= base_url() ?>assets/global/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> 

    <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>

 <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            Ipro Site </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right"> 
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <?php if($userdata["avatar"]){ ?>
                                    <img class="img-circle" src="/<?=$userdata["avatar"]?>" alt="" />
                                    <?php }else{ ?>
                                    <img class="img-circle" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
                                    <?php } ?>                                       
                                    <span class="username username-hide-on-mobile"> <?php echo $userdata["username"]; ?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="/user/user_profile">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>                                   
                                    <li>
                                        <a href="/user/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="/user/logout" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>

            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->           
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">               
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>  
                            <?php 
                                if($userdata['role'] == "admin" ):
                            ?>                         
                            <li class="nav-item">
                                <a href="/admin" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="arrow"></span>
                                </a>  
                            </li>                              
                            <li class="nav-item ">
                                <a href="/admin/ipros" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Settings</span>
                                    <span class="arrow"></span>
                                </a>
                            </li> 
                            <?php endif; ?>
                            <?php                               
                                if($userdata['role'] == "technician" ):
                            ?> 
                            <li class="nav-item ">
                                <a href="/home/client" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Clients</span>
                                    <span class="arrow"></span>
                                </a>
                            </li> 
                            <?php endif; ?>
                            <li class="nav-item">
                                <a href="/" class="nav-link nav-toggle">
                                    <i class="icon-feed"></i>
                                    <span class="title">Home</span>
                                    <span class="arrow"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->                        

                        <div class="spinner-feeds" style="text-align: center;"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
                        <div class="error-feeds alert alert-danger" style="display:none;margin: 0px;">Sorry seems like we are having some problems displaying the chat!!!</div> 
                        <div class="portlet-body" id="chats" style="display: none;">
                            <div class="scroller" style="height: 400px;" data-always-visible="1" data-rail-visible1="1">
                               <ul class="chat_block_lists chats">
                               </ul>
                            </div>    
                            <div class="chat-form">
                                <div class="input-cont">
                                    <input class="form-control" id="msg_box" type="text" placeholder="Type a message here..." /> </div>
                                <div class="btn-cont">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" id="msg_send" class="btn blue icn-only">
                                        <i class="fa fa-check icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>  
                        <!-- END SIDEBAR -->

                     </div>
                </div>

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

<script src="<?= base_url() ?>assets/global/scripts/moment.min.js"></script>
<script src="<?php echo $socket_url ?>/socket.io/socket.io.js"></script>
<script>    
    $ = jQuery;
    var user_id='<?php echo $userdata['id'] ?>';
    var room_id=1;
    var cont = $("#chats");
    var chat_block_list = $('.chat_block_lists', cont);
   
    if(typeof io=="undefined")
    {
        $('.spinner-feeds').hide();
        cont.hide();
        $('.error-feeds').show();
    }
    else
    {
        var socket = io.connect('<?php echo $socket_url ?>');

        var scroll_func = function (){            
            var getLastPostPos = function() {                
                var height = 0;
                cont.find("li.out, li.in").each(function() {                    
                    height = height + $(this).outerHeight();
                });

                return height;
            }

            cont.find('.scroller').slimScroll({
                scrollTo: getLastPostPos(),
            });
        }

        var chatpage=socket.of('/chatpage')
            .on('connect_failed', function (reason) {
            $('.spinner-feeds').hide();
            cont.hide();
            $('.error-feeds').show();
            console.error('unable to connect chatpage to namespace', reason);
            })
            .on('error',function(reason){
            //alert("in error func");
            $('.spinner-feeds').hide();
            cont.hide();
            $('.error-feeds').show();
            cont.html('');
            console.error('unable to connect chatpage to namespace', reason);
            })
            .on('reconnect_failed',function(){
            alert("in reconnect fail func");
            $('.spinner-feeds').hide();
            cont.hide();
            $('.error-feeds').show();
            cont.html('');
            })
            .on('connect', function () {
            console.info('sucessfully established a connection of chatpage with the namespace');
            chatpage.emit('senddata',{user_id:user_id,room_id:room_id});
            });
        
        chatpage.on('chatdata',function(data){
            $('.error-feeds').hide();
            $('.spinner-feeds').hide();
            chat_block_list.html('');
            cont.show();
            var header='';
            var content='';
            var footer='';
            
            var cells='';
            
            if(data.memdata)
            {
                for(n in data.memdata)
                {
                    cells+='<span class="label label-default"><input type="hidden" class="userId" value="'+data.memdata[n].user_id+'"/>'+data.memdata[n].username+'</span>&nbsp;';
                }
            }
            header='<div class="panel-heading"><h3 class="panel-title"><span class="label label-success">Online:</span> <span id="online-list"> '+cells+'</span></h3></div>';
            cont.append(header);            
           
            if(data.converdata)
            {
                for(n in data.converdata)
                {   
                    var avatar = data.converdata[n].avatar;

                    if(!avatar){
                        avatar = 'assets/uploads/default.png';
                    }   
                    var chat_comment = '<li class="in">'+
                            '<img class="avatar" alt="" src="../'+avatar+'" />'+
                            '<div class="message">'+
                                '<span class="arrow"> </span>'+
                                '<a href="javascript:;" class="name">'+data.converdata[n].username+'</a>'+
                                '<span class="datetime"> at 20:54 </span>'+
                                '<span class="body">'+data.converdata[n].comment+'</span>'+
                            '</div>'+
                        '</li>';
                    chat_block_list.append(chat_comment);
                }
            }
            else
            {
                chat_block_list.append('');
            }   
            scroll_func();        
        }); 
        chatpage.on('showcomment',function(data){
            var avatar = data.room_comment[0].avatar;
            
            if(!avatar){
                avatar = 'assets/uploads/default.png';
            }  

            var in_out = "in";
            if(user_id == data.room_comment[0].user_id){
                in_out = "out"
            }
            var chat_comment = '<li class="'+in_out+'">'+
                            '<img class="avatar" alt="" src="../'+avatar+'" />'+
                            '<div class="message">'+
                                '<span class="arrow"> </span>'+
                                '<a href="javascript:;" class="name">'+data.room_comment[0].username+'</a>'+
                                '<span class="datetime"> at 20:54 </span>'+
                                '<span class="body">'+data.room_comment[0].comment+'</span>'+
                            '</div>'+
                        '</li>';
            chat_block_list.append(chat_comment);
            $('#msg_box').val('');
            scroll_func();
        });
        chatpage.on('newuser',function(data){
            $('#online-list').append('<span class="label label-default"><input type="hidden" class="userId" value="'+data.userdata[0].user_id+'"/>'+data.userdata[0].username+'</span>&nbsp;') 
        });
        chatpage.on('removeuser',function(data){
            $('#online-list span').each(function(index){
                var user_id=$(this).find('.userId').val();
                if(user_id==data.user_id)
                {
                    $(this).remove();
                }
            }); 
        });
        $('body').on("keypress",'#msg_box', function(e) {   
        if (e.which == 13) {
            $(this).blur();
            var message = $(this).val();
            if(message)
            {
                sendChat(message);
            }
            $(this).focus();
            return false; // prevent the button click from happening
        }
        }); 
        $('body').on("click",'#msg_send', function(e) { 
            var message = $('#msg_box').val();
            if(message)
            {
                sendChat(message);
            }
        });
        /*$('body').on("click",'#online-list span', function(e) { 
            
            if($(this).hasClass("active")){
                $(this).removeClass("active");
            }else{
                $(this).addClass("active");    
            }
           
        });
    */       
        function sendChat(message)  
        {
            var curr_date= moment().format("YYYY-MM-DDTHH:mm:ss.SSSZZ");
            chatpage.emit('sendcomment', {msg:message,user_id:user_id,room_id:room_id,datetime:curr_date});
        }
    }
    function confirmExit()
    {
        //alert("exiting");
        //window.location.href='<? echo base_url();?>/home';
        return true;
    }
    window.onbeforeunload = confirmExit;
</script>