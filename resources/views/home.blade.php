@extends('layouts.app')

@section('title', 'AG Empresas | Intermediación, Constructora y Servicios en el sur de Chile')

@section('content')

    <!-- Sección Hero Principal -->
    <section class="hero-section" id="inicio" style="background-image: url('{{ asset('img/oficina_agempresas.webp') }}');">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">INTERMEDIACIÓN<br>CONSTRUCCIÓN<br>Y SERVICIOS</h1>
        </div>
    </section>

    <!-- Sección Quiénes Somos / Trayectoria -->
    <section class="intro-section" id="nosotros">
        <div class="container">
            <h3 class="intro-text">
                Trayectoria, prestigio y compromiso con el desarrollo de la zona sur de Chile.
            </h3>
            <div class="text-center">
                <a href="{{ route('quienes-somos') }}" class="btn-primary">Conoce nuestra historia</a>
            </div>
        </div>
    </section>

    <!-- Sección de Áreas de Negocios (Tarjetas Parallax de Pantalla Completa) -->
    <section class="areas-section" id="areas">
        <div class="areas-grid">
            <!-- Tarjeta 1: Sur Terrenos (Intermediación) -->
            <div class="area-card">
                <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="card-overlay"></div>
                <a href="https://www.surterrenos.cl/" target="_blank" class="card-link">
                    <div class="card-content">
                        <img src="https://agempresas.cl/img/logos/svgst.svg" alt="Sur Terrenos" class="card-logo">
                        <span class="card-hover-text">Ir a Sur Terrenos <i class="fa fa-plus"></i></span>
                    </div>
                </a>
            </div>
            
            <!-- Tarjeta 2: AG Constructora -->
            <div class="area-card">
                <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="card-overlay"></div>
                <a href="https://agconstructora.cl/" target="_blank" class="card-link">
                    <div class="card-content">
                        <img src="https://agempresas.cl/img/logos/FINAL%20LOGOTIPO%20AGCONSTRUCTORA.svg" alt="AG Constructora" class="card-logo">
                        <span class="card-hover-text">Ir a AG Constructora <i class="fa fa-plus"></i></span>
                    </div>
                </a>
            </div>
            
            <!-- Tarjeta 3: AG Servicios -->
            <div class="area-card">
                <div class="card-bg" style="background-image: url('{{ asset('img/maquina_limpiez_terreno.png') }}');"></div>
                <div class="card-overlay"></div>
                <a href="{{ route('servicios') }}" class="card-link">
                    <div class="card-content">
                        <img src="https://agempresas.cl/img/logos/FINAL%20LOGOTIPO%20AGSERVICIOS.svg" alt="AG Servicios" class="card-logo">
                        <span class="card-hover-text">Ir a AG Servicios <i class="fa fa-plus"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Estadísticas ("Nuestra Empresa en Números") -->
    <section class="stats-section">
        <div class="container stats-container">
            <!-- Título de sección -->
            <div class="stats-title-col">
                <h2 class="stats-title">NUESTRA<br>EMPRESA<br>EN NÚMEROS</h2>
            </div>
            
            <!-- Columnas numéricas -->
            <div class="stats-col">
                <div class="stat-item">
                    <h1 class="stat-number" data-target="15">0</h1>
                    <div class="stat-divider"></div>
                    <p class="stat-label">AÑOS DE TRAYECTORIA</p>
                </div>
                <div class="stat-item">
                    <h1 class="stat-number" data-target="6">0</h1>
                    <div class="stat-divider"></div>
                    <p class="stat-label">PROYECTOS EN EJECUCIÓN</p>
                </div>
            </div>
            
            <div class="stats-col">
                <div class="stat-item">
                    <h1 class="stat-number" data-target="210">0</h1>
                    <div class="stat-divider"></div>
                    <p class="stat-label">PROYECTOS TERMINADOS</p>
                </div>
                <div class="stat-item">
                    <h1 class="stat-number" data-target="120">0</h1>
                    <div class="stat-divider"></div>
                    <p class="stat-label">COLABORADORES</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Valores Corporativos -->
    <section class="values-section">
        <div class="container text-center">
            <div class="values-subtitle">
                <span class="dash"></span> NUESTROS VALORES
            </div>
            <div class="values-list">
                <h1>Calidad y seguridad</h1>
                <h1>Servicio Integral de excelencia</h1>
                <h1>Compromiso con la comunidad</h1>
            </div>
        </div>
    </section>

    <!-- Sección "Nuestro Trabajo" (Destacados) -->
    <section class="work-section" id="proyectos">
        <div class="work-grid">
            <!-- Columna de texto -->
            <div class="work-col-text">
                <div class="work-divider"></div>
                <h4 class="work-section-tag">Nuestro trabajo</h4>
                <p class="work-desc">
                    En AG Empresas, durante más de una década, hemos impulsado el desarrollo de proyectos urbanísticos y de construcción en el sur de Chile. Nuestro compromiso se enfoca en dotar de conectividad, infraestructura vial y servicios de primer nivel a cada uno de nuestros loteos y obras civiles, respetando el entorno natural y mejorando la calidad de vida de las comunidades locales.
                </p>
            </div>
            
            <!-- Columna de imagen vertical de propiedad -->
            <div class="work-col-image">
                <img src="{{ asset('img/casa.png') }}" alt="Proyecto AG Empresas" class="vertical-img">
            </div>
            
            <!-- Columna de explorar -->
            <div class="work-col-explore">
                <p class="explore-tag">EXPLORAR</p>
                <img src="https://agempresas.cl/img/logos/FINAL%20LOGOTIPO%20AGEMPRESAS%20color.svg" alt="AG Empresas" class="explore-logo">
                <p class="explore-title">PROYECTOS DESARROLLADOS POR AG CONSTRUCTORA</p>
                <a href="https://agconstructora.cl/" target="_blank" class="btn-primary">Conoce nuestros proyectos</a>
                
                <div class="project-details">
                    <p><strong>PROYECTO:</strong> Urbanización de Loteos</p>
                    <p><strong>LOCACIÓN:</strong> Puerto Varas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Video Institucional -->
    <section class="video-section">
        <div class="container text-center">
            <div class="video-subtitle">
                NUESTRAS ÁREAS EN ACCIÓN
            </div>
            <div class="video-wrapper">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/Ga8RtgHnDeA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Carrusel de Clientes / Marcas Asociadas -->
    <section class="clients-section">
        <div class="container">
            <div class="clients-subtitle">
                <span class="dash"></span> nuestros clientes
            </div>
            <!-- Contenedor del Carrusel -->
            <div class="carousel-container">
                <div class="carousel-track" id="carousel-track">
                    <!-- Clientes recurrentes -->
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/Ministerio_salud.png" alt="Minsal"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/direccion_vialidad.png" alt="Vialidad"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/carabineros.png" alt="Carabineros"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/enaco.png" alt="Enaco"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/obras_portuarias.png" alt="Obras Portuarias"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/direccion_general_aguas.png" alt="DGA"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/Puerto_varas.png" alt="Muni Puerto Varas"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/essal.png" alt="Essal"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/los_lagos.png" alt="Región de Los Lagos"></div>
                    <div class="carousel-slide"><img src="https://empresasln.cl/wp-content/uploads/2023/06/Socovesa.png" alt="Socovesa"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="contact-section" id="contacto">
        <div class="container">
            <h2 class="contact-section-title">Contáctese con Nosotros</h2>
            
            <div class="contact-grid">
                <!-- Información de contacto y reseñas -->
                <div class="contact-info-col">
                    <div class="info-box">
                        <h3>Visítenos</h3>
                        <p>Sector Línea Vieja (caletera ruta 5), Parcela 4, Loteo San Alfonso, Puerto Varas, Región de Los Lagos, Chile.</p>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-box flex-1">
                            <h3>Escríbenos</h3>
                            <p><a href="mailto:gerencia@aglospinos.cl">gerencia@aglospinos.cl</a></p>
                        </div>
                        <div class="info-box flex-1">
                            <h3>Llámenos</h3>
                            <p><a href="tel:+56965887947">+569 6588 7947</a></p>
                        </div>
                    </div>
                    
                    <!-- Reseñas de Google -->
                    <div class="reviews-box">
                        <h3>Reseñas de Google</h3>
                        <div class="stars">
                            <span class="rating-num">4.8</span> 
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-alt"></i>
                            <span class="total-comments">/ 5 (42 comentarios)</span>
                        </div>
                        <p>Fuente: <a href="https://www.google.com/search?q=AGEMPRESAS+Opiniones" target="_blank">Google Reviews</a></p>
                    </div>
                </div>
                
                <!-- Formulario de contacto -->
                <div class="contact-form-col">
                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form" id="contact-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Teléfono (ej: 912345678)" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" rows="5" placeholder="Consulta" required></textarea>
                        </div>
                        
                        <div class="form-messages" id="form-messages">
                            <div class="message loading"><i class="fa fa-spinner fa-spin"></i> Cargando...</div>
                            <div class="message error" id="form-error-msg">Ocurrió un error. Por favor inténtelo de nuevo.</div>
                            <div class="message success">¡Su consulta se ha enviado con éxito!, un ejecutivo se contactará con usted a la brevedad.</div>
                        </div>
                        
                        <div class="text-right">
                            <button type="submit" class="btn-submit">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa de ubicación (Full width) -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2742.6186426925156!2d-73.00188355337293!3d-41.32618628197731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961821790995f1f7%3A0xc0a0c615b77ee978!2sAGEMPRESAS!5e1!3m2!1ses!2scl!4v1712597602428!5m2!1ses!2scl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
