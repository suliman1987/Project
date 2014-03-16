<?php include 'includes/header.php'; ?> 

<function doObjectUpld(frm, name) {
var progressbar = $("#div_" + name + '_upload_prog'),
    myform = $("#" + frm),
    submitbutton = $("#btn_" + name + '_objct_upld');

$(myform).ajaxForm({
        beforeSend: function() { 
                progressbar.show();
                submitbutton.attr('disabled', ''); 
        },
        error: function() {
            openAlertDlg()("An error occured.");
        }, 
        complete: function(response) { 
            progressbar.hide();
            submitbutton.removeAttr('disabled'); 
            myform.resetForm();  
            alert(response);
        }
    });

  $(myform).submit();
}
<?php include 'includes/footer.php'; ?>