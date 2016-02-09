
// загрузка сообщений из БД в контейнер messages
function show_messages(page)
{
    $.ajax({
        url: "show.php",
        data: "page="+page,
        cache: false,
        success: function(html){
            $("#messages").html(html);
        }
    });
}

$(document).ready(function(){

    show_messages();

    // контроль и отправка данных на сервер в фоновом режиме
    $("#myForm").submit(function(){

         var task = $("#task").val();
        if (task =='')
        {
            alert ("Заполните имя пользователя!");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "action.php",
            data: "task="+task+"&action=add",
            success: function(msg){
                show_messages(0);
            }
        });

        return false;
    });
});
// отметка віполненого задания
function onPush(id, page) {
    $.ajax({
        type: "POST",
        url: "action.php",
        data: "id="+id+"&action=end",
        success: function(msg){
            show_messages(page);
        }
    });

    return false;

};
//Выбор страницы
function getPage(page) {
    $.ajax({
        type: "POST",
        url: "show.php",
        data: "page="+page,
        success: function(msg){
            show_messages(page);
        }
    });

    return false;

};

