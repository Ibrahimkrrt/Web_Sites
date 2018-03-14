google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {
  
  // BEGIN BAR CHART
  // actual bar chart data
  var barData = google.visualization.arrayToDataTable([
    ['Sassion', 'Number of Absences'],
    ['S01',  1],
    ['S02',  2],
    ['S03',  6],
    ['S04',  2],
    ['S05',  0],
    ['S06',  3],
    ['S07',  1]
  ]);
  // set bar chart options
  var barOptions = {
    focusTarget: 'category',
    backgroundColor: 'transparent',
    colors: ['cornflowerblue'],
    fontName: 'adam',
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
      maxValue: 6,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 4 //5 
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
  var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
  //barChart.draw(barZeroData, barOptions);
  barChart.draw(barData, barOptions);
}

