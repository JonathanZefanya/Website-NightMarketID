/*
Template Name: Shreyu - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: apps file manager
*/

var colors = ["#43d39e"];
var dataColors = $("#storage").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
var options = {
  chart: {
    height: 225,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: '70% used',
      }
    },
  },
  colors: colors,
  series: [58],
  labels: ['256 GB'],
}

var chart = new ApexCharts(
  document.querySelector("#storage"),
  options
);

chart.render();