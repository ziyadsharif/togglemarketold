var myChart;
var ctx;
var chartObject;
var chartType;

function initializeChart() {
    if(myChart){
        myChart.destroy();
    }
    chartType = 'bar';
    chartObject = {
        type: chartType,
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    };
    ctx = document.getElementById('chart').getContext('2d');
    myChart = new Chart(ctx, chartObject);
}

function changeChartType(type) {
    if(myChart){
        myChart.destroy();
    }
    chartType = type;
    var temp = {
        ...chartObject,
        type
    };

    myChart = new Chart(ctx, temp);
}

$(document).ready(function () {
    initializeChart();
});