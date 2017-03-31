itens = {
    "metal": {
        "fonte": "fabrica",
        "tempo": "60",
        "produzir": 0,
        "armazem": 0
    },
    "madeira": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "plastico": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "semente": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "minerio": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "quimico": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "tecido": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "acucar": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "vidro": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "racao": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "eletronico": {
        "fonte": "fabrica",
        "tempo": "180",
        "produzir": 0,
        "armazem": 0
    },
    "prego": {
        "fonte": "construcao",
        "tempo": "300",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "2"
            }
        ]
    },
    "tabua": {
        "fonte": "construcao",
        "tempo": "60",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "madeira",
                "qtde": "2"
            }
        ]
    },
    "tijolo": {
        "fonte": "construcao",
        "tempo": "60",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "minerio",
                "qtde": "2"
            }
        ]
    },
    "cimento": {
        "fonte": "construcao",
        "tempo": "60",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "minerio",
                "qtde": "2"
            },
            {
                "nome": "quimico",
                "qtde": "1"
            }
        ]
    },
    "cola": {
        "fonte": "construcao",
        "tempo": "3060",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "plastico",
                "qtde": "1"
            },
            {
                "nome": "quimico",
                "qtde": "2"
            }
        ]
    },
    "tinta": {
        "fonte": "construcao",
        "tempo": "3060",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "2"
            },
            {
                "nome": "minerio",
                "qtde": "1"
            },
            {
                "nome": "quimico",
                "qtde": "2"
            }
        ]
    },
    "martelo": {
        "fonte": "ferramenta",
        "tempo": "714",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "1"
            },
            {
                "nome": "madeira",
                "qtde": "1"
            }
        ]
    },
    "trena": {
        "fonte": "ferramenta",
        "tempo": "1020",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "1"
            },
            {
                "nome": "plastico",
                "qtde": "1"
            }
        ]
    },
    "pa": {
        "fonte": "ferramenta",
        "tempo": "1020",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "1"
            },
            {
                "nome": "madeira",
                "qtde": "1"
            },
            {
                "nome": "plastico",
                "qtde": "1"
            }
        ]
    },
    "cozinha": {
        "fonte": "ferramenta",
        "tempo": "1020",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "2"
            },
            {
                "nome": "madeira",
                "qtde": "2"
            },
            {
                "nome": "plastico",
                "qtde": "2"
            }
        ]
    },
    "escada": {
        "fonte": "ferramenta",
        "tempo": "1020",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "2"
            },
            {
                "nome": "tabua",
                "qtde": "2"
            }
        ]
    },
    "furadeira": {
        "fonte": "ferramenta",
        "tempo": "1020",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "2"
            },
            {
                "nome": "plastico",
                "qtde": "2"
            },
            {
                "nome": "eletronico",
                "qtde": "1"
            }
        ]
    },
    "hortalica": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "semente",
                "qtde": "2"
            }
        ]
    },
    "farinha": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "semente",
                "qtde": "2"
            },
            {
                "nome": "tecido",
                "qtde": "2"
            }
        ]
    },
    "frutinha": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "semente",
                "qtde": "2"
            },
            {
                "nome": "arvore",
                "qtde": "1"
            }
        ]
    },
    "creme": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "racao",
                "qtde": "1"
            }
        ]
    },
    "milho": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "minerio",
                "qtde": "1"
            },
            {
                "nome": "semente",
                "qtde": "4"
            }
        ]
    },
    "queijo": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "racao",
                "qtde": "2"
            }
        ]
    },
    "carne": {
        "fonte": "agricola",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "racao",
                "qtde": "3"
            }
        ]
    },
    "cadeira": {
        "fonte": "moveis",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "madeira",
                "qtde": "2"
            },
            {
                "nome": "martelo",
                "qtde": "1"
            },
            {
                "nome": "prego",
                "qtde": "1"
            }
        ]
    },
    "mesa": {
        "fonte": "moveis",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "prego",
                "qtde": "2"
            },
            {
                "nome": "tabua",
                "qtde": "1"
            },
            {
                "nome": "martelo",
                "qtde": "1"
            }
        ]
    },
    "camaebanho": {
        "fonte": "moveis",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "tecido",
                "qtde": "2"
            },
            {
                "nome": "trena",
                "qtde": "1"
            }
        ]
    },
    "armario": {
        "fonte": "moveis",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "vidro",
                "qtde": "2"
            },
            {
                "nome": "tabua",
                "qtde": "2"
            },
            {
                "nome": "tinta",
                "qtde": "1"
            }
        ]
    },
    "sofa": {
        "fonte": "moveis",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "tecido",
                "qtde": "3"
            },
            {
                "nome": "cola",
                "qtde": "1"
            },
            {
                "nome": "furadeira",
                "qtde": "1"
            }
        ]
    },
    "grama": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "semente",
                "qtde": "1"
            },
            {
                "nome": "pa",
                "qtde": "1"
            }
        ]
    },
    "arvore": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "semente",
                "qtde": "2"
            },
            {
                "nome": "pa",
                "qtde": "1"
            }
        ]
    },
    "moveljardim": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "plastico",
                "qtde": "2"
            },
            {
                "nome": "tecido",
                "qtde": "2"
            },
            {
                "nome": "tabua",
                "qtde": "2"
            }
        ]
    },
    "fogueira": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "tijolo",
                "qtde": "2"
            },
            {
                "nome": "cimento",
                "qtde": "2"
            },
            {
                "nome": "pa",
                "qtde": "1"
            }
        ]
    },
    "cortador": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "metal",
                "qtde": "3"
            },
            {
                "nome": "eletronico",
                "qtde": "1"
            },
            {
                "nome": "tinta",
                "qtde": "1"
            }
        ]
    },
    "gnomo": {
        "fonte": "jardinagem",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "cimento",
                "qtde": "2"
            },
            {
                "nome": "cola",
                "qtde": "1"
            }
        ]
    },
    "bone": {
        "fonte": "moda",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "tecido",
                "qtde": "2"
            },
            {
                "nome": "trena",
                "qtde": "1"
            }
        ]
    },
    "relogio": {
        "fonte": "moda",
        "tempo": "1080",
        "produzir": 0,
        "armazem": 0,
        "requisito": [
            {
                "nome": "plastico",
                "qtde": "2"
            },
            {
                "nome": "vidro",
                "qtde": "2"
            },
            {
                "nome": "quimico",
                "qtde": "1"
            }
        ]
    }


};
