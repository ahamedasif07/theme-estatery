<section class="py-14 bg-[#fcfcfc] overflow-hidden" id="process-section">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-20 reveal-header">
            <span
                class="text-secondary font-bold uppercase tracking-[0.3em] text-xs flex justify-center items-center gap-3">
                <span class="w-8 h-[1px] bg-secondary"></span>
                Work Flow
                <span class="w-8 h-[1px] bg-secondary"></span>
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif text-secondary leading-tight font-semibold">
                How We Bring Your <br>
                <span class=" text-secondary">Vision to Life</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <div class="process-line absolute top-1/4 left-0 w-0 h-[1px] bg-primary/10 z-0 hidden lg:block"></div>

            <?php
            $steps = [
                ["01", "Discovery", "We listen to your goals and analyze site potential to create a strategic roadmap."],
                ["02", "Design", "Our architects craft bespoke blueprints that balance aesthetics with functionality."],
                ["03", "Build", "Using premium materials and expert labor, we transform designs into concrete reality."],
                ["04", "Deliver", "A final rigorous quality check ensures everything meets our 1988-standard of excellence."]
            ];
            foreach ($steps as $index => $step):
            ?>
                <div
                    class="process-step relative z-10 group p-8 rounded-xl bg-white border border-primary/5 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-500 opacity-0">

                    <div
                        class="step-icon w-16 h-16 bg-white border border-primary/10 flex items-center justify-center rounded-full mb-6 group-hover:border-primary transition-colors duration-500 shadow-sm relative overflow-hidden">
                        <span class="text-secondary font-bold text-xl relative z-10"><?php echo $step[0]; ?></span>
                        <div
                            class="absolute inset-0 bg-primary translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        </div>
                        <span
                            class="text-white font-bold text-xl absolute z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"><?php echo $step[0]; ?></span>
                    </div>

                    <h4 class="text-xl font-bold text-secondary mb-3"><?php echo $step[1]; ?></h4>
                    <p class="body-copy mb-0 text-gray-500 leading-relaxed">
                        <?php echo $step[2]; ?>
                    </p>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        gsap.registerPlugin(ScrollTrigger);

        const processTl = gsap.timeline({
            scrollTrigger: {
                trigger: "#process-section",
                start: "top 70%", // Starts slightly earlier for smoother flow
                toggleActions: "play none none none"
            }
        });

        // 1. Reveal Header First
        processTl.from(".reveal-header", {
                y: 30,
                opacity: 0,
                duration: 0.4,
                ease: "power3.out"
            })
            // 2. Animate the horizontal line across (Desktop)
            .to(".process-line", {
                width: "100%",
                duration: 0.6,
                ease: "expo.inOut"
            }, "-=0.4")
            // 3. Staggered reveal of the cards
            .to(".process-step", {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.2,
                ease: "power3.out"
            }, "-=0.8")
            // 4. Pop the dots into existence
            .to(".step-dot", {
                scale: 1,
                duration: 1,
                stagger: 0.2,
                ease: "back.out(2)"
            }, "-=0.6");
    });
</script>