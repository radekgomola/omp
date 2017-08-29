$(document).ready(function() {
	// Sloupcový graf (horizontální)
	var initGraph1 = function() {
		var chart = nv.models.multiBarChart();
		var $svg = $('#graph-1');
		var data = [{
			"key": "Title",
			"color": "#002776",
			"values": [{
				"label": "2012",
				"value": 1600
			}, {
				"label": "2013",
				"value": 700
			}, {
				"label": "2014",
				"value": 1480
			}, {
				"label": "2015",
				"value": 1200
			}, {
				"label": "2016",
				"value": 800
			}]
		}];

		chart
			.x(function(data) {
				return data.label;
			})
			.y(function(data) {
				return data.value;
			})
			.showControls(false);

		chart.yAxis
			.tickFormat(d3.format(''));

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Sloupcový graf (vertikální)
	var initGraph2 = function() {
		var chart = nv.models.multiBarHorizontalChart()
		var $svg = $('#graph-2');
		var data = [{
			"key": "Title",
			"color": "#002776",
			"values": [{
				"label": "2012",
				"value": 1600
			}, {
				"label": "2013",
				"value": 700
			}, {
				"label": "2014",
				"value": 1480
			}, {
				"label": "2015",
				"value": 1200
			}, {
				"label": "2016",
				"value": 800
			}]
		}];

		chart
			.x(function(data) {
				return data.label;
			})
			.y(function(data) {
				return data.value;
			})
			.showControls(false);

		chart.yAxis
			.tickFormat(d3.format(''));

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Sloupcový graf (skupiny)
	var initGraph3 = function() {
		var chart = nv.models.multiBarChart()
		var $svg = $('#graph-3');
		var data = [{
			"key": "Lorem ipsum dolor 1",
			"color": "#002776",
			"values": [{
				"label": "Leden",
				"value": 1500
			}, {
				"label": "Únor",
				"value": 800
			}, {
				"label": "Březen",
				"value": 1500
			}, {
				"label": "Duben",
				"value": 800
			}, {
				"label": "Květen",
				"value": 1500
			}, {
				"label": "Červen",
				"value": 800
			}, {
				"label": "Červenec",
				"value": 1500
			}, {
				"label": "Srpen",
				"value": 800
			}, {
				"label": "Září",
				"value": 1500
			}, {
				"label": "Říjen",
				"value": 800
			}, {
				"label": "Listopad",
				"value": 1500
			}, {
				"label": "Prosinec",
				"value": 800
			}]
		}, {
			"key": "Lorem ipsum dolor 2",
			"color": "#667dad",
			"values": [{
				"label": "Leden",
				"value": 500
			}, {
				"label": "Únor",
				"value": 500
			}, {
				"label": "Březen",
				"value": 500
			}, {
				"label": "Duben",
				"value": 500
			}, {
				"label": "Květen",
				"value": 500
			}, {
				"label": "Červen",
				"value": 500
			}, {
				"label": "Červenec",
				"value": 500
			}, {
				"label": "Srpen",
				"value": 500
			}, {
				"label": "Září",
				"value": 500
			}, {
				"label": "Říjen",
				"value": 500
			}, {
				"label": "Listopad",
				"value": 500
			}, {
				"label": "Prosinec",
				"value": 500
			}]
		} , {
			"key": "Lorem ipsum dolor 3",
			"color": "#99a9c8",
			"values": [{
				"label": "Leden",
				"value": 900
			}, {
				"label": "Únor",
				"value": 900
			}, {
				"label": "Březen",
				"value": 900
			}, {
				"label": "Duben",
				"value": 900
			}, {
				"label": "Květen",
				"value": 900
			}, {
				"label": "Červen",
				"value": 900
			}, {
				"label": "Červenec",
				"value": 900
			}, {
				"label": "Srpen",
				"value": 900
			}, {
				"label": "Září",
				"value": 900
			}, {
				"label": "Říjen",
				"value": 900
			}, {
				"label": "Listopad",
				"value": 900
			}, {
				"label": "Prosinec",
				"value": 900
			}]
		}];

		chart
			.x(function(data) {
				return data.label;
			})
			.y(function(data) {
				return data.value;
			})
			.showControls(false);

		chart.yAxis
			.tickFormat(d3.format(''));

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Spojnicový graf
	var initGraph4 = function() {
		var chart = nv.models.lineChart();
		var $svg = $('#graph-4');
		var data = [{
			"key": "Title",
			"color": "#002776",
			"values": [{
				"index": "2012",
				"value": 250
			}, {
				"index": "2013",
				"value": 500
			}, {
				"index": "2014",
				"value": 750
			}, {
				"index": "2015",
				"value": 1250
			}, {
				"index": "2016",
				"value": 750
			}]
		}];

		chart
			.x(function(data) {
				return data.index;
			})
			.y(function(data) {
				return data.value;
			})
			.margin({
				'left': 50,
				'right': 50
			})
			.clipEdge(false);

		chart.yAxis
			.tickFormat(d3.format(''));

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Spojnicový graf (skupiny)
	var initGraph5 = function() {
		var chart = nv.models.lineChart();
		var $svg = $('#graph-5');
		var labels = [
			'Leden',
			'Únor',
			'Březen',
			'Duben',
			'Květen',
			'Červen',
			'Červenec',
			'Srpen',
			'Září',
			'Říjen',
			'Listopad',
			'Prosinec'
		]
		var data = [{
			"key": "Lorem ipsum dolor 1",
			"color": "#002776",
			"values": [{
				"index": 0,
				"value": 1500
			}, {
				"index": 1,
				"value": 800
			}, {
				"index": 2,
				"value": 1500
			}, {
				"index": 3,
				"value": 800
			}, {
				"index": 4,
				"value": 1500
			}, {
				"index": 5,
				"value": 800
			}, {
				"index": 6,
				"value": 1500
			}, {
				"index": 7,
				"value": 800
			}, {
				"index": 8,
				"value": 1500
			}, {
				"index": 9,
				"value": 800
			}, {
				"index": 10,
				"value": 1500
			}, {
				"index": 11,
				"value": 800
			}]
		}, {
			"key": "Lorem ipsum dolor 2",
			"color": "#667dad",
			"values": [{
				"index": 0,
				"value": 2000
			}, {
				"index": 1,
				"value": 300
			}, {
				"index": 2,
				"value": 2000
			}, {
				"index": 3,
				"value": 300
			}, {
				"index": 4,
				"value": 2000
			}, {
				"index": 5,
				"value": 300
			}, {
				"index": 6,
				"value": 2000
			}, {
				"index": 7,
				"value": 300
			}, {
				"index": 8,
				"value": 2000
			}, {
				"index": 9,
				"value": 300
			}, {
				"index": 10,
				"value": 2000
			}, {
				"index": 11,
				"value": 300
			}]
		}, {
			"key": "Lorem ipsum dolor 3",
			"color": "#99a9c8",
			"values": [{
				"index": 0,
				"value": 600
			}, {
				"index": 1,
				"value": 1200
			}, {
				"index": 2,
				"value": 600
			}, {
				"index": 3,
				"value": 1200
			}, {
				"index": 4,
				"value": 600
			}, {
				"index": 5,
				"value": 1200
			}, {
				"index": 6,
				"value": 600
			}, {
				"index": 7,
				"value": 1200
			}, {
				"index": 8,
				"value": 600
			}, {
				"index": 9,
				"value": 1200
			}, {
				"index": 10,
				"value": 600
			}, {
				"index": 11,
				"value": 1200
			}]
		}];

		chart
			.x(function(data) {
				return data.index;
			})
			.y(function(data) {
				return data.value;
			})
			.margin({
				'left': 50,
				'right': 50
			})
			.clipEdge(false);

		chart.yAxis
			.tickFormat(d3.format(''));

		chart.xAxis
			.tickFormat(function(d) {
				return labels[d];
			});

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Koláčový graf (plný)
	var initGraph6 = function() {
		var chart = nv.models.pieChart();
		var $svg = $('#graph-6');
		var data = [{
			"label": "Lorem ipsum 1",
			"value": 42,
			"color": "#002776"
		}, {
			"label": "Lorem ipsum 2",
			"value": 58,
			"color": "#667dad"
		}, {
			"label": "Lorem ipsum 3",
			"value": 25,
			"color": "#99a9c8"
		}];

		chart
			.x(function(data) {
				return data.label;
			})
			.y(function(data) {
				return data.value;
			})
			.margin({
				'top': 0,
				'bottom': 0,
				'left': 0,
				'right': 0
			})
			.showLabels(true)
			.labelType('percent')
			.legendPosition('right');

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Koláčový graf
	var initGraph7 = function() {
		var chart = nv.models.pieChart();
		var $svg = $('#graph-7');
		var data = [{
			"label": "Lorem ipsum 4",
			"value": 50,
			"color": "#002776"
		}, {
			"label": "Lorem ipsum 5",
			"value": 20,
			"color": "#667dad"
		}, {
			"label": "Lorem ipsum 6",
			"value": 30,
			"color": "#99a9c8"
		}];

		chart
			.x(function(data) {
				return data.label;
			})
			.y(function(data) {
				return data.value;
			})
			.margin({
				'top': 0,
				'bottom': 0,
				'left': 0,
				'right': 0
			})
			.showLabels(true)
			.labelType('percent')
			.legendPosition('right')
			.donut(true)
			.labelsOutside(true);

		d3.select($svg[0])
			.datum(data)
			.transition()
			.duration(350)
			.call(chart);
	}


	// Inicializace grafů
	initGraph1();
	initGraph2();
	initGraph3();
	initGraph4();
	initGraph5();
	initGraph6();
	initGraph7();
});
