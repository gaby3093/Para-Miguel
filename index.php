<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Mi Persona Favorita ❤️</title>
    <style>
        :root {
            --color-primario: #ff4d6d;
            --color-secundario: #ff85a1;
            --color-fondo: #fff0f3;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--color-fondo);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .contenedor {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 500px;
            z-index: 10;
            position: relative;
        }

        h1 {
            color: var(--color-primario);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .foto-placeholder {
            width: 200px;
            height: 200px;
            background-color: #ddd;
            margin: 20px auto;
            border-radius: 50%;
            border: 5px solid var(--color-secundario);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .foto-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .corazon {
            color: var(--color-primario);
            font-size: 50px;
            animation: latido 1.2s infinite;
        }

        @keyframes latido {
            0% { transform: scale(1); }
            15% { transform: scale(1.2); }
            30% { transform: scale(1); }
            45% { transform: scale(1.15); }
            60% { transform: scale(1); }
        }

        /* Corazones de fondo */
        .bg-corazon {
            position: fixed;
            top: -10%;
            color: var(--color-secundario);
            font-size: 20px;
            user-select: none;
            z-index: 1;
            animation: caida linear forwards;
        }

        @keyframes caida {
            to {
                transform: translateY(110vh);
            }
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <div class="corazon">❤️</div>
        <h1>¡Feliz Día, Amor!</h1>
        
        <div class="foto-placeholder">
            <img src="https://img.freepik.com/vector-gratis/linda-pareja-osos-san-valentin_23-2148795608.jpg?semt=ais_hybrid&w=740&q=80" alt="Nuestra Foto">
        </div>

        <p>
            Mi querido amor,

En este 14 de febrero, quiero recordarte lo mucho que significas para mí. Aunque intento demostrarlo cada día, quiero aprovechar este momento para poner en palabras lo que a veces es difícil de decir con la profundidad que siento.

Eres esa persona que llegó a mi vida y la llenó de colores, de sonrisas y de amor. Desde que te conocí, todo ha sido más hermoso, más brillante y tiene más significado. A tu lado, cada día se convierte en una aventura, y cada instante se vuelve único y especial.

Quiero agradecerte por ser tú, por todas las pequeñas cosas que haces y que quizás no siempre menciono. Gracias por cada abrazo, cada palabra de apoyo y cada risa compartida. Eres mi refugio y mi alegría, y no hay lugar en el mundo donde prefiera estar que a tu lado.

¡Te amo! ¡Feliz San Valentín!
        </p>
        
        <div style="font-weight: bold; color: #ff4d6d; margin-top: 20px;">
            Atentamente: Gabriela
        </div>
    </div>

    <script>
        // Generador de corazones flotantes
        function crearCorazon() {
            const corazon = document.createElement('div');
            corazon.classList.add('bg-corazon');
            corazon.innerHTML = '❤️';
            corazon.style.left = Math.random() * 100 + 'vw';
            corazon.style.animationDuration = Math.random() * 3 + 2 + 's';
            corazon.style.opacity = Math.random();
            document.body.appendChild(corazon);

            setTimeout(() => {
                corazon.remove();
            }, 5000);
        }

        setInterval(crearCorazon, 300);
    </script>
</body>
</html>
