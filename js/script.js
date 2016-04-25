$(document).ready(function() {
    $(".more").on("click", function() {
        var xp = $(this).data("xp");
        var titre = $(this).data("titre");

        $.get(
            "modal_"+xp+".php",
            function(data) {
                $("#modal_more .modal-body").html(data);
                $("#modal_more .modal-title").html(titre);
            }
        );
        $('#modal_more').modal("show");
    });
});
