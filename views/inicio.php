<?php
$_SESSION['action'] = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        section {
            padding: 80px 20px;
            background: linear-gradient(135deg, rgba(95, 72, 72, 0.05) 0%, rgba(83, 29, 29, 0.1) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header p {
            color: #666;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .vision-mission-container {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            flex: 1;
            box-shadow: 0 8px 20px rgba(236, 87, 87, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(236, 87, 87, 0.2);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-color);
            border-radius: 5px 0 0 5px;
        }

        .card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .card h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .card p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin: 0;
        }

        .icon-container {
            margin-bottom: 20px;
        }

        .icon-container i {
            font-size: 2.5rem;
            color: var(--primary-color);
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            section {
                padding: 40px 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .vision-mission-container {
                flex-direction: column;
            }

            .card {
                padding: 30px;
                margin-bottom: 20px;
            }

            .card h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="header">
                <h1>Universidad Técnica de Ambato</h1>
                <p>Formando líderes y profesionales para el futuro del Ecuador</p>
            </div>

            <div class="vision-mission-container">
                <div class="card">
                    <div class="icon-container">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Misión</h2>
                    <p>
                        Formar profesionales líderes competentes, con visión humanista y pensamiento crítico a través de
                        la Docencia, la Investigación y la Vinculación, que apliquen, promuevan y difundan el
                        conocimiento respondiendo a las necesidades del país.
                    </p>
                </div>

                <div class="card">
                    <div class="icon-container">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Visión</h2>
                    <p>
                        La Universidad Técnica de Ambato por sus niveles de excelencia se constituirá como un centro de
                        formación superior con liderazgo y proyección nacional e internacional.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>