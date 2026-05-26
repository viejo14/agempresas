@extends('layouts.app')

@section('title', 'Quiénes Somos | AG Empresas - Trayectoria e Historia en el sur de Chile')

@section('content')

    <!-- Sección Hero de Quiénes Somos (Fondo de Oficina) -->
    <section class="hero-section subpage-hero" style="background-image: url('{{ asset('img/oficina_agempresas.webp') }}'); height: 60vh;">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title" style="font-size: 3rem;">QUIÉNES SOMOS</h1>
            <p style="color: white; font-size: 1.2rem; font-weight: 600; margin-top: 15px; letter-spacing: 1px;">Proyectos eficientes y con amplia orientación al cliente</p>
        </div>
    </section>

    <!-- Sección Introducción / Sobre la Empresa -->
    <section class="intro-section" style="padding: 80px 0; background-color: var(--white);">
        <div class="container" style="max-width: 1000px;">
            <div class="text-center" style="margin-bottom: 40px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h4 style="font-size: 0.9rem; font-weight: 800; letter-spacing: 2px; color: var(--text-muted); text-transform: uppercase; margin-top: 10px;">Sobre la Empresa</h4>
            </div>
            <h3 class="intro-text" style="font-size: 1.5rem; font-weight: 400; text-align: justify; line-height: 1.8;">
                <strong>AG Empresas</strong> (Agrícola y Ganadera Los Pinos Ltda.) es un grupo corporativo consolidado en la zona sur de Chile, con base en Puerto Varas. Nos dedicamos de manera integral al desarrollo agro-residencial, la intermediación de propiedades exclusivas a través de <strong>Sur Terrenos</strong>, la urbanización y construcción con <strong>AG Constructora</strong>, y los servicios de habilitación y mantención de predios a través de <strong>AG Servicios</strong>.
            </h3>
        </div>
    </section>

    <!-- Sección HISTORIA / LÍNEA DE TIEMPO -->
    <section class="timeline-section" style="padding: 80px 0; background-color: var(--bg-light);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h2 style="font-size: 2.2rem; font-weight: 900; color: var(--primary-color); margin-top: 15px; letter-spacing: 1px; text-transform: uppercase;">Nuestra Historia</h2>
                <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 10px;">15 años de trayectoria impulsando el crecimiento de la Región de Los Lagos</p>
            </div>

            <div class="timeline-container">
                <!-- Línea de tiempo (Vertical central) -->
                <div class="timeline-line"></div>

                <!-- Hito 1: 2011 -->
                <div class="timeline-item left">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2011</span>
                        <h3 class="timeline-title">Fundación</h3>
                        <p class="timeline-desc">Se funda Agrícola y Ganadera Los Pinos Ltda., naciendo con el propósito de optimizar y explotar predios agrícolas y ganaderos en el sur del país, estableciendo bases operativas sólidas.</p>
                    </div>
                </div>

                <!-- Hito 2: 2014 -->
                <div class="timeline-item right">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2014</span>
                        <h3 class="timeline-title">Creación de Sur Terrenos</h3>
                        <p class="timeline-desc">El dinamismo del mercado agro-residencial nos impulsa a crear Sur Terrenos, marca líder dedicada al corretaje, loteo e intermediación de propiedades exclusivas en la zona sur.</p>
                    </div>
                </div>

                <!-- Hito 3: 2016 -->
                <div class="timeline-item left">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2016</span>
                        <h3 class="timeline-title">Lanzamiento de AG Servicios</h3>
                        <p class="timeline-desc">Con el objetivo de habilitar y mejorar predios de forma profesional, se crea AG Servicios, especializándose en cercos, limpieza de terrenos, caminos prediales y movimiento de tierra.</p>
                    </div>
                </div>

                <!-- Hito 4: 2019 -->
                <div class="timeline-item right">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2019</span>
                        <h3 class="timeline-title">Expansión con AG Constructora</h3>
                        <p class="timeline-desc">Nace la constructora del grupo para ejecutar proyectos complejos de urbanización y obras civiles, garantizando pavimentación, conectividad y redes sanitarias de alto nivel.</p>
                    </div>
                </div>

                <!-- Hito 5: 2023 -->
                <div class="timeline-item left">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2023</span>
                        <h3 class="timeline-title">Sinergia Tecnológica</h3>
                        <p class="timeline-desc">Consolidamos nuestra oferta comercial unificando los portales digitales para clientes y colaboradores (Sistemas de Venta ST, Crédito Directo y Ticketera de Atención Interna).</p>
                    </div>
                </div>

                <!-- Hito 6: 2026 -->
                <div class="timeline-item right">
                    <div class="timeline-dot"></div>
                    <div class="timeline-panel">
                        <span class="timeline-year">2026</span>
                        <h3 class="timeline-title">Liderazgo Regional</h3>
                        <p class="timeline-desc">Con más de 210 proyectos urbanísticos e infraestructura entregados con éxito, nos consolidamos como referentes de desarrollo responsable en la Región de Los Lagos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección DIRECTORIO Y ADMINISTRACIÓN -->
    <section class="directorio-section" style="padding: 80px 0; background-color: var(--white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h2 style="font-size: 2.2rem; font-weight: 900; color: var(--primary-color); margin-top: 15px; letter-spacing: 1px; text-transform: uppercase;">Directorio y Administración</h2>
                <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 10px;">Líderes comprometidos con la transparencia, ética y el éxito operativo</p>
            </div>

            <div class="directorio-grid">
                <!-- Miembro 1 -->
                <div class="director-card">
                    <div class="director-img-wrapper">
                        <div class="director-avatar-placeholder">
                            <i class="fa fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="director-info">
                        <h3>Francisco G.</h3>
                        <span class="director-position">Gerente General</span>
                        <p class="director-bio">Responsable de liderar la planificación estratégica del holding, asegurando el crecimiento sustentable y la sinergia entre todas las áreas de negocio.</p>
                    </div>
                </div>

                <!-- Miembro 2 -->
                <div class="director-card">
                    <div class="director-img-wrapper">
                        <div class="director-avatar-placeholder">
                            <i class="fa fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="director-info">
                        <h3>Equipo de Administración</h3>
                        <span class="director-position">Finanzas y Administración</span>
                        <p class="director-bio">Encargados del control financiero, procesos internos, adquisiciones y la solidez económica de los proyectos del grupo AG Empresas.</p>
                    </div>
                </div>

                <!-- Miembro 3 -->
                <div class="director-card">
                    <div class="director-img-wrapper">
                        <div class="director-avatar-placeholder">
                            <i class="fa fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="director-info">
                        <h3>Equipo de Operaciones</h3>
                        <span class="director-position">Operaciones y Maquinarias</span>
                        <p class="director-bio">Supervisan la logística de maquinaria pesada, transporte y la eficiencia en la ejecución de trabajos agrícolas y movimientos de tierra en terreno.</p>
                    </div>
                </div>

                <!-- Miembro 4 -->
                <div class="director-card">
                    <div class="director-img-wrapper">
                        <div class="director-avatar-placeholder">
                            <i class="fa fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="director-info">
                        <h3>Jefe de Obras Civiles</h3>
                        <span class="director-position">Proyectos y Urbanizaciones</span>
                        <p class="director-bio">Líder a cargo del diseño, trazado y supervisión técnica en terreno para garantizar que cada loteo cuente con infraestructura vial de excelencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección SOSTENIBILIDAD -->
    <section class="sostenibilidad-section" style="padding: 80px 0; background-color: var(--bg-light); border-top: 1px solid var(--border-color);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="dash" style="background-color: var(--primary-color);"></span>
                <h2 style="font-size: 2.2rem; font-weight: 900; color: var(--primary-color); margin-top: 15px; letter-spacing: 1px; text-transform: uppercase;">Sostenibilidad</h2>
                <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 10px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Integrar la sostenibilidad a nuestra empresa significa desarrollar un enfoque de negocio que contempla los ámbitos social, económico y medioambiental, resguardando el bienestar futuro del sur de Chile.
                </p>
            </div>

            <div class="sostenibilidad-grid">
                <!-- Dimensión 1 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-balance-scale"></i>
                    </div>
                    <h3>Gobernanza Ética</h3>
                    <p>Una gobernanza sólida fundada en el compromiso de nuestros líderes para tomar decisiones en un marco ético, transparente y de largo plazo, con políticas y procedimientos claros.</p>
                </div>

                <!-- Dimensión 2 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Nuestros Trabajadores</h3>
                    <p>Consideramos a nuestros colaboradores como aliados estratégicos. Promovemos su perfeccionamiento y profesionalización en condiciones de trabajo seguras y saludables.</p>
                </div>

                <!-- Dimensión 3 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-handshake"></i>
                    </div>
                    <h3>Relación con Proveedores</h3>
                    <p>Trabajamos de la mano con nuestra cadena de suministros y contratistas locales, promoviendo el pago a tiempo y exigiendo altos estándares laborales y operativos.</p>
                </div>

                <!-- Dimensión 4 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-award"></i>
                    </div>
                    <h3>Orientación al Cliente</h3>
                    <p>Satisfacemos las necesidades de los clientes (tanto mandantes como usuarios de loteos) construyendo fidelización mediante asesoría técnica permanente y respuestas rápidas.</p>
                </div>

                <!-- Dimensión 5 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-home"></i>
                    </div>
                    <h3>Vínculo con la Comunidad</h3>
                    <p>Propiciamos relaciones armoniosas, de cooperación y transparencia con el entorno social y vecinal donde ejecutamos nuestras urbanizaciones y proyectos.</p>
                </div>

                <!-- Dimensión 6 -->
                <div class="sost-card">
                    <div class="sost-icon-wrapper">
                        <i class="fa fa-leaf"></i>
                    </div>
                    <h3>Cuidado del Medio Ambiente</h3>
                    <p>Gestionamos de manera proactiva los impactos ambientales de nuestras faenas, enfocándonos en la construcción sustentable y en la eficiencia energética predial.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
