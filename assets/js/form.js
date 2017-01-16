jQuery(document).ready(function($){
	$('form').ajaxForm(function(data){
		if(data instanceof Object){
			if(data.error){
				console.log(data.error);
				swal('Ошибка','Что-то пошло не так. Проверьте данные или попробуйте позвонить нам','error');
			}else{
				swal('Успешно отправлено','Мы перезвоним вам как можно скорее','success');
			}
		}
	});
});