<?php
if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'sesion_expirada') {
    echo "
    <script>
        alert('Tu sesión ha expirado por inactividad. Por favor, inicia sesión nuevamente.');
    </script>";
}
?>

<!DOCTYPE html>
        <html lang="es">
        
        <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Style Hub</title>
                <script src="index.js"></script>
            <!-- Material Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
        
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
            
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7669324338492240"
     crossorigin="anonymous"></script>
       
        </head>
        
        <body>
            <header>
            <nav>
                <div>
                    <a href="#"><img src="img/Component 1.png" alt="STYLIFY"></a>
                    <ul>
                        <li><a href="registrocliente.php" class="btn-flat black-text">REGISTRATE</a></li>
<li><a href="#" id="openModalBtn" class="btn-flat black-text modal-trigger">INICIAR SESIÓN</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
            <div class="espaciador"></div>
        
        
            <div class="seccion-fondo">
            <img src="img/index.jpeg" alt="Imagen de fondo" class="imagen-fondo">
            <div class="contenido-superpuesto">
               <div class="texto-bienvenida">
            <h2>ENCUENTRA TU ESTILO CERCA DE TI</h2>
            <p>El mejor lugar para agendar tus citas de estilo.</p>
        </div>
        
                
                 <!-- Barra de búsqueda -->
        <form class="search-form" action="negociosBuscados.php"  method="GET">
                    <div class="input-field">
                        <input id="search" type="search" name="query" placeholder="Buscar servicios" required>
                        <button type="submit" class="search-button"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
        </div>
        
        
            <!-- Contenido Principal -->
            <main>
                <!-- Modal de Inicio de Sesión -->
<div id="loginModal" class="modal" style="display: none;">
    <button class="modal-close">
        <i class="material-icons">close</i>
    </button>
    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="post">
        <div class="input-field">
            <label for="correoelectronico">Correo Electrónico</label>
            <input id="correoelectronico" name="correoelectronico" type="email" required placeholder="Ingresa tu correo">
        </div>
        <div class="input-field toggle-password">
            <label for="contrasenia">Contraseña</label>
            <input id="contrasenia" name="contrasenia" type="password" required placeholder="Ingresa tu contraseña">
            <span class="material-icons" id="toggleIcon">visibility_off</span>
        </div>
        <button class="btn waves-effect waves-light" type="submit">
            Iniciar sesión
        </button>
    </form>
    <p class="center-align">¿Olvidaste Tu Contraseña? <a href="send-email-pwd.html" class="green-text">Recuperala aqui</a></p>
</div>
        
               <!-- Carousel de Cards -->
            
        <section class="container section">
    <h5 class="center-align">Recomendaciones de los usuarios</h5>
    <div class="carousel-controls">
        <!-- Flecha izquierda para ir a la tarjeta anterior -->
        <span id="prevButton" class="carousel-arrow">
            <i class="material-icons">chevron_left</i>
        </span>
        
        <div class="carousel-container">
            <!-- Contenedor de las tarjetas -->
            <div class="carousel-wrapper">
                <div class="carousel-cards">
                    <!-- Tarjetas individuales (solo con imágenes) -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/1.jpg" alt="Recomendación 1">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/2.jpg" alt="Recomendación 2">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/3.jpg" alt="Recomendación 3">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/4.jpg" alt="Recomendación 4">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/5.jpg" alt="Recomendación 5">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/1.jpg" alt="Recomendación 6">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/2.jpg" alt="Recomendación 7">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/3.jpg" alt="Recomendación 8">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/4.jpg" alt="Recomendación 9">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/5.jpg" alt="Recomendación 10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Flecha derecha para ir a la tarjeta siguiente -->
        <span id="nextButton" class="carousel-arrow">
            <i class="material-icons">chevron_right</i>
        </span>
    </div>
</section>

    <script>
    // Obtener el modal y el botón de abrir
    const modal = document.getElementById('loginModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.querySelector('.modal-close');
    
    // Función para abrir el modal
    function openModal() {
        modal.style.display = 'block';  // Cambia a 'block' para mostrar el modal
    }

    // Función para cerrar el modal
    function closeModal() {
        modal.style.display = 'none';  // Cambia a 'none' para ocultar el modal
    }

    // Cuando se hace clic en el botón de abrir modal
    openModalBtn.addEventListener('click', openModal);

    // Cuando se hace clic en el botón de cerrar dentro del modal
    closeModalBtn.addEventListener('click', closeModal);

    // Si se hace clic fuera del modal, también se cierra
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Manejar el envío del formulario de inicio de sesión
    const loginForm = document.querySelector('#loginModal form');
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);

        fetch('procesar_login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                if (data.role === 'Cliente') {
                    window.location.href = 'cliente.php';
                } else if (data.role === 'Administrador') {
                    window.location.href = 'admin.php';
                } else if (data.role === 'Negocio') {
                    window.location.href = 'negocio.php';
                }
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    document.getElementById('toggleIcon').addEventListener('click', function() {
        const passwordInput = document.getElementById('contrasenia');
        const icon = this;

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.textContent = 'visibility';
        } else {
            passwordInput.type = 'password';
            icon.textContent = 'visibility_off';
        }
    });
</script>

<script>

const carouselWrapper = document.querySelector('.carousel-wrapper');
const cards = document.querySelectorAll('.card');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');

let currentIndex = 0;
const totalCards = cards.length; // Total de tarjetas
const cardWidth = cards[0].offsetWidth + 5; // Ancho de la tarjeta + margen (ajusta si necesario)
const visibleCards = Math.floor(carouselWrapper.parentElement.offsetWidth / cardWidth); // Tarjetas visibles al mismo tiempo

// Función para actualizar el estado de los botones
function updateButtons() {
    // Deshabilitar el botón "prev" si estamos al inicio
    prevButton.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
    prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';

    // Deshabilitar el botón "next" si estamos en el final
    const maxIndex = totalCards - visibleCards;
    nextButton.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
    nextButton.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
}

// Mover al siguiente elemento
nextButton.addEventListener('click', () => {
    const maxIndex = totalCards - visibleCards;
    if (currentIndex < maxIndex) {
        currentIndex++;
        const offset = -(currentIndex * cardWidth);
        carouselWrapper.style.transform = `translateX(${offset}px)`;
    }
    updateButtons();
});

// Mover al elemento anterior
prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        const offset = -(currentIndex * cardWidth);
        carouselWrapper.style.transform = `translateX(${offset}px)`;
    }
    updateButtons();
});

// Inicializar el estado de los botones
updateButtons();

        </script>
        
        
            </main>
        
            <!-- Footer -->
            <footer class="page-footer">
                <div class="container center-align">
                    <p class="white-text">© 2024 STYLIFY. Todos los derechos reservados.</p>
                </div>
            </footer>
        
            <!-- Materialize JS -->


        <script src="https://cdn.userway.org/widget.js" data-account="m8Iro8JJU5"></script>
        
        </body>
        
        </html>
