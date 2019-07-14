

$(document).ready(function(){


    $('.deactivateCompanyBtn').on('click',function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You want deactivate the company!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Unassign!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deactivated!',
                    'Company has been deactivated.',
                    'success'
                )
            }
        })
    });

});