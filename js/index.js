$(function () {
    $("input[name='escolha']").change(function () {
        if ($("#showPf").is(":checked")) {
            $("#pessoaFisica").show(500);
            $("#pessoaJuridica").hide(1000);
        } else {
            if ($("#showPj").is(':checked')) {
                $("#pessoaFisica").hide(500);
                $("#pessoaJuridica").show(1000);
            }
        }
    });
});


// $(document).ready(function () {
//     $("input[name=escolha]").change(function () {
//         if ($("#showPf").is(':checked')) {
//             $("#pessoaFisica").show();
//         } else {
//             $("#pessoaFisica").hide();
//         }
//     });
// });

// function HidePj() {
//     var pessoaJuridica = document.getElementById("pessoaJuridica");
//     pessoaJuridica.style.display = 'none';
// }

// function ShowHide() {
//     var pessoaFisica = document.getElementById("pessoaFisica");
//     var pessoaJuridica = document.getElementById("pessoaJuridica");

//     if (document.getElementById('showPf').checked) {
//         pessoaFisica.style.display = 'block';
//         pessoaJuridica.style.display = 'none';
//     } else {
//         if (document.getElementById('showPj').checked) {
//             pessoaJuridica.style.display = 'block';
//             pessoaFisica.style.display = 'none';
//         }
//     }
// }