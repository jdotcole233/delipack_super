

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


    $('.subscriptionsBtn').click(function(e){
        $('#subs_modal').modal('show');
    });

    $('.newSubsBtn').click(function(e){
        $('#addSubsModal').modal('show');
    })

    $('.editCompany').click(function(e){
        console.log($(this).data('companydata'));
        let companydata = $(this).data('companydata');
        let subscriptions = $(this).data('subscriptions');
        $('#company_name').val(companydata.company_name);
        $('#company_abbreviation').val(companydata.company_abbreviation);
        $('#company_phone_one').val(companydata.company_phone_one);
        $('#company_phone_two').val(companydata.company_phone_two);
        $('#company_email').val(companydata.email);
        $('#region').val(companydata.region);
        $('#address').val(companydata.address);
        $('#city').val(companydata.city);
        $('#area').val(companydata.area);
        $('#twitter_handle').val(companydata.twitter_handle);
        $('#instagram_handle').val(companydata.instagram_handle);
        $('#facebook_handle').val(companydata.facebook_handle);
        $('#company_id').val(companydata.companies_id);
        $('#subscription_type').val(subscriptions.subscription_type);
        $('#subscription_id').val(subscriptions.subscription_id);
        $('#subscription_duration').val(subscriptions.subscription_duration); //subscription_id
        $('.bd-example-modal-lg').modal('show');

    });

});
