<section class="py-24 bg-white" id="investment-form-section">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row gap-20">

            <div class="w-full lg:w-1/3 lg:sticky lg:top-24 h-fit">
                <span class="text-secondary font-bold uppercase tracking-[0.3em] text-sm block mb-4">
                    Onboarding
                </span>
                <h2 class="text-4xl font-extrabold text-secondary mb-6 leading-tight">
                    Start Your <br>Investment Journey
                </h2>
                <p class="text-secondary opacity-80 text-base leading-relaxed mb-8">
                    Complete the inquiry form to help our capital relations team understand your objectives. We
                    prioritize privacy and strategic alignment for all our partners.
                </p>
                <div class="pt-8 border-t border-secondary/10">
                    <p class="text-secondary font-bold text-base uppercase tracking-widest mb-2">Capital Union</p>
                    <p class="text-secondary text-sm opacity-60 uppercase tracking-tighter">Investment Relations
                        Division</p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 bg-[#fcfcfc] p-8 md:p-12 rounded-2xl border border-secondary/5 shadow-sm">
                <form action="#" method="POST" class="space-y-10">

                    <div>
                        <label class="text-secondary font-bold uppercase tracking-widest text-sm mb-3 block">Your Name
                            *</label>
                        <input type="text" required
                            class="w-full bg-transparent border-b border-secondary/20 py-3 focus:border-secondary outline-none text-secondary text-base transition-all placeholder:text-secondary/30"
                            placeholder="Full legal name">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-12">
                        <?php
                        $questions = [
                            "Are you a client of Capital Union?",
                            "Do you currently own residential property in Spain?",
                            "Are you a tax resident of Spain? *"
                        ];
                        foreach ($questions as $q): ?>
                            <div>
                                <p class="text-secondary font-bold uppercase tracking-widest text-sm mb-4 leading-snug">
                                    <?php echo $q; ?></p>
                                <div class="flex gap-10">
                                    <label class="flex items-center gap-3 cursor-pointer group text-secondary text-base">
                                        <input type="radio" name="<?php echo md5($q); ?>" class="accent-secondary w-5 h-5">
                                        No
                                    </label>
                                    <label class="flex items-center gap-3 cursor-pointer group text-secondary text-base">
                                        <input type="radio" name="<?php echo md5($q); ?>" class="accent-secondary w-5 h-5">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div>
                        <p class="text-secondary font-bold uppercase tracking-widest text-sm mb-6">Investment Areas of
                            Interest *</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <?php
                            $interests = ["Land plots for resale", "Residential real estate for resale", "Residential real estate for rental income", "Commercial properties for rental income", "Hotels for ownership", "Agricultural enterprises", "Other (please specify)"];
                            foreach ($interests as $i): ?>
                                <label
                                    class="flex items-center gap-3 cursor-pointer text-secondary text-base opacity-90 hover:opacity-100 transition-opacity">
                                    <input type="checkbox" class="accent-secondary w-5 h-5"> <?php echo $i; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <label class="text-secondary font-bold uppercase tracking-widest text-sm mb-3 block">Maximum
                            preferred investment amount? *</label>
                        <input type="text" required
                            class="w-full bg-transparent border-b border-secondary/20 py-3 focus:border-secondary outline-none text-secondary text-base transition-all"
                            placeholder="e.g. €500,000+">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div>
                            <p class="text-secondary font-bold uppercase tracking-widest text-sm mb-4">Using personal
                                funds?</p>
                            <div class="flex gap-10">
                                <label class="flex items-center gap-3 text-secondary text-base"><input type="radio"
                                        name="funds" class="accent-secondary w-5 h-5"> No</label>
                                <label class="flex items-center gap-3 text-secondary text-base"><input type="radio"
                                        name="funds" class="accent-secondary w-5 h-5"> Yes</label>
                            </div>
                        </div>
                        <div>
                            <p class="text-secondary font-bold uppercase tracking-widest text-sm mb-4">Explore loan
                                options?</p>
                            <div class="flex gap-10">
                                <label class="flex items-center gap-3 text-secondary text-base"><input type="radio"
                                        name="loan" class="accent-secondary w-5 h-5"> No</label>
                                <label class="flex items-center gap-3 text-secondary text-base"><input type="radio"
                                        name="loan" class="accent-secondary w-5 h-5"> Yes</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="text-secondary font-bold uppercase tracking-widest text-sm mb-3 block">Additional
                            comments or preferences</label>
                        <textarea rows="4"
                            class="w-full bg-white border border-secondary/10 p-4 focus:border-secondary outline-none text-secondary text-base transition-all rounded-lg"></textarea>
                    </div>

                    <div class="space-y-8 pt-6">
                        <p class="text-secondary font-bold uppercase tracking-widest text-sm">Contact Details</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <input type="email" placeholder="Email Address"
                                class="w-full bg-transparent border-b border-secondary/20 py-3 focus:border-secondary outline-none text-secondary text-base">
                            <input type="text" placeholder="Phone (Country Code + Number)"
                                class="w-full bg-transparent border-b border-secondary/20 py-3 focus:border-secondary outline-none text-secondary text-base">
                        </div>
                        <p class="text-sm text-secondary opacity-60 italic">We support WhatsApp, Telegram, Signal, and
                            Viber.</p>
                    </div>

                    <div class="pt-6">
                        <button type="submit"
                            class="w-full md:w-auto px-12 py-5 bg-secondary text-white font-bold uppercase tracking-[0.2em] text-xs rounded hover:bg-primary transition-all duration-500 shadow-xl shadow-secondary/10">
                            Submit Application
                        </button>
                    </div>

                    <p class="text-xs text-secondary opacity-50 leading-relaxed text-justify">
                        Under no circumstances do we share, disclose, or transfer any data to third parties. Capital
                        Union ensures all personal information is securely stored in compliance with international data
                        protection standards.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>