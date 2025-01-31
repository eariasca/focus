<!doctype html>
<html lang="en">
<?php 
/*inicio ph para asignar porcentajes y mostrarlos de acuerdo a la informacion de la base de datos*/
include('../db.php');
 $consulta4="SELECT categoria FROM finanzas"
?>
<head>
    <title> FOCUS </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/body.css">
    <!-- icono de la pestaña-->
    <link rel=" icon" href="../img/focus.jpeg">
    <!-- fin icono de la pestaña -->
</head>
<div class="overlay"></div>
<!-- Barra de navegación -->
<center>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <a class="navbar-brand navbar-link" href="../index.php">
            <h1>FOCUS</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="..//index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ingresos/registro.php">Ingresos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gastos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../sesion.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</center>
<!-- Fin de la barra de navegación -->
<main>
    <br>
    <br>
    <!-- Inicio del formulario -->
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card col-sm-12 col-md-8 col-lg-6">
                    <div class="calendar-container">
        <div class="calendar-header">
            <h1>Gastos</h1>
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
            </svg>
            <div class="chart-label" id="chartLabel">0%</div>
        </div>
        <div class="legend">
            <div>
                <div class="legend-color" style="background-color:rgb(215, 146, 44);"></div>
                <span>Alimentacion 0%</span>
            </div>
            <div>
                <div class="legend-color" style="background-color:rgb(36, 159, 43);"></div>
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
                name: "Alimentacion",
                percentage: 20,
                color: "#FFA726"
            },
            {
                name: "Arriendo",
                percentage: 10,
                color: "#66BB6A"
            },
            {
                name: "Transporte",
                percentage: 30,
                color: "#2C6B4F"
            },
            {
                name: "Materiales",
                percentage: 0,
                color: "#4E41C3"
            },
            {
                name: "Salud",
                percentage: 0,
                color: "#1C1413"
            },
            {
                name: "Vivienda",
                percentage: 0,
                color: "#8A175A"
            },
            {
                name: "Ocio",
                percentage: 0,
                color: "#4E41C3"
            },
            {
                name: "Otros",
                percentage: 0,
                color: "#4E41C3"
            }
        ],
        week: [{
                name: "Alimentacion",
                percentage: 20,
                color: "#FFA726"
            },
            {
                name: "Arriendo",
                percentage: 10,
                color: "#66BB6A"
            },
            {
                name: "Transporte",
                percentage: 30,
                color: "#2C6B4F"
            },
            {
                name: "Materiales",
                percentage: 10,
                color: "#4E41C3"
            },
            {
                name: "Salud",
                percentage: 0,
                color: "#1C1413"
            },
            {
                name: "Vivienda",
                percentage: 0,
                color: "#8A175A"
            },
            {
                name: "Ocio",
                percentage: 0,
                color: "#4E41C3"
            },
            {
                name: "Otros",
                percentage: 0,
                color: "#4E41C3"
            }
        ],
        month: [{
                name: "Alimentacion",
                percentage: 20,
                color: "#FFA726"
            },
            {
                name: "Arriendo",
                percentage: 10,
                color: "#66BB6A"
            },
            {
                name: "Transporte",
                percentage: 30,
                color: "#2C6B4F"
            },
            {
                name: "Materiales",
                percentage: 20,
                color: "#4E41C3"
            },
            {
                name: "Salud",
                percentage: 0,
                color: "#1C1413"
            },
            {
                name: "Vivienda",
                percentage: 0,
                color: "#8A175A"
            },
            {
                name: "Ocio",
                percentage: 0,
                color: "#4E41C3"
            },
            {
                name: "Otros",
                percentage: 0,
                color: "#4E41C3"
            }
        ],
        year: [{
                name: "Alimentacion",
                percentage: 20,
                color: "#FFA726"
            },
            {
                name: "Arriendo",
                percentage: 10,
                color: "#66BB6A"
            },
            {
                name: "Transporte",
                percentage: 30,
                color: "#2C6B4F"
            },
            {
                name: "Materiales",
                percentage: 40,
                color: "#4E41C3"
            },
            {
                name: "Salud",
                percentage: 0,
                color: "#1C1413"
            },
            {
                name: "Vivienda",
                percentage: 0,
                color: "#8A175A"
            },
            {
                name: "Ocio",
                percentage: 0,
                color: "#4E41C3"
            },
            {
                name: "Otros",
                percentage: 0,
                color: "#4E41C3"
            }
        ]
    };

    setSegments(data[view]);
}

function setSegments(data) {
    const circumference = 2 * Math.PI * 70; // Circunferencia del círculo
    let offset = 0;

    const chartContainer = document.querySelector('.chart-container svg');
    const labels = document.querySelectorAll('.legend span');
    
    // Limpiar los segmentos previos
    chartContainer.querySelectorAll('.segment').forEach(segment => segment.remove());

    let index = 0; // Para controlar los elementos de la leyenda
    let totalPercentage = 0; // Para calcular el total de porcentaje

    // Crear segmentos solo para los datos con porcentaje mayor que 0
    data.forEach(item => {
        const usedPercentage = item.percentage;
        
        if (usedPercentage > 0) {
            const usedDashOffset = (usedPercentage / 100) * circumference;

            // Crear el segmento utilizado (coloreado)
            const segment = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            segment.classList.add('segment');
            segment.setAttribute('cx', 100);
            segment.setAttribute('cy', 100);
            segment.setAttribute('r', 70);
            segment.setAttribute('stroke', item.color); // Color del segmento
            segment.setAttribute('stroke-dasharray', circumference);
            segment.setAttribute('stroke-dashoffset', offset);
            segment.setAttribute('fill', 'transparent');
            chartContainer.appendChild(segment);

            offset += (usedPercentage / 100) * circumference;

            // Actualizar la leyenda solo si el porcentaje es mayor a 0
            const label = labels[index];
            label.textContent = `${item.name}: ${item.percentage}%`;
            index++;

            totalPercentage += usedPercentage;
        }
    });

    // Crear el segmento restante (en blanco) si el total no es 100%
    const remainingPercentage = 100 - totalPercentage;
    if (remainingPercentage > 0) {
        const usedDashOffset = (remainingPercentage / 100) * circumference;

        // Crear el segmento restante en blanco
        const segment = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        segment.classList.add('segment');
        segment.setAttribute('cx', 100);
        segment.setAttribute('cy', 100);
        segment.setAttribute('r', 70);
        segment.setAttribute('stroke', "#FFFFFF"); // Color blanco para el restante
        segment.setAttribute('stroke-dasharray', circumference);
        segment.setAttribute('stroke-dashoffset', offset);
        segment.setAttribute('fill', 'transparent');
        chartContainer.appendChild(segment);

        offset += (remainingPercentage / 100) * circumference;
    }

    // Mostrar el porcentaje total en el centro
    document.getElementById('chartLabel').textContent = `${totalPercentage}%`;
}

// Inicializar con la vista "día"
setView('day');

</script>

                    </div>
                </div>
            </div>
        </div>
        <!-- Fin formulario -->
    </center>
</main>

<footer class="custom-footer">
    <div class="container text-center">
        <p>© 2025 Focus | Todos los derechos reservados</p>
        <p>
            <a href="https://www.facebook.com" target="_blank">Facebook</a> |
            <a href="https://www.twitter.com" target="_blank">Twitter</a> |
            <a href="https://www.instagram.com" target="_blank">Instagram</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>