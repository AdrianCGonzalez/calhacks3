function makeChart(id,mySeries,myLow,lxa,lya){
if(myLow >100)
{
  myLow = myLow-100;
}

new Chartist.Line(id, {
  labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
  series: mySeries
}, {
  low:myLow,
  chartPadding: {
    top: 20,
    right: 0,
    bottom: 30,
    left: 10
  },
  axisY: {
    onlyInteger: true
  },
  plugins: [
    Chartist.plugins.ctAxisTitle({
      axisX: {
        axisTitle: lxa,
        axisClass: 'ct-axis-title',
        offset: {
          x: 0,
          y: 50
        },
        textAnchor: 'middle'
      },
      axisY: {
        axisTitle: lya,
        axisClass: 'ct-axis-title',
        offset: {
          x: 0,
          y: 0
        },
        textAnchor: 'middle',
        flipTitle: false
      }
    })
  ]
});

}
