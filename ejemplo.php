<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario con Gráfico y Selección de Vista</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calendar-container {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .calendar-header {
            margin-bottom: 20px;
        }

        .calendar-header h1 {
            font-size: 1.5em;
            margin: 0;
            color: #4A90E2;
        }

        .view-selector {
            margin-bottom: 20px;
        }

        .view-selector button {
            background-color: #4A90E2;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .view-selector button:hover {
            background-color: #357ABD;
        }

        .chart-container {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 0 auto 20px auto;
        }

        circle {
            fill: none;
            stroke-width: 15;
        }

        .bg-circle {
            stroke: #eee;
        }

        .segment {
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
            transition: stroke-dashoffset 0.5s ease;
        }

        .chart-label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1em;
            color: #333;
        }

        .legend {
            text-align: left;
        }

        .legend div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 3px;
        }

        .legend {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Dos columnas */
            gap: 15px;
            /* Espacio entre elementos */
            margin-top: 20px;
        }

        .legend div {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Espacio entre el color y el texto */
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 3px;
        }

        .btn-add {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #4CAF50;
            /* Color verde */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-add .plus-sign {
            font-size: 20px;
            margin-right: 8px;
            /* Espacio entre el signo y el texto */
            line-height: 1;
        }

        .btn-add:hover {
            background-color: #45a049;
            /* Color verde más oscuro al pasar el cursor */
        }

        .btn-add:active {
            transform: scale(0.98);
            /* Efecto de clic */
        }


        /* Responsivo: Ajusta las columnas para pantallas grandes */
        @media (min-width: 768px) {
            .legend {
                grid-template-columns: repeat(4, 1fr);
                /* Cuatro columnas en pantallas más grandes */
            }
        }
    </style>
</head>

<body>
    <div class="calendar-container">
        <div class="calendar-header">
            <h1>Calendario</h1>
        </div>
        <div class="view-selector">
            <button onclick="setView('day')">Día</button>
            <button onclick="setView('week')">Semana</button>
            <button onclick="setView('month')">Mes</button>
            <button onclick="setView('year')">Año</button>
        </div>
        <div class="chart-container">
            <svg width="200" height="200">
                <circle class="bg-circle" cx="100" cy="100" r="70"></circle>
                <circle class="segment" cx="100" cy="100" r="70" stroke="#FFA726" stroke-dasharray="440" stroke-dashoffset="440"></circle>
                <circle class="segment" cx="100" cy="100" r="70" stroke="#66BB6A" stroke-dasharray="440" stroke-dashoffset="440"></circle>
            </svg>
            <div class="chart-label" id="chartLabel">0%</div>
        </div>
        <div class="legend">
            <div>
                <div class="legend-color col-sm-6" style="background-color: #FFA726;"></div>
                <span>:Alimentación 0%</span>
            </div>
            <div>
                <div class="legend-color col-sm-6" style="background-color: #66BB6A;"></div>
                <span>Arriendo: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(14, 54, 22);"></div>
                <span>Transporte: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(78, 65, 195);"></div>
                <span>Materiales: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(20, 20, 14);"></div>
                <span>Salud: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(138, 23, 90);"></div>
                <span>vivienda: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(78, 65, 195);"></div>
                <span>ocio: 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(78, 65, 195);"></div>
                <span>Otros: 0%</span>
            </div>
        </div>
        <button class="btn-add">
            <span class="plus-sign">+ Agregar</span>
        </button>

    </div>

    <script>
        function setView(view) {
            const data = {
                day: [{
                        name: "Comida",
                        percentage: 0,
                        color: "#FFA726"
                    },
                    {
                        name: "Transporte",
                        percentage: 0,
                        color: "#66BB6A"
                    },
                    {
                        name: "Transporte",
                        percentage: 0,
                        color: "#66BB6A"
                    },
                    {
                        name: "Transporte",
                        percentage: 0,
                        color: "#66BB6A"
                    },
                    {
                        name: "Transporte",
                        percentage: 0,
                        color: "#66BB6A"
                    }
                ],
                week: [{
                        name: "Comida",
                        percentage: 30,
                        color: "#FFA726"
                    },
                    {
                        name: "Transporte",
                        percentage: 70,
                        color: "#66BB6A"
                    }
                ],
                month: [{
                        name: "Comida",
                        percentage: 50,
                        color: "#FFA726"
                    },
                    {
                        name: "Transporte",
                        percentage: 50,
                        color: "#66BB6A"
                    }
                ],
                year: [{
                        name: "Comida",
                        percentage: 20,
                        color: "#FFA726"
                    },
                    {
                        name: "Transporte",
                        percentage: 80,
                        color: "#66BB6A"
                    }
                ]
            };
            setSegments(data[view]);
        }

        function setSegments(data) {
            const circumference = 2 * Math.PI * 70; // Circumference of the circle
            let offset = 0;

            const segments = document.querySelectorAll('.segment');
            const labels = document.querySelectorAll('.legend span');
            data.forEach((item, index) => {
                const segment = segments[index];
                const label = labels[index];
                const dashOffset = circumference - (item.percentage / 100) * circumference;

                segment.style.strokeDasharray = circumference;
                segment.style.strokeDashoffset = offset;
                segment.setAttribute('stroke', item.color);

                label.textContent = `${item.name}: ${item.percentage}%`;
                offset += circumference - dashOffset;
            });

            const total = data.reduce((acc, item) => acc + item.percentage, 0);
            document.getElementById('chartLabel').textContent = `${total}%`;
        }

        // Initialize with the "day" view
        setView('day');
    </script>
</body>

</html>