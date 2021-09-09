function verificarEmail() {
    $.ajax({

        url: "verificarEmail.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
            $("#email-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function () { }
    });
}
