/**
 * ==========================================================================
 * AG Empresas - Comportamiento Frontend e Interactividad JS
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {

    /* --- 0. Inicialización de Lenis (Scroll Suave Inercial) --- */
    let lenis;
    if (typeof Lenis !== 'undefined') {
        lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Curva de aceleración suave
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        // Enlazar clics de hashes locales con Lenis
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                try {
                    const target = document.querySelector(targetId);
                    if (target) {
                        e.preventDefault();
                        lenis.scrollTo(target, {
                            offset: -80,
                            duration: 1.2
                        });
                    }
                } catch (err) {
                    // Ignorar selectores de hash no válidos
                }
            });
        });
    }

    /* --- 1. Control de Sticky Header (Cabecera Fija) --- */
    const header = document.getElementById('main-header');
    const scrollThreshold = 100;
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }

        // Hide header on scroll down, show on scroll up
        if (window.scrollY > lastScroll) {
            header.classList.add('hidden');
        } else {
            header.classList.remove('hidden');
        }
        lastScroll = window.scrollY;
    });


    /* --- 2. Menú de Navegación Móvil --- */
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('open');
        });

        // Cerrar menú al hacer clic en un enlace
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('open');
            });
        });

        // Cerrar al hacer clic fuera del menú
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('open');
            }
        });
    }


    /* --- 3. Desplegable de Portales de Funcionarios --- */
    const portalTrigger = document.getElementById('portal-trigger');
    const portalDropdown = document.getElementById('portal-dropdown');

    if (portalTrigger && portalDropdown) {
        portalTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            portalDropdown.classList.toggle('active');
        });

        // Cerrar dropdown si se hace clic fuera
        document.addEventListener('click', (e) => {
            if (!portalDropdown.contains(e.target) && !portalTrigger.contains(e.target)) {
                portalDropdown.classList.remove('active');
            }
        });
    }


    /* --- 4. Animación de Números Dinámicos (Contadores) --- */
    const statNumbers = document.querySelectorAll('.stat-number');
    const statsSection = document.querySelector('.stats-section');

    const animateCounters = () => {
        statNumbers.forEach(stat => {
            const target = +stat.getAttribute('data-target');
            const count = +stat.innerText;
            
            // Velocidad del conteo proporcional al valor
            const speed = target > 50 ? Math.ceil(target / 40) : 1; 

            const updateCount = () => {
                const current = +stat.innerText;
                if (current < target) {
                    stat.innerText = Math.min(current + speed, target);
                    setTimeout(updateCount, 30);
                } else {
                    stat.innerText = target;
                }
            };
            updateCount();
        });
    };

    // Usar IntersectionObserver para iniciar la animación solo cuando se ve la sección
    if (statsSection && statNumbers.length > 0) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target); // Detener observación para que solo ocurra una vez
                }
            });
        }, { threshold: 0.3 }); // Activa al ver un 30% de la sección

        observer.observe(statsSection);
    }


    /* --- 5. Carrusel de Marcas / Clientes (Duplicación para Scroll Infinito) --- */
    const track = document.getElementById('carousel-track');
    if (track) {
        // Duplicar el contenido del carrusel para lograr el efecto continuo sin saltos visuales
        const slides = Array.from(track.children);
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            track.appendChild(clone);
        });
    }


    /* --- 6. Envío de Formulario mediante AJAX con Laravel CSRF --- */
    const contactForm = document.getElementById('contact-form');
    const formMessages = document.getElementById('form-messages');

    if (contactForm && formMessages) {
        const msgLoading = formMessages.querySelector('.message.loading');
        const msgError = formMessages.querySelector('.message.error');
        const msgSuccess = formMessages.querySelector('.message.success');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Ocultar mensajes previos
            msgLoading.style.display = 'none';
            msgError.style.display = 'none';
            msgSuccess.style.display = 'none';

            // Validar campos básicos
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !subject || !message) {
                showMsg(msgError, 'Por favor, rellene todos los campos obligatorios.');
                return;
            }

            // Mostrar cargando
            msgLoading.style.display = 'block';

            // Recoger datos del formulario
            const formData = new FormData(contactForm);

            // Realizar petición POST AJAX al endpoint de Laravel
            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    // El token CSRF se lee de los campos del FormData o del meta tag
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                msgLoading.style.display = 'none';
                if (!response.ok) {
                    // Si falla la validación del servidor (422) u otro error
                    return response.json().then(data => {
                        throw new Error(data.errors ? data.errors.join(' ') : 'Error en el envío.');
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    msgSuccess.innerText = data.message;
                    msgSuccess.style.display = 'block';
                    contactForm.reset(); // Limpiar formulario
                } else {
                    showMsg(msgError, data.message || 'Ocurrió un problema al enviar.');
                }
            })
            .catch(error => {
                msgLoading.style.display = 'none';
                showMsg(msgError, error.message || 'Error de conexión. Inténtelo más tarde.');
            });
        });

        function showMsg(element, text) {
            element.innerText = text;
            element.style.display = 'block';
        }
    }


    /* --- 7. Enlaces Activos en la Navegación al hacer Scroll --- */
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-menu a');

    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150; // Compensación de altura del header
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === `#${currentSectionId}`) {
                item.classList.add('active');
            }
        });
    });

    /* --- 7.5. Desplazamiento Suave al Cargar Página con Hash --- */
    if (window.location.hash) {
        const hash = window.location.hash;
        try {
            const targetElement = document.querySelector(hash);
            if (targetElement) {
                // Detener el salto instantáneo del navegador volviendo a la cima temporalmente
                window.scrollTo(0, 0);
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                        const offsetPosition = elementPosition - 80; // Compensación de la cabecera fija
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }, 150);
                });
            }
        } catch (e) {
            console.error('Error al resolver scroll del hash:', e);
        }
    }


    /* --- 8. Animación de la Línea de Tiempo al Scroll --- */
    const timelineItems = document.querySelectorAll('.timeline-item');
    if (timelineItems.length > 0) {
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 });

        timelineItems.forEach(item => {
            timelineObserver.observe(item);
        });
    }

    /* --- 8.5. Revelado de Elementos al Scroll (Scroll Reveal Animaciones) --- */
    const revealElements = document.querySelectorAll('.reveal-fade');
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Dejar de observar una vez animado
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -40px 0px' });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    }


    /* --- 9. Botón Volver Arriba (Back to Top) --- */
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (lenis) {
                lenis.scrollTo(0, {
                    duration: 1.2
                });
            } else {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    }

    /* --- 10. Parallax Sutil y Nítido en Tarjetas de Áreas --- */
    const cardBgs = document.querySelectorAll('.card-bg');
    if (cardBgs.length > 0) {
        const updateParallax = () => {
            const windowHeight = window.innerHeight;
            cardBgs.forEach(bg => {
                const parent = bg.parentElement;
                const rect = parent.getBoundingClientRect();
                
                // Si la tarjeta está visible en pantalla
                if (rect.top < windowHeight && rect.bottom > 0) {
                    // Porcentaje de avance de la tarjeta a lo largo del viewport
                    const totalDistance = windowHeight + rect.height;
                    const scrolledDistance = windowHeight - rect.top;
                    const percentage = scrolledDistance / totalDistance;
                    
                    // Desplazamiento sutil de -40px a +40px
                    const offset = (percentage - 0.5) * 80;
                    
                    bg.style.transform = `translateY(${offset}px)`;
                }
            });
        };

        // Integrar con el scroll de Lenis si está disponible, o usar scroll nativo
        if (typeof lenis !== 'undefined' && lenis) {
            lenis.on('scroll', updateParallax);
        } else {
            window.addEventListener('scroll', updateParallax);
        }
        
        // Ejecutar una vez al inicio
        updateParallax();
    }

});
