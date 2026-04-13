<section class="py-24 bg-white overflow-hidden" id="faq-section">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="reveal text-4xl font-extrabold text-slate-900 mb-6">Frequently Asked Questions</h2>
            <p class="reveal text-slate-500">Everything you need to know about the platform.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 items-start">
            <div class="lg:w-5/12 reveal">
                <div class="bg-gray-50 p-10 rounded-[2.5rem] border border-gray-100 sticky top-10">
                    <h3 class="text-3xl font-bold text-slate-900 mb-6">Need More Help?</h3>
                    <p class="text-slate-500 mb-8">Our support team is here for you.</p>
                    <a href="#"
                        class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold inline-block hover:bg-blue-600 transition-all">
                        Contact Support
                    </a>
                </div>
            </div>

            <div class="lg:w-7/12 space-y-4 w-full relative" id="accordion-container">
                <?php
                $faq_query = new WP_Query(['post_type' => 'faq', 'posts_per_page' => -1, 'order' => 'ASC']);
                if ($faq_query->have_posts()) :
                    while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
                        <div class="faq-item reveal bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden">
                            <button class="faq-toggle w-full flex items-center justify-between p-7 text-left outline-none">
                                <span class="text-lg font-bold text-slate-800 pr-4"><?php the_title(); ?></span>
                                <span class="faq-icon text-blue-500 transition-transform duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-answer hidden px-7 pb-7 text-slate-500 leading-relaxed">
                                <div class="w-full h-px bg-gray-200 mb-5"></div>
                                <div class="prose max-w-none">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </div>
</section>

<style>
    /* Active State Styling */
    .faq-item.active {
        background-color: #fff !important;
        border-color: #3b82f6 !important;
        box-shadow: 0 20px 40px -12px rgba(59, 130, 246, 0.15);
        z-index: 20;
        position: relative;
    }

    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }

    /* স্মুথ এনিমেশনের জন্য অতিরিক্ত ট্রানজিশন রিমুভ করা হয়েছে যা GSAP এর সাথে কনফ্লিক্ট করতে পারে */
    .faq-item {
        will-change: transform, opacity;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined') return;

        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        const faqToggles = document.querySelectorAll('.faq-toggle');
        const faqItems = document.querySelectorAll('.faq-item');

        faqToggles.forEach((toggle) => {
            toggle.addEventListener('click', () => {
                const parent = toggle.parentElement;
                const answer = toggle.nextElementSibling;
                const isActive = parent.classList.contains('active');

                if (!isActive) {
                    // ১. বর্তমান আইটেমকে Active করা
                    parent.classList.add('active');

                    // উত্তর দেখানোর এনিমেশন
                    gsap.set(answer, {
                        display: 'block'
                    });
                    gsap.fromTo(answer, {
                        opacity: 0,
                        height: 0
                    }, {
                        opacity: 1,
                        height: 'auto',
                        duration: 0.5,
                        ease: "power2.out"
                    });

                    // ২. বাকিগুলোকে দুই পাশে পাঠিয়ে দেওয়া
                    faqItems.forEach((item, index) => {
                        if (item !== parent) {
                            // জোড় সংখ্যা বামে (-150%) এবং বিজোড় ডানে (150%) যাবে
                            const xSide = index % 2 === 0 ? -150 : 150;

                            gsap.to(item, {
                                xPercent: xSide,
                                autoAlpha: 0, // opacity 0 এবং visibility hidden করে দেয়
                                scale: 0.7,
                                height: 0,
                                margin: 0,
                                padding: 0,
                                pointerEvents: 'none',
                                duration: 0.8,
                                ease: "expo.inOut"
                            });
                        }
                    });
                } else {
                    // ৩. বন্ধ করার সময় সব ফিরিয়ে আনা
                    parent.classList.remove('active');

                    gsap.to(answer, {
                        height: 0,
                        opacity: 0,
                        duration: 0.3,
                        onComplete: () => {
                            answer.style.display = 'none';
                        }
                    });

                    faqItems.forEach((item) => {
                        gsap.to(item, {
                            xPercent: 0,
                            autoAlpha: 1,
                            scale: 1,
                            height: "auto",
                            marginBottom: "1rem", // Tailwind space-y-4 এর সমান
                            pointerEvents: 'auto',
                            duration: 0.8,
                            ease: "back.out(1.2)" // বাইরে থেকে আসার সময় হালকা বাউন্স ইফেক্ট
                        });
                    });
                }
            });
        });

        // ইনিশিয়াল স্ক্রল এনিমেশন (Section Reveal)
        gsap.from(".reveal", {
            scrollTrigger: {
                trigger: "#faq-section",
                start: "top 80%"
            },
            opacity: 0,
            y: 40,
            stagger: 0.15,
            duration: 1.2,
            ease: "power4.out"
        });
    });
</script>