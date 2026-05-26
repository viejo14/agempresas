@extends('layouts.app')

@section('title', 'AG Servicios | Obras Agrícolas, Recuperación de Suelos y Arriendo de Maquinaria')

@section('content')

    <!-- Sección Hero de Servicios (Fondo con tractor en faena) -->
    <section class="hero-section subpage-hero" style="background-image: url('https://agservicios.cl/img/servicios_inicio/img_portadas/05012026_1767633414_3_FP.png'); height: 60vh;">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title" style="font-size: 3rem;">AG SERVICIOS</h1>
            <p style="color: white; font-size: 1.2rem; font-weight: 600; margin-top: 15px; letter-spacing: 1px;">Faenas Agroresidenciales y Maquinarias</p>
        </div>
    </section>

    <!-- Sección Sobre Nosotros / Sobre la Empresa -->
    <section class="intro-section" style="padding: 80px 0; background-color: var(--white);">
        <div class="container" style="max-width: 1000px;">
            <div class="text-center" style="margin-bottom: 40px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h4 style="font-size: 0.9rem; font-weight: 800; letter-spacing: 2px; color: var(--text-muted); text-transform: uppercase; margin-top: 10px;">Sobre la Empresa</h4>
            </div>
            <h3 class="intro-text" style="font-size: 1.5rem; font-weight: 400; text-align: justify; line-height: 1.8;">
                <strong>AGServicios</strong> inicia obras en el año 2016 con el firme objetivo de realizar trabajos agrícolas especializados, tales como la mejora y recuperación de predios. Entregamos un servicio de alta calidad bajo una modalidad de trabajo íntegro, transparente y sumamente profesional en la Región de Los Lagos.
            </h3>
        </div>
    </section>

    <!-- Sección NUESTROS SERVICIOS (Grid de 4 Columnas con sus respectivas imágenes reales) -->
    <section class="services-showcase">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h2 style="font-size: 2.2rem; font-weight: 900; color: var(--primary-color); margin-top: 15px; letter-spacing: 1px;">NUESTROS SERVICIOS</h2>
            </div>
            
            <div class="services-showcase-grid">
                <!-- Servicio 1: Cierres Perimetrales -->
                <div class="service-card">
                    <img src="https://agservicios.cl/img/servicios_inicio/img_portadas/05012026_1767634148_1_FP.png" alt="Cierres Perimetrales" class="service-card-img">
                    <div class="service-card-body">
                        <h3 class="service-card-title">Cierres Perimetrales</h3>
                        <p class="service-card-desc">Cercos de Malla y Polín IPV, Cercos Ganaderos, Cercos de Tranqueras Ensamblados (Pino IPV) y Portones de acceso residenciales/industriales.</p>
                    </div>
                </div>

                <!-- Servicio 2: Arriendo de Maquinaria -->
                <div class="service-card">
                    <img src="{{ asset('img/maquina_limpiez_terreno.png') }}" alt="Arriendo de Maquinaria" class="service-card-img">
                    <div class="service-card-body">
                        <h3 class="service-card-title">Arriendo de Maquinaria</h3>
                        <p class="service-card-desc">Arriendo de maquinaria pesada: Retroexcavadoras, Excavadoras, Tractores Agrícolas y Carro Tolva Agrícola para todo tipo de proyectos prediales.</p>
                    </div>
                </div>

                <!-- Servicio 3: Limpieza y Recuperación -->
                <div class="service-card">
                    <img src="https://agservicios.cl/img/servicios_inicio/img_portadas/05012026_1767633414_3_FP.png" alt="Limpieza y Recuperación" class="service-card-img">
                    <div class="service-card-body">
                        <h3 class="service-card-title">Limpieza y Recuperación</h3>
                        <p class="service-card-desc">Drenajes, siembras de pasto, limpieza profunda, mejora y recuperación de predios agrícolas o agro-residenciales, y preparación de suelo para siembras.</p>
                    </div>
                </div>

                <!-- Servicio 4: Chipeado Profesional -->
                <div class="service-card">
                    <img src="https://agservicios.cl/img/servicios_inicio/img_portadas/29042026_1777499253_7_FP.png" alt="Chipeado de Residuos" class="service-card-img">
                    <div class="service-card-body">
                        <h3 class="service-card-title">Chipeado Profesional</h3>
                        <p class="service-card-desc">Servicio profesional de chipeado de residuos vegetales para parcelas, podas y limpieza de terrenos. Incluye operador, equipo chipeador y combustible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Misión, Visión y Valor Agregado (Grid) -->
    <section class="info-details-section" style="padding: 100px 0; background-color: var(--bg-light);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                <!-- Tarjeta Misión y Visión -->
                <div style="background-color: var(--white); padding: 45px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; color: var(--primary-color);">
                        <i class="fa fa-eye" style="font-size: 2rem;"></i>
                        <h2 style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Misión y Visión</h2>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; text-align: justify;">
                        Nuestra visión principal es consolidarnos como líderes en faenas agrícolas y acondicionamiento predial, respetando rigurosamente los valores que representan a AGServicios: la transparencia, la honestidad y el respeto mutuo. Este compromiso se extiende no solo hacia nuestros clientes, sino también con el medio ambiente, buscando siempre minimizar de la mejor manera posible el impacto de nuestras operaciones en el entorno natural.
                    </p>
                </div>

                <!-- Tarjeta Valor Agregado -->
                <div style="background-color: var(--white); padding: 45px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; color: var(--primary-color);">
                        <i class="fa fa-gem" style="font-size: 2rem;"></i>
                        <h2 style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Valor Agregado</h2>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; text-align: justify;">
                        El servicio que ofrece nuestra área de negocios no se limita a un mero acuerdo comercial; es un compromiso activo por brindar la mejor atención, asesoría técnica y eficiencia operativa. Esto se traduce en plazos de entrega óptimos y un estándar de calidad superior, garantizados gracias a equipos humanos altamente capacitados y maquinaria de última generación.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Sinergia Corporativa -->
    <section class="sinergia-section" style="padding: 100px 0; background-color: var(--primary-color); color: var(--white); text-align: center;">
        <div class="container" style="max-width: 850px;">
            <i class="fa fa-handshake" style="font-size: 3rem; margin-bottom: 30px; opacity: 0.9;"></i>
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Sinergia Corporativa</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; opacity: 0.85; font-weight: 300;">
                AGServicios es una marca de Agrícola y Ganadera Los Pinos LTDA. que trabaja de forma articulada y de la mano con nuestras áreas partner: <strong>Sur Terrenos</strong> y <strong>AG Constructora</strong>, para ofrecer soluciones integrales de habilitación, desarrollo inmobiliario y construcción.
            </p>
        </div>
    </section>

@endsection
