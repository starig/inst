$(document).ready(function() {
   openAddPricesDialog();
});

function openAddPricesDialog()
{
    $( '#msgbox-trigger-6').on('click', function(e){
				$.msgbox("<p>Создать новый тип накрутки</p>", {
					type    : "info",
					inputs  : [
						{type: "text", label: "Тип накрутки", required: true},
						{type: "text", label: "Цена за 10", required: true}
					],
					buttons : [
						{type: "submit", value: "Добавить"},
						{type: "cancel", value: "Выйти"}
					]
					}, function(name, price) {
						if (name) {
                            $.post('/web-admin/types-of-promotions/add', {_token: csrf_token, name: name, price: price}, function(data){
                                if(data.result == 'error'){
                                    alert(data.message);
                                    openAddPricesDialog();
                                }else{
                                    location.reload();
                                }
                            });
							//$.msgbox("Накрутка <strong>"+name+"</strong> добавлена, цена за 10: <strong>"+price+" рублей</strong>.", {type: "info"});
						}
				});
			});
}