// Load google charts
google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['News', 'Total'],
        ['EPL', 60],
        ['La Liga', 50],
        ['Bundesliga', 45],
        ['Nepal', 20]
    ]);

    // Optional; add a title and set the width and height of the chart
    // var options = { 'title': 'My Average Day' , 'width': 550, 'height': 400};
    var options = {'legend': 'bottom'}

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}