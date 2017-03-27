function itemArmazemAdd(item, qtde) {
    // debug
    //alert("itemArmazemAdd(\"" + item + "\", " + qtde + ")");

    // incrementa a quantidade do item no armazem
    itens[item].armazem += qtde;

    // TODO: se eu estiver precisando produzir esse item, tambem preciso mexer na demanda de requisitos (?)


    // atualiza os contadores
    atualizarContadores();

}

function itemArmazemSub(item, qtde) {
    // debug
    //alert("itemProdSub(\"" + item + "\", " + qtde + ")");

    itens[item].armazem -= qtde;

    // atualiza os contadores;
    atualizarContadores();

}

function itemArmazemZer(item) {
    // debug
    //alert("ItemProdZer(\"" + item + "\");

    armazenado = itens[item].armazem;
    itens[item].armazem = 0;

    // atualiza os contadores
    atualizarContadores();
}
