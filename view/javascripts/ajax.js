$(function(){
    $('#v1').change(function (){
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "../configs/iniciaPastas.php?id=" + id,
            dataType: "text",
            success: function (ress) {
                $("#pastas").children(".pastas").remove();
                $("#pastas").append(ress);
                
            }
        });
    });
});