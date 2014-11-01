var base_url = js_base_url;
var site_url = js_site_url;
//////////////////client//////////////////////////////////////////////////////////////


$('#client_table').dataTable();




    //add client Form
    $('#add_client_form').validate({
        focusInvalid: false,
        ignore: "",
        rules: {
            client_fname: {
                required: true
            },
            client_lname: {
                required: true
            },
            client_email: {
                required: true,
                email: true
            },
            client_contact: {
                required: true,
                 number:true
            }


        },
        invalidHandler: function(event, validator) {
            //display error alert on form submit    
        },
        errorPlacement: function(label, element) { // render error placement for each input type   
            $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('success-control').addClass('error-control');
        },
        highlight: function(element) { // hightlight error inputs
            var parent = $(element).parent();
            parent.removeClass('success-control').addClass('error-control');

        },
        unhighlight: function(element) { // revert the change done by hightlight

        },
        success: function(label, element) {
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('error-control').addClass('success-control');
        }, submitHandler: function(form)
        {
            $.post(site_url + '/client/client_controller/add_new_client', $('#add_client_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#add_client_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >client </a>has been added.</div>');
                    add_client_form.reset();
                    window.location = site_url + '/client/client_controller/manage_clients'; 

                } else {
                    $("#add_client_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">client </a>has failed.</div>');
                }
            });


        }
    });


//edit client bday datepicker
$('#client_bday_edit_dpicker').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
});

//edit client Form
$('#edit_client_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        client_fname: {
            required: true
        },
        client_lname: {
            required: true
        },
        client_email: {
            required: true
    
        },
        
        client_contact: {
            required: true,
            number:true
        }


    },
    invalidHandler: function(event, validator) {
        //display error alert on form submit    
    },
    errorPlacement: function(label, element) { // render error placement for each input type   
        $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('success-control').addClass('error-control');
    },
    highlight: function(element) { // hightlight error inputs
        var parent = $(element).parent();
        parent.removeClass('success-control').addClass('error-control');

    },
    unhighlight: function(element) { // revert the change done by hightlight

    },
    success: function(label, element) {
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('error-control').addClass('success-control');
    }, submitHandler: function(form)
    {
        $.post(site_url + '/client/client_controller/edit_client', $('#edit_client_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#edit_client_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >client </a>has been updated.</div>');
                edit_client_form.reset();
                 window.location = site_url +'/client/client_controller/manage_clients';
            } else {
                $("#edit_client_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">client </a>has failed.</div>');
            }
        });


    }
});




