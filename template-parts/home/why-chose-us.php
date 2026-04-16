<section class="py-24 bg-gray-50 overflow-hidden" id="why-choose">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="reveal-text text-4xl font-extrabold text-secondary mb-6">Why Choose Capital Union</h2>
            <p class="reveal-text text-secondary mx-auto">
                We provide everything you need to find, buy, or rent your perfect property with confidence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="dynamic-features-wrapper">
        </div>
    </div>
</section>

<style>
    /* Base styles for elements before they appear */
    .reveal-text,
    .feature-box {
        opacity: 0;
        transform: translate3d(0, 40px, 0);
        transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1),
            transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        visibility: hidden;
        will-change: transform, opacity;
    }

    /* Active state when elements enter viewport */
    .reveal-active {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }

    /* Stagger effect: cards will appear one by one */
    .feature-box:nth-child(2) {
        transition-delay: 0.1s;
    }

    .feature-box:nth-child(3) {
        transition-delay: 0.2s;
    }

    .feature-box:nth-child(4) {
        transition-delay: 0.3s;
    }

    .feature-box:nth-child(5) {
        transition-delay: 0.4s;
    }

    .feature-box:nth-child(6) {
        transition-delay: 0.5s;
    }
</style>

<script>
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

    const featureWrapper = document.getElementById('dynamic-features-wrapper');

    // Render cards
    featureWrapper.innerHTML = features.map(feature => `
        <div class="feature-box p-10 bg-white rounded-[2.5rem] border border-transparent hover:border-primary/20 transition-all flex flex-col items-start shadow-sm group hover:shadow-xl duration-500">
            <div class="w-16 h-16 ${feature.bgColor} text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                ${feature.icon}
            </div>
            <h3 class="text-2xl font-bold text-secondary mb-4">${feature.title}</h3>
            <p class="body-copy text-secondary mb-0 max-w-none opacity-80">
                ${feature.description}
            </p>
        </div>
    `).join('');

    // Native JS Intersection Observer logic
    const observeElements = () => {
        const options = {
            root: null,
            threshold: 0.15, // Triggers when 15% of the element is visible
            rootMargin: "0px"
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-active');
                    // Stop observing once the animation is triggered
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        // Select all elements to watch
        const targets = document.querySelectorAll('.reveal-text, .feature-box');
        targets.forEach(target => observer.observe(target));
    };

    // Run when DOM is ready
    document.addEventListener('DOMContentLoaded', observeElements);
</script>