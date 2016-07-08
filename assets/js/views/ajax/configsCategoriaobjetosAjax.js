/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    var contador = 0;

    $("#openModalDelete2").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';

    //muda status
    $(".statusCheckbox").click(function () {


        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/mudaStatusCategoria',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            sucesso: function (msg) {
                alert(sucesso);
            }
        });
    });

    //exclui categoria

    $(".excluirCategoriatb").click(function () { //nome da tabela
        //alert('dad');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete2").click();

    });

    $("#confirmExcluirAcao2").click(function () { //quando muda o "ExcluirAcao"ele não exclui.

        $.ajax({
            url: '../Configuracoes/DeleteCategoria',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function (msg) {

                var tr = $(handle).closest('tr');
                tr.fadeOut(600, function () {
                    tr.remove();
                });

                $('#myModalDeleteAcao2').modal('toggle');
                $('#myModalDeleteAcao2').modal('hide');


            }
        });

    });

  

            AddTableRow1 = function () {
                var newRow = $("<tr class='listas'>");
                var cols = "";

                if (contador == 0) {

                    contador++;
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" placeholder="Categoriaobjetos" class="form-control" id="addNome' + contador + '"/></td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    newRow.append(cols);
                    $("#imbatman").append(newRow);
                    return false;
                } else {

                    var addCategoriaobjetos = $("#addNome" + contador).val();

                    addCategoritb(addCategoriaobjetos);

                    contador++;
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" placeholder="Categoriaobjetos" class="form-control" id="addNome' + contador + '"/></td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    newRow.append(cols);
                    $("#imbatman").append(newRow);

                    return false;
                }
            };

});

function addCategoritb(categoriaobjetos) {

    $.ajax({
        url: '../Configuracoes/insertCategoriaObjetos',
        type: 'POST',
        data: {
            categoriaobjetos: categoriaobjetos,
            status: 1
        },
        success: function (msg) {

        }
    });

}