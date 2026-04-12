<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <style>
        /* Active Desktop Link Underline - Using your theme variable */
        #primary-menu .current-menu-item>a {
            @apply text-primary relative;
        }

        #primary-menu .current-menu-item>a::after {
            content: '';
            @apply absolute left-0 w-full h-[3px] bg-primary rounded-t-full;
            bottom: -31px;
            /* Adjust based on your header height */
        }

        /* Mobile Menu List Items Style */
        #mobile-menu-canvas ul li a {
            @apply block w-full py-4 px-6 border border-gray-100 rounded-2xl text-center font-medium text-secondary hover: bg-surface transition-all;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="masthead" class="site-header bg-background border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4 h-20 flex justify-between items-center">

            <div class="site-branding flex items-center gap-4">
                <div
                    class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-primary-foreground font-bold text-xl shadow-lg shadow-primary/30">
                    E
                </div>
                <h1 class="text-xl font-bold text-foreground tracking-tight">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Estatery</a>
                </h1>
            </div>

            <nav id="site-navigation" class="hidden lg:flex items-center">
                <?php
                if (has_nav_menu('menu-1')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'flex gap-8 font-medium text-secondary items-center',
                        )
                    );
                }
                ?>
            </nav>

            <div class="flex items-center gap-3">
                <div class="hidden md:flex items-center gap-4 mr-4 border-r pr-4 border-gray-200">
                    <?php get_template_part('template-parts/header/language-switcher'); ?>

                    <button class="text-foreground p-2 rounded-full hover:bg-surface transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                        </svg>
                    </button>
                </div>

                <div class="hidden sm:flex items-center gap-2">
                    <a href="#"
                        class="px-5 py-2 text-sm font-semibold border border-gray-200 rounded-xl hover:bg-surface transition-all">Login</a>
                    <a href="#"
                        class="px-5 py-2 text-sm font-semibold bg-primary text-primary-foreground rounded-xl shadow-md hover:opacity-90 transition-all">Sign
                        Up</a>
                </div>

                <button id="mobile-menu-open" class="lg:hidden p-2 text-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12" />
                        <line x1="4" x2="20" y1="6" y2="6" />
                        <line x1="4" x2="20" y1="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu-canvas"
            class="fixed inset-0 bg-background z-[100] transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-10">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-primary-foreground font-bold">
                            E</div>
                        <span class="text-xl font-bold">Estatery</span>
                    </div>
                    <button id="mobile-menu-close" class="p-2 bg-surface rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mobile-nav-container">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'container' => false,
                        'menu_class' => 'flex flex-col gap-4',
                    ));
                    ?>
                </div>

                <div class="mt-10 flex flex-col gap-3 border-t pt-8 border-gray-100">
                    <a href="#"
                        class="w-full py-4 text-center font-semibold border border-gray-100 rounded-2xl hover:bg-surface">Login</a>
                    <a href="#"
                        class="w-full py-4 text-center font-semibold bg-primary text-primary-foreground rounded-2xl shadow-lg shadow-primary/20">Sign
                        Up</a>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('mobile-menu-open');
            const closeBtn = document.getElementById('mobile-menu-close');
            const canvas = document.getElementById('mobile-menu-canvas');

            if (openBtn && closeBtn && canvas) {
                const toggleMenu = (isOpen) => {
                    canvas.classList.toggle('translate-x-full', !isOpen);
                    document.body.style.overflow = isOpen ? 'hidden' : '';
                };

                openBtn.addEventListener('click', () => toggleMenu(true));
                closeBtn.addEventListener('click', () => toggleMenu(false));

                // Close menu when a link inside is clicked
                canvas.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => toggleMenu(false));
                });
            }
        });
    </script>
</body>

</html>