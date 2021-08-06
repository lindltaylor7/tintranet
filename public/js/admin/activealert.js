$('#sa-warning,.sa-warning').on('click',function(e){
    swal({   
        title: "Are you sure?",   
        text: "You will not be able to recover this imaginary file!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#f8b32d",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){   
        swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
    });
    return false;
});