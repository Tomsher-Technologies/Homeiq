<section id="why-choose-us" class="pt-10 pb-10 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-normal text-center">
            Why <span class="text-[#41B6E8] font-semibold">Choose Us</span>
        </h2>
        <p class="text-gray-600 mt-4 text-center">
            Our professionals ensure a seamless setup for your smart home devices.<br>
            Enjoy secure and hassle-free installation tailored to your needs.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 mt-10">
            <!-- Left Side (Styled Circular Images) -->
            <div class="lg:col-span-5 flex flex-wrap justify-center gap-4 lg:gap-6">
                @php
                    $images = [
                        'smart-speaker.png',
                        'projector.png',
                        'smart-home-kit.png',
                        'smart-lock.png',
                        'thermostat.png',
                        'video-doorbell.png',
                    ];
                @endphp
                <div class="grid grid-cols-2 gap-4">
                    @foreach($images as $image)
                        <div class="bg-gray-100 rounded-full overflow-hidden">
                            <img src="{{ asset('images/why-choose-us/' . $image) }}" class="w-full h-full object-cover" alt="Smart Home Feature">
                        </div>
                    @endforeach
                </div>
            </div>



<!-- Right Side (Features List) -->
 
<div class="lg:col-span-7  grid grid-cols-1 md:grid-cols-2 gap-6 py-12 px-6 rounded-2xl"
     style="background: url('{{ asset('images/bg-why-choose.png') }}') center/cover no-repeat;">
    @php
        $features = [
            ['icon' => 'wifi.png', 'title' => 'Smart Home Solutions', 'description' => 'Transform your home with cutting-edge smart technology, offering convenience and control for a connected lifestyle.'],
            ['icon' => 'bolt.png', 'title' => 'Energy Savings', 'description' => 'Reduce energy costs and waste with our efficient solutions, making your home more sustainable and eco-friendly.'],
            ['icon' => 'shield.png', 'title' => 'Secure & Reliable', 'description' => 'Trust in our top-notch security systems to keep your home safe, offering peace of mind with reliable protection.'],
            ['icon' => 'lightbulb.png', 'title' => 'Expert Installation', 'description' => 'Our experienced team ensures flawless installation, setting up your systems to work perfectly from day one.']
        ];
    @endphp
    @foreach($features as $feature)
        <div class=" p-6 rounded-2xl border border-[#41B6E8] bg-[rgba(255,255,255,0.50)] shadow-md backdrop-blur-lg flex flex-col items-start text-left">
            <!-- Icon -->
            <img src="{{ asset('images/icons/' . $feature['icon']) }}" class="w-[40px] h-[40px] mb-3" alt="{{ $feature['title'] }} Icon">
            <!-- Title -->
            <h3 class="text-lg font-semibold text-gray-800">{{ $feature['title'] }}</h3>
            <!-- Description -->
            <p class="text-gray-600 mt-2 text-sm">
                {{ $feature['description'] }}
            </p>
        </div>
    @endforeach
</div>







        </div>
    </div>
</section>
