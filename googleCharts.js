
google.load("visualization", "1", {packages: ["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() {

    var data2013 = google.visualization.arrayToDataTable([
        ['Znamka', 'Pocet', {role: 'style'}, {role: 'annotation'}],
        ["A", 20, "green", "20"],
        ["B", 11, "green", "11"],
        ["C", 13, "green", "13"],
        ["D", 7, "green", "7"],
        ["E", 5, "green", "5"],
        ["FX", 0, "red", "0"],
        ["FN", 1, "red", "1"]
    ]);

    new google.visualization.ColumnChart(document.getElementById('chart2013')).
            draw(data2013,
                    {
                        width: 600, height: 400,
                        vAxis: {title: "Pocet Ziakov"}, isStacked: true,
                        hAxis: {title: "Znamka"},
                        legend: {position: 'none'},
                        backgroundColor: {fill: 'transparent'},
                        is3D:true
                    }
            );
    new google.visualization.PieChart(document.getElementById('chartPie2013')).
            draw(data2013,
                    {
                        width: 600, 
                        height: 400,
                        backgroundColor: {fill: 'transparent'},
                        is3D:true}
            );


    var data2014 = google.visualization.arrayToDataTable([
        ['Znamka', 'Pocet', {role: 'style'}, {role: 'annotation'}],
        ['A', 20, "green", "20"],
        ['B', 19, "green", "19"],
        ['C', 6, "green", "6"],
        ['D', 3, "green", "3"],
        ['E', 1, "green", "1"],
        ['FX', 0, "red", "0"],
        ["FN", 0, "red", "0"]
    ]);


    new google.visualization.ColumnChart(document.getElementById('chart2014')).
            draw(data2014,
                    {
                        width: 600, height: 400,
                        vAxis: {title: "Pocet Ziakov"}, isStacked: true,
                        hAxis: {title: "Znamka"},
                        legend: {position: 'none'},
                        backgroundColor: {fill: 'transparent'}}
            );
    new google.visualization.PieChart(document.getElementById('chartPie2014')).
            draw(data2014,
                    {
                        width: 600, 
                        height: 400,
                        backgroundColor: {fill: 'transparent'},
                        is3D:true}
            );

    var data2015 = google.visualization.arrayToDataTable([
        ['Znamka', 'Pocet', {role: 'style'}, {role: 'annotation'}],
        ['A', 9, "green", "9"],
        ['B', 19, "green", "19"],
        ['C', 22, "green", "22"],
        ['D', 0, "green", "0"],
        ['E', 0, "green", "0"],
        ['FX', 0, "red", "0"],
        ["FN", 3, "red", "3"]
    ]);

    new google.visualization.ColumnChart(document.getElementById('chart2015')).
            draw(data2015,
                    {
                        width: 600, height: 400,
                        vAxis: {title: "Pocet Ziakov"}, isStacked: true,
                        hAxis: {title: "Znamka"},
                        legend: {position: 'none'},
                        backgroundColor: {fill: 'transparent'},
                        }
            );
    new google.visualization.PieChart(document.getElementById('chartPie2015')).
            draw(data2015,
                    {
                        height:400,
                        width: 600,
                        backgroundColor: {fill: 'transparent'},
                    is3D:true
                }
            );
}










