<!DOCTYPE html>
<html
    lang="es"
    class="scroll-smooth"
>

<head>
    @include('partials.head', ['title' => 'Cybernelsk8 / DEV - Nelson Vásquez | Full-Stack Developer'])

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
</head>

<body
    class="welcome-page bg-brand-dark text-slate-200 font-sans antialiased selection:bg-brand-500 selection:text-white overflow-x-hidden"
>

    <!-- Subtle Background Ambient Light Gradients -->
    <div
        class="fixed top-0 left-1/4 w-[500px] h-[500px] bg-brand-500/10 rounded-full blur-[120px] pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-10 right-10 w-[400px] h-[400px] bg-brand-600/10 rounded-full blur-[140px] pointer-events-none z-0">
    </div>

    <!-- Navigation Header -->
    <header
        x-data="{ mobileMenuOpen: false }"
        class="fixed top-0 left-0 right-0 z-50 glass-panel border-b border-slate-800/80 transition-all duration-300"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a
                    href="#inicio"
                    class="group flex items-center space-x-2 font-mono font-bold text-lg sm:text-xl text-white tracking-tight"
                >
                    <span
                        class="p-2 rounded-lg bg-brand-500/10 border border-brand-500/30 text-brand-500 group-hover:bg-brand-500 group-hover:text-white transition-all duration-300"
                    >
                        <flux:icon
                            name="terminal"
                            class="w-5 h-5"
                        />
                    </span>
                    <span>Cybernelsk8 <span class="text-brand-500">/</span> DEV</span>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-300">
                    <a
                        href="#inicio"
                        class="hover:text-brand-500 transition-colors duration-200 flex items-center gap-1.5"
                    >
                        <span class="text-brand-500 font-mono text-xs">01.</span> Inicio
                    </a>
                    <a
                        href="#proyectos"
                        class="hover:text-brand-500 transition-colors duration-200 flex items-center gap-1.5"
                    >
                        <span class="text-brand-500 font-mono text-xs">02.</span> Proyectos
                    </a>
                    <a
                        href="#experiencia"
                        class="hover:text-brand-500 transition-colors duration-200 flex items-center gap-1.5"
                    >
                        <span class="text-brand-500 font-mono text-xs">03.</span> Experiencia
                    </a>
                    <a
                        href="#tecnologias"
                        class="hover:text-brand-500 transition-colors duration-200 flex items-center gap-1.5"
                    >
                        <span class="text-brand-500 font-mono text-xs">04.</span> Stack Tech
                    </a>
                    <a
                        href="#contacto"
                        class="hover:text-brand-500 transition-colors duration-200 flex items-center gap-1.5"
                    >
                        <span class="text-brand-500 font-mono text-xs">05.</span> Contacto
                    </a>
                </nav>

                <!-- Action Button -->
                <div class="hidden md:block">
                    <a
                        href="#contacto"
                        class="px-5 py-2.5 text-xs font-mono font-semibold uppercase tracking-wider rounded-lg bg-brand-500 hover:bg-brand-600 text-white shadow-lg shadow-brand-500/25 transition-all duration-300 hover:scale-[1.02]"
                    >
                        Hablemos
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    id="mobile-menu-btn"
                    class="md:hidden p-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white focus:outline-none"
                    type="button"
                    aria-label="Abrir menú de navegación"
                    :aria-expanded="mobileMenuOpen"
                    aria-controls="mobile-menu"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <flux:icon
                        name="menu"
                        class="w-6 h-6"
                    />
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div
            id="mobile-menu"
            x-cloak
            x-show="mobileMenuOpen"
            x-transition
            class="bg-brand-card border-b border-slate-800 px-6 py-6 space-y-4"
        >
            <a
                href="#inicio"
                @click="mobileMenuOpen = false"
                class="mobile-link block text-slate-200 hover:text-brand-500 font-medium"
            >01. Inicio</a>
            <a
                href="#proyectos"
                @click="mobileMenuOpen = false"
                class="mobile-link block text-slate-200 hover:text-brand-500 font-medium"
            >02. Proyectos</a>
            <a
                href="#experiencia"
                @click="mobileMenuOpen = false"
                class="mobile-link block text-slate-200 hover:text-brand-500 font-medium"
            >03. Experiencia</a>
            <a
                href="#tecnologias"
                @click="mobileMenuOpen = false"
                class="mobile-link block text-slate-200 hover:text-brand-500 font-medium"
            >04. Stack Tech</a>
            <a
                href="#contacto"
                @click="mobileMenuOpen = false"
                class="mobile-link block text-slate-200 hover:text-brand-500 font-medium"
            >05. Contacto</a>
            <a
                href="#contacto"
                @click="mobileMenuOpen = false"
                class="mobile-link block w-full text-center px-4 py-2.5 rounded-lg bg-brand-500 text-white font-mono text-xs font-semibold uppercase"
            >Hablemos</a>
        </div>
    </header>

    <main class="relative z-10 pt-20">

        <!-- HERO SECTION -->
        <section
            id="inicio"
            class="min-h-[calc(100vh-80px)] flex items-center py-16 lg:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center w-full">

                <!-- Hero Text Content (Left Column) -->
                <div class="lg:col-span-7 space-y-6 text-left">
                    <div
                        class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-brand-400 text-xs font-mono font-semibold tracking-wide border border-brand-500/30">
                        <span class="w-2 h-2 rounded-full bg-brand-500 animate-ping"></span>
                        Disponible para nuevos proyectos
                    </div>

                    <div class="space-y-2">
                        <h2 class="font-mono text-brand-500 font-medium text-lg sm:text-xl tracking-tight">
                            Hola, mi nombre es
                        </h2>
                        <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-none">
                            Nelson Vásquez <span class="text-brand-500">/</span>
                        </h1>
                        <h2 class="text-2xl sm:text-4xl font-bold text-slate-400 tracking-tight pt-1">
                            Crafting High-Performance Web Applications.
                        </h2>
                    </div>

                    <p class="text-slate-400 text-base sm:text-lg max-w-2xl leading-relaxed">
                        Soy <strong class="text-white">Full-Stack Developer</strong> especializado en crear soluciones
                        web robustas, escalables e interactivas. Transformo ideas en aplicaciones mediante la potencia
                        de <span class="text-brand-400 font-semibold">Laravel 13</span>, <span
                            class="text-pink-500 font-semibold"
                        >Livewire 4</span>, <span class="text-emerald-400 font-semibold">Vue 3</span> y la agilidad de
                        <span class="text-sky-400 font-semibold">TailwindCSS 4</span>.
                    </p>

                    <!-- Primary Technologies Badges Pill -->
                    <div class="flex flex-wrap gap-2 pt-2 pb-4">
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >PHP 8+</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >Laravel 13</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >Livewire 4</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >Vue 3</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >Pinia</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >TailwindCSS 4</span>
                        <span
                            class="px-3 py-1 rounded-md bg-slate-800/80 border border-slate-700 text-xs font-mono text-slate-300"
                        >MariaDB / Oracle</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a
                            href="#proyectos"
                            class="px-7 py-3.5 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm shadow-xl shadow-brand-500/25 transition-all duration-300 hover:scale-[1.03] flex items-center gap-2"
                        >
                            <flux:icon
                                name="folder-code"
                                class="w-4 h-4"
                            /> Ver Proyectos
                        </a>
                        <a
                            href="#contacto"
                            class="px-7 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700/90 text-slate-200 border border-slate-700 font-semibold text-sm transition-all duration-300 hover:scale-[1.03] flex items-center gap-2"
                        >
                            <flux:icon
                                name="mail"
                                class="w-4 h-4"
                            /> Contactar
                        </a>
                    </div>
                </div>

                <!-- Interactive Floating Tech Stack Canvas (Right Column) -->
                <div class="lg:col-span-5 relative flex items-center justify-center py-8">
                    <!-- Glowing Background Card Container -->
                    <div
                        class="w-full max-w-md aspect-square rounded-3xl glass-panel p-6 relative border border-brand-500/20 glow-orange flex flex-col justify-between overflow-hidden group">

                        <!-- Terminal Bar Header -->
                        <div class="flex items-center justify-between border-b border-slate-700/60 pb-4">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="font-mono text-xs text-slate-400">stack-config.json</span>
                        </div>

                        <!-- Floating Badges Playground Area -->
                        <div
                            class="relative flex-1 my-6 flex items-center justify-center"
                            id="floating-container"
                            x-data="{
                                move(event) {
                                        const rect = this.$el.getBoundingClientRect();
                                        const x = event.clientX - rect.left - rect.width / 2;
                                        const y = event.clientY - rect.top - rect.height / 2;
                            
                                        this.$el.querySelectorAll('.animate-float-slow, .animate-float-medium, .animate-float-fast')
                                            .forEach((badge, index) => {
                                                const factor = (index + 1) * 0.05;
                                                badge.style.transform = `translate(${x * factor}px, ${y * factor}px)`;
                                            });
                                    },
                                    reset() {
                                        this.$el.querySelectorAll('.animate-float-slow, .animate-float-medium, .animate-float-fast')
                                            .forEach((badge) => {
                                                badge.style.transform = 'translate(0px, 0px)';
                                            });
                                    }
                            }"
                            @mousemove="move($event)"
                            @mouseleave="reset()"
                        >

                            <!-- Central Core Icon -->
                            <div
                                class="w-20 h-20 rounded-2xl bg-brand-500/20 border border-brand-500/50 flex items-center justify-center text-brand-500 shadow-2xl animate-pulse">
                                <flux:icon
                                    name="code-xml"
                                    class="w-10 h-10"
                                />
                            </div>

                            <!-- Floating Badge 1: Laravel 13 -->
                            <div
                                class="absolute top-2 left-2 animate-float-slow transition-transform hover:scale-110 cursor-pointer">
                                <div
                                    class="glass-panel px-4 py-2 rounded-xl border border-brand-500/40 shadow-lg flex items-center space-x-2">
                                    <div class="w-3 h-3 rounded-full bg-brand-500"></div>
                                    <span class="font-mono text-xs font-bold text-white">Laravel 13</span>
                                </div>
                            </div>

                            <!-- Floating Badge 2: Livewire 4 -->
                            <div
                                class="absolute top-6 right-0 animate-float-fast transition-transform hover:scale-110 cursor-pointer">
                                <div
                                    class="glass-panel px-4 py-2 rounded-xl border border-pink-500/40 shadow-lg flex items-center space-x-2">
                                    <div class="w-3 h-3 rounded-full bg-pink-500"></div>
                                    <span class="font-mono text-xs font-bold text-white">Livewire 4</span>
                                </div>
                            </div>

                            <!-- Floating Badge 3: Vue 3 -->
                            <div
                                class="absolute bottom-16 left-0 animate-float-medium transition-transform hover:scale-110 cursor-pointer">
                                <div
                                    class="glass-panel px-4 py-2 rounded-xl border border-emerald-500/40 shadow-lg flex items-center space-x-2">
                                    <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                                    <span class="font-mono text-xs font-bold text-white">Vue 3</span>
                                </div>
                            </div>

                            <!-- Floating Badge 4: Tailwind 4 -->
                            <div
                                class="absolute bottom-4 right-4 animate-float-slow transition-transform hover:scale-110 cursor-pointer">
                                <div
                                    class="glass-panel px-4 py-2 rounded-xl border border-sky-500/40 shadow-lg flex items-center space-x-2">
                                    <div class="w-3 h-3 rounded-full bg-sky-400"></div>
                                    <span class="font-mono text-xs font-bold text-white">Tailwind 4</span>
                                </div>
                            </div>

                            <!-- Floating Badge 5: MariaDB & Oracle -->
                            <div
                                class="absolute -bottom-2 left-16 animate-float-fast transition-transform hover:scale-110 cursor-pointer">
                                <div
                                    class="glass-panel px-3 py-1.5 rounded-xl border border-amber-500/40 shadow-lg flex items-center space-x-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                                    <span class="font-mono text-[11px] font-bold text-slate-200">MariaDB /
                                        Oracle</span>
                                </div>
                            </div>
                        </div>

                        <!-- Terminal Footer Text -->
                        <div
                            class="pt-3 border-t border-slate-700/60 font-mono text-xs text-slate-400 flex items-center justify-between">
                            <span class="text-brand-400">✓ Status: Ready for Production</span>
                            <span>Git / GitHub</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PROYECTOS DESTACADOS SECTION -->
        <section
            id="proyectos"
            class="py-20 border-t border-slate-800/80 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <div class="flex items-center space-x-2 text-brand-500 font-mono text-sm font-semibold">
                        <span>02.</span>
                        <span>PORTAFOLIO</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-1">Proyectos Destacados</h2>
                </div>
                <p class="text-slate-400 text-sm max-w-md mt-4 md:mt-0">
                    Sistemas robustos construidos con arquitectura limpia, alto rendimiento y experiencias de usuario
                    dinámicas.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1 Card -->
                <div
                    class="glass-panel rounded-2xl overflow-hidden border border-slate-800 hover:border-brand-500/50 transition-all duration-300 group hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <!-- Project Image / Preview Banner -->
                        <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-card to-transparent z-10"></div>
                            <!-- Mock UI Illustration -->
                            <div
                                class="w-4/5 h-4/5 bg-slate-900 rounded-lg p-3 border border-slate-700 group-hover:scale-105 transition-transform duration-500 shadow-2xl">
                                <div class="flex items-center space-x-1.5 mb-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-1/3 bg-brand-500/40 rounded"></div>
                                    <div
                                        class="h-10 w-full bg-slate-800 rounded flex items-center justify-center text-[10px] font-mono text-slate-400">
                                        ERP Core Dashboard
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-mono text-brand-500 font-semibold uppercase tracking-wider">
                                    Full-Stack System
                                </span>
                                <div class="flex items-center space-x-3 text-slate-400">
                                    <a
                                        href="https://github.com/Cybernelsk8/marvas.git"
                                        target="_blank"
                                        class="hover:text-white transition-colors"
                                        title="Código fuente en GitHub"
                                    >
                                        <flux:icon
                                            name="git-branch"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                    <a
                                        href="https://marvas-demo.vercel.app/"
                                        target="_blank"
                                        class="hover:text-brand-500 transition-colors"
                                        title="Ver Demo en Vivo"
                                    >
                                        <flux:icon
                                            name="external-link"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Marvas - MBI
                            </h3>
                            <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                                Plataforma de gestión empresarial para clinica de medicina alternativa con agenda en
                                tiempo real con
                                notificaciones reactivas.
                            </p>
                        </div>
                    </div>

                    <!-- Tech Tags Footer -->
                    <div class="px-6 pb-6 pt-2 flex flex-wrap gap-2">
                        <span
                            class="px-2.5 py-1 rounded bg-brand-500/10 border border-brand-500/30 text-brand-400 text-xs font-mono"
                        >
                            Laravel 13
                        </span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">
                            Livewire 4
                        </span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">
                            MariaDB
                        </span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">
                            Tailwind 4
                        </span>
                    </div>
                </div>

                <!-- Project 2 Card -->
                <div
                    class="glass-panel rounded-2xl overflow-hidden border border-slate-800 hover:border-brand-500/50 transition-all duration-300 group hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-card to-transparent z-10"></div>
                            <div
                                class="w-4/5 h-4/5 bg-slate-900 rounded-lg p-3 border border-slate-700 group-hover:scale-105 transition-transform duration-500 shadow-2xl">
                                <div class="flex items-center space-x-1.5 mb-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-slate-700"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-slate-700"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-1/2 bg-emerald-500/40 rounded"></div>
                                    <div
                                        class="h-10 w-full bg-slate-800 rounded flex items-center justify-center text-[10px] font-mono text-slate-400">
                                        Vue 3 SPA + Pinia Store
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="text-xs font-mono text-emerald-400 font-semibold uppercase tracking-wider">
                                    Single Page App
                                </span>
                                <div class="flex items-center space-x-3 text-slate-400">
                                    <a
                                        href="#"
                                        class="hover:text-white transition-colors"
                                    >
                                        <flux:icon
                                            name="git-branch"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="hover:text-brand-500 transition-colors"
                                    >
                                        <flux:icon
                                            name="external-link"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Plataforma GDS - MuniGuate
                            </h3>
                            <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                                Sistema de gestion de cursos y alumnos gestionado por Pinia, generacion de partidas en
                                SAP e
                                integración de APIs REST, API Renap y SAP RFC.
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2 flex flex-wrap gap-2">
                        <span
                            class="px-2.5 py-1 rounded bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono"
                        >Vue 3</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">Pinia</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">Vue
                            Router</span>
                        <span class="px-2.5 py-1 rounded bg-brand-500/10 text-brand-400 text-xs font-mono">Laravel
                            API</span>
                    </div>
                </div>

                <!-- Project 3 Card -->
                <div
                    class="glass-panel rounded-2xl overflow-hidden border border-slate-800 hover:border-brand-500/50 transition-all duration-300 group hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-card to-transparent z-10"></div>
                            <div
                                class="w-4/5 h-4/5 bg-slate-900 rounded-lg p-3 border border-slate-700 group-hover:scale-105 transition-transform duration-500 shadow-2xl">
                                <div class="flex items-center space-x-1.5 mb-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-amber-500"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-1/4 bg-amber-500/40 rounded"></div>
                                    <div
                                        class="h-10 w-full bg-slate-800 rounded flex items-center justify-center text-[10px] font-mono text-slate-400">
                                        Packages Data - Table Engine
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-mono text-amber-400 font-semibold uppercase tracking-wider">
                                    Database & Backend</span>
                                <div class="flex items-center space-x-3 text-slate-400">
                                    <a
                                        href="https://github.com/Cybernelsk8/laravel-buscador-avanzado-eloquent.git"
                                        class="hover:text-white transition-colors"
                                    >
                                        <flux:icon
                                            name="git-branch"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="hover:text-brand-500 transition-colors"
                                    >
                                        <flux:icon
                                            name="external-link"
                                            class="w-5 h-5"
                                        />
                                    </a>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Data table Multi-Database Engine
                            </h3>
                            <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                                Paquete de Data-Table para la filtracion anindada ordenamiento y personalizacion de
                                informacion en una Grid para laravel con la tecnologia de Flux-UI y Eloquent.
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2 flex flex-wrap gap-2">
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">PHP 8.3</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">Eloquent</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">Laravel</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-300 text-xs font-mono">Git</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- EXPERIENCIA / LÍNEA DE TIEMPO SECTION -->
        <section
            id="experiencia"
            class="py-20 border-t border-slate-800/80 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-16">
                    <div
                        class="flex items-center justify-center space-x-2 text-brand-500 font-mono text-sm font-semibold">
                        <span>03.</span>
                        <span>TRAYECTORIA</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-1">Experiencia Laboral</h2>
                </div>

                <!-- Timeline Container -->
                <div class="relative border-l-2 border-slate-800 ml-4 md:ml-32 space-y-12">

                    <!-- Timeline Item 1 -->
                    <div class="relative pl-8 md:pl-10 group">
                        <!-- Dot Indicator -->
                        <div
                            class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-500 border-4 border-brand-dark group-hover:scale-125 transition-transform">
                        </div>

                        <!-- Timeline Header -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Senior Full-Stack Developer
                            </h3>
                            <span
                                class="font-mono text-xs text-brand-400 font-semibold bg-brand-500/10 px-3 py-1 rounded-full border border-brand-500/20 w-fit mt-1 sm:mt-0"
                            >
                                2023 - Presente
                            </span>
                        </div>
                        <p class="text-sm font-medium text-slate-400 mb-3">Gerencia desarrollo social - MuniGuate</p>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Liderazgo en el desarrollo de arquitecturas web monolíticas y distribuidas utilizando
                            Laravel 13 y componentes dinámicos en Livewire 4. Integración de bases de datos relacionales
                            (Oracle / MariaDB) optimizando consultas complejas.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Laravel
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Livewire
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Oracle /
                                MariaDB
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                TailwindCSS
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Git/GitHub
                            </span>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="relative pl-8 md:pl-10 group">
                        <div
                            class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-brand-dark group-hover:bg-brand-500 transition-colors">
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Frontend & Full-Stack Engineer
                            </h3>
                            <span
                                class="font-mono text-xs text-slate-400 bg-slate-800 px-3 py-1 rounded-full w-fit mt-1 sm:mt-0"
                            >
                                2021 - 2023
                            </span>
                        </div>
                        <p class="text-sm font-medium text-slate-400 mb-3">Catastro IUSI - MuniGuate</p>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Desarrollo de Single Page Applications (SPA) con Vue 3, Pinia y Vue Router conectadas a APIs
                            en PHP/Laravel. Implementación de diseño responsivo avanzado utilizando CSS3 y Tailwind.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Vue 3
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Pinia
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                MySQL
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                Git/GitLab
                            </span>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="relative pl-8 md:pl-10 group">
                        <div
                            class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-brand-dark group-hover:bg-brand-500 transition-colors">
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-white group-hover:text-brand-400 transition-colors">
                                Web Developer Jr.
                            </h3>
                            <span
                                class="font-mono text-xs text-slate-400 bg-slate-800 px-3 py-1 rounded-full w-fit mt-1 sm:mt-0"
                            >
                                2016 - 2021
                            </span>
                        </div>
                        <p class="text-sm font-medium text-slate-400 mb-3">Internacional de calzado S.A.</p>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Mantenimiento de bases de datos Oracle / MySQL, estructuración HTML5/CSS3 y PHP accesible y
                            creación de módulos PHP para sistemas web corporativos.

                        </p>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Creacíon de aplicacion de escritorio con C# y .NET Framework para control de inventario,
                            marcaje de horario y
                            ventas.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                PHP
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                HTML5 /
                                CSS3
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                JavaScript
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                MySQL / Oracle
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                C#
                            </span>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-slate-400 text-xs font-mono">
                                .NET
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- STACK DE TECNOLOGÍAS SECTION -->
        <section
            id="tecnologias"
            class="py-20 border-t border-slate-800/80 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div class="text-center mb-16">
                <div class="flex items-center justify-center space-x-2 text-brand-500 font-mono text-sm font-semibold">
                    <span>04.</span>
                    <span>HABILIDADES TÉCNICAS</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-1">Stack Tecnológico</h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">
                    Herramientas y frameworks que domino para construir software de vanguardia.
                </p>
            </div>

            <!-- Interactive Tech Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

                <!-- Tech Item: Laravel 13 -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-brand-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer glow-orange-sm">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-brand-500/10 border border-brand-500/30 flex items-center justify-center text-brand-500 group-hover:bg-brand-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="layers"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Laravel 13</h4>
                    <span class="text-[11px] text-slate-400">Backend Framework</span>
                </div>

                <!-- Tech Item: Livewire 4 -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-pink-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-pink-500/10 border border-pink-500/30 flex items-center justify-center text-pink-400 group-hover:bg-pink-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="zap"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Livewire 4</h4>
                    <span class="text-[11px] text-slate-400">Full-Stack Reactivity</span>
                </div>

                <!-- Tech Item: Vue 3 -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-emerald-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="box"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Vue 3</h4>
                    <span class="text-[11px] text-slate-400">Progressive Framework</span>
                </div>

                <!-- Tech Item: Pinia -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-yellow-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center text-yellow-400 group-hover:bg-yellow-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="cloud"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Pinia</h4>
                    <span class="text-[11px] text-slate-400">Vue State Management</span>
                </div>

                <!-- Tech Item: Vue Router -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-emerald-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="route"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Vue Router</h4>
                    <span class="text-[11px] text-slate-400">SPA Routing</span>
                </div>

                <!-- Tech Item: Tailwind CSS 4 -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-sky-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-sky-500/10 border border-sky-500/30 flex items-center justify-center text-sky-400 group-hover:bg-sky-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="wind"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">TailwindCSS 4</h4>
                    <span class="text-[11px] text-slate-400">Utility-First CSS</span>
                </div>

                <!-- Tech Item: PHP -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-indigo-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="code"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">PHP</h4>
                    <span class="text-[11px] text-slate-400">Server Language</span>
                </div>

                <!-- Tech Item: JavaScript -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-amber-400/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-amber-400/10 border border-amber-400/30 flex items-center justify-center text-amber-400 group-hover:bg-amber-400 group-hover:text-slate-950 transition-all">
                        <flux:icon
                            name="file-code"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">JavaScript</h4>
                    <span class="text-[11px] text-slate-400">ES6+ Standard</span>
                </div>

                <!-- Tech Item: MariaDB & MySQL -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-blue-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="database"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">MariaDB / MySQL</h4>
                    <span class="text-[11px] text-slate-400">Relational DB</span>
                </div>

                <!-- Tech Item: Oracle -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-red-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-red-500/10 border border-red-500/30 flex items-center justify-center text-red-400 group-hover:bg-red-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="server"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Oracle DB</h4>
                    <span class="text-[11px] text-slate-400">Enterprise Database</span>
                </div>

                <!-- Tech Item: Git & GitHub -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-orange-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-orange-500/10 border border-orange-500/30 flex items-center justify-center text-orange-400 group-hover:bg-orange-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="git-branch"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">Git / GitHub</h4>
                    <span class="text-[11px] text-slate-400">Version Control</span>
                </div>

                <!-- Tech Item: HTML5 & CSS3 -->
                <div
                    class="glass-panel p-5 rounded-2xl border border-slate-800 hover:border-purple-500/60 transition-all duration-300 hover:scale-105 group text-center cursor-pointer">
                    <div
                        class="w-12 h-12 mx-auto mb-3 rounded-xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 group-hover:bg-purple-500 group-hover:text-white transition-all">
                        <flux:icon
                            name="layout-dashboard"
                            class="w-6 h-6"
                        />
                    </div>
                    <h4 class="font-mono text-sm font-bold text-white">HTML5 / CSS3</h4>
                    <span class="text-[11px] text-slate-400">Web Standards</span>
                </div>

            </div>
        </section>

        <!-- CONTACTO SECTION -->
        <section
            id="contacto"
            class="py-20 border-t border-slate-800/80 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Contact Info Left Column -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="flex items-center space-x-2 text-brand-500 font-mono text-sm font-semibold">
                        <span>05.</span>
                        <span>CONTACTO</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">¡Iniciemos un Proyecto Juntos!</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        ¿Tienes una idea en mente o buscas un desarrollador Full-Stack con experiencia en Laravel y Vue?
                        Envíame un mensaje y te responderé a la brevedad.
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-center space-x-4 p-4 rounded-xl glass-panel border border-slate-800">
                            <div
                                class="w-10 h-10 rounded-lg bg-brand-500/10 border border-brand-500/30 flex items-center justify-center text-brand-500">
                                <flux:icon
                                    name="mail"
                                    class="w-5 h-5"
                                />
                            </div>
                            <div>
                                <span class="text-xs text-slate-400 font-mono block">Email Directo</span>
                                <a
                                    href="mailto:nelson.o.vasquez@gmail.com"
                                    class="text-white hover:text-brand-400 font-medium text-sm transition-colors"
                                >
                                    nelson.o.vasquez@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 p-4 rounded-xl glass-panel border border-slate-800">
                            <div
                                class="w-10 h-10 rounded-lg bg-brand-500/10 border border-brand-500/30 flex items-center justify-center text-brand-500">
                                <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                                <svg
                                    width="256px"
                                    height="250px"
                                    viewBox="0 0 256 250"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    preserveAspectRatio="xMidYMid"
                                    class="size-5 fill-brand-500 transition-colors"
                                >
                                    <g>
                                        <path
                                            d="M128.00106,0 C57.3172926,0 0,57.3066942 0,128.00106 C0,184.555281 36.6761997,232.535542 87.534937,249.460899 C93.9320223,250.645779 96.280588,246.684165 96.280588,243.303333 C96.280588,240.251045 96.1618878,230.167899 96.106777,219.472176 C60.4967585,227.215235 52.9826207,204.369712 52.9826207,204.369712 C47.1599584,189.574598 38.770408,185.640538 38.770408,185.640538 C27.1568785,177.696113 39.6458206,177.859325 39.6458206,177.859325 C52.4993419,178.762293 59.267365,191.04987 59.267365,191.04987 C70.6837675,210.618423 89.2115753,204.961093 96.5158685,201.690482 C97.6647155,193.417512 100.981959,187.77078 104.642583,184.574357 C76.211799,181.33766 46.324819,170.362144 46.324819,121.315702 C46.324819,107.340889 51.3250588,95.9223682 59.5132437,86.9583937 C58.1842268,83.7344152 53.8029229,70.715562 60.7532354,53.0843636 C60.7532354,53.0843636 71.5019501,49.6441813 95.9626412,66.2049595 C106.172967,63.368876 117.123047,61.9465949 128.00106,61.8978432 C138.879073,61.9465949 149.837632,63.368876 160.067033,66.2049595 C184.49805,49.6441813 195.231926,53.0843636 195.231926,53.0843636 C202.199197,70.715562 197.815773,83.7344152 196.486756,86.9583937 C204.694018,95.9223682 209.660343,107.340889 209.660343,121.315702 C209.660343,170.478725 179.716133,181.303747 151.213281,184.472614 C155.80443,188.444828 159.895342,196.234518 159.895342,208.176593 C159.895342,225.303317 159.746968,239.087361 159.746968,243.303333 C159.746968,246.709601 162.05102,250.70089 168.53925,249.443941 C219.370432,232.499507 256,184.536204 256,128.00106 C256,57.3066942 198.691187,0 128.00106,0 Z M47.9405593,182.340212 C47.6586465,182.976105 46.6581745,183.166873 45.7467277,182.730227 C44.8183235,182.312656 44.2968914,181.445722 44.5978808,180.80771 C44.8734344,180.152739 45.876026,179.97045 46.8023103,180.409216 C47.7328342,180.826786 48.2627451,181.702199 47.9405593,182.340212 Z M54.2367892,187.958254 C53.6263318,188.524199 52.4329723,188.261363 51.6232682,187.366874 C50.7860088,186.474504 50.6291553,185.281144 51.2480912,184.70672 C51.8776254,184.140775 53.0349512,184.405731 53.8743302,185.298101 C54.7115892,186.201069 54.8748019,187.38595 54.2367892,187.958254 Z M58.5562413,195.146347 C57.7719732,195.691096 56.4895886,195.180261 55.6968417,194.042013 C54.9125733,192.903764 54.9125733,191.538713 55.713799,190.991845 C56.5086651,190.444977 57.7719732,190.936735 58.5753181,192.066505 C59.3574669,193.22383 59.3574669,194.58888 58.5562413,195.146347 Z M65.8613592,203.471174 C65.1597571,204.244846 63.6654083,204.03712 62.5716717,202.981538 C61.4524999,201.94927 61.1409122,200.484596 61.8446341,199.710926 C62.5547146,198.935137 64.0575422,199.15346 65.1597571,200.200564 C66.2704506,201.230712 66.6095936,202.705984 65.8613592,203.471174 Z M75.3025151,206.281542 C74.9930474,207.284134 73.553809,207.739857 72.1039724,207.313809 C70.6562556,206.875043 69.7087748,205.700761 70.0012857,204.687571 C70.302275,203.678621 71.7478721,203.20382 73.2083069,203.659543 C74.6539041,204.09619 75.6035048,205.261994 75.3025151,206.281542 Z M86.046947,207.473627 C86.0829806,208.529209 84.8535871,209.404622 83.3316829,209.4237 C81.8013,209.457614 80.563428,208.603398 80.5464708,207.564772 C80.5464708,206.498591 81.7483088,205.631657 83.2786917,205.606221 C84.8005962,205.576546 86.046947,206.424403 86.046947,207.473627 Z M96.6021471,207.069023 C96.7844366,208.099171 95.7267341,209.156872 94.215428,209.438785 C92.7295577,209.710099 91.3539086,209.074206 91.1652603,208.052538 C90.9808515,206.996955 92.0576306,205.939253 93.5413813,205.66582 C95.054807,205.402984 96.4092596,206.021919 96.6021471,207.069023 Z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <span class="text-xs text-slate-400 font-mono block">GitHub</span>
                                <a
                                    href="https://github.com/Cybernelsk8"
                                    target="_blank"
                                    class="text-white hover:text-brand-400 font-medium text-sm transition-colors"
                                >
                                    github.com/Cybernelsk8
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Right Column -->
                <div class="lg:col-span-7">
                    <form
                        id="contact-form"
                        x-data="{
                            name: '',
                            submittedName: '',
                            showSuccess: false,
                            timeout: null,
                            submit(event) {
                                this.submittedName = this.name;
                                this.showSuccess = true;
                                event.target.reset();
                                this.name = '';
                                clearTimeout(this.timeout);
                                this.timeout = setTimeout(() => this.showSuccess = false, 5000);
                            }
                        }"
                        @submit.prevent="submit($event)"
                        class="glass-panel p-8 rounded-3xl border border-slate-800 space-y-6 shadow-2xl relative"
                    >

                        <!-- Alert Box Container (Notification) -->
                        <div
                            id="form-alert"
                            x-cloak
                            x-show="showSuccess"
                            x-transition
                            role="status"
                            aria-live="polite"
                            class="p-4 rounded-xl text-sm font-medium transition-all bg-emerald-500/10 border border-emerald-500/30 text-emerald-400"
                        >
                            ¡Gracias <strong x-text="submittedName"></strong>! Tu mensaje se ha enviado correctamente.
                            Me pondré en contacto contigo muy pronto.
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label
                                    for="name"
                                    class="block text-xs font-mono font-semibold text-slate-300 uppercase mb-2"
                                >
                                    Nombre completo
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    required
                                    x-model="name"
                                    placeholder="Tu nombre"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-all text-sm"
                                >
                            </div>
                            <div>
                                <label
                                    for="email"
                                    class="block text-xs font-mono font-semibold text-slate-300 uppercase mb-2"
                                >
                                    Correo Electrónico
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    required
                                    placeholder="tu@email.com"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-all text-sm"
                                >
                            </div>
                        </div>

                        <div>
                            <label
                                for="subject"
                                class="block text-xs font-mono font-semibold text-slate-300 uppercase mb-2"
                            >
                                Asunto
                            </label>
                            <input
                                type="text"
                                id="subject"
                                placeholder="Propuesta de proyecto / Consulta"
                                class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-all text-sm"
                            >
                        </div>

                        <div>
                            <label
                                for="message"
                                class="block text-xs font-mono font-semibold text-slate-300 uppercase mb-2"
                            >
                                Mensaje
                            </label>
                            <textarea
                                id="message"
                                rows="4"
                                required
                                placeholder="Escribe aquí tu mensaje o detalles de tu proyecto..."
                                class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 transition-all text-sm resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-mono text-xs font-bold uppercase tracking-wider shadow-lg shadow-brand-500/25 transition-all duration-300 hover:scale-[1.01] flex items-center justify-center space-x-2"
                        >
                            <flux:icon
                                name="send"
                                class="w-4 h-4"
                            />
                            <span>Enviar Mensaje</span>
                        </button>
                    </form>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-800/80 bg-brand-dark py-10 relative z-10">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center space-x-2 font-mono text-sm text-slate-400">
                <span class="text-brand-500 font-bold">Cybernelsk8 / DEV</span>
                <span>— Nelson Vásquez &copy; {{ date('Y') }}</span>
            </div>

            <div class="flex items-center space-x-6 text-slate-400">
                <a
                    href="https://github.com/Cybernelsk8"
                    target="_blank"
                    class="hover:text-brand-500 transition-colors"
                >
                    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg
                        width="256px"
                        height="250px"
                        viewBox="0 0 256 250"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        preserveAspectRatio="xMidYMid"
                        class="size-5 fill-slate-400 hover:fill-brand-500 transition-colors"
                    >
                        <g>
                            <path
                                d="M128.00106,0 C57.3172926,0 0,57.3066942 0,128.00106 C0,184.555281 36.6761997,232.535542 87.534937,249.460899 C93.9320223,250.645779 96.280588,246.684165 96.280588,243.303333 C96.280588,240.251045 96.1618878,230.167899 96.106777,219.472176 C60.4967585,227.215235 52.9826207,204.369712 52.9826207,204.369712 C47.1599584,189.574598 38.770408,185.640538 38.770408,185.640538 C27.1568785,177.696113 39.6458206,177.859325 39.6458206,177.859325 C52.4993419,178.762293 59.267365,191.04987 59.267365,191.04987 C70.6837675,210.618423 89.2115753,204.961093 96.5158685,201.690482 C97.6647155,193.417512 100.981959,187.77078 104.642583,184.574357 C76.211799,181.33766 46.324819,170.362144 46.324819,121.315702 C46.324819,107.340889 51.3250588,95.9223682 59.5132437,86.9583937 C58.1842268,83.7344152 53.8029229,70.715562 60.7532354,53.0843636 C60.7532354,53.0843636 71.5019501,49.6441813 95.9626412,66.2049595 C106.172967,63.368876 117.123047,61.9465949 128.00106,61.8978432 C138.879073,61.9465949 149.837632,63.368876 160.067033,66.2049595 C184.49805,49.6441813 195.231926,53.0843636 195.231926,53.0843636 C202.199197,70.715562 197.815773,83.7344152 196.486756,86.9583937 C204.694018,95.9223682 209.660343,107.340889 209.660343,121.315702 C209.660343,170.478725 179.716133,181.303747 151.213281,184.472614 C155.80443,188.444828 159.895342,196.234518 159.895342,208.176593 C159.895342,225.303317 159.746968,239.087361 159.746968,243.303333 C159.746968,246.709601 162.05102,250.70089 168.53925,249.443941 C219.370432,232.499507 256,184.536204 256,128.00106 C256,57.3066942 198.691187,0 128.00106,0 Z M47.9405593,182.340212 C47.6586465,182.976105 46.6581745,183.166873 45.7467277,182.730227 C44.8183235,182.312656 44.2968914,181.445722 44.5978808,180.80771 C44.8734344,180.152739 45.876026,179.97045 46.8023103,180.409216 C47.7328342,180.826786 48.2627451,181.702199 47.9405593,182.340212 Z M54.2367892,187.958254 C53.6263318,188.524199 52.4329723,188.261363 51.6232682,187.366874 C50.7860088,186.474504 50.6291553,185.281144 51.2480912,184.70672 C51.8776254,184.140775 53.0349512,184.405731 53.8743302,185.298101 C54.7115892,186.201069 54.8748019,187.38595 54.2367892,187.958254 Z M58.5562413,195.146347 C57.7719732,195.691096 56.4895886,195.180261 55.6968417,194.042013 C54.9125733,192.903764 54.9125733,191.538713 55.713799,190.991845 C56.5086651,190.444977 57.7719732,190.936735 58.5753181,192.066505 C59.3574669,193.22383 59.3574669,194.58888 58.5562413,195.146347 Z M65.8613592,203.471174 C65.1597571,204.244846 63.6654083,204.03712 62.5716717,202.981538 C61.4524999,201.94927 61.1409122,200.484596 61.8446341,199.710926 C62.5547146,198.935137 64.0575422,199.15346 65.1597571,200.200564 C66.2704506,201.230712 66.6095936,202.705984 65.8613592,203.471174 Z M75.3025151,206.281542 C74.9930474,207.284134 73.553809,207.739857 72.1039724,207.313809 C70.6562556,206.875043 69.7087748,205.700761 70.0012857,204.687571 C70.302275,203.678621 71.7478721,203.20382 73.2083069,203.659543 C74.6539041,204.09619 75.6035048,205.261994 75.3025151,206.281542 Z M86.046947,207.473627 C86.0829806,208.529209 84.8535871,209.404622 83.3316829,209.4237 C81.8013,209.457614 80.563428,208.603398 80.5464708,207.564772 C80.5464708,206.498591 81.7483088,205.631657 83.2786917,205.606221 C84.8005962,205.576546 86.046947,206.424403 86.046947,207.473627 Z M96.6021471,207.069023 C96.7844366,208.099171 95.7267341,209.156872 94.215428,209.438785 C92.7295577,209.710099 91.3539086,209.074206 91.1652603,208.052538 C90.9808515,206.996955 92.0576306,205.939253 93.5413813,205.66582 C95.054807,205.402984 96.4092596,206.021919 96.6021471,207.069023 Z"
                            ></path>
                        </g>
                    </svg>
                </a>
                <a
                    href="https://www.linkedin.com/in/nelson-v%C3%A1squez-393429195/"
                    target="_blank"
                    class="hover:text-brand-500 transition-colors"
                >
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg
                        width="256px"
                        height="256px"
                        viewBox="0 0 256 256"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        preserveAspectRatio="xMidYMid"
                        class="size-5 fill-slate-400 hover:fill-brand-500 transition-colors"
                    >
                        <g>
                            <path
                                d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055"
                            ></path>
                        </g>
                    </svg>

                </a>
                <a
                    href="mailto:nelson.o.vasquez@gmail.com"
                    class="hover:text-brand-500 transition-colors"
                    target="_blank"
                >
                    <flux:icon
                        name="mail"
                        class="size-5"
                    />
                </a>
                <a
                    href="https://wa.me/50248840150?text=Hola%20Nelson,%20me%20gustaría%20contactarte%20para%20hablar%20sobre%20un%20proyecto."
                    target="_blank"
                >
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg
                        width="256px"
                        height="258px"
                        viewBox="0 0 256 258"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid"
                        class="size-5 fill-slate-400 hover:fill-brand-500 transition-colors"
                    >
                        <title>WhatsApp</title>
                        <g>
                            <path
                                d="M128.534362,0 C162.632154,0.0167797743 194.636347,13.290872 218.701124,37.3827556 C242.767193,61.4746393 256.012889,93.5020654 256,127.557263 C255.971869,197.135888 199.924108,253.875359 130.640455,255.00319 L128.536943,255.0203 L128.484023,255.0203 C107.478684,255.012675 86.8337321,249.825746 68.4330329,239.974525 L67.5721511,239.509335 L4.26325641e-14,257.232649 L18.0834337,191.178422 C6.93004678,171.851995 1.06099804,149.92212 1.0700333,127.455293 C1.09842984,57.1777263 58.2787376,0 128.534362,0 Z M128.578247,21.5297412 C70.1407473,21.5297412 22.6139727,69.0526435 22.5907312,127.465619 C22.5831119,147.178041 28.0151402,166.387184 38.3097958,183.078384 L38.7883844,183.846952 L41.3079321,187.856027 L30.6050176,226.949029 L70.7022244,216.431983 L74.5706077,218.725649 C90.5784714,228.224681 108.891521,233.324608 127.588094,233.490269 L128.493058,233.494432 L128.536943,233.494432 C186.929267,233.494432 234.454751,185.967657 234.479283,127.550809 C234.489601,99.2433297 223.480779,72.6241539 203.477997,52.5994294 C183.475215,32.5747049 156.875401,21.5387764 128.578247,21.5297412 Z M83.4083858,68.5931358 C85.5303818,68.5931358 87.6575409,68.6124971 89.5123514,68.7080127 C91.4678404,68.8035284 94.0932297,67.9645397 96.677315,74.1743469 C97.6685436,76.5543557 99.1775305,80.2307392 100.720967,83.9868313 L101.052055,84.7924848 C103.536525,90.8373856 106.02081,96.8636995 106.498646,97.8209211 C107.293749,99.4137089 107.824248,101.276264 106.76325,103.399551 C105.702252,105.52671 105.170462,106.853603 103.578965,108.716158 C101.986177,110.57355 100.234627,112.868506 98.8018926,114.294787 C98.7240697,114.372295 98.6460932,114.450123 98.5683791,114.528424 L98.3364397,114.764902 C96.9161294,116.233847 95.7279512,117.917644 97.405299,120.792432 C99.262691,123.98188 105.654494,134.413737 115.122159,142.857835 C127.287496,153.707896 137.550264,157.071595 140.734549,158.666964 C143.918833,160.261043 145.777516,159.995148 147.634908,157.866698 C149.493591,155.743411 155.596266,148.569412 157.719552,145.379964 C159.842839,142.191807 161.966126,142.724888 164.885807,143.787177 C166.273238,144.292199 170.540323,146.298457 174.9776,148.435687 L176.357151,149.101654 C180.800645,151.251317 185.134043,153.390201 186.647883,154.148042 C189.833459,155.743411 191.956746,156.539805 192.751849,157.866698 C193.548243,159.197463 193.548243,165.572487 190.894457,173.012381 C188.240671,180.452274 175.516439,187.24292 169.396985,188.158063 C163.909998,188.9764 156.967044,189.318449 149.33741,186.895708 C144.712646,185.426832 138.779059,183.467471 131.180403,180.186379 C99.2317129,166.392114 78.3654182,134.220124 76.7739212,132.096837 L76.7739212,132.096837 L76.6655403,131.952082 C74.7246668,129.357515 63.7683053,114.507305 63.7683053,99.1478141 C63.7683053,83.4729234 71.9968485,75.7671347 74.9152385,72.5789776 C77.8349192,69.393402 81.2850989,68.5931358 83.4083858,68.5931358 Z"
                            ></path>
                        </g>
                    </svg>

                </a>
            </div>
        </div>
    </footer>

    @fluxScripts
</body>

</html>
