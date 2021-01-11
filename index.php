<html>
    <head>
        <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="./dom-to-image.min.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Mushrooms', 3],
                    ['Onions', 1],
                    ['Olives', 1],
                    ['Zucchini', 1],
                    ['Pepperoni', 2]
                ]);
                var options = {'title':'How Much Pizza I Ate Last Night', 'width':400, 'height':300};
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);



                /* render image after load chart */
                var node = document.getElementById('chart_div');
                domtoimage.toPng(node)
                .then(function (dataUrl) {
                    // let img = new Image();
                    // img.src = dataUrl;
                    document.getElementById('img_1').value = dataUrl;
                })
                .catch(function (error) {
                    console.error('oops, something went wrong!', error);
                });
            }
        </script>
    </head>
    <body>
        <table style="width:50%" border="1">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
            </tr>
        </table>
        <!--Div that will hold the pie chart-->
        <div id="chart_div"></div>

        <form action="/dom-to-image-mpdf/pdf.php" method="post" target="_blank">
            <input type="hidden" name="img_1" id="img_1">
            <button type="submit">Gerar PDF</button>
        </form>
    </body>
</html>