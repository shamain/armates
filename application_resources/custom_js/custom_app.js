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
                $("#add_app_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > App </a>has been added.</div>');
                add_app_form.reset();
                window.location = site_url + '/app/app_controller/manage_apps'; //Redirect to the main company view after adding
            } else {
                $("#add_app_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#"> App </a>has failed.</div>');
            }
        });
    }
});

$('#package_table').dataTable();







        