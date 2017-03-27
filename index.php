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

              <div class="resourcesList demanda">

              </div>
            </div>
        </div>



        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="js/itens.js"></script>
        <script src="js/armazem.js"></script>
        <script src="js/demanda.js"></script>
        <script src="js/producao.js"></script>

        <script>

            function createArmazem(itens) {
                armazem_container = $(".resourcesList.armazem");

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
                    armazem_container.append(anexar);
                });
            }

            function createDemanda(itens) {
                demanda_container = $(".resourcesList.demanda");

                $.each(itens, function (key, value) {
                    //alert(key + ", " + value.fonte);


                    anexar = "<div class=\"resource fact\">";

                    anexar += "<div class=\"hexagon demanda " + key + "\">";
                    anexar += "<div class=\"resourceIcon " + key + "\"></div>";
                    anexar += "<div class=\"hextext demanda_" + key + "\">0</div>";
                    anexar += "</div>";

                    //anexar += "<span class=\"black\">[ " + key + " ] </span><span class=\"produzir_" + key + "\">0</span><br>";
                    anexar += "<div class=\"btn sub demanda\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn zer demanda\" item=\"" + key + "\"></div>";
                    anexar += "<div class=\"btn add demanda\" item=\"" + key + "\"></div>";

                    anexar += "</div>";


                    //alert(anexar);
                    demanda_container.append(anexar);
                });
            }

            function createProducao(itens) {
                producao_container = $(".resourcesList.producao");

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
            createDemanda(itens);
            createProducao(itens);

            function atualizarContadores() {
                // debug
                //alert("atualizarContadores()");

                $.each(itens, function (key, value) {
                    $(".armazem_" + key).html(value.armazem);

                    $(".produzir_" + key).html(value.produzir);

                    demanda = (value.produzir - value.armazem)>=0?value.produzir - value.armazem:0;

                    $(".demanda_" + key).html(demanda);
                });
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
