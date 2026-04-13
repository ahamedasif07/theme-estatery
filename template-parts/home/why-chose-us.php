<section class="py-24 bg-gray-50" id="why-choose">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="reveal text-4xl font-extrabold text-secondary mb-6">Why Choose Capital Union</h2>
            <p class="reveal text-text-gray">We provide everything you need to find, buy, or rent your perfect property
                with confidence.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="dynamic-features-wrapper">
        </div>
    </div>
</section>

<script>
    // 1. Feature Data Array
    // 1. Feature Data Array (Updated with 6 cards)
    const features = [{
            id: 1,
            title: "Verified Listings",
            description: "All properties are verified and authenticated to ensure you get accurate information.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>`,
            bgColor: "bg-blue-50"
        },
        {
            id: 2,
            title: "Market Insights",
            description: "Access real-time market data and trends to make informed investment decisions.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m23 6-9.5 9.5-5-5L1 18"></path><path d="M17 6h6v6"></path></svg>`,
            bgColor: "bg-blue-50"
        },
        {
            id: 3,
            title: "Expert Agents",
            description: "Work with experienced real estate professionals who understand your needs.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>`,
            bgColor: "bg-blue-50"
        },
        {
            id: 4,
            title: "24/7 Support",
            description: "Our dedicated support team is available around the clock to assist you.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>`,
            bgColor: "bg-blue-50"
        },
        {
            id: 5,
            title: "Best Deals",
            description: "Get access to exclusive listings and the best deals in the market.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>`,
            bgColor: "bg-blue-50"
        },
        {
            id: 6,
            title: "Personalized Service",
            description: "Receive tailored recommendations based on your preferences and requirements.",
            icon: `<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path><circle cx="9" cy="9" r="1"></circle><circle cx="12" cy="9" r="1"></circle><circle cx="15" cy="9" r="1"></circle></svg>`,
            bgColor: "bg-blue-50"
        }
    ];
    // 2. Render Function
    const featureWrapper = document.getElementById('dynamic-features-wrapper');

    featureWrapper.innerHTML = features.map(feature => `
        <div class="reveal feature-box p-10 bg-white rounded-[2.5rem] border border-transparent hover:border-primary/20 transition-all flex flex-col items-start shadow-sm group hover:shadow-xl duration-500">
            <div class="w-16 h-16 ${feature.bgColor} text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                ${feature.icon}
            </div>
            <h3 class="text-2xl font-bold text-secondary mb-4">${feature.title}</h3>
            <p class="text-text-gray text-base leading-relaxed">
                ${feature.description}
            </p>
        </div>
    `).join('');

    // 3. GSAP Animation (Ager script-er window load event-er bhitore thakbe)
    // Jodi alada file e hoy tobe nichei add kore din
    window.addEventListener('load', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Common Reveal Animation
        gsap.utils.toArray('.reveal').forEach((el) => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 90%",
                },
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power4.out"
            });
        });

        // Staggered Entrance for Feature Boxes
        gsap.from(".feature-box", {
            scrollTrigger: {
                trigger: "#why-choose",
                start: "top 75%"
            },
            opacity: 0,
            y: 40,
            stagger: 0.2,
            duration: 1,
            ease: "power3.out"
        });
    });
</script>