function itemProdAdd(item, qtde) {
    // debug
    //alert("itemProdAdd(\"" + item + "\", " + qtde + ")");

    itens[item].produzir += qtde;

    // iterar por todos os prequisitos e produzi-los

        $.each(itens[item].requisito, function (key, value) {
            //alert(key + ", " + value);
            itemProdAdd(value.nome, qtde * value.qtde);
        });

    // atualizar os contadores
    atualizarContadores();

}



function itemProdSub(item, qtde) {
    // debug
    //alert("itemProdSub(\"" + item + "\", " + qtde + ")");

    itens[item].produzir -= qtde;

    // iterar por todos os prequisitos e remove-los
    $.each(itens[item].requisito, function (key, value) {
        itemProdSub(value.nome, qtde * value.qtde);
    });

    // atualiza os contadores;
    atualizarContadores();

}



function ItemProdZer(item) {
    // debug
    //alert("ItemProdZer(\"" + item + "\")");

    remover = itens[item].produzir;
    itens[item].produzir = 0;

    // iterar por todos os prequisitos e remove-los
    $.each(itens[item].requisito, function (key, value) {
        //alert(key + ", " + value);
        itemProdSub(value.nome, value.qtde * remover);
    });

    // atualiza os contadores;
    atualizarContadores();

}
