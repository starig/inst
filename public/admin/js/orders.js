$(document).ready(function(){
    $('.j-btn-ready').click(function(){
        var is_completed = $(this).attr('data-ready');
        if (is_completed == 1) {
            is_completed = 0;
        } else {
            is_completed = 1;
        }
        
        var id = $(this).attr('data-order-id');
        
        var _self = this;
        
        $.post('/web-admin/orders/ready', {_token:csrf_token, id: id, is_completed: is_completed}, function(data){
            if (is_completed) {
                $(_self).closest('tr').removeClass('error').addClass('success');
                $(_self).html('Отменить');
            } else {
               $(_self).closest('tr').removeClass('success').addClass('error');
                $(_self).html('Выполнил'); 
            }
            
            $(_self).attr('data-ready', is_completed);
        });
        
        return false;
    });
});