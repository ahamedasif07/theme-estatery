<?php

/**
 * Dynamic Page Banner Function with Default Values
 */
function get_page_banner($title = "Welcome", $image_url = "")
{
    // Default Image URL - Ekhane apnar pochondo moto ekta standard image link boshaben
    $default_image = "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop";

    // Jodhi image_url empty thake, tobe default image set koro
    $final_image = (!empty($image_url)) ? $image_url : $default_image;

    // Jodhi title empty thake, tobe default title set koro
    $final_title = (!empty($title)) ? $title : "Welcome";
?>

    <section class="relative w-full h-[400px] md:h-[450px] flex items-center justify-center overflow-hidden bg-slate-100">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $final_image; ?>" alt="<?php echo $final_title; ?>" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-[2px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight">
                <?php echo $final_title; ?>
            </h1>

            <nav class="flex justify-center items-center gap-3 text-white/90 font-medium">
                <a href="<?php echo home_url(); ?>" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                    HOME
                </a>
                <span class="text-blue-500 text-xl">•</span>
                <span class="uppercase tracking-widest text-sm"><?php echo $final_title; ?></span>
            </nav>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
            <svg class="relative block w-full h-[50px]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 120 309.19 0 1200 120z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>
<?php
}
?>