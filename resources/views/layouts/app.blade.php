<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AG Empresas | Intermediación, Constructora y Servicios en el sur de Chile')</title>
    
    <!-- Meta tags SEO -->
    <meta name="description" content="Agrícola y Ganadera Los Pinos Ltda. (AG Empresas) en Puerto Varas. Intermediación de propiedades, urbanizaciones, obras civiles y arriendo de maquinaria pesada.">
    <meta name="keywords" content="agempresas, constructora puertovaras, loteos puerto varas, sur terrenos, ag servicios, movimiento de tierras, arriendo de maquinaria">
    
    <!-- CSRF Token para peticiones AJAX seguras -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Fonts - Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Estilos del Proyecto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Cabecera / Header de navegación (Sticky Header) -->
    <header class="main-header" id="main-header">
        <div class="header-container">
            <div class="logo">
                <a href="{{ Request::is('/') ? '#inicio' : route('home').'#inicio' }}">
                    <img src="https://agempresas.cl/img/logos/FINAL%20LOGOTIPO%20AGEMPRESAS%20color.svg" alt="AG Empresas Logo" id="header-logo">
                </a>
            </div>
            
            <!-- Botón del menú móvil -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Abrir menú">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            
            <!-- Navegación principal -->
            <nav class="nav-menu" id="nav-menu">
                <ul>
                    <li><a href="{{ route('quienes-somos') }}" class="{{ Request::is('quienes-somos') ? 'active' : '' }}">QUIÉNES SOMOS</a></li>
                    <li><a href="https://agconstructora.cl/" target="_blank">AG CONSTRUCTORA</a></li>
                    <li><a href="{{ route('servicios') }}" class="{{ Request::is('servicios') ? 'active' : '' }}">AG SERVICIOS</a></li>
                    <li><a href="https://www.surterrenos.cl/" target="_blank">SUR TERRENOS</a></li>
                    <li><a href="{{ Request::is('/') ? '#contacto' : route('home').'#contacto' }}">CONTACTO</a></li>
                    <!-- Enlaces a portales para móvil -->
                    <li class="mobile-portal-link"><a href="http://tickets.agempresas.cl/" target="_blank"><i class="fa fa-ticket-alt"></i> Portal Tickets</a></li>
                    <li class="mobile-portal-link"><a href="http://rrhh.agempresas.cl/" target="_blank"><i class="fa fa-user-tie"></i> Portal RRHH</a></li>
                    <li class="mobile-portal-link"><a href="http://surterrenos.agempresas.cl/" target="_blank"><i class="fa fa-globe"></i> Portal Sur Terrenos</a></li>
                    <li class="mobile-portal-link"><a href="http://creditodirecto.agempresas.cl/" target="_blank"><i class="fa fa-hand-holding-usd"></i> Portal Crédito Directo</a></li>
                </ul>
            </nav>
            
            <!-- Botón de acceso funcionarios -->
            <div class="header-action">
                <button class="btn-portal-trigger" id="portal-trigger">
                    ACCESO PORTALES <i class="fa fa-chevron-down"></i>
                </button>
                <div class="portal-dropdown" id="portal-dropdown">
                    <a href="http://tickets.agempresas.cl/" target="_blank"><img src="https://agempresas.cl/img/Iconos/boleto.png" alt=""> Tickets</a>
                    <a href="http://rrhh.agempresas.cl/" target="_blank"><img src="https://agempresas.cl/img/Iconos/recursos-humanos.png" alt=""> RRHH</a>
                    <a href="http://surterrenos.agempresas.cl/" target="_blank"><img src="https://agempresas.cl/img/Iconos/user.png" alt=""> ST</a>
                    <a href="http://creditodirecto.agempresas.cl/" target="_blank"><img src="https://agempresas.cl/img/Iconos/user.png" alt=""> CDST</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido Dinámico -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página / Footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                <!-- Columna de Información -->
                <div class="footer-info-col">
                    <img src="https://agempresas.cl/img/logos/FINAL%20LOGOTIPO%20AGEMPRESAS%20color.svg" alt="AG Empresas Logo" class="footer-logo">
                    <p class="footer-legal">Agrícola y Ganadera Los Pinos Ltda.</p>
                    <p class="footer-address">Sector Línea Vieja (caletera ruta 5), Parcela 4, Loteo San Alfonso, Puerto Varas, Región de Los Lagos, Chile.</p>
                    <p class="footer-contact">
                        <strong>Teléfono:</strong> +569 6588 7947<br>
                        <strong>Email:</strong> gerencia@aglospinos.cl
                    </p>
                    
                    <!-- Enlaces Redes Sociales -->
                    <div class="social-links">
                        <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <!-- Columna Enlaces de Funcionario -->
                <div class="footer-links-col">
                    <h4 class="footer-section-title accent-green">Portales de Funcionarios</h4>
                    <ul class="footer-links">
                        <li><a href="http://tickets.agempresas.cl/" target="_blank">Acceso Ticket Funcionarios</a></li>
                        <li><a href="http://rrhh.agempresas.cl/" target="_blank">Portal de Recursos Humanos</a></li>
                        <li><a href="http://surterrenos.agempresas.cl/" target="_blank">Sistema de Ventas ST</a></li>
                        <li><a href="http://creditodirecto.agempresas.cl/" target="_blank">Crédito Directo ST</a></li>
                    </ul>
                </div>
                
                <!-- Columna Certificaciones (CChC y Contratistas) -->
                <div class="footer-certs-col">
                    <h4 class="footer-section-title accent-yellow">Certificaciones</h4>
                    <div class="mini-certs-container">
                        <img src="https://empresasln.cl/wp-content/uploads/2022/08/cchc.jpg" alt="CChC" class="cert-img">
                        <img src="https://empresasln.cl/wp-content/uploads/2022/08/contratista.jpg" alt="Registro Nacional de Contratistas" class="cert-img">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="footer-bottom text-center">
            <div class="container">
                <p>&copy; Copyright <strong><span>AG Empresas {{ date('Y') }}</span></strong>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botón Volver Arriba / Back to Top -->
    <a href="#" class="back-to-top" id="back-to-top" aria-label="Volver arriba">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Script de Comportamiento -->
    <script src="{{ asset('js/lenis.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
