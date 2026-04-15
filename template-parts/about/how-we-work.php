<section class="py-24 bg-[#fcfcfc] overflow-hidden" id="process-section">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span
                class="text-primary font-bold uppercase tracking-[0.3em] text-xs flex justify-center items-center gap-3">
                <span class="w-8 h-[1px] bg-primary/30"></span>
                Work Flow
                <span class="w-8 h-[1px] bg-primary/30"></span>
            </span>
            <h2 class="text-4xl md:text-5xl font-serif text-primary mt-4">How We Bring Your <br> <span
                    class="italic text-secondary">Vision to Life</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative">

            <div class="absolute top-1/4 left-0 w-full h-[1px] bg-primary/10 z-0 hidden lg:block"></div>

            <?php
            $steps = [
                ["01", "Discovery", "We listen to your goals and analyze site potential to create a strategic roadmap."],
                ["02", "Design", "Our architects craft bespoke blueprints that balance aesthetics with functionality."],
                ["03", "Build", "Using premium materials and expert labor, we transform designs into concrete reality."],
                ["04", "Deliver", "A final rigorous quality check ensures everything meets our 1988-standard of excellence."]
            ];
            foreach ($steps as $index => $step):
            ?>
                <div class="process-step relative z-10 group">
                    <div
                        class="w-16 h-16 bg-white border border-primary/10 flex items-center justify-center rounded-full mb-6 group-hover:border-primary transition-colors duration-500 shadow-sm relative overflow-hidden">
                        <span class="text-primary font-bold text-xl relative z-10"><?php echo $step[0]; ?></span>
                        <div
                            class="absolute inset-0 bg-primary translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        </div>
                        <span
                            class="text-white font-bold text-xl absolute z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"><?php echo $step[0]; ?></span>
                    </div>

                    <h4 class="text-xl font-bold text-primary mb-3"><?php echo $step[1]; ?></h4>
                    <p class="body-copy pr-4 mb-0">
                        <?php echo $step[2]; ?>
                    </p>

                    <div
                        class="absolute top-[31px] -left-2 w-2 h-2 bg-primary rounded-full hidden lg:block opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<script>
    gsap.from(".process-step", {
        scrollTrigger: {
            trigger: "#process-section",
            start: "top 80%",
        },
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.25,
        ease: "power3.out"
    });
</script>
