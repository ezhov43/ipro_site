
var Custom = function(){

    $('#ipro_table .btn_reset').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to edit Ipro?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            var data = {id: id};
            var url = '/admin/get_ipro';
            if (isConfirm){
                $("#edit_pro_modal").modal('show');
                 $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        console.log(res);
                        if(res.status){
                            $("#edit_pro_modal form").find("input[name='id']").val(res.result[0].id);
                            $("#edit_pro_modal form").find("input[name='ipro_name']").val(res.result[0].ipro_name);
                            $("#edit_pro_modal form").find("input[name='ipro_ip']").val(res.result[0].ipro_ip);
                            $("#edit_pro_modal form").find("input[name='ipro_port']").val(res.result[0].ipro_port);
                            $("#edit_pro_modal form").find("input[name='ipro_unit']").val(res.result[0].ipro_unit);
                            $("#edit_pro_modal form").find("input[name='ipro_sensors']").val(res.result[0].ipro_sensors);
                        }
                    }
                });
            }
        }); 
    });

    $('#ipro_table .btn_remove').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to remove this Ipro?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            if (isConfirm){
                var url = '/admin/remove_ipro';
                var data = {id: id};
                $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            }
        }); 
    });

    $('#user_table .btn_reset').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to edit role?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            var data = {id: id};
            var url = '/admin/get_role';
            if (isConfirm){
                $("#edit_role_modal").modal('show');
                 $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        console.log(res);
                        if(res.status){
                            $("#edit_role_modal form").find("input[name='username']").val(res.result[0].username);
                            $("#edit_role_modal form").find("select[name='role']").val(res.result[0].role);
                            $("#edit_role_modal form").find("input[name='id']").val(res.result[0].id);
                        }
                    }
                });
            }
        }); 
    });

    $('#client_table .btn_follow').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to grant permission to this client?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            var data = {client_id: id};
            var url = '/home/set_follow';
            if (isConfirm){
                 $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        console.log(res);
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            }
        }); 
    });

    $('#client_table .btn_unfollow').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to remove permission?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            var data = {client_id: id};
            var url = '/home/set_unfollow';
            if (isConfirm){
                 $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        console.log(res);
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            }
        }); 
    });

    $('#ipro_table .btn_remove').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to remove this User?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            if (isConfirm){
                var url = '/admin/remove_ipro';
                var data = {id: id};
                $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            }
        }); 
    });

    $('#user_table .btn_remove').on('click', function(e){
        var id = $(this).closest('tr').data('id');
        swal({
            title: "Do you want to remove this User?",
            text: '',
            type: 'warning',
            allowOutsideClick: 'true',
            showConfirmButton: 'true',
            showCancelButton: 'true',
            confirmButtonClass: 'btn btn-info',
            cancelButtonClass: 'btn btn-danger',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        },
        function(isConfirm){
            if (isConfirm){
                var url = '/admin/remove_user';
                var data = {id: id};
                $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res){
                        if(res.status){
                            window.location.reload();
                        }
                    }
                });
            }
        }); 
    });

    
    var handleApp = function(){        
        $('#add_pro_modal form').on('submit', function(e){
            e.preventDefault();
            var url = "/admin/add_ipro";
            $.ajax({
                type:"POST",
                url:url,
                data:$(this).serialize(),
                dataType: "json",
                success: function(res){
                    if(res.status){
                        window.location.reload();
                    }else{

                    }
                }
            });
        }); 

        $('#edit_pro_modal form').on('submit', function(e){
            e.preventDefault();
            var url = "/admin/edit_ipro";
            $.ajax({
                type:"POST",
                url:url,
                data:$(this).serialize(),
                dataType: "json",
                success: function(res){                    
                    if(res.status){
                        window.location.reload();
                    }else{

                    }
                }
            });
        }); 

        $('#edit_role_modal form').on('submit', function(e){
            e.preventDefault();
            var url = "/admin/update_role";
            $.ajax({
                type:"POST",
                url:url,
                data:$(this).serialize(),
                dataType: "json",
                success: function(res){                    
                    if(res.status){
                        window.location.reload();
                    }else{

                    }
                }
            });
        }); 


        $(".change_password").submit(function(e){
            e.preventDefault();
            
            if( $("input[name='password']").val() != $("input[name='confirm_password']").val() ){
                toastr["warning"]("Password is not matched.", "Notification!")
            }

            var url = "/admin/update_password";
            $.ajax({
                type:"POST",
                url:url,
                data:$(this).serialize(),
                dataType: "json",
                success: function(res){ 
                    console.log(res);                   
                    if(res.status){
                        toastr["success"](res.result, "Success!")  
                        window.location.reload();
                    }else{
                        toastr["info"](res.result, "warning!")  
                    }
                }
            });     
        });

        $(".avatar_form").submit(function(e){
            e.preventDefault();
            var file_data = $('input[name="avatar"]').prop('files')[0];   
            var form_data = new FormData();                  
            form_data.append('file', file_data);
            var url = "/admin/upload_avatar";
            $.ajax({
                type:"POST",
                url:url,
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,      
                dataType: "json",
                success: function(res){ 
                    console.log(res);                   
                    if(res.status){
                        toastr["success"](res.result, "Success!"); 
                    }else{
                        toastr["info"](res.result, "warning!"); 
                    }
                }
            });     
        });

        $(".personal_form").submit(function(e){
            e.preventDefault();            
            var url = "/user/update";
            $.ajax({
                type:"POST",
                url:url,               
                data: $(this).serialize(),      
                dataType: "json",
                success: function(res){ 
                    console.log(res);                   
                    if(res.status){
                        toastr["success"]("User Profile was updated.", "Success!"); 
                    }else{
                        toastr["info"]("Has problem.", "warning!"); 
                    }
                }
            });     
        });

        $("#ipro_check").change(function(){
            var echart_data = {
                "RFID": [11, 11, 15, 13, 12, 13, 10, 12, 3, 1, 20, 8, 11],
                "Ryan": [3, 2, 1, 2, 4, 5, 9, 2, 12, 1, 4, 11, 5],
                "Leal": [2, 21, 3, 8, 12, 3, 19, 17, 13, 4, 6, 8, 5],
                "Brannon": [4, 3, 3, 13, 5, 34, 1, 9, 8, 10, 13, 5, 17],
                "Walt": [12, 18, 5, 7, 9, 12, 33, 26, 8, 7, 14, 34, 3],
                "Tyson": [19, 10, 3, 9, 6, 18, 13, 22, 30, 16, 12, 2, 3],
                "Royal": [13, 19, 25, 3, 32, 12, 3, 9, 13, 18, 24, 18, 11],
                "Martine": [12, 3, 14, 2, 9, 23, 11, 8, 13, 12, 10, 28, 21],
            }
            var selected = $(this).find("option:checked").text().split(" - ")[0];
            console.log(selected);

            require(
                [        
                    'echarts',
                    'echarts/chart/line',         
                ],
                function(ec) {
                    if( document.getElementById('echarts_line') ){
                        var myChart2 = ec.init(document.getElementById('echarts_line'));

                        myChart2.setOption({
                            title: {
                                text: 'Ipro Testing',
                                subtext: 'Lorem ipsum'
                            },
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
                                data: ['High'/*, 'Low'*/]
                            },
                            toolbox: {
                                show: true,
                                feature: {
                                    /*mark: {
                                        show: true
                                    },
                                    dataView: {
                                        show: true,
                                        readOnly: false
                                    },
                                    magicType: {
                                        show: true,
                                        type: ['line', 'bar']
                                    },
                                    restore: {
                                        show: true
                                    },*/
                                    saveAsImage: {
                                        show: true
                                    }
                                }
                            },
                            calculable: true,
                            xAxis: [{
                                type: 'category',
                                boundaryGap: false,
                                data: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13']
                            }],
                            yAxis: [{
                                type: 'value',
                                axisLabel: {
                                    formatter: '{value}'
                                }
                            }],
                            series: [{
                                name: 'High',
                                type: 'line',
                                data: echart_data[selected],
                                markPoint: {
                                    data: [{
                                        type: 'max',
                                        name: 'Max'
                                    }, {
                                        type: 'min',
                                        name: 'Min'
                                    }]
                                },
                                markLine: {
                                    data: [{
                                        type: 'average',
                                        name: 'Mean'
                                    }]
                                }
                            }/*, {
                                name: 'Low',
                                type: 'line',
                                data: [1, -2, 2, 5, 3, 2, 0, 5, 1, 5, 7, 10, 2],
                                markPoint: {
                                    data: [{
                                        name: 'Lowest',
                                        value: -2,
                                        xAxis: 1,
                                        yAxis: -1.5
                                    }]
                                },
                                markLine: {
                                    data: [{
                                        type: 'average',
                                        name: 'Mean'
                                    }]
                                }
                            }*/]
                        }); 
                    }    
                }  
            );       
        });
    }

    var initchat = function(){
        var cont = $('#chats');
        var list = $('.chats', cont);
        var form = $('.chat-form', cont);
        var input = $('input', form);
        var btn = $('.btn', form);
        
        var handleClick = function(e) {
            e.preventDefault();
            
            var text = input.val();
            if (text.length == 0) {
                return;
            }   

            var time = new Date();
            var time_str = (time.getHours() + ':' + time.getMinutes());
    
            var getLastPostPos = function() {
                var height = 0;
                cont.find("li.out, li.in").each(function() {
                    height = height + $(this).outerHeight();
                });

                return height;
            }

            cont.find('.scroller').slimScroll({
                scrollTo: getLastPostPos()
            });
        }    

        $('body').on('click', '.message .name', function(e) {
            e.preventDefault(); // prevent click event

            var name = $(this).text(); // get clicked user's full name
            input.val('@' + name + ':'); // set it into the input field
            App.scrollTo(input); // scroll to input if needed
        });

        btn.click(handleClick);

        input.keypress(function(e) {
            if (e.which == 13) {
                handleClick(e);
                return false; //<---- Add this line
            }
        });
    }

    return {
        init: function(){
            handleApp();
            //initchat();
        }
    };
}();

jQuery(document).ready(function(){
    Custom.init();
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "1000",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
});