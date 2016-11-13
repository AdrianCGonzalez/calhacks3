function makepi(id,myseries,mylabels){
var data = {
  labels: mylabels,
  series: myseries
};

var options = {
  labelInterpolationFnc: function(value) {
    return value[0]
  }
};

var responsiveOptions = [
  ['screen and (min-width: 640px)', {
    chartPadding: 0,
    labelOffset: 0,
    labelDirection: 'explode',
    labelInterpolationFnc: function(value) {
      return value;
    }
  }],
  ['screen and (min-width: 1024px)', {
    labelOffset: 0,
    chartPadding: 0
  }]
];

new Chartist.Pie(id, data, options, responsiveOptions);
}
