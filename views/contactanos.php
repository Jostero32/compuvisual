<?php
$_SESSION['action'] = "contactanos";
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

        .sectionc {
            padding: 80px 20px;
            background: linear-gradient(135deg, rgba(85, 73, 73, 0.05) 0%, rgba(73, 26, 26, 0.1) 100%);
            min-height: 100vh;
        }

        .section-titlec {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-titlec h1 {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section-titlec p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .info-box,
        .suggestion-form {
            background: white;
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 8px 20px rgba(236, 87, 87, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-box:hover,
        .suggestion-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(236, 87, 87, 0.2);
        }

        .info-box h3,
        .suggestion-form h3 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-light);
        }

        .info-box p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .info-box i {
            color: var(--primary-color);
            font-size: 1.3rem;
            width: 30px;
            margin-right: 15px;
        }

        .info-box a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-box a:hover {
            color: var(--primary-dark);
        }

        .form-label {
            color: #555;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.2rem rgba(236, 87, 87, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            section {
                padding: 40px 20px;
            }

            .section-titlec h1 {
                font-size: 2rem;
            }

            .section-titlec p {
                font-size: 1.1rem;
            }

            .info-box,
            .suggestion-form {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <section class="sectionc">
        <div class="container">
            <div class="section-titlec">
                <h1>Contáctanos</h1>
                <p>Estamos aquí para ayudarte. Encuentra nuestras vías de contacto o déjanos tus sugerencias.</p>
            </div>
            <div class="row g-4">
                <!-- Información de contacto -->
                <div class="col-md-6">
                    <div class="info-box">
                        <h3>Información de Contacto</h3>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <span>Correo electrónico: <a
                                    href="mailto:info@ejemplo.com">informacion@proyecto.com</a></span>
                        </p>
                        <p>
                            <i class="fas fa-phone"></i>
                            <span>Teléfono: 0981568282</span>
                        </p>
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Dirección: Universidad Tecnica de Ambato</span>
                        </p>
                        <p>
                            <i class="fas fa-clock"></i>
                            <span>Horario de atención: Lunes a Viernes, 9:00 AM - 5:00 PM</span>
                        </p>
                    </div>
                </div>

                <!-- Formulario de sugerencias -->
                <div class="col-md-6">
                    <div class="suggestion-form">
                        <h3>Déjanos una Sugerencia</h3>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Tu nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="Tu correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <label for="sugerencia" class="form-label">Sugerencia</label>
                                <textarea class="form-control" id="sugerencia" name="sugerencia" rows="5"
                                    placeholder="Escribe tu sugerencia aquí..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Sugerencia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>