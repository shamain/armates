var base_url = js_base_url;
var site_url = js_site_url;
//////////////////app//////////////////////////////////////////////////////////////

$('#app_table').dataTable();

$('#add_app_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        app_name: {
            required: true
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
        $.post(site_url + '/app/app_controller/add_new_app', $('#add_app_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#add_app_msg").html('<div class="alert alert-success alert-dismissable"><i class="fa fa-check"></i><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Success!</b>Success App has been successfully added .</div>');
                add_app_form.reset();
                window.location = site_url + '/app/app_controller/manage_apps'; //Redirect to the main company view after adding
            } else {
                $("#add_app_msg").html('<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Error!</b>Success App has failed .</div>');
            }
        });
    }
});

$('#edit_app_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        app_name: {
            required: true
        },
        app_description: {
            required: true
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
        $.post(site_url + '/app/app_controller/edit_app', $('#edit_app_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#edit_app_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > App</a>has been updated.</div>');
                edit_app_form.reset();
                window.location = site_url + '/app/app_controller/manage_apps'; 
            } else {
                $("#edit_app_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">app </a>has failed.</div>');
            }
        });


    }
});
$('#package_table').dataTable();







        