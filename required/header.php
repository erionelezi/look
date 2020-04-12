<html class="no-js" lang="en">
<head>
    <!-- title -->
    <title>Medialook - Project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="MediaLook është një “media mbi median” e themeluar nga gazetari dhe studiuesi i mediave të komunikimit masiv, Elvin Luku, në 13 Qershor 2018. Ajo nuk ka në përbërjen e saj një redaksi klasike, por funksionon me autorë e kontributorë fiks dhe të përkohshëm, mendimet dhe opinionet e të cilëve jo domosdoshmërisht përkojnë me atë të themeluesit të kësaj faqeje. Bashkëpunëtorët aktual dhe të rinj mund të jenë gazetarë, studiues të komunikimit, studentë të gazetarisë dhe komunikimit, doktorantë, profesorë e qytetarë aktiv, të cilët synojnë të japin kontributin e tyre në fushën e medias, në të gjitha format bashkëkohore të raportimit dhe shkrimit në linjë.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="./includes/harta/harta1/style.css">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!-- bootsnav -->
    <link rel="stylesheet" href="css/bootsnav.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!--[if IE]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
	<!-- Resources MAPS -->
<script src="js/amchart/core.js"></script>
<script src="js/amchart/charts.js"></script>
<script src="js/amchart/maps.js"></script>
<script src="js/amchart/albaniaHigh.js"></script>
<script src="js/chartjs/Chart.min.js"></script>
<!-- <script src="js/amchart/animated.js"></script> -->


<style>
#chartdiv {
  padding:20px;
  width: 100%;
  height: 600px;
  background-color:#343434;
}
rect{
fill:#343434;
}
tspan{
fill:white !important;
}
</style>

</head>
<body>
<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width white-link navbar-expand-lg">
        <div class="container nav-header-container">
            <!-- start logo -->
            <div class="col-auto pl-lg-0">
                <a href="#slider" title="Medialook" class="logo inner-link"><img src="images/logo.png" data-rjs="images/logo@2x.png" class="logo-dark" alt="Pofo"><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="MediaLook" class="logo-light default"></a>
            </div>
            <!-- end logo -->
            <div class="col-auto col-lg accordion-menu pr-lg-0">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul class="nav navbar-nav alt-font font-weight-700">
                        <li><a href="#dbPedofilise" title="Databaza e pedofilisë" class="inner-link">Databaza e pedofilisë </a></li>
                        <li><a href="#pedofileTeLire" title="Pedofilë të lirë" class="inner-link">Pedofilë të lirë</a></li>
						<li><a href="#pedofiliaPerqindje" title="Mite & fakte" class="inner-link">Pedofilia në %</a></li>
						<li><a href="#redFlag" title="Kontak" class="inner-link">Vendime “red flag” </a></li>

                        <li><a href="#konkluzione" title="Konkluzione" class="inner-link">Konkluzione</a></li>
                        <li><a href="https://www.medialook.al" target="_blank" title="MediaLook">MediaLook</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
<script>
am4core.ready(function() {

// Themes begin
//am4core.useTheme(am4themes_animated);
// Themes end

var mainContainer = am4core.create("chartdiv", am4core.Container);
mainContainer.width = am4core.percent(100);
mainContainer.height = am4core.percent(100);
mainContainer.layout = "horizontal";

var usData = [
    {
        "country": "Neni 100",
        "litres": 92
    }, {
        "country": "Neni 101",
        "litres": 40
    }, {
        "country": "Neni 107/a",
        "litres": 3
    }, {
        "country": "Neni 108",
        "litres": 114
    }, {
        "country": "Neni 108/a",
        "litres": 37
    },
	 {
        "country": "Neni 117",
        "litres": 2
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 55
    }
];

var maleChart = mainContainer.createChild(am4charts.PieChart);
maleChart.paddingRight = 0;
maleChart.data = JSON.parse(JSON.stringify(usData));
//maleChart.width = am4core.percent(40);
maleChart.radius = am4core.percent(60);

    var pieSeries = maleChart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "litres";
    pieSeries.dataFields.category = "country";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 3;
    pieSeries.slices.template.strokeOpacity = 1;


// Add legend
maleChart.legend = new am4charts.Legend();

// Responsive
maleChart.responsive.enabled = true;
maleChart.responsive.rules.push({
  relevant: function(target) {
    if (target.pixelWidth <= 600) {
      return true;
    }
    return false;
  },
  state: function(target, stateId) {
    if (target instanceof am4charts.PieSeries) {
      var state = target.states.create(stateId);

      var labelState = target.labels.template.states.create(stateId);
      labelState.properties.disabled = true;

      var tickState = target.ticks.template.states.create(stateId);
      tickState.properties.disabled = true;
      return state;
    }

    return null;
  }
});
pieSeries.colors.list = ["#ff0000", "#ff7800", "#0cff00", "#fffb00", "#e800ff", "#00ffec", "#006ba1",].map(function(color) {
      return new am4core.color(color);
});

// This creates initial animation
  //  pieSeries.hiddenState.properties.opacity = 1;
 //   pieSeries.hiddenState.properties.endAngle = -90;
   // pieSeries.hiddenState.properties.startAngle = -90;
   // pieSeries.hiddenState.properties.startAngle = -90;





var mapChart = mainContainer.createChild(am4maps.MapChart);
mapChart.projection = new am4maps.projections.Mercator();
mapChart.geodata = am4geodata_albaniaHigh;
mapChart.zIndex = -1;
// Disable zoom and pan
mapChart.maxZoomLevel = 1;
mapChart.seriesContainer.draggable = false;
mapChart.seriesContainer.resizable = false;


var polygonSeries = mapChart.series.push(new am4maps.MapPolygonSeries())
polygonSeries.useGeodata = true;

var selectedStateId = "AL-01";
var selectedPolygon;
var selectedStateName;

var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.togglable = true;

var hoverState = polygonTemplate.states.create("hover");
hoverState.properties.fill = mapChart.colors.getIndex(2);

var activeState = polygonTemplate.states.create("active");
activeState.properties.fill = mapChart.colors.getIndex(6);

polygonTemplate.events.on("hit", function(event) {
  var id = event.target.dataItem.dataContext.id;
    var stateId = "AL-" + id.split("-")[1];
  showState(stateId, event.target.dataItem.dataContext.name, event.target);
})


mapChart.seriesContainer.background.events.on("over", function(event) {
  showState(selectedStateId, selectedStateName, selectedPolygon);
});


function showState(id, stateName, polygon) {
  if(selectedStateId != id){

    var newData = stateData[id];

    if (selectedPolygon) {
      selectedPolygon.isActive = false;
    }

    for (var i = 0; i < maleChart.data.length; i++) {
      maleChart.data[i].litres = newData[i].litres;
        maleChart.data[i].category = newData[i].category;
    }

    maleChart.invalidateRawData();

    selectedStateName = stateName;
    selectedStateId = id;
    selectedPolygon = polygon;
		    label.text = "Qarku " + stateName ;
    label.hide(0);
    label.show();
      console.log(selectedStateId)

   }
}

var label = mainContainer.createChild(am4core.Label);
label.isMeasured = false;
label.x = am4core.percent(80);
label.horizontalCenter = "middle";
label.y = 50;
label.showOnInit = true;
label.text = "   Të dhëna në rang kombëtar ";
label.hiddenState.properties.dy = -100;

var stateData = {
  "AL-01": [
    {
        "country": "Neni 100",
        "litres": 0
    }, {
        "country": "Neni 101",
        "litres": 1
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 0
    }, {
        "country": "Neni 108/a",
        "litres": 16
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 0
    }
],
  "AL-02": [
    {
        "country": "Neni 100",
        "litres": 5
    }, {
        "country": "Neni 101",
        "litres": 0
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 2
    }, {
        "country": "Neni 108/a",
        "litres": 0
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 2
    }
],
  "AL-03": [
    {
        "country": "Neni 100",
        "litres": 18
    }, {
        "country": "Neni 101",
        "litres": 1
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 18
    }, {
        "country": "Neni 108/a",
        "litres": 1
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 0
    }
],
  "AL-04": [
    {
        "country": "Neni 100",
        "litres": 5
    }, {
        "country": "Neni 101",
        "litres": 0
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 2
    }, {
        "country": "Neni 108/a",
        "litres": 0
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 2
    }
],
  "AL-05": [
    {
        "country": "Neni 100",
        "litres": 3
    }, {
        "country": "Neni 101",
        "litres": 1
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 3
    }, {
        "country": "Neni 108/a",
        "litres": 1
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 0
    }
],
  "AL-06": [
    {
        "country": "Neni 100",
        "litres": 12
    }, {
        "country": "Neni 101",
        "litres": 3
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 21
    }, {
        "country": "Neni 108/a",
        "litres": 2
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 19
    }
],
  "AL-07": [
    {
        "country": "Neni 100",
        "litres": 0
    }, {
        "country": "Neni 101",
        "litres": 2
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 3
    }, {
        "country": "Neni 108/a",
        "litres": 3
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 6
    }
],
  "AL-08": [
    {
        "country": "Neni 100",
        "litres": 0
    }, {
        "country": "Neni 101",
        "litres": 3
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 1
    }, {
        "country": "Neni 108/a",
        "litres": 0
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 4
    }
],
  "AL-09": [
    {
        "country": "Neni 100",
        "litres": 1
    }, {
        "country": "Neni 101",
        "litres": 2
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 1
    }, {
        "country": "Neni 108/a",
        "litres": 3
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 0
    }
],
  "AL-10": [
    {
        "country": "Neni 100",
        "litres": 3
    }, {
        "country": "Neni 101",
        "litres": 2
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 7
    }, {
        "country": "Neni 108/a",
        "litres": 4
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 2
    }
],
  "AL-11": [
    {
        "country": "Neni 100",
        "litres": 24
    }, {
        "country": "Neni 101",
        "litres": 16
    }, {
        "country": "Neni 107/a",
        "litres": 3
    }, {
        "country": "Neni 108",
        "litres": 20
    }, {
        "country": "Neni 108/a",
        "litres": 5
    },
	 {
        "country": "Neni 117",
        "litres": 2
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 9
    }
],
  "AL-12": [
    {
        "country": "Neni 100",
        "litres": 21
    }, {
        "country": "Neni 101",
        "litres": 9
    }, {
        "country": "Neni 107/a",
        "litres": 0
    }, {
        "country": "Neni 108",
        "litres": 33
    }, {
        "country": "Neni 108/a",
        "litres": 1
    },
	 {
        "country": "Neni 117",
        "litres": 0
    },
	 {
        "country": "Neni 121/a/3",
        "litres": 13
    }
],
}

}); // end am4core.ready()
</script>
