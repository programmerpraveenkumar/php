$('input').each(function(){
    $(this).wrap('<div class="relative">').after('<div class="selectTemplate">T</div>');
});
$('#content').on('click','.relative .selectTemplate',function(){
    console.log($(this).siblings('input').val());
});