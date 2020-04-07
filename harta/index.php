    <style type="text/css">



        /* Specific mapael css class are below
         * 'mapael' class is added by plugin
        */

        .mapael .map {
            position: relative;
        }

        .mapael .mapTooltip {
            position: absolute;
            background-color: rgb(233, 225, 225);
            moz-opacity: 0.70;
            opacity: 0.70;
            filter: alpha(opacity=70);
            border-radius: 10px;
            padding: 10px;
            z-index: 1000;
            max-width: 200px;
            display: none;
            color: #343434;
        }

        .mapael .myLegend {
            border: 1px solid #ed2126;
            background-color: #343434;
            padding: 15px;
        }
		svg{
			    overflow: overlay !important
		}
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "france_departments",
                    defaultArea: {
                        attrsHover: {
                            fill: "#343434",
                            stroke: "#5d5d5d",
                            "stroke-width": 1,
                            "stroke-linejoin": "round"
                        }
                    }
                },
                legend: {
                    plot: {
                        cssClass: 'myLegend',
                        labelAttrs: {
                            fill: "#4a4a4a"
                        },
                        titleAttrs: {
                            fill: "#4a4a4a"
                        },
                        marginBottom: 20,
                        marginLeft: 30,
                        hideElemsOnClick: {
                            opacity: 0
                        },
                        
						width:500,
                        slices: [{
                            size: 10,
                            type: "circle",
                            min:5,
                            max: 10,
                            attrs: {
                                fill: "#ff0000"
                            },
                            label: "Neni 100/1"
                        }, {
                            size: 10,
                            type: "circle",
                            min:10,
                            max: 20,
                            attrs: {
                                fill: "#9b0000"
                            },
                            label: "Neni 100/2"
                        }, {
                            size: 10,
                            type: "circle",
                            min:20,
                            max: 30,
                            attrs: {
                                fill: "#ff7800"
                            },
                            label: "Neni 101/1"
                        }, {
                            size: 10,
                            type: "circle",
                            min:30,
                            max: 40,
                            attrs: {
                                fill: "#fffb00"
                            },
                            label: "Neni 108/1 "
                        },
                        {
                            size: 10,
                            type: "circle",
                            min:40,
                            max: 50,
                            attrs: {
                                fill: "#000cff"
                            },
                            label: "Neni 108/2"
                        },
                       
                        {
                            size: 10,
                            type: "circle",
                            min:60,
                            max: 70,
                            attrs: {
                                fill: "#158031"
                            },
                            label: "Neni 108/3"
                        },
                        {
                            size: 10,
                            type: "circle",
                            min:70,
                            max: 80,
                            attrs: {
                                fill: "#006ba1"
                            },
                            label: "Neni 108/4"
                        },
						 {
                            size: 10,
                            type: "circle",
                            min:50,
                            max: 60,
                            attrs: {
                                fill: "#e800ff"
                            },
                            label: "Neni 108/a/2"
                        },
                        {
                            size: 10,
                            type: "circle",
                            min:80,
                            max: 90,
                            attrs: {
                                fill: "#0cff00"
                            },
                            label: "Neni 121/a/3"
                        },
                        {
                            size: 10,
                            type: "circle",
                            min:90,
                            max: 100,
                            attrs: {
                                fill: "#00ffec"
                            },
                            label: "Neni 117"
                        },
                    ]
                    }
                },
                plots: {
                    "Qarku Durres1": {
                        value: "15",
                        latitude: 47.5,
                        longitude: 8.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rrushkull,Durrës</span><br/> Dënimi i kryer: 10 vjet burgim "
                        }
                    },
                    "Qarku Durres2": {
                        value: "5",
                        latitude: 47.5,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja 15,Porto Romano </span><br /> Dënimi i kryer: 6 vjet burgim. Lidhje e rastësishme"
                        }
                    },
					"Qarku Durres3": {
                        value: "5",
                        latitude: 47.2,
                        longitude: 7.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Qafëzotaj,Durrës</span><br />Dënimi i kryer: 4 vjet burgim. Lidhje rastësore"
                        }
                    },
					"Qarku Durres4": {
                        value: "5",
                        latitude: 47.4,
                        longitude: 8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.13, Durrës</span><br />Dënimi i kryer: 9 vjet burgim. Lidhje familjare"
                        }
                    },
					"Qarku Durres5": {
                        value: "15",
                        latitude: 47.4,
                        longitude: 7.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Shijak,Durrës</span><br />Dënimi i kryer: Mase sigurimi.Lidhja: Baba-fëmijë"
                        }
                    },
					"Qarku Durres6": {
                        value: "5",
                        latitude: 47.3,
                        longitude: 7.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Mbikalimi Shënvlashit, Durrës</span><br /> Dënimi i kryer: 7 vjet burgim. Lidhja: komshinj "
                        }
                    },
					"Qarku Durres7": {
                        value: "5",
                        latitude: 47.1,
                        longitude: 7.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.15 ,Spitall, Durrës</span><br/> Dënimi i kryer: 9 vjet burgim.Lidhja: Banore e së njëjtës lagje "
                        }
                    },
					"Qarku Durres8": {
                        value: "45",
                        latitude: 47.1,
                        longitude: 7.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Durrës</span><br/> Durrësi ka lejuar ekstradimin për në Itali. Dënimi i kryer: 10 vjet e 8 muaj.Lidhja: Baba- fëmijë në dy raste "
                        }
                    },
					"Qarku Durres9": {
                        value: "45",
                        latitude: 47.7,
                        longitude: 7.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.9,Durrës</span><br /> Dënimi i kryer: 1vit e 8 muaj burgim. Lidhje rastësore. "
                        }
                    },
					"Qarku Durres10": {
                        value: "45",
                        latitude: 47.5,
                        longitude: 7.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.13,Plazh, Durrës</span><br/>Dënimi i kryer: 2 vjet burgim. Lidhja: Komshinj "
                        }
                    },
					"Qarku Durres11": {
                        value: "35",
                        latitude: 47.6,
                        longitude: 7.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.18,Durrës</span><br /> Dënimi i kryer: 2 vjet e 8 muaj. Lidhja: Komshinj"
                        }
                    },
					"Qarku Durres12": {
                        value: "35",
                        latitude: 47.6,
                        longitude: 8.1,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.14,Shkozet, Durrës</span><br /> Dënimi i kryer: 1 vit e 8 muaj. Lidhje familjare (djem xhaxhallarësh)"
                        }
                    },
					"Qarku Durres13": {
                        value: "35",
                        latitude: 47.6,
                        longitude: 8.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.8,Durrës</span><br /> Dënimi i kryer: 1 vit burgim. Lidhja: Komshinj dhe marrëdhënie miqësore familjarisht"
                        }
                    },
					"Qarku Gjirokastër1": {
                        value: "5",
                        latitude: 44,
                        longitude: 9.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Taroninë, Gjirokastër</span><br /> 3.4 muaj, lirim me kusht. Lidhje afektive "
                        }
                    },
					"Qarku Gjirokastër2": {
                        value: "5",
                        latitude: 44,
                        longitude: 9.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Humelicë, Gjirokastër</span><br />4 vjet e 8 muaj, lirim me kusht. Lidhje afektive, disa mujore"
                        }
                    },

					"Qyteti Pogradec1": {
                        value: "5",
                        latitude: 45.7,
                        longitude: 11.4,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Dardhë, Pogradec</span><br />  Dënimi i kryer: 2 vjet 8 muaj. Lidhje familjare "
                        }
                    },
					"Qyteti Pogradec2": {
                        value: "25",
                        latitude: 45.6,
                        longitude: 11.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Pogradec</span><br /> Kishte shkuar të bënte tatuazh. "
                        }
                    },
					"Qyteti Pogradec3": {
                        value: "35",
                        latitude: 45.8,
                        longitude: 12,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagje 5 dhe 2,  Pogradec</span><br /> Dënimi i kryer: 4 vjet e 8 muaj. Lidhja: Banorë të të njëjtit pallat "
                        }
                    },	
					"Qyteti Pogradec4": {
                        value: "55",
                        latitude: 45.6,
                        longitude: 12.4,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Pogradec</span><br /> Dënimi i kryer: 5 vjet burgim, Banorë të të njëjtit fshat. Shenim: Në vitin 2015, është dënuar për veprën penale 108/1 në dëm të 3 vajzave të mitura"
                        }
                    },
					"Qyteti Korce1": {
                        value: "5",
                        latitude: 44,
                        longitude: 11.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Bilisht, Korçë</span><br /> Dënimi i kryer: 2.4 muaj, lirim me kusht. Lidhje afektive"
                        }
                    },
					"Qyteti Korce2": {
                        value: "5",
                        latitude: 43.8,
                        longitude: 11.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Sovjan, Korçë</span><br /> Dënimi i kryer: 4 vjet e 8 muaj, lirim me kusht. Komshinj, lidhje afektive"
                        }
                    },
					"Qyteti Korce3": {
                        value: "5",
                        latitude: 44.1,
                        longitude: 12,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja 18, Korçë</span><br /> Dënimi i kryer: 4 vjet e 8 muaj Lidhje afektive (që ne moshe 10 vjeçare)"
                        }
                    },
					"Qyteti Korce4": {
                        value: "15",
                        latitude: 44.5,
                        longitude: 12.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Bitinckë, Miras, Devoll</span><br /> Dënimi i kryer: 6 vjet e 8 muaj secili. Banor të fshatit"
                        }
                    },
					"Qyteti Korce5": {
                        value: "15",
                        latitude: 44.7,
                        longitude: 12.4,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Nr.5, Korçë</span><br /> Dënimi i kryer: 6 vjet e 8 muaj. Lidhje afektive prej 8 muajsh"
                        }
                    },
					"Qyteti Korce6": {
                        value: "15",
                        latitude: 44.8,
                        longitude: 12.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Korcë</span><br /> Dënimi i kryer: 3.4 muaj secili ( tre persona). Lidhja: banorë të së njëjtës lagje"
                        }
                    },
					"Qyteti Korce7": {
                        value: "35",
                        latitude: 45,
                        longitude: 13,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Bilisht</span><br />Dënimi i kryer: 2 vjet burgim. Lidhja: Komshinj"
                        }
                    },
                    "Qyteti Lezhe1": {
                        value: "5",
                        latitude: 48.6,
                        longitude: 7.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Shëngjin, Lezhë</span><br /> Dënimi i kryer: 4 vjet burgim. Lidhje afektive"
                        }
                    },
                    "Qyteti Lezhe2": {
                        value: "5",
                        latitude: 48.6,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Skenderbeg, Lezhë</span><br />Dënimi i kryer: 4 vjet e 8 muaj, lirim me kusht. Lidhje afektive"
                        }
                    },
                    "Qyteti Shkoder1": {
                        value: "5",
                        latitude: 49.8,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Guerile, Shkodër </span><br /> Dënimi i kryer: Pandehuri 1 - 3 vjet e 6 muaj dhe lirim me kusht; Pandehuri 2 - 4 vjet e 8 muaj. Lidhje rastësore"
                        }
                    },
                    "Qyteti Shkoder2": {
                        value: "35",
                        latitude: 49.6,
                        longitude: 8.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rr Doktor Lita, Shkodër</span><br />  Dënimi i kryer: 3 vjet burgim. Lidhja: Komshinj"
                        }
                    },
                    "Qyteti Shkoder3": {
                        value: "35",
                        latitude: 49.3,
                        longitude: 8.1,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Salo Halili, Shkodër</span><br />Dënimi i kryer: 4 vjet burgim. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Shkoder4": {
                        value: "35",
                        latitude: 49.8,
                        longitude: 7.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Fshat, Shkodër</span><br /> Dënimi i kryer: 4 vjet burgim. Lidhja: Komshinj"
                        }
                    },
                    "Qyteti Shkoder5": {
                        value: "75",
                        latitude: 49.6,
                        longitude: 7.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Culaj, Koplik</span><br />  Dënimi i kryer: 8 muaj burgim. Lidhje familjare (Burri i tezes)"
                        }
                    },
                    "Qyteti Elbasan1": {
                        value: "15",
                        latitude: 46.2,
                        longitude: 10.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Shushicë, Elbasan</span><br />Dënimi i kryer: 12 vjet burgim. Lidhja: komshinj"
                        }
                    },
                    "Qyteti Elbasan2": {
                        value: "15",
                        latitude: 46.2,
                        longitude: 9.4,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Dushk,Belsh, Elbasan</span><br /> Dënimi i kryer:12 vjet burgim. Lidhja: bashkëfshatar"
                        }
                    },
                    "Qyteti Elbasan3": {
                        value: "5",
                        latitude: 46,
                        longitude: 9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Shalë, Elbasan</span><br />Dënimi i kryer: 4 vjet e 8 muaj. Lidhje familjare"
                        }
                    },
                    "Qyteti Elbasan4": {
                        value: "5",
                        latitude: 45.77,
                        longitude: 9.23,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja 11 Nëntori, Elbasan</span><br />Dënimi i kryer: 2 vjet e 8 muaj. Lidhje afektive"
                        }
                    },
                    "Qyteti Elbasan5": {
                        value: "65",
                        latitude: 46.5,
                        longitude: 9.1,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Elbasan</span><br />Dënimi i kryer: 10 vjet burgim Lidhja: Banorë të së njëjtës lagje"
                        }
                    },
                    "Qyteti Elbasan6": {
                        value: "35",
                        latitude: 45.8,
                        longitude: 9.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Elbasan</span><br />Dënimi i kryer: 3 vjet burgim. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Elbasan7": {
                        value: "45",
                        latitude: 45.8,
                        longitude: 9.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja Skenderbej, Elbasan</span><br /> Dënimi i kryer: 1 vit burgim. Lidhja: Banor të së njëjtës lagje"
                        }
                    },
                    "Qyteti Elbasan8": {
                        value: "35",
                        latitude: 46.2,
                        longitude: 9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja 28 Nëntori, Elbasan</span><br />Dënimi i kryer: 2 vjet burgim. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Elbasan9": {
                        value: "35",
                        latitude: 46.899999,
                        longitude: 10.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Jogodinë, Shirgjan, Elbasan</span><br />Dënimi i kryer: 11 muaj e 10 ditë. Lidhje afektive"
                        }
                    },
                    "Qyteti Elbasan10": {
                        value: "55",
                        latitude: 46.6,
                        longitude: 9.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Thane, Komuna Gjergjan, Elbasan</span><br />Dënimi i kryer: 3 vjet e 6 muaj burgim. Lidhje fqinjësore"
                        }
                    },
                    "Qyteti TiraneShtese1": {
                        value: "45",
                        latitude: 47.4,
                        longitude: 9.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 2 vjet burgim, Lirim me kusht. Lidhje familjare (Djali i dajës)"
                        }
                    },
                    "Qyteti TiraneShtese2": {
                        value: "35",
                        latitude: 47.4,
                        longitude: 9.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tregu elektrik, Tiranë</span><br />Dënimi i kryer: 4 vjet e dy muaj burgim. Lidhje e rastësishme. Shënim: ka qene person i denuar me pare për veprën penale “Vepra te turpshme”, me vendimin Nr.2836 dt.20.11.2014 te Gjykates se Rrethit Gjyqesor Tirane"
                        }
                    },
                    "Qyteti TiraneShtese3": {
                        value: "35",
                        latitude: 47.311,
                        longitude: 8.2555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br />Dënimi i kryer: 3 vjet burgim. Lirim me kusht. Lidhje fqinjësore"
                        }
                    },
                    "Qyteti TiraneShtese4": {
                        value: "55",
                        latitude: 46.75555,
                        longitude: 7.754555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br />Dënimi i kryer: 2 vjet e 40 dit burgim. Lidhja: Baba-fëmijë. Shënim: I pandehuri Pranon veprën dhe gjykata mban si rrethanë lehtësuese faktin që vajza nuk ka bërë rezistencë!!!"
                        }
                    },
                    "Qyteti Tirane1": {
                        value: "5",
                        latitude: 47,
                        longitude: 9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Fshat, Tiranë</span><br /> Dënimi i kryer: 12 vjet burgim. Lidhja: Baba-vajzë"
                        }
                    },
                    "Qyteti Tirane2": {
                        value: "5",
                        latitude: 46.899999,
                        longitude: 8.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 4 vjet e 8 muaj. Lirim me kusht. Lidhja: Banorë të lagjes"
                        }
                    },
                    "Qyteti Tirane3": {
                        value: "5",
                        latitude: 46.899999,
                        longitude: 8.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Liqeni i Farkës, Tiranë,</span><br /> Dënimi i kryer: 6 vjet burgim. Lidhja: Komshinj"
                        }
                    },
                    "Qyteti Tirane4": {
                        value: "5",
                        latitude: 46.899999,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë </span><br /> Dënimi i kryer: 4 vjet e 8 muaj. Lidhje afektive"
                        }
                    },
                    "Qyteti Tirane5": {
                        value: "5",
                        latitude: 46.3444,
                        longitude: 8.1,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë </span><br /> Dënimi i kryer: 4 vjet e 8 muaj, lirim me kusht. Lidhje afektive"
                        }
                    },
                    "Qyteti Tirane6": {
                        value: "15",
                        latitude: 47.111,
                        longitude: 8.2555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë </span><br /> Dënimi i kryer: Pandehuri1 - 20 vjet burgim, Pandehuri 2 - 15 vjet e 6 muaj burgim. Lidhja: Punonjes i Fondacionit dhe mik i punonjësit te fondacionit"
                        }
                    },
                    "Qyteti Tirane7": {
                        value: "5",
                        latitude: 47.15555,
                        longitude: 9.654555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Astir, Unazë e Re, Tiranë</span><br /> Dënimi i kryer: 7 vjet burgim. Lidhja: komshinj"
                        }
                    },
                    "Qyteti Tirane8": {
                        value: "5",
                        latitude: 47.15555,
                        longitude: 9.354555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 10 vjet burgim. Lidhja: Baba-fëmijë"
                        }
                    },

                    "Qyteti Tirane10": {
                        value: "5",
                        latitude: 47.15555,
                        longitude: 8.854555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rruga pranë Bllokut të ambasadave, Tiranë</span><br /> Dënimi i kryer: 4 vjet e 8 muaj. Lidhje: Njohur nëpërmjet një aplikacioni online"
                        }
                    },
                    "Qyteti Tirane11": {
                        value: "5",
                        latitude: 47.15555,
                        longitude: 8.554555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Kamëz</span><br /> Lidhje afektive, banojnë në të njëjtën zonë."
                        }
                    },
                    "Qyteti Tirane13": {
                        value: "45",
                        latitude: 46.55555,
                        longitude: 8.254555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Vorë, Tiranë</span><br /> Dënimi i kryer: 7 vjet burgim. Lidhje familjare (Gjysh-mbesë)"
                        }
                    },
                    "Qyteti Tirane14": {
                        value: "35",
                        latitude: 46.55555,
                        longitude: 8.054555,
                        href: "#",
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 1vit e 6 muaj. Lirim me kusht. Lidhja: Kushëri i komshiut në biznes të prindërve"
                        }
                    },
                    "Qyteti Tirane15": {
                        value: "35",
                        latitude: 46.55555,
                        longitude: 7.754555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 2 vjet burgim. Lirim me kusht .Lidhja: Komshinj në të njëjtin pallat.Shenim: Gjykata behet me dije se ne lap-topin e sekuestruar të pandehurit dhe nga procesverbali i këqyrjes së CD-së rezulton se janë gjetur dhe konstatuar një tërësi materialesh pornografike përfshire edhe foto me vajza minorene te cilat pozojnë nudo"
                        }
                    },
                    "Qyteti Tirane16": {
                        value: "75",
                        latitude: 46.35555,
                        longitude: 7.554555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 8 muaj burgim. Lidhja: Banorë të lagjes"
                        }
                    },
                    "Qyteti Tirane17": {
                        value: "35",
                        latitude: 46.65555,
                        longitude: 7.554555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 2 vjet e 8 muaj. Lidhja: I dashuri nënës"
                        }
                    },
                    "Qyteti Tirane18": {
                        value: "35",
                        latitude: 46.75555,
                        longitude: 8.354555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br />Dënimi i kryer: 3 vjet e 4 muaj. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Tirane19": {
                        value: "35",
                        latitude: 46.799999,
                        longitude: 8.154555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br />Dënimi i kryer: 3 vjet e 4 muaj. Lidhja: E ka ndjekur në shkolle, market dhe ashensor."
                        }
                    },
                    "Qyteti Tirane20": {
                        value: "35",
                        latitude: 46.699999,
                        longitude: 8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 2 vjet e 8 muaj burgim. Lidhja: Për rreth një javë e ka ndjekur dhe ngacmuar të miturën në autobus"
                        }
                    },
                    "Qyteti Tirane21": {
                        value: "35",
                        latitude: 46.6666,
                        longitude: 8.88888,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rr. Ali Demi, Tiranë</span><br /> Dënimi i kryer: 2 vjet e 8 muaj. Lidhja: Banor të së njëjtës lagje"
                        }
                    },
                    "Qyteti Tirane22": {
                        value: "35",
                        latitude: 46.7888,
                        longitude: 8.7888,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë (banonte në Dibër,por vinte shpeshte tek i biri)</span><br /> Dënimi i kryer:1 vit burgim. Lidhje fqinjësore"
                        }
                    },
                    "Qyteti Tirane23": {
                        value: "75",
                        latitude: 46.7888,
                        longitude: 9.1111,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rruga Budi, Tiranë</span><br /> Dënimi i kryer: 1 vit e 6 muaj. Lirim me kusht. Lidhja: Komshi me shoqen e të dëmtuarës"
                        }
                    },
                    "Qyteti Tirane24": {
                        value: "35",
                        latitude: 46.9888,
                        longitude: 9.4111,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rr “Riza Çuka” Tirane</span><br /> Dënimi i kryer: 14 muaj burg. Lidhje fqinjësore"
                        }
                    },
                    "Qyteti Tirane25": {
                        value: "35",
                        latitude: 47.0111,
                        longitude: 9.666,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br />Dënimi i kryer: 2 vjet burgim. Lirim me kusht. Lidhje rastësore"
                        }
                    },
                    "Qyteti Tirane26": {
                        value: "35",
                        latitude: 47.0111,
                        longitude: 9.866,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë</span><br /> Dënimi i kryer: 5 vjet burgim. Banojnë në të njëjtën zonë"
                        }
                    },
                    "Qyteti Tirane27": {
                        value: "35",
                        latitude: 47.4555,
                        longitude: 9.09,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Don Bosko,Tiranë</span><br /> Dënimi i kryer: 3 vjet burgim. Banojnë në të njëjtin pallat"
                        }
                    },
                    "Qyteti Tirane28": {
                        value: "35",
                        latitude: 47.2555,
                        longitude: 9.09,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Tiranë </span><br /> Dënimi i kryer: 2 vjet burgim. Banojnë në të njëjtin pallat"
                        }
                    },
                    "Qyteti Tirane29": {
                        value: "35",
                        latitude: 47.4555,
                        longitude: 9.09,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Kodrat e liqenit, Tiranë</span><br />Dënimi i kryer: 3 vjet burgim, lirim me kusht. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Tirane30": {
                        value: "55",
                        latitude: 47.2555,
                        longitude: 8.888,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Afër qendrës, Tiranë</span><br />Dënimi i kryer: 3 vjet e 4 muaj. Lirim me kusht. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Tirane31": {
                        value: "55",
                        latitude: 47.15555,
                        longitude: 9.154555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Fshati SOS, Tiranë</span><br />Dënimi i kryer: 1 vit burg. Lirim me kusht. Lidhja: Banorë të fshatit sos"
                        }
                    },
                    "Qyteti Kruje1": {
                        value: "5",
                        latitude: 47.67777,
                        longitude: 8.77777,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Arramenas, Fushë Krujë</span><br /> Dënimi i kryer: 2 vjet e 4 muaj. Lirim me kusht. Lidhje: komshinj"
                        }
                    },
                    "Qyteti Kruje2": {
                        value: "5",
                        latitude: 47.67777,
                        longitude: 8.47777,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Kruje</span><br /> "
                        }
                    },
                    "Qyteti BeratShtese1": {
                        value: "35",
                        latitude: 45.2,
                        longitude: 9.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Berat</span><br />Dënimi i kryer: 1 vit e 4 muaj burgim. Lidhje e rastesishme"
                        }
                    },
                    "Qyteti Berat1": {
                        value: "5",
                        latitude: 45,
                        longitude: 9.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Slanicë, Berat</span><br /> Dënimi i kryer: 2 vjet e 4 muaj burgim. Lidhje afektive nëpërmjet Facebook"
                        }
                    },
                    "Qyteti Berat2": {
                        value: "5",
                        latitude: 45,
                        longitude: 9.4,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Ura Vajgurore, Berat</span><br /> Dënimi i kryer: 2 vjet e 4 muaj. Lirim me kusht. Lidhje afektive nëpërmjet Facebook"
                        }
                    },
                    "Qyteti Berat3": {
                        value: "35",
                        latitude: 44.8888,
                        longitude: 9.1,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Zgërbonjë, Poliçan</span><br />Dënimi i kryer: 2 vjet burgim lirim me kusht. Lidhja: Komshinj"
                        }
                    },
                    "Qyteti LushnjeShtese1": {
                        value: "95",
                        latitude: 45.4444,
                        longitude: 8.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Shkolla e Mesme, Gradisht, Lushnje</span><br />Dënimi i kryer: 5 muaj burgim. Lidhje afektive - Shpërndarje me Bluetooth te materialeve seksuale te te dashurës"
                        }
                    },
                    "Qyteti Lushnje1": {
                        value: "5",
                        latitude: 45.2222,
                        longitude: 8.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lekaj, Komuna Hysgjokaj, Lushnje</span><br />Dënimi i kryer: 4 vjet burgim, lirim me kusht. Lidhja: Banorë të të njëjtit fshat."
                        }
                    },
                    "Qyteti Lushnje2": {
                        value: "85",
                        latitude: 44.9999,
                        longitude: 8.2,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Thanasaj, Lushnje</span><br />Dënimi i kryer: 1 vit burgim. Lidhje: Banorë të fshatit, kishte një vit që e përndiqte"
                        }
                    },
                    "Qyteti Lushnje3": {
                        value: "85",
                        latitude: 45.666,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Zhamë, sektor, Divjakë</span><br />Dënimi i kryer: 8 muaj burgim. Lirim me kusht. Banorë të fshatit, kishte një vit që e përndiqte"
                        }
                    },
                    "Qyteti Fier1": {
                        value: "55",
                        latitude: 45.2,
                        longitude: 7.88,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Levan,Fier</span><br />Dënimi i kryer: 2 vjet e 4 muaj burgim. Lidhja: Baba-fëmijë"
                        }
                    },
                    "Qyteti Fier2": {
                        value: "5",
                        latitude: 44.8888,
                        longitude: 8.5,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Levan,Fier</span><br /> Dënimi i kryer: 2 vjet burgim. Lidhja: Banorë të të njëjtit fshat."
                        }
                    },
                    "Qyteti Diber1": {
                        value: "35",
                        latitude: 48,
                        longitude: 9.654555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja e Re, Peshkopi</span><br />Dënimi i kryer: 1 vit e 4 muaj. Lidhja: Banorë të së njëjtës lagje."
                        }
                    },
                    "Qyteti Vlore1": {
                        value: "35",
                        latitude: 44.4,
                        longitude: 7.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">L. Partizani, Vlorë.</span><br /> Dënimi i kryer: 1 vit burgim.Lidhja: Komshinj"
                        }
                    },
                    "Qyteti Vlore2": {
                        value: "45",
                        latitude: 44.1,
                        longitude: 7.9,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">L. 29 Nentori, Vlorë</span><br />Dënimi i kryer: 3 vjet burgim. Lidhje e rastësishme"
                        }
                    },
                    "Qyteti Sarande1": {
                        value: "55",
                        latitude: 43.7,
                        longitude: 7.7,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Ksamil, Sarandë</span><br /> Dënimi i kryer: 4 vjet burgim. Lidhje e rastësishme. Shënim: I kallëzuar edhe më parë, në 2012 se kishte bërë vepra të turpshme me një 12 vjeçare, nga i njëjti fshat"
                        }
                    },
                    "Qyteti Lac1": {
                        value: "35",
                        latitude: 48.2,
                        longitude: 8.3,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Lagja, nr.4, Laç</span><br />Dënimi i kryer: 2 vjet e 8 muaj. Lidhja: Banorë të së njëjtës lagje"
                        }
                    },
                    "Qyteti Kukes1": {
                        value: "45",
                        latitude: 50,
                        longitude: 9.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Borje, Komuna Shishtavec, Kukës</span><br />Dënimi i kryer: 2 vjet e 6 muaj burgim. Lidhje: Djali i xhaxhait"
                        }
                    },
                    "Qyteti Kavaje1": {
                        value: "55",
                        latitude: 46.25555,
                        longitude: 7.554555,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Kavaje</span><br />Dënimi i kryer: 2 vjet e 4 muaj. Lidhje: Shok i babait. Shënim: kishte dy vjet që e përndiqte në shkolle, rrugë e shpi."
                        }
                    },
                    "Qyteti Kavaje2": {
                        value: "35",
                        latitude: 46.25555,
                        longitude: 7.88,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Mali i Robit, Kavaje</span><br />Dënimi i kryer: 1 vit burgim. Lidhja: Punonte tek babai i fëmijës"
                        }
                    },
                    "Qyteti Mirdite1": {
                        value: "85",
                        latitude: 48.2,
                        longitude: 8.6,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Rubik, Mirditë</span><br />Dënimi i kryer: 20 muaj burgim. Banorë të të njëjtit qytet"
                        }
                    },
                    "Qyteti Puke1": {
                        value: "85",
                        latitude: 49.4,
                        longitude: 8.8,
                        tooltip: {
                            content: "<span style=\"font-weight:bold;\">Pukë</span><br />Dënimi i kryer: 1 vit e 6 muaj. Lidhje: Banorë të të njëjtit qytet"
                        }
                    },
                   
   
                }
            });
        });
    </script>

</head>

<body>

  <!--  <h1>Pedofilë që kanë përfunduar dënimin </h1> -->

    <div class="mapcontainer">
        <div class="row">
            <div class="col-lg-6">
        <div class="map"><span>Alternative content for the map</span>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="myLegend"><span>Alternative content for the legend</span>

        </div>
<!-- start message box item -->
                        <div class="container  alert alert-danger alert-dismissable mt-3">
                            <strong>Shënim!</strong> Harta tregon vendodhjet e 98 pedofilëve të cilët kanë kryer dënimin dhe janë sërish të lirë në vendbanimet e tyre. Nga analiza e 50% të vendimeve të dhëna nga gjykatat gjatë viteve 2010-2019 rezultoi se “pedofilia” ishte një sëmundje mendore e cila mund të mbahet nën kontroll përmes mjekimit, por pavarësisht kësaj, në asnjë vendim nuk ishte dhënë dënimi plotësues për trajtim mjekësor të tyre. Gjithashtu organet hetimore kanë vërtetuar se 25% e pedofilëve janë recidivistë dhe duke patur parasysh tipologjinë e sëmundjes, nuk përjashtohet rreziku që edhe të tjerët të përsërisin vepra të tilla penale. Për këtë arsye MediaLook ka paraqitur në mënyrë grafike vendodhjet e tyre duke ruajtur cdo të dhënë personale dhe të personave që kanë kryer krimet seksuale.  
                        <ul class="p-0 list-style-10">
                            <li><i class="fas fa-arrow-right text-extra-dark-gray" aria-hidden="true"></i><span>Për të parë reflektimin në hartë të vetëm një ose disa neneve që ju dëshironi, klikoni në legjendën e mëposhtme për të çaktivizuara nenet e tjera. </span></li>
                            <li><i class="fas fa-arrow-right text-extra-dark-gray" aria-hidden="true"></i><span>Ju mund të klikoni ose mbani shigjetën e “mouse” mbi secilën pikë për të parë vendodhjen, lidhjen e abuzuesit me viktimën dhe masën e dënimit të kryer.</span></li>

                        </ul>
						</div>
                        <!-- end message box item -->
        </div>
        
    </div>
    </div>


</html>