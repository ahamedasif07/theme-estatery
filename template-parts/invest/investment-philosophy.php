<section class="py-24 bg-white border-b border-secondary/5" id="philosophy-split">
    <div class="container mx-auto px-6 lg:px-12 ">

        <div class="max-w-4xl mb-10 mx-auto text-center">
            <div class="inline-flex items-center gap-4 mb-6 justify-center">
                <div class="w-10 h-[1px] bg-secondary/30"></div>
                <span class="text-secondary font-bold uppercase tracking-[0.3em] text-[10px]">
                    Institutional Grade Strategy
                </span>
                <div class="w-10 h-[1px] bg-secondary/30"></div>
            </div>

            <h2 class="text-3xl md:text-4xl font-black text-secondary mb-4 leading-tight">
                A Disciplined Approach To <br>
                Capital Preservation.
            </h2>
        </div>

        <div class="flex flex-col  lg:flex-row border border-secondary/10">

            <div class="w-full lg:w-1/2 p-2 border-r border-secondary/10">
                <div class="relative h-full min-h-[400px] overflow-hidden group">
                    <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                        alt="Capital Union Assets">
                    <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-secondary/80 to-transparent">
                        <p class="text-white text-xs font-mono uppercase tracking-widest opacity-70">Focus Area</p>
                        <h4 class="text-white text-lg font-bold">Physical Asset Integrity</h4>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col">
                <div class="p-8 md:p-16 border-b border-secondary/10">
                    <p class="text-secondary text-lg leading-relaxed mb-8 font-medium">
                        At Capital Union, our philosophy is rooted in the preservation of generational wealth. We
                        prioritize physical assets with long-term social utility.
                    </p>
                    <p class="text-secondary ">
                        "We do not chase market trends; instead, we focus on intrinsic value and economic resilience to
                        secure the future for our partners."
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 flex-grow">
                    <div
                        class="p-8 md:p-12 border-r border-secondary/10 group hover:bg-secondary/[0.02] transition-colors">
                        <span class="text-secondary/20 font-black text-2xl block mb-4">01</span>
                        <h4 class="text-secondary font-bold uppercase tracking-widest text-xs mb-3">Risk Discipline</h4>
                        <p class="text-secondary  text-[13px] leading-relaxed">
                            Conservative entry points with high-margin safety nets for every capital deployment.
                        </p>
                    </div>
                    <div class="p-8 md:p-12 group hover:bg-secondary/[0.02] transition-colors">
                        <span class="text-secondary/20 font-black text-2xl block mb-4">02</span>
                        <h4 class="text-secondary font-bold uppercase tracking-widest text-xs mb-3">Asset Preservation
                        </h4>
                        <p class="text-secondary  text-[13px] leading-relaxed">
                            Focusing on premium locations and sustainable structures that endure time.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        gsap.from("#philosophy-split", {
            scrollTrigger: {
                trigger: "#philosophy-split",
                start: "top 80%"
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power2.out"
        });
    });
</script>