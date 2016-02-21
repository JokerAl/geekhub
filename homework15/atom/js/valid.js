$(document).ready(function(){
    

    $("#form").validate({

       rules:{

            username:{
                required: true,
                minlength: 2,
                maxlength: 20,
            },

            useremail:{
                required: true,
                email: true,
            },
            date:{
                required: true,
            },
            telephone:{
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 14,
            },
            old:{
                required: true,
                digits: true,
                maxlength: 2,
            },
            
       },

       messages:{

            username:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 2 символа",
                maxlength: "Максимальное число символо - 20",
            },

            useremail:{
                required: "Это поле обязательно для заполнения",
                email: "Введенный email некорректный",
            },
            date:{
                 required: "Это поле обязательно для заполнения",
            },
            telephone:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 6 символа",
                maxlength: "Максимальное число символо - 14",
                digits: "Вводите только цифры",
            },
            old:{
                required: "Это поле обязательно для заполнения",
                maxlength: "Максимальное число символо - 2",
                digits: "Вводите только цифры",
            },
            
        }   

    });
});
function validateForm() {
    var check = document.getElementsByName("beer[]");
    var radios = document.getElementsByName("sex");
    var formValidradio = false;
    var formValidcheck = false;

    var i = 0;
    while (!formValidcheck && i < check.length) {
        if (check[i].checked) formValidcheck = true;
        i++;        
    }
    var i = 0;
    while (!formValidradio && i < radios.length) {
        if (radios[i].checked) formValidradio = true;
        i++;        
    }
    if(!formValidradio&&!formValidcheck){
        $('.sex p').text('Вы должны выбрать пол!').css({"color":"red","font-weight":"700"});
         $('.beer p').text('Вы должны выбрать любимое пиво!').css({"color":"red","font-weight":"700"});
 }else if (!formValidcheck){
    $('.beer p').text('Вы должны выбрать любимое пиво!').css({"color":"red","font-weight":"700"});
    $('.sex p').text(' ');
}else if(!formValidradio){
    $('.sex p').text('Вы должны выбрать пол!').css({"color":"red","font-weight":"700"});
    $('.beer p').text(' ');
}else{$('.sex p').text(' ');
$('.beer p').text(' ');}    

};