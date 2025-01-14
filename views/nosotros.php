<?php
$_SESSION['action'] = "nosotros";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: rgb(155, 37, 37);
            --primary-light: rgb(177, 69, 69);
            --primary-dark: rgb(85, 24, 24);
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .sectionn {
            padding: 80px 20px;
            background: linear-gradient(135deg, rgba(236, 87, 87, 0.04) 0%, rgba(236, 87, 87, 0.04) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .section-titlen {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-titlen h1 {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 30px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            display: inline-block;
        }

        .section-titlen h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .content {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(236, 87, 87, 0.1);
            position: relative;
            overflow: hidden;
        }

        .content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-color);
            border-radius: 5px 0 0 5px;
        }

        .content p {
            line-height: 1.8;
            font-size: 1.2rem;
            margin-bottom: 25px;
            color: #555;
            position: relative;
            padding-left: 20px;
        }

        .content p:last-child {
            margin-bottom: 0;
        }

        .content strong {
            color: var(--primary-color);
            font-weight: 600;
        }

        .highlight-box {
            background: rgba(167, 163, 163, 0.05);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            margin: 30px 0;
            border-radius: 0 10px 10px 0;
        }

        @media (max-width: 768px) {
            section {
                padding: 40px 20px;
            }

            .section-titlen h1 {
                font-size: 2rem;
            }

            .content {
                padding: 30px 20px;
            }

            .content p {
                font-size: 1.1rem;
            }
        }
    </style>
    <script>
        // Función para mostrar y ocultar la información adicional
        function toggleInfo(id) {
            var info = document.getElementById("moreInfo" + id);
            var button = document.getElementById("toggleButton" + id);
            if (info.style.display === "none") {
                info.style.display = "block";
                button.innerText = "Mostrar menos información";
            } else {
                info.style.display = "none";
                button.innerText = "Mostrar más información";
            }
        }
    </script>
</head>

<body>
    <section class="sectionn">
        <div class="container">
            <div class="section-titlen
            ">
                <h1>¿Quiénes Somos?</h1>
            </div>
            <div class="content">
                <p>
                    Somos un equipo de estudiantes del quinto semestre de la carrera de Ingeniería de Software,
                    apasionados por la tecnología y el desarrollo de soluciones innovadoras. Nos unimos para realizar
                    este proyecto como parte de nuestra formación académica, con el objetivo de aplicar los
                    conocimientos adquiridos y enfrentarnos a retos reales del mundo de la programación.
                </p>
                <p>
                    En este proyecto, utilizamos tecnologías como PHP, el generador de reportes FPDF, y la poderosa
                    herramienta JasperReports, lo que nos permitió crear una solución robusta, eficiente y fácil de
                    usar. Cada uno de nosotros aportó su talento, creatividad y dedicación para entregar un producto de
                    calidad que refleje nuestro compromiso con la excelencia y nuestra pasión por el desarrollo de
                    software.
                </p>
                <p>
                    Nuestro objetivo principal fue diseñar un sistema que no solo cumpla con los requerimientos
                    técnicos, sino que también aporte valor a quienes lo utilicen. Estamos orgullosos del resultado y
                    motivados a seguir creciendo como profesionales en el fascinante mundo de la ingeniería de software.
                </p>
                <p>
                    ¡Gracias por confiar en nuestro trabajo! 🚀 </p>

                <div class="section-titlen">
                    <h2>Perfil del Grupo</h2>
                </div>
                <div class="highlight-box">
                    <section class="profile">
                        <div class="info">
                            <h2>Alejandro Andrade</h2>
                            <button id="toggleButton1" onclick="toggleInfo(1)">Mostrar más información</button>
                            <div id="moreInfo1" style="display: none;">
                                <p><strong>Pasatiempos:</strong> Jugar Futbol - Programar</p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> JavaScript</p>
                                <p><strong>Edad:</strong> 21 años</p>
                                <p><strong>Originario de:</strong> Ambato</p>
                                <p><strong>Estudios:</strong> Colegio Juan León Mera La Salle</p>
                                <p><strong>GIT HUB:</strong> <a href="https://github.com/AND73321"
                                        target="_blank">Perfil de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="highlight-box">
                    <section class="profile">
                        <div class="info">
                            <h2>Kevin Carrasco</h2>
                            <button id="toggleButton5" onclick="toggleInfo(5)">Mostrar más información</button>
                            <div id="moreInfo5" style="display: none;">
                                <p><strong>Pasatiempos:</strong>
                                <ul>
                                    <li>Escuchar musica</li>
                                    <li>Jugar videojuegos</li>
                                    <li>Programar</li>
                                    <li>Dormir</li>
                                </ul>
                                </p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> Java</p>
                                <p><strong>Edad:</strong> 22</p>
                                <p><strong>Originario de:</strong> Ambato</p>
                                <p><strong>Estudios:</strong> Unidad Santo Domingo de Guzman</p>
                                <p><strong>GitHub:</strong> <a href="https://github.com/Jostero32"
                                        target="_blank">Perfil de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="highlight-box">
                    <section class="profile">
                        <div class="info">
                            <h2>Marco Serrano </h2>
                            <button id="toggleButton2" onclick="toggleInfo(2)">Mostrar más información</button>
                            <div id="moreInfo2" style="display: none;">
                                <p><strong>Pasatiempos:</strong> Jugar videojuegos, Progamar en modo hardcore</p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> Python </p>
                                <p><strong>Edad:</strong> 22 años </p>
                                <p><strong>Originario de:</strong> Ambato, Ecuador </p>
                                <p><strong>Estudios:</strong> Universidad Técnica de Ambato </p>
                                <p><strong>GIT HUB:</strong> <a href="https://github.com/Reclax" target="_blank">Perfil
                                        de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="highlight-box">
                    <section class="profile">
                        <div class="info">
                            <h2>Jonathan Lozada</h2>
                            <button id="toggleButton3" onclick="toggleInfo(3)">Mostrar más información</button>
                            <div id="moreInfo3" style="display: none;">
                                <p><strong>Pasatiempos:</strong>
                                <ul>
                                    <li>Hacer ejercicio</li>
                                    <li>Jugar videojuegos</li>
                                    <li>Ver anime</li>
                                    <li>Tratar de aprender react (spoiler: sin éxito)</li>
                                </ul>
                                </p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> Java</p>
                                <p><strong>Edad:</strong> tengo 22 años</p>
                                <p><strong>Originario de:</strong> Ambato - Ecuador</p>
                                <p><strong>Estudios:</strong> Unidad Educativa Juan Montalvo</p>
                                <p><strong>GIT HUB:</strong> <a href=">https://github.com/3lJonas "
                                        target="_blank">Perfil de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>
                
                <div class="highlight-box">
                    <section class="profile">
                        <div class="info">
                            <h2>Mateo Rubio</h2>
                            <button id="toggleButton4" onclick="toggleInfo(4)">Mostrar más información</button>
                            <div id="moreInfo4" style="display: none;">
                                <p><strong>Pasatiempos:</strong> Escuchar música, jugar videojuegos, ver películas</p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> Java</p>
                                <p><strong>Edad:</strong> 21</p>
                                <p><strong>Originario de:</strong> Patate</p>
                                <p><strong>Estudios:</strong> Unidad Educativa Benjamin Araujo</p>
                                <p><strong>GitHub:</strong> <a href="https://github.com/materubag"
                                        target="_blank">Perfil de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="highlight-box">
                <section class="profile">
                        <div class="info">
                            <h2>Christian Sanchez</h2>
                            <button id="toggleButton6" onclick="toggleInfo(6)">Mostrar más información</button>
                            <div id="moreInfo6" style="display: none;">
                                <p><strong>Pasatiempos:</strong>Jugar fútbol, Programar</p>
                                <p><strong>Lenguaje de Programación Favorito:</strong> Java</p>
                                <p><strong>Edad:</strong> 23</p>
                                <p><strong>Originario de:</strong> Ambato</p>
                                <p><strong>Estudios:</strong> Universidad Técnica de Ambato </p>
                                <p><strong>GitHub:</strong> <a href="https://github.com/0AalL"
                                        target="_blank">Perfil de GitHub</a></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </section>
</body>

</html>