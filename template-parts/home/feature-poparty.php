<?php

/**
 * Template Part: Premium Featured Properties Carousel
 * Fixed: Working Images & Missing View All Button
 */

$properties = [
    ['title' => 'Spacious Loft in Arts District', 'location' => 'Los Angeles, CA', 'price' => '$2,500/mo', 'beds' => 1, 'baths' => 1, 'sqft' => 1200, 'type' => 'Rent', 'featured' => true, 'slug' => 'spacious-loft', 'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200'],
    ['title' => 'Modern Luxury Villa', 'location' => 'Miami Beach, FL', 'price' => '$1,200,000', 'beds' => 5, 'baths' => 4, 'sqft' => 4500, 'type' => 'Buy', 'featured' => true, 'slug' => 'luxury-villa', 'image' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=1200'],
    ['title' => 'Downtown Luxury Apartment', 'location' => 'New York, NY', 'price' => '$3,800/mo', 'beds' => 2, 'baths' => 2, 'sqft' => 1100, 'type' => 'Rent', 'featured' => false, 'slug' => 'downtown-apt', 'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=1200'],
    ['title' => 'Skyline Penthouse', 'location' => 'Chicago, IL', 'price' => '$2,500,000', 'beds' => 4, 'baths' => 3, 'sqft' => 3200, 'type' => 'Buy', 'featured' => true, 'slug' => 'skyline-penthouse', 'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200'],
    ['title' => 'Cozy Garden Cottage', 'location' => 'Austin, TX', 'price' => '$550,000', 'beds' => 3, 'baths' => 2, 'sqft' => 1800, 'type' => 'Buy', 'featured' => false, 'slug' => 'garden-cottage', 'image' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=1200'],
    ['title' => 'Minimalist Studio', 'location' => 'Seattle, WA', 'price' => '$1,800/mo', 'beds' => 1, 'baths' => 1, 'sqft' => 750, 'type' => 'Rent', 'featured' => false, 'slug' => 'minimalist-studio', 'image' => 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?q=80&w=1200'],
    ['title' => 'Riverside Mansion', 'location' => 'London, UK', 'price' => '$5,000,000', 'beds' => 6, 'baths' => 6, 'sqft' => 7000, 'type' => 'Buy', 'featured' => true, 'slug' => 'riverside-mansion', 'image' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=1200'],
    ['title' => 'Urban Edge Loft', 'location' => 'Berlin, DE', 'price' => '$2,200/mo', 'beds' => 2, 'baths' => 1, 'sqft' => 1350, 'type' => 'Rent', 'featured' => false, 'slug' => 'urban-loft', 'image' => 'https://images.unsplash.com/photo-1560448204-61dc36dc98c8?q=80&w=1200'],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Premium Look & No Underlines */
    .prop-carousel-wrapper a {
        text-decoration: none !important;
    }

    .prop-carousel-wrapper .custom-dot {
        width: 10px !important;
        height: 10px !important;
        background: #cbd5e1 !important;
        opacity: 1 !important;
        border-radius: 50px !important;
        transition: all 0.3s ease !important;
    }

    .prop-carousel-wrapper .swiper-pagination-bullet-active {
        background: #3b82f6 !important;
        width: 35px !important;
    }

    .property-card:hover .img-zoom {
        transform: scale(1.1);
    }
</style>

<section class="prop-carousel-wrapper py-24 bg-[#fcfdfe]">
    <div class="container mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-primary font-bold tracking-[0.2em] uppercase text-[10px] mb-3 inline-block">Exclusive
                Listings</span>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-5 leading-tight">Featured Properties</h2>
            <div class="w-16 h-1 bg-primary mx-auto mb-6 rounded-full"></div>
            <p class="text-slate-500 text-lg leading-relaxed">Handpicked properties just for you. Find the perfect home
                that fits your lifestyle and budget.</p>
        </div>

        <div class="relative group">
            <div class="swiper propertySlider pb-12">
                <div class="swiper-wrapper">
                    <?php foreach ($properties as $property) : ?>
                        <div class="swiper-slide h-auto">
                            <div
                                class="property-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:shadow-[0_25px_50px_-12px_rgba(0,0,0,0.12)] transition-all duration-500 h-full flex flex-col group">

                                <div class="relative h-72 overflow-hidden">
                                    <img src="<?php echo $property['image']; ?>"
                                        class="img-zoom w-full h-full object-cover transition-transform duration-[1.5s]"
                                        alt="<?php echo $property['title']; ?>">

                                    <div class="absolute top-6 left-6 flex gap-2">
                                        <span
                                            class="bg-primary text-white text-[10px] font-black px-4 py-2 rounded-xl uppercase tracking-widest shadow-lg shadow-primary/20">
                                            <?php echo $property['type']; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="p-9 flex flex-col flex-grow">
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3  transition-colors">
                                        <a href="<?php echo home_url('/property/' . $property['slug']); ?>"
                                            class="text-inherit">
                                            <?php echo $property['title']; ?>
                                        </a>
                                    </h3>

                                    <div class="flex items-center text-slate-400 text-sm font-medium mb-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" class="mr-2 text-primary">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <?php echo $property['location']; ?>
                                    </div>

                                    <div class="grid grid-cols-3 gap-4 py-6 border-y border-slate-50 mb-8 text-center">
                                        <div>
                                            <span
                                                class="block text-slate-900 font-black text-sm"><?php echo $property['beds']; ?></span>
                                            <span class="text-[10px] text-slate-400 uppercase font-bold">Beds</span>
                                        </div>
                                        <div class="border-x border-slate-50">
                                            <span
                                                class="block text-slate-900 font-black text-sm"><?php echo $property['baths']; ?></span>
                                            <span class="text-[10px] text-slate-400 uppercase font-bold">Baths</span>
                                        </div>
                                        <div>
                                            <span
                                                class="block text-slate-900 font-black text-sm"><?php echo number_format($property['sqft']); ?></span>
                                            <span class="text-[10px] text-slate-400 uppercase font-bold">Sqft</span>
                                        </div>
                                    </div>

                                    <div class="mt-auto flex justify-between items-center">
                                        <span
                                            class="text-primary font-black text-xl tracking-tighter"><?php echo $property['price']; ?></span>
                                        <a href="<?php echo home_url('/property/' . $property['slug']); ?>"
                                            class="px-6 py-3 bg-slate-900 text-white rounded-2xl font-bold text-[11px] hover:bg-primary transition-all duration-300 flex items-center gap-2">
                                            DETAILS
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination-premium flex justify-center mt-12 gap-2"></div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="<?php echo home_url('/all-properties'); ?>"
                class="inline-flex items-center gap-4 bg-primary text-white font-black px-6 py-3 rounded-[1.5rem] hover:bg-slate-900 transition-all duration-500 shadow-2xl shadow-primary/20 hover:-translate-y-1 group">
                ALL PROPERTIES
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="3" class="transition-transform group-hover:translate-x-2">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.propertySlider', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination-premium',
                clickable: true,
                renderBullet: function(index, className) {
                    return `<span class="${className} custom-dot"></span>`;
                }
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    });
</script>