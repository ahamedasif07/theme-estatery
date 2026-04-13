<?php
// ১. FAQ ডাটা অ্যারে
$faqs = [
    [
        "question" => "How do I start searching for a property?",
        "answer"   => "You can start by using our search bar at the top of the page. Filter by location, price, and property type to find exactly what you're looking for."
    ],
    [
        "question" => "Are the property listings verified?",
        "answer"   => "Yes, every listing on Estatery goes through a strict verification process by our expert team to ensure accuracy and reliability."
    ],
    [
        "question" => "Can I list my own property for sale?",
        "answer"   => "Absolutely! You can click on the 'Sell Property' button in the menu, create an account, and follow the simple steps to list your property."
    ],
    [
        "question" => "Is there any commission fee for buyers?",
        "answer"   => "We provide transparent pricing. While browsing is free, specific transaction fees may apply depending on the service level and agent involved."
    ],
    [
        "question" => "How can I contact a real estate agent?",
        "answer"   => "Each property detail page has a 'Contact Agent' button. You can send an inquiry or call them directly through the provided information."
    ]
];
?>

<section class="py-24 bg-white" id="faq-section">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="reveal text-4xl font-extrabold text-secondary mb-6">Frequently Asked Questions</h2>
            <p class="reveal text-text-gray">Everything you need to know about the platform and how we work.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <?php foreach ($faqs as $index => $faq): ?>
                <div
                    class="faq-item reveal bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden transition-all duration-300">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-lg font-semibold text-secondary"><?php echo $faq['question']; ?></span>
                        <span class="faq-icon text-primary transition-transform duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-text-gray leading-relaxed">
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    /* FAQ Specific Styling */
    .faq-item.active {
        background-color: #fff;
        border-color: #3b82f6;
        /* primary color */
        box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.1);
    }

    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }
</style>

<script>
    window.addEventListener('load', () => {
        // ১. FAQ Accordion Logic
        const faqToggles = document.querySelectorAll('.faq-toggle');

        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const parent = toggle.parentElement;
                const answer = toggle.nextElementSibling;
                const isActive = parent.classList.contains('active');

                // Close all other open FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').style.display = 'none';
                });

                // Toggle Current
                if (!isActive) {
                    parent.classList.add('active');
                    answer.style.display = 'block';

                    // GSAP Animation for smooth opening
                    gsap.from(answer, {
                        opacity: 0,
                        y: -10,
                        duration: 0.4,
                        ease: "power2.out"
                    });
                }
            });
        });

        // ২. Scroll Reveal for FAQ Section
        if (typeof gsap !== 'undefined') {
            gsap.from(".faq-item", {
                scrollTrigger: {
                    trigger: "#faq-section",
                    start: "top 80%"
                },
                opacity: 0,
                x: -30,
                stagger: 0.1,
                duration: 1,
                ease: "power3.out"
            });
        }
    });
</script>