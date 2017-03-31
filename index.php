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

        <button name="Salvar" id="salvar">Salvar!</button>
        <button name="Recuperar" id="recuperar">Recuperar!</button>
        <button name="Listar" id="listar">Listar!</button>


        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/jquery.cookie/jquery.cookie.js"></script>

        <script src="js/cookies.js"></script>
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

            function lengthInUtf8Bytes(str) {
  // Matches only the 10.. bytes that are non-initial characters in a multi-byte sequence.
  var m = encodeURIComponent(str).match(/%[89ABab]/g);
  return str.length + (m ? m.length : 0);
}
            //itemProdAdd("cimento", 1);
            $("#salvar").click(function () {
              itemSave = [] ;
              $.each(itens, function (key, value) {
                //alert(key);
                //alert(  );
                itemSave.push({"nome":key,"armazem": value.armazem,"produzir":value.produzir});
              });
              //alert(itemSave.length);


                var json_str = JSON.stringify(itemSave);
                alert(json_str);
                //alert(lengthInUtf8Bytes(json_str));
                $.cookie("armazemBuildThat", itemSave);
                //createCookie("armazemBuildThat", json_str, 30);
            });

            $("#recuperar").click(function () {
                //alert($(this).attr("item"));
                //alert(getCookie("armazemBuildThat"));\

                itemRec = $.cookie("armazemBuildThat");
                alert(JSON.parse(itemRec));
                $.each(itemRec, function (key, value) {
                  alert(key);
                  alert(value);
                  //itemSave.push([key,value.armazem,value.produzir]);

                });
                //alert($.cookie("armazemBuildThat"));
                atualizarContadores();
            });

            $("#listar").click(function () {
              var cookies = get_cookies_array();
                for(var name in cookies) {
                  alert( name + " : " + cookies[name] + "<br />" );
                }
            });






        </script>

    </body>
</html>
