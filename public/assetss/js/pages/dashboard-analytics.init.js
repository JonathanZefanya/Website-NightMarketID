/*
Template Name: Shreyu - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard Analytics init js
*/

//
// session-os
//


var dataSeries=[[{date:"2014-01-01",value:2e7},{date:"2014-01-02",value:10379978},{date:"2014-01-03",value:30493749},{date:"2014-01-04",value:10785250},{date:"2014-01-05",value:33901904},{date:"2014-01-06",value:11576838},{date:"2014-01-07",value:14413854},{date:"2014-01-08",value:15177211},{date:"2014-01-09",value:16622100},{date:"2014-01-10",value:17381072},{date:"2014-01-11",value:18802310},{date:"2014-01-12",value:15531790},{date:"2014-01-13",value:15748881},{date:"2014-01-14",value:18706437},{date:"2014-01-15",value:19752685},{date:"2014-01-16",value:21016418},{date:"2014-01-17",value:25622924},{date:"2014-01-18",value:25337480},{date:"2014-01-19",value:22258882},{date:"2014-01-20",value:23829538},{date:"2014-01-21",value:24245689},{date:"2014-01-22",value:26429711},{date:"2014-01-23",value:26259017},{date:"2014-01-24",value:25396183},{date:"2014-01-25",value:23107346},{date:"2014-01-26",value:28659852},{date:"2014-01-27",value:25270783},{date:"2014-01-28",value:26270783},{date:"2014-01-29",value:27270783},{date:"2014-01-30",value:28270783},{date:"2014-01-31",value:29270783},{date:"2014-02-01",value:30270783},{date:"2014-02-02",value:31270783},{date:"2014-02-03",value:32270783},{date:"2014-02-04",value:33270783},{date:"2014-02-05",value:28270783},{date:"2014-02-06",value:27270783},{date:"2014-02-07",value:35270783},{date:"2014-02-08",value:34270783},{date:"2014-02-09",value:28270783},{date:"2014-02-10",value:35270783},{date:"2014-02-11",value:36270783},{date:"2014-02-12",value:34127078},{date:"2014-02-13",value:33124078},{date:"2014-02-14",value:36227078},{date:"2014-02-15",value:37827078},{date:"2014-02-16",value:36427073},{date:"2014-02-17",value:37570783},{date:"2014-02-18",value:38627073},{date:"2014-02-19",value:37727078},{date:"2014-02-20",value:38827073},{date:"2014-02-21",value:40927078},{date:"2014-02-22",value:41027078},{date:"2014-02-23",value:42127073},{date:"2014-02-24",value:43220783},{date:"2014-02-25",value:44327078},{date:"2014-02-26",value:40427078},{date:"2014-02-27",value:41027078},{date:"2014-02-28",value:45627078},{date:"2014-03-01",value:44727078},{date:"2014-03-02",value:44227078},{date:"2014-03-03",value:45227078},{date:"2014-03-04",value:46027078},{date:"2014-03-05",value:46927078},{date:"2014-03-06",value:47027078},{date:"2014-03-07",value:46227078},{date:"2014-03-08",value:47027078},{date:"2014-03-09",value:48027078},{date:"2014-03-10",value:47027078},{date:"2014-03-11",value:47027078},{date:"2014-03-12",value:48017078},{date:"2014-03-13",value:48077078},{date:"2014-03-14",value:48087078},{date:"2014-03-15",value:48017078},{date:"2014-03-16",value:48047078},{date:"2014-03-17",value:48067078},{date:"2014-03-18",value:48077078},{date:"2014-03-19",value:48027074},{date:"2014-03-20",value:48927079},{date:"2014-03-21",value:48727071},{date:"2014-03-22",value:48127072},{date:"2014-03-23",value:48527072},{date:"2014-03-24",value:48627027},{date:"2014-03-25",value:48027040},{date:"2014-03-26",value:48027043},{date:"2014-03-27",value:48057022},{date:"2014-03-28",value:49057022},{date:"2014-03-29",value:50057022},{date:"2014-03-30",value:51057022},{date:"2014-03-31",value:52057022},{date:"2014-04-01",value:53057022},{date:"2014-04-02",value:54057022},{date:"2014-04-03",value:52057022},{date:"2014-04-04",value:55057022},{date:"2014-04-05",value:58270783},{date:"2014-04-06",value:56270783},{date:"2014-04-07",value:55270783},{date:"2014-04-08",value:58270783},{date:"2014-04-09",value:59270783},{date:"2014-04-10",value:60270783},{date:"2014-04-11",value:61270783},{date:"2014-04-12",value:62270783},{date:"2014-04-13",value:63270783},{date:"2014-04-14",value:64270783},{date:"2014-04-15",value:65270783},{date:"2014-04-16",value:66270783},{date:"2014-04-17",value:67270783},{date:"2014-04-18",value:68270783},{date:"2014-04-19",value:69270783},{date:"2014-04-20",value:70270783},{date:"2014-04-21",value:71270783},{date:"2014-04-22",value:72270783},{date:"2014-04-23",value:73270783},{date:"2014-04-24",value:74270783},{date:"2014-04-25",value:75270783},{date:"2014-04-26",value:76660783},{date:"2014-04-27",value:77270783},{date:"2014-04-28",value:78370783},{date:"2014-04-29",value:79470783},{date:"2014-04-30",value:80170783}],[{date:"2014-01-01",value:15e7},{date:"2014-01-02",value:160379978},{date:"2014-01-03",value:170493749},{date:"2014-01-04",value:160785250},{date:"2014-01-05",value:167391904},{date:"2014-01-06",value:161576838},{date:"2014-01-07",value:161413854},{date:"2014-01-08",value:152177211},{date:"2014-01-09",value:140762210},{date:"2014-01-10",value:144381072},{date:"2014-01-11",value:154352310},{date:"2014-01-12",value:165531790},{date:"2014-01-13",value:175748881},{date:"2014-01-14",value:187064037},{date:"2014-01-15",value:197520685},{date:"2014-01-16",value:210176418},{date:"2014-01-17",value:196122924},{date:"2014-01-18",value:207337480},{date:"2014-01-19",value:200258882},{date:"2014-01-20",value:186829538},{date:"2014-01-21",value:192456897},{date:"2014-01-22",value:204299711},{date:"2014-01-23",value:192759017},{date:"2014-01-24",value:203596183},{date:"2014-01-25",value:208107346},{date:"2014-01-26",value:196359852},{date:"2014-01-27",value:192570783},{date:"2014-01-28",value:177967768},{date:"2014-01-29",value:190632803},{date:"2014-01-30",value:203725316},{date:"2014-01-31",value:218226177},{date:"2014-02-01",value:210698669},{date:"2014-02-02",value:217640656},{date:"2014-02-03",value:216142362},{date:"2014-02-04",value:201410971},{date:"2014-02-05",value:196704289},{date:"2014-02-06",value:190436945},{date:"2014-02-07",value:178891686},{date:"2014-02-08",value:171613962},{date:"2014-02-09",value:157579773},{date:"2014-02-10",value:158677098},{date:"2014-02-11",value:147129977},{date:"2014-02-12",value:151561876},{date:"2014-02-13",value:151627421},{date:"2014-02-14",value:143543872},{date:"2014-02-15",value:136581057},{date:"2014-02-16",value:135560715},{date:"2014-02-17",value:122625263},{date:"2014-02-18",value:112091484},{date:"2014-02-19",value:98810329},{date:"2014-02-20",value:99882912},{date:"2014-02-21",value:94943095},{date:"2014-02-22",value:104875743},{date:"2014-02-23",value:116383678},{date:"2014-02-24",value:125028841},{date:"2014-02-25",value:123967310},{date:"2014-02-26",value:133167029},{date:"2014-02-27",value:128577263},{date:"2014-02-28",value:115836969},{date:"2014-03-01",value:119264529},{date:"2014-03-02",value:109363374},{date:"2014-03-03",value:113985628},{date:"2014-03-04",value:114650999},{date:"2014-03-05",value:110866108},{date:"2014-03-06",value:96473454},{date:"2014-03-07",value:104075886},{date:"2014-03-08",value:103568384},{date:"2014-03-09",value:101534883},{date:"2014-03-10",value:115825447},{date:"2014-03-11",value:126133916},{date:"2014-03-12",value:116502109},{date:"2014-03-13",value:130169411},{date:"2014-03-14",value:124296886},{date:"2014-03-15",value:126347399},{date:"2014-03-16",value:131483669},{date:"2014-03-17",value:142811333},{date:"2014-03-18",value:129675396},{date:"2014-03-19",value:115514483},{date:"2014-03-20",value:117630630},{date:"2014-03-21",value:122340239},{date:"2014-03-22",value:132349091},{date:"2014-03-23",value:125613305},{date:"2014-03-24",value:135592466},{date:"2014-03-25",value:123408762},{date:"2014-03-26",value:111991454},{date:"2014-03-27",value:116123955},{date:"2014-03-28",value:112817214},{date:"2014-03-29",value:113029590},{date:"2014-03-30",value:108753398},{date:"2014-03-31",value:99383763},{date:"2014-04-01",value:100151737},{date:"2014-04-02",value:94985209},{date:"2014-04-03",value:82913669},{date:"2014-04-04",value:78748268},{date:"2014-04-05",value:63829135},{date:"2014-04-06",value:78694727},{date:"2014-04-07",value:80868994},{date:"2014-04-08",value:93799013},{date:"2014-04-09",value:99042416},{date:"2014-04-10",value:97298692},{date:"2014-04-11",value:83353499},{date:"2014-04-12",value:71248129},{date:"2014-04-13",value:75253744},{date:"2014-04-14",value:68976648},{date:"2014-04-15",value:71002284},{date:"2014-04-16",value:75052401},{date:"2014-04-17",value:83894030},{date:"2014-04-18",value:90236528},{date:"2014-04-19",value:99739114},{date:"2014-04-20",value:96407136},{date:"2014-04-21",value:108323177},{date:"2014-04-22",value:101578914},{date:"2014-04-23",value:115877608},{date:"2014-04-24",value:112088857},{date:"2014-04-25",value:112071353},{date:"2014-04-26",value:101790062},{date:"2014-04-27",value:115003761},{date:"2014-04-28",value:120457727},{date:"2014-04-29",value:118253926},{date:"2014-04-30",value:117956992}],[{date:"2014-01-01",value:5e7},{date:"2014-01-02",value:60379978},{date:"2014-01-03",value:40493749},{date:"2014-01-04",value:60785250},{date:"2014-01-05",value:67391904},{date:"2014-01-06",value:61576838},{date:"2014-01-07",value:61413854},{date:"2014-01-08",value:82177211},{date:"2014-01-09",value:103762210},{date:"2014-01-10",value:84381072},{date:"2014-01-11",value:54352310},{date:"2014-01-12",value:65531790},{date:"2014-01-13",value:75748881},{date:"2014-01-14",value:47064037},{date:"2014-01-15",value:67520685},{date:"2014-01-16",value:60176418},{date:"2014-01-17",value:66122924},{date:"2014-01-18",value:57337480},{date:"2014-01-19",value:100258882},{date:"2014-01-20",value:46829538},{date:"2014-01-21",value:92456897},{date:"2014-01-22",value:94299711},{date:"2014-01-23",value:62759017},{date:"2014-01-24",value:103596183},{date:"2014-01-25",value:108107346},{date:"2014-01-26",value:66359852},{date:"2014-01-27",value:62570783},{date:"2014-01-28",value:77967768},{date:"2014-01-29",value:60632803},{date:"2014-01-30",value:103725316},{date:"2014-01-31",value:98226177},{date:"2014-02-01",value:60698669},{date:"2014-02-02",value:67640656},{date:"2014-02-03",value:66142362},{date:"2014-02-04",value:101410971},{date:"2014-02-05",value:66704289},{date:"2014-02-06",value:60436945},{date:"2014-02-07",value:78891686},{date:"2014-02-08",value:71613962},{date:"2014-02-09",value:107579773},{date:"2014-02-10",value:58677098},{date:"2014-02-11",value:87129977},{date:"2014-02-12",value:51561876},{date:"2014-02-13",value:51627421},{date:"2014-02-14",value:83543872},{date:"2014-02-15",value:66581057},{date:"2014-02-16",value:65560715},{date:"2014-02-17",value:62625263},{date:"2014-02-18",value:92091484},{date:"2014-02-19",value:48810329},{date:"2014-02-20",value:49882912},{date:"2014-02-21",value:44943095},{date:"2014-02-22",value:104875743},{date:"2014-02-23",value:96383678},{date:"2014-02-24",value:105028841},{date:"2014-02-25",value:63967310},{date:"2014-02-26",value:63167029},{date:"2014-02-27",value:68577263},{date:"2014-02-28",value:95836969},{date:"2014-03-01",value:99264529},{date:"2014-03-02",value:109363374},{date:"2014-03-03",value:93985628},{date:"2014-03-04",value:94650999},{date:"2014-03-05",value:90866108},{date:"2014-03-06",value:46473454},{date:"2014-03-07",value:84075886},{date:"2014-03-08",value:103568384},{date:"2014-03-09",value:101534883},{date:"2014-03-10",value:95825447},{date:"2014-03-11",value:66133916},{date:"2014-03-12",value:96502109},{date:"2014-03-13",value:80169411},{date:"2014-03-14",value:84296886},{date:"2014-03-15",value:86347399},{date:"2014-03-16",value:31483669},{date:"2014-03-17",value:82811333},{date:"2014-03-18",value:89675396},{date:"2014-03-19",value:95514483},{date:"2014-03-20",value:97630630},{date:"2014-03-21",value:62340239},{date:"2014-03-22",value:62349091},{date:"2014-03-23",value:65613305},{date:"2014-03-24",value:65592466},{date:"2014-03-25",value:63408762},{date:"2014-03-26",value:91991454},{date:"2014-03-27",value:96123955},{date:"2014-03-28",value:92817214},{date:"2014-03-29",value:93029590},{date:"2014-03-30",value:108753398},{date:"2014-03-31",value:49383763},{date:"2014-04-01",value:100151737},{date:"2014-04-02",value:44985209},{date:"2014-04-03",value:52913669},{date:"2014-04-04",value:48748268},{date:"2014-04-05",value:23829135},{date:"2014-04-06",value:58694727},{date:"2014-04-07",value:50868994},{date:"2014-04-08",value:43799013},{date:"2014-04-09",value:4042416},{date:"2014-04-10",value:47298692},{date:"2014-04-11",value:53353499},{date:"2014-04-12",value:71248129},{date:"2014-04-13",value:75253744},{date:"2014-04-14",value:68976648},{date:"2014-04-15",value:71002284},{date:"2014-04-16",value:75052401},{date:"2014-04-17",value:83894030},{date:"2014-04-18",value:50236528},{date:"2014-04-19",value:59739114},{date:"2014-04-20",value:56407136},{date:"2014-04-21",value:108323177},{date:"2014-04-22",value:101578914},{date:"2014-04-23",value:95877608},{date:"2014-04-24",value:62088857},{date:"2014-04-25",value:92071353},{date:"2014-04-26",value:81790062},{date:"2014-04-27",value:105003761},{date:"2014-04-28",value:100457727},{date:"2014-04-29",value:98253926},{date:"2014-04-30",value:67956992}]];
var colors = ["#5369f8", "#43d39e", "#f3f4f7"];
var dataColors = $("#session-os").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options = {
    chart: {
        height: 410,
        type: 'bar',
        stacked: true,
        toolbar: {
            show: false
        },

    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '50%',
        },
    },
    tooltip:{
        enabled:true,
        shared:true,
        intersect: false,
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        name: 'Facebook',
        data: [40, 80, 20, 50, 40, 20, 20, 60, 10, 40]
    }, {
        name: 'Instagram',
        data: [0, 0, 0, 15, 0, 0, 5, 10, 0, 0]
    }, {
        name: 'Twitter',
        data: [10, 10, 5, 60, 50, 100, 80, 70, 20, 110]
    }],
    xaxis: {
        categories: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020'],
    },
    colors: colors,
    fill: {
        opacity: 1
    },
    legend: {
        position: "bottom",
        offsetX: 0,
        offsetY: 0
    },
    grid: {
        row: {
            colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.2
        },
        borderColor: '#f1f3fa',
        padding: {
            bottom: 5
        }
    }
}

var chart = new ApexCharts(
    document.querySelector("#session-os"),
    options
);

chart.render();

//
// seesion-browser
//
var colors = ['#5369f8', '#43d39e', '#ff5c75', '#ffbe0b'];
var dataColors = $("#session-browser").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options = {
  chart: {
    height: 356,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      offsetY: -30,
      startAngle: 0,
      endAngle: 270,
      hollow: {
        margin: 5,
        size: '30%',
        background: 'transparent',
        image: undefined,
      },
      dataLabels: {
        name: {
          show: false,

        },
        value: {
          show: false,
        }
      }
    }
  },
  colors: colors,
  series: [76, 67, 61, 90],
  labels: ['Safari', 'Firefox', 'Chrome', 'Internet Explorer'],
  legend: {
    show: false,
    floating: true,
    fontSize: '13px',
    position: 'left',
    offsetX: 10,
    offsetY: 10,
    labels: {
      useSeriesColors: true,
    },
    markers: {
      size: 0
    },
    formatter: function (seriesName, opts) {
      return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
    },
    itemMargin: {
      horizontal: 1,
    }
  },
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        show: false
      }
    }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#session-browser"),
  options
);

chart.render();
// 
// session by location
// 

! function ($) {
	"use strict";

	var VectorMap = function () {
	};

	VectorMap.prototype.init = function () {
		//various examples
		$('#world-map-markers').vectorMap({
			map: 'world_mill_en',
			normalizeFunction: 'polynomial',
			hoverOpacity: 0.7,
			hoverColor: false,
			regionStyle: {
				initial: {
					fill: '#d4dadd'
				}
			},
			markerStyle: {
				initial: {
					r: 9,
					'fill': '#5369f8',
					'fill-opacity': 0.9,
					'stroke': '#fff',
					'stroke-width': 7,
					'stroke-opacity': 0.4
				},

				hover: {
					'stroke': '#fff',
					'fill-opacity': 1,
					'stroke-width': 1.5
				}
			},
			backgroundColor: 'transparent',
			markers: [{
				latLng: [41.90, 12.45],
				name: 'Vatican City'
			}, {
				latLng: [43.73, 7.41],
				name: 'Monaco'
			}, {
				latLng: [-0.52, 166.93],
				name: 'Nauru'
			}, {
				latLng: [-8.51, 179.21],
				name: 'Tuvalu'
			}, {
				latLng: [43.93, 12.46],
				name: 'San Marino'
			}, {
				latLng: [47.14, 9.52],
				name: 'Liechtenstein'
			}, {
				latLng: [7.11, 171.06],
				name: 'Marshall Islands'
			}, {
				latLng: [17.3, -62.73],
				name: 'Saint Kitts and Nevis'
			}, {
				latLng: [3.2, 73.22],
				name: 'Maldives'
			}, {
				latLng: [35.88, 14.5],
				name: 'Malta'
			}, {
				latLng: [12.05, -61.75],
				name: 'Grenada'
			}, {
				latLng: [13.16, -61.23],
				name: 'Saint Vincent and the Grenadines'
			}, {
				latLng: [13.16, -59.55],
				name: 'Barbados'
			}, {
				latLng: [17.11, -61.85],
				name: 'Antigua and Barbuda'
			}, {
				latLng: [-4.61, 55.45],
				name: 'Seychelles'
			}, {
				latLng: [7.35, 134.46],
				name: 'Palau'
			}, {
				latLng: [42.5, 1.51],
				name: 'Andorra'
			}, {
				latLng: [14.01, -60.98],
				name: 'Saint Lucia'
			}, {
				latLng: [6.91, 158.18],
				name: 'Federated States of Micronesia'
			}, {
				latLng: [1.3, 103.8],
				name: 'Singapore'
			}, {
				latLng: [0.33, 6.73],
				name: 'SÃ£o TomÃ© and PrÃ­ncipe'
			}]
		});

	},
		//init
$.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
}(window.jQuery),

//initializing
function ($) {
    "use strict";
    $.VectorMap.init()
}(window.jQuery);

// 
// users
// 

// chart1
var colors = ['#43d39e'];
var dataColors = $("#chart1").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options1 = {
    chart: {
        type: 'bar',
        // width: 100,
        height: 60,
        sparkline: {
            enabled: true
        }
    },
    plotOptions: {
        bar: {
            columnWidth: '80%'
        }
    },
    
    colors: colors,
    series: [{
        data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
    }],
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
}
// chart2
var colors = ['#ff5c75'];
var dataColors = $("#chart2").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options2 = {
    chart: {
        type: 'line',
        height: 60,
        sparkline: {
            enabled: true
        }
    },
    series: [{
        data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
    }],
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    markers: {
        size: 0
    },
    colors: colors,
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
}
// chart3
var colors = ['#43d39e'];
var dataColors = $("#chart3").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options3 = {
    chart: {
        type: 'bar',
        height: 60,
        sparkline: {
            enabled: true
        }
    },
    plotOptions: {
        bar: {
            columnWidth: '80%'
        }
    },
    colors: colors,
    series: [{
        data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
    }],
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
}
// chart4
var colors = ['#ff5c75'];
var dataColors = $("#chart4").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options4 = {
    chart: {
        type: 'line',
        height: 60,
        sparkline: {
            enabled: true
        }
    },
    series: [{
        data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
    }],
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    markers: {
        size: 0
    },
    colors: colors,
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
}


new ApexCharts(document.querySelector("#chart1"), options1).render();
new ApexCharts(document.querySelector("#chart2"), options2).render();
new ApexCharts(document.querySelector("#chart3"), options3).render();
new ApexCharts(document.querySelector("#chart4"), options4).render();


// 
// overviews1
// 
function initOverview1(){
    var ts2 = 1484418600000;
    var dates = [];
    var spikes = [5, -5, 3, -3, 8, -8]
    for (var i = 0; i < 120; i++) {
        ts2 = ts2 + 86400000;
        var innerArr = [ts2, dataSeries[1][i].value];
        dates.push(innerArr)
    }
    var colors = ["#fa5c7c"];
    var dataColors = $("#overviews1").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    var options = {
        chart: {
            type: 'area',
            stacked: false,
            height: 371,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            line: {
                curve: 'smooth',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [3]
        },
        series: [{
            name: 'Subscribers',
            data: dates
        }],
        markers: {
            size: 0,
            style: 'full',
        },
        colors: colors,
        grid: {
            row: {
                colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.2
            },
            borderColor: '#f1f3fa'
        },
        fill: {
            gradient: {
                enabled: true,
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0.1,
                stops: [0, 70, 80, 100]
            },
        },
        yaxis: {
            min: 20000000,
            max: 250000000,
            labels: {
                formatter: function (val) {
                    return (val / 1000000).toFixed(0);
                },
            },
        },
        xaxis: {
            type: 'datetime',
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (val) {
                    return (val / 1000000).toFixed(0)
                }
            }
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    toolbar: {
                        show: false
                    }
                },
                legend: {
                    show: false
                },
            }
        }]
    }

    var chart = new ApexCharts(
        document.querySelector("#overviews1"),
        options
    );

    chart.render();
}
initOverview1();

// 
// overviews2
// 
function initOverview2(){
    var colors = ["#5369f8", "#fa5c7c"];
    var dataColors = $("#overviews2").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    var options = {
        chart: {
            height: 371,
            type: 'line',
            toolbar: {
                show: false
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        series: [{
            name: 'New',
            type: 'area',
            data: [20, 15, 30, 20, 40, 25, 50, 35, 50, 35, 70]
        }, {
            name: 'Returning',
            type: 'line',
            data: [1, 3, 2, 5, 3, 5, 3, 6, 5.3, 8, 7.3]
        }],
        fill: {
            type: ['gradient','solid'],
            opacity: [0.35, 1],
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [45, 100]
            },
        },
        labels: ['Jan 01', 'Jan 02', 'Jan 03', 'Jan 04', 'Jan 05', 'Jan 06', 'Jan 07', 'Jan 08', 'Jan 09 ', 'Jan 10', 'Jan 11'],
        legend: {
            show: false
        },
        colors: colors,
        yaxis: [
            {
                title: {
                    // text: 'Series A',
                },
            },
            {
                opposite: true,
                labels: {
                    show: false
                },
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " points";
                    }
                    return y;
    
                }
            }
        },
        grid: {
            borderColor: '#f1f3fa',
            padding: {
                bottom: 5
            }
        },
        responsive: [{
            breakpoint: 600,
            options: {
                yaxis: {
                    show: false
                },
                legend: {
                    show: false
                }
            }
        }]
    }
    
    var chart = new ApexCharts(
        document.querySelector("#overviews2"),
        options
    );
    
    chart.render();
}
initOverview2();
// 
//overviews3
// 
function initOverview3(){
    var lastDate = 0;
    var data = [];
    function getDayWiseTimeSeries(baseval, count, yrange) {
        var i = 0;
        while (i < count) {
            var x = baseval;
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    
            data.push({
                x: x, y: y
            });
            lastDate = baseval;
            baseval += 86400000;
            i++;
        }
    }
    
    getDayWiseTimeSeries(new Date('11 Feb 2021 GMT').getTime(), 10, {
        min: 10,
        max: 90
    });
    
    function getNewSeries(baseval, yrange) {
        var newDate = baseval + 86400000;
        lastDate = newDate;
        data.push({
            x: newDate,
            y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
        });
    }
    
    function resetData() {
        data = data.slice(data.length - 10, data.length);
    }
    
    var colors = ["#56bbd7"];
    var dataColors = $("#overviews3").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    var options = {
        chart: {
            height: 371,
            type: 'line',
            animations: {
                enabled: true,
                easing: 'linear',
                dynamicAnimation: {
                    speed: 2000
                }
            },
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: [3],
        },
        colors: colors,
        series: [{
            name: 'Bounce rate',
            data: data
        }],
        // series: [{
        //     data: data
        // }],
        markers: {
            size: 0
        },
        xaxis: {
            type: 'datetime',
            range: 777600000
        },
        yaxis: {
            max: 100
        },
        legend: {
            show: false
        },
        grid: {
            borderColor: '#f1f3fa',
        }
    };
    
    var chart = new ApexCharts(document.querySelector("#overviews3"), options);
    
    chart.render();
    
    var dataPointsLength = 10;
    
    window.setInterval(function () {
        getNewSeries(lastDate, {
            min: 10,
            max: 90
        });
    
        chart.updateSeries([{
            data: data
        }]);
    }, 2000);  
    
}

initOverview3();

