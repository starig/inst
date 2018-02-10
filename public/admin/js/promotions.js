$(document).ready(function() {
   $('.j-del-promo').click(function(){
       if (confirm('Удалить этот тип?')) {
           var id = $(this).attr('data-price-id');
           var _self = this;
           $.post('/web-admin/types-of-promotion/del', {_token: csrf_token, id: id}, function(data){
               if (data.result == 'error') {
                   alert(data.message);
               } else {
                $(_self).closest('tr').remove();
               }
           });
       }
       return false;
   });
});
