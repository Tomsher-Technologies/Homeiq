<section id="why-choose-us" class="pt-10 pb-10 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-normal text-center">
            @php
                $text = $page->getTranslation('heading5',$lang)    ; // Get this from DB
                $formattedText = preg_replace('/\[(.*?)\]/', '<span class="text-primary font-semibold">$1</span>', $text);
            @endphp

            {!! $formattedText !!}
        </h2>
        <p class="text-gray-600 mt-4 text-center">
            {{ $page->getTranslation('heading6',$lang) }}
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 xl:grid-cols-12 gap-8 mt-10">
            <!-- Left Side (Styled Circular Images) -->
            <div class="lg:col-span-5 flex flex-wrap justify-center gap-4 lg:gap-6">
                @php
                    $images = [
                        $page->image1,
                        $page->image2,
                        $page->image3,
                        $page->image4,
                        $page->image5,
                        $page->image6,
                    ];
                @endphp
                <div class="grid grid-cols-2 gap-4">
                    @foreach($images as $image)
                        <div class="bg-gray-100 rounded-full overflow-hidden">
                            <img src="{{ uploaded_asset($image) }}" class="w-full h-full object-cover" alt="Smart Home Feature">
                        </div>
                    @endforeach
                </div>
            </div>



<!-- Right Side (Features List) -->
 
<div class="lg:col-span-7  grid grid-cols-1 md:grid-cols-2 gap-6 py-12 px-6 rounded-2xl"
     style="background: url('{{ asset('images/bg-why-choose.png') }}') center/cover no-repeat;">
    @php
        $features = [
            ['icon' => $page->image, 'title' => $page->getTranslation('title1', $lang), 'description' => $page->getTranslation('content1', $lang)],
            ['icon' => $page->image7, 'title' => $page->getTranslation('title2', $lang), 'description' => $page->getTranslation('content2', $lang)],
            ['icon' => $page->image8, 'title' => $page->getTranslation('title3', $lang), 'description' => $page->getTranslation('content3', $lang)],
            ['icon' => $page->image, 'title' => $page->getTranslation('heading7', $lang), 'description' => $page->getTranslation('content4', $lang)]
        ];
    @endphp
    @foreach($features as $feature)
        <div class=" p-6 rounded-2xl border border-[#41B6E8] bg-[rgba(255,255,255,0.50)] shadow-md backdrop-blur-lg flex flex-col items-start text-left">
            <!-- Icon -->
            <img src="{{ uploaded_asset($feature['icon']) }}" class="w-[45px] h-[45px] mb-3" alt="{{ $feature['title'] }} Icon">
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
