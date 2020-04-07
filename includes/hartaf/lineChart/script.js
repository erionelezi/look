var chart = AmCharts.makeChart( "chartdiv2", {
  "type": "serial",
  "theme": "light",
  "marginRight": 30,
    "balloon": {
    "adjustBorderColor": false,
    "color": "#000000",
    "cornerRadius": 5,
    "fillColor": "#FFFFFF"
  },
  "legend": {
    "equalWidths": false,
    "periodValueText": "totali: [[value.sum]]",
    "position": "top",
    "valueAlign": "left",
    "valueWidth": 100
  },
  "dataProvider": [ {
    "year": 2010,
    "neni1": 1587,
    "neni2": 650,
    "neni3": 121,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2011,
    "neni1": 1567,
    "neni2": 683,
    "neni3": 146,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2012,
    "neni1": 1617,
    "neni2": 691,
    "neni3": 138,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2013,
    "neni1": 1630,
    "neni2": 642,
    "neni3": 127,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2014,
    "neni1": 1660,
    "neni2": 699,
    "neni3": 105,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2015,
    "neni1": 1683,
    "neni2": 721,
    "neni3": 109,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2016,
    "neni1": 1691,
    "neni2": 737,
    "neni3": 112,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2017,
    "neni1": 1298,
    "neni2": 680,
    "neni3": 101,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2018,
    "neni1": 1275,
    "neni2": 664,
    "neni3": 97,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  }, {
    "year": 2019,
    "neni1": 1246,
    "neni2": 648,
    "neni3": 93,
    "neni4": 1000,
    "neni5": 1600,
    "neni6": 300,
    "neni7": 100,
  } ],
  "valueAxes": [ {
    "gridAlpha": 0.07,
    "position": "left",
  } ],
  "graphs": [ {
    "lineThickness": 3,
    "title": "Neni 1",
    "valueField": "neni1"
  }, {
    "lineThickness": 3,
    "title": "Neni 2",
    "valueField": "neni2"
  }, {
    "lineThickness": 3,
    "title": "Neni 3",
    "valueField": "neni3"
  },
  {
	"lineThickness": 3,
	"title": "Neni 4",
	"valueField": "neni4"
   },
	{
		"lineThickness": 3,
		"title": "Neni 5",
		"valueField": "neni5"
	},
{
		"lineThickness": 3,
		"title": "Neni 6",
		"valueField": "neni6"
	  },
{
		"lineThickness": 3,
		"title": "Neni 7",
		"valueField": "neni7"
	  }	  ],
  "chartCursor": {},
  "categoryField": "year",
  "categoryAxis": {
    "startOnAxis": true,
    "gridAlpha": 0.07
  }
} );

/**
 * Add events
 */
chart.addListener( "init", function( event ) {

  /**
   * Add hidden graphs for each value axis guide
   */
  setTimeout( function() {
    for ( var x = 0; x < event.chart.valueAxes.length; x++ ) {
      for ( var y = 0; y < event.chart.valueAxes[ x ].guides.length; y++ ) {
        var guide = event.chart.valueAxes[ x ].guides[ y ];
        var graph = new AmCharts.AmGraph();
        graph.balloonText = "";
        graph.lineColor = guide.lineColor;
        graph.lineAlpha = 1;
        graph.title = guide.label;
        graph.valueField = "dummy";
        graph.legendValueText = "" + guide.value;
        graph.legendPeriodValueText = "" + guide.value;
        graph.relatedGuide = guide;
        chart.addGraph( graph );
      }
    }
  }, 10 );

	/**
   * Set legend events
   */
  event.chart.legend.addListener("hideItem", function(event) {
    if (event.dataItem.relatedGuide !== undefined) {
      event.dataItem.relatedGuide.lineAlpha = 0;
      event.dataItem.relatedGuide.originalLabel = event.dataItem.relatedGuide.label;
      event.dataItem.relatedGuide.label = "";
      event.chart.validateNow();
    }
  });
  
  event.chart.legend.addListener("showItem", function(event) {
    if (event.dataItem.relatedGuide !== undefined) {
      event.dataItem.relatedGuide.lineAlpha = 0.5;
      event.dataItem.relatedGuide.label = event.dataItem.relatedGuide.originalLabel;
      event.chart.validateNow();
    }
  });
} );