<!DOCTYPE html>
<html>
<head>
    <title>Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .input-container {
            text-align: center;
            margin-bottom: 10px;
        }

        .input-container input {
            width: 200px;
        }

        .input-container button {
            margin-top: 10px;
        }
    </style>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(initializeChart);

        var data;
        var options;
        var chart;
        var currentMonthIndex = 6; // Índice do último mês incluído inicialmente

        function initializeChart() {
            data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', 'Lucro');
            data.addColumn('number', 'Gastos');

            options = {
                title: 'Lucros e Gastos Econômicos Mensais',
                focusTarget: 'category',
                hAxis: {
                    title: 'Mês',
                    textStyle: {
                        fontSize: 14,
                        color: '#053061',
                        bold: true,
                        italic: false
                    },
                    titleTextStyle: {
                        fontSize: 18,
                        color: '#053061',
                        bold: true,
                        italic: false
                    }
                },
                vAxis: {
                    title: 'Valor (em reais)',
                    textStyle: {
                        fontSize: 18,
                        color: '#67001f',
                        bold: false,
                        italic: false
                    },
                    titleTextStyle: {
                        fontSize: 18,
                        color: '#67001f',
                        bold: true,
                        italic: false
                    }
                }
            };

            chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

            drawChart(); // Desenha o gráfico inicialmente
        }

        function drawChart() {
            chart.draw(data, options);
        }

        function atualizarGrafico() {
            var ganhos = parseFloat(document.getElementById('inputGanhos').value);
            var gastos = parseFloat(document.getElementById('inputGastos').value);

            data.setValue(currentMonthIndex, 1, ganhos);
            data.setValue(currentMonthIndex, 2, gastos);

            drawChart();
        }

        function adicionarMes() {
            var ganhos = parseFloat(document.getElementById('inputGanhos').value);
            var gastos = parseFloat(document.getElementById('inputGastos').value);

            data.addRow([getNewMonth(), ganhos, gastos]);

            currentMonthIndex++;
            drawChart();
        }

        function getNewMonth() {
            var months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            return months[currentMonthIndex % months.length];
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 100%; height: 600px;"></div>

    <div class="input-container">
        <input type="number" id="inputGanhos" placeholder="Digite os ganhos">
    </div>
    <div class="input-container">
        <input type="number" id="inputGastos" placeholder="Digite os gastos">
    </div>
    <div class="input-container">
        <button onclick="atualizarGrafico()">Atualizar Gráfico</button>
        <button onclick="adicionarMes()">Adicionar Mês</button>
    </div>
    <script>
        google.charts.setOnLoadCallback(initializeChart);
    </script>
</body>
</html>