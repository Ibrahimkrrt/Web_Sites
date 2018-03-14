google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {
  // BEGIN BAR CHART 02
  // actual bar chart data
  var barData = google.visualization.arrayToDataTable([
    ['Sassion', 'Number of Absences'],
    ['Sun',  0],
    ['Mon',  0],
    ['Tue',  0],
    ['Wed',  1],
    ['Thu',  0],
    ['Fri',  0],
    ['Sat',  1]
  ]);
  // set bar chart options
  var barOptions = {
    focusTarget: 'category',
    backgroundColor: 'transparent',
    colors: ['tomato'],
    fontName: 'Adam',
    chartArea: {
      left: 50,
      top: 10,
      width: '100%',
      height: '70%'
    },
    bar: {
      groupWidth: '80%'
    },
    hAxis: {
      textStyle: {
        fontSize: 11
      }
    },
    vAxis: {
      minValue: 0,
      maxValue: 4,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 5
      },
      textStyle: {
        fontSize: 11
      }
    },
    legend: {
      position: 'bottom',
      textStyle: {
        fontSize: 12
      }
    },
    animation: {
      duration: 1200,
      easing: 'out',
      startup: true
    }
  };
  // draw bar chart twice so it animates
  var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart-02'));
  //barChart.draw(barZeroData, barOptions);
  barChart.draw(barData, barOptions);
}