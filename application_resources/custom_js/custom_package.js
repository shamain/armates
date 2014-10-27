var base_url = js_base_url;
var site_url = js_site_url;
//////////////////package//////////////////////////////////////////////////////////////

$('#package_table').dataTable();

$('#add_package_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        package_name: {
            required: true
        },
        max_targets: {
                required: true
            },
       max_objects: {
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
        $.post(site_url + '/package/package_controller/add_new_package', $('#add_package_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#add_package_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > Package </a>has been added.</div>');
                add_package_form.reset();
                window.location = site_url + '/package/package_controller/manage_packages'; 
            } else {
                $("#add_package_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#"> Package </a>has failed.</div>');
            }
        });
    }
});

$('#edit_package_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        package_name: {
            required: true
        },
        max_targets: {
            required: true
        },
        max_objects: {
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
        $.post(site_url + '/package/package_controller/edit_package', $('#edit_package_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#edit_package_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > Package</a>has been updated.</div>');
                edit_package_form.reset();
                window.location = site_url + '/package/package_controller/manage_packages'; 
            } else {
                $("#edit_package_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">package </a>has failed.</div>');
            }
        });


    }
});




