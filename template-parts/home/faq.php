<?php
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

<section class="py-24 bg-white overflow-hidden" id="faq-section">
    <div class="container mx-auto px-6">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="reveal text-4xl font-extrabold text-slate-900 mb-6">Frequently Asked Questions</h2>
            <p class="reveal text-slate-500">Everything you need to know about the platform and how we work.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 items-start">
            <div class="lg:w-5/12 reveal">
                <div class="bg-gray-50 p-10 rounded-[2.5rem] border border-gray-100 sticky top-10">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 inline-block">Need More
                        Help?</span>
                    <h3 class="text-3xl font-bold text-slate-900 mb-6 leading-tight">Can't find the answer you need?
                    </h3>
                    <p class="text-slate-500 mb-8 leading-relaxed text-lg">Our dedicated support team is here to help
                        you with any questions about property listings or account management.</p>
                    <a href="#"
                        class="inline-flex items-center gap-2 bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-primary transition-all duration-300 group">
                        Contact Support
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            class="group-hover:translate-x-1 transition-transform">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="lg:w-7/12 space-y-4 w-full relative" id="accordion-container">
                <?php foreach ($faqs as $index => $faq): ?>
                <div
                    class="faq-item reveal bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden transition-colors duration-300">
                    <button
                        class="faq-toggle w-full flex items-center justify-between p-7 text-left focus:outline-none">
                        <span class="text-lg font-bold text-slate-800 pr-4"><?php echo $faq['question']; ?></span>
                        <span class="faq-icon text-primary transition-transform duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer hidden px-7 pb-7 text-slate-500 leading-relaxed text-base">
                        <div class="w-full h-px bg-gray-200 mb-5"></div>
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.faq-item.active {
    background-color: #fff !important;
    border-color: #3b82f6 !important;
    box-shadow: 0 15px 35px -10px rgba(59, 130, 246, 0.1);
    z-index: 10;
    position: relative;
}

.faq-item.active .faq-icon {
    transform: rotate(180deg);
}

#accordion-container {
    perspective: 1000px;
}
</style>

<script>
window.addEventListener('load', () => {
    if (typeof gsap === 'undefined') return;

    const faqToggles = document.querySelectorAll('.faq-toggle');
    const faqItems = document.querySelectorAll('.faq-item');

    faqToggles.forEach((toggle) => {
        toggle.addEventListener('click', () => {
            const parent = toggle.parentElement;
            const answer = toggle.nextElementSibling;
            const isActive = parent.classList.contains('active');

            if (!isActive) {
                // ১. ওপেন হওয়া আইটেমটিকে Active মার্ক করা
                parent.classList.add('active');
                answer.style.display = 'block';

                // ওপেন হওয়া অ্যানিমেশন
                gsap.from(answer, {
                    opacity: 0,
                    y: -10,
                    duration: 0.4
                });

                // ২. বাকিগুলোকে 'উধাও' করে দেওয়া এবং জায়গা খালি করা
                faqItems.forEach((item, index) => {
                    if (item !== parent) {
                        const xMove = index % 2 === 0 ? -100 : 100;

                        gsap.to(item, {
                            x: xMove,
                            opacity: 0,
                            scale: 0.8,
                            height: 0, // হাইট ০ করে দেওয়া যাতে জায়গা না নেয়
                            marginBottom: 0, // মার্জিন ০ করা
                            marginTop: 0,
                            padding: 0, // প্যাডিং থাকলে তাও ০ করা
                            pointerEvents: 'none',
                            duration: 0.6,
                            ease: "power3.inOut",
                            onComplete: () => {
                                item.style.visibility =
                                    "hidden"; // পুরোপুরি হাইড করা
                            }
                        });
                    }
                });
            } else {
                // ৩. বন্ধ করার সময় সবকিছু আগের জায়গায় ফিরিয়ে আনা
                parent.classList.remove('active');
                answer.style.display = 'none';

                faqItems.forEach((item) => {
                    item.style.visibility = "visible"; // আবার ভিজিবল করা

                    gsap.to(item, {
                        x: 0,
                        opacity: 1,
                        scale: 1,
                        height: "auto", // অটো হাইটে ফিরে আসা
                        marginBottom: "1rem", // আপনার অরিজিনাল মার্জিন (space-y-4 অনুযায়ী ১rem)
                        pointerEvents: 'auto',
                        duration: 0.6,
                        ease: "back.out(1.5)"
                    });
                });
            }
        });
    });

    // ইনিশিয়াল রিভিল (Scroll Entrance)
    gsap.from(".reveal", {
        scrollTrigger: {
            trigger: "#faq-section",
            start: "top 80%"
        },
        opacity: 0,
        y: 30,
        stagger: 0.1,
        duration: 1,
        ease: "power3.out"
    });
});
</script>