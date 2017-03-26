<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>BuildThat</title>

        <link rel="stylesheet" type="text/css" href="css/resources.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>


        <div class="container">
            <div class="column column-one">
                <div class="resourcesList armazem">

                </div>
            </div>

            <div class="column column-two"></div>

            <div class="column column-three">
                <div class="resourcesList producao">

                </div>
            </div>

            <div class="column column-four"></div>

            <div class="column column-five">
            </div>
        </div>



        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="itens.js"></script>

        <script>

            // item é um trio de nome, tempo de construcao e lista de requisitos, que é uma lista de item
            // os items basicos tem lista de requisitos vazia



            function createArmazem(itens) {
                producao_container = $(".resourcesList.armazem");

                $.each(itens, function (key, value) {
                    //alert(key + ", " + value.fonte);


                    anexar = "<div class=\"resource fact\">";

                    anexar += "<div class=\"hexagon armazem " + key + "\">";
                    anexar += "<div class=\"resourceIcon " + key + "\"></div>";
                    anexar += "<div class=\"hextext armazem_" + key + "\">0</div>";
                    anexar += "</div>";

                    //anexar += "<span class=\"black\">[ " + key + " ] </span><span class=\"armazem_" + key + "\">0</span><br>";
                    anexar += "<div class=\"btn sub armazem\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn zer armazem\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn add armazem\" item=\"" + key + "\"></div>";

                    anexar += "</div>";


                    //alert(anexar);
                    producao_container.append(anexar);
                });
            }

            function createProducao(itens) {
                producao_container = $(".resourcesList.producao");

                armazem_container = $(".resourcesList.armazem");

                $.each(itens, function (key, value) {
                    //alert(key + ", " + value.fonte);


                    anexar = "<div class=\"resource fact\">";

                    anexar += "<div class=\"hexagon producing " + key + "\">";
                    anexar += "<div class=\"resourceIcon " + key + "\"></div>";
                    anexar += "<div class=\"hextext produzir_" + key + "\">0</div>";
                    anexar += "</div>";

                    //anexar += "<span class=\"black\">[ " + key + " ] </span><span class=\"produzir_" + key + "\">0</span><br>";
                    anexar += "<div class=\"btn sub producing\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn zer producing\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn add producing\" item=\"" + key + "\"></div>";

                    anexar += "</div>";


                    //alert(anexar);
                    producao_container.append(anexar);
                });
            }

            createArmazem(itens);
            createProducao(itens);

            function atualizarContadores() {
                // debug
                //alert("atualizarContadores()");

                $.each(itens, function (key, value) {
                    $(".armazem_" + key).html(value.armazem);
                    $(".produzir_" + key).html(value.produzir - value.armazem);
                });
            }


            function itemProdAdd(item, qtde) {
                // debug
                alert("itemProdAdd(\"" + item + "\", " + qtde + ")");

                itens[item].produzir += qtde;

                // iterar por todos os prequisitos e produzi-los

                if (itens[item].produzir > itens[item].armazem) {
                    
                    $.each(itens[item].requisito, function (key, value) {
                        //alert(key + ", " + value);
                        itemProdAdd(value.nome, qtde * value.qtde);
                    });
                }

                // atualizar os contadores
                atualizarContadores();

            }

            function itemArmazemAdd(item, qtde) {
                // debug
                //alert("itemArmazemAdd(\"" + item + "\", " + qtde + ")");

                // incrementa a quantidade do item no armazem
                itens[item].armazem += qtde;
                //itemProdSub(item,qtde);

                // atualiza os contadores
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

            function itemArmazemSub(item, qtde) {
                // debug
                //alert("itemProdSub(\"" + item + "\", " + qtde + ")");

                itens[item].armazem -= qtde;

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

            function itemArmazemZer(item) {
                // debug
                //alert("ItemProdZer(\"" + item + "\");

                armazenado = itens[item].armazem;
                itens[item].armazem = 0;

                // atualiza os contadores
                atualizarContadores();
            }








            $(".btn.add.producing").click(function () {
                //alert($(this).attr("item"));
                itemProdAdd($(this).attr("item"), 1);
            });


            $(".btn.sub.producing").click(function () {
                //alert($(this).attr("item"));
                itemProdSub($(this).attr("item"), 1);
            });

            $(".btn.zer.producing").click(function () {
                //alert($(this).attr("item"));
                ItemProdZer($(this).attr("item"), 1);
            });

            $(".btn.add.armazem").click(function () {
                //alert($(this).attr("item"));
                itemArmazemAdd($(this).attr("item"), 1);
            });
            $(".btn.sub.armazem").click(function () {
                //alert($(this).attr("item"));
                itemArmazemSub($(this).attr("item"), 1);
            });
            $(".btn.zer.armazem").click(function () {
                //alert($(this).attr("item"));
                itemArmazemZer($(this).attr("item"));
            });
            //itemProdAdd("cimento", 1);


        </script>

    </body>
</html>



