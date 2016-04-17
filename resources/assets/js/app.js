/**
 * Created by thomaswalsh on 4/15/16.
 */

$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $('.add-env').click(function(){
        var environment = $(this).closest('.input-group').find('.env-name').val();
        var parent = $(this).data('parent');
        var url = '/environment';
        if(parent > 0)
            url += '/'+parent;

        $.post(url, {
            name: environment
        }, function(data){
            if(data.success){
                window.location = '/environment/'+data.id;
            }
            else{
                alert(data.error);
            }
        });
    });
    $('#export').click(function(){

    });
    $('.del-value').click(function(){

    });
    $('#add-env').click(function(){

    });
    $('.var-value').blur(function(){

    });

});
