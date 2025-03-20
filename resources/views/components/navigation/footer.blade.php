<section class="marquee-wrapper overflow-hidden">
    <div class="marquee overflow-hidden">
        @php
            $moving_text = get_setting('footer_moving_text');
        @endphp
        <div class="marquee-content">
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
        </div>
        <div class="marquee-content">
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
            <span>{{$moving_text}} -</span>
        </div>
    </div>
</section>

<style>
/* Marquee Wrapper */
.marquee-wrapper {
    overflow: hidden;
    background-color: white;
    padding: 20px 0;
    width: 100%;
    white-space: nowrap;
    position: relative;
}

/* Marquee Container */
.marquee {
    display: flex;
    width: 200%;
    animation: marquee-scroll 20s linear infinite;
}

/* Marquee Content */
.marquee-content {
    display: flex;
    gap: 5rem;
    font-size: 4rem; /* Large font */
    font-weight: 400;
    color: #4A4A4A; /* Gray text */
    flex-shrink: 0;
    min-width: 100%;
}

/* Smooth Scroll Animation */
@keyframes marquee-scroll {
    from {
        transform: translateX(0%);
    }
    to {
        transform: translateX(-100%);
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const marquee = document.querySelector(".marquee");
    const content = document.querySelector(".marquee-content");

    // Clone content for seamless looping
    const clone = content.cloneNode(true);
    marquee.appendChild(clone);
});
</script>






<footer class="container-fluid mx-4 sm:mx-6 md:mx-8 mb-4 md:mb-10 bg-[#1F1F1F] text-white py-12 rounded-3xl overflow-hidden">

    <div class="mx-auto px-6 lg:px-12">

        <!-- Top Section: Logo & Subscribe in One Row -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center border-b border-gray-600 pb-6">
    <!-- Logo & Tagline -->
    <div class="flex flex-col items-center md:items-start space-y-2">
        <img src="{{  get_setting('footer_logo') ? uploaded_asset(get_setting('footer_logo')) : asset('images/logo.svg') }}" alt="HomeIQ Logo" class="h-10">
        <p class="text-white text-sm">{!! get_setting('about_us_description', null, $lang) !!}</p>
    </div>

    <form id="newsletter-form">
    <!-- Subscribe Section -->
        <div class="flex flex-col md:flex-row md:items-center md:space-x-6 mt-6 md:mt-0">
            
            @csrf
            <div class="flex flex-col space-y-3 text-center md:text-left">
                <h3 class="text-white font-semibold text-sm">{{ get_setting('footer_newsletter_title') }}</h3>
                <input type="email" name="newsletter_email" id="newsletter_email" placeholder="Your Mail"  class="px-4 py-2 w-full bg-white text-black rounded-full focus:outline-none focus:ring-2 focus:ring-[#41B6E8] placeholder-gray-400">
                <p class="text-gray-400 text-sm">{{ get_setting('footer_newsletter_subtitle') }}</p>
            </div>

            <button class="mt-4 md:mt-0 px-5 py-3 border border-white text-white rounded-full text-sm hover:bg-white hover:text-black transition-all"  type="submit">
                {{ get_setting('footer_newsletter_button') }}
            </button>
        </div>
        <p id="messageNewsletter" class="mt-2 ml-[3rem]"></p>
    </form>
</div>

 
        <!-- Middle Section: Contact & Links in One Row -->
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-4 mt-8 items-start">
            <!-- Contact & Address (Left Side) with Right Border -->
            <div class="col-span-1 border-r border-gray-600 pr-6">
                <h3 class="text-gray-300 font-semibold text-sm">{{ get_setting('footer_contact_title') }}</h3>
                <p class="text-gray-400 text-sm mt-1">{{ get_setting('footer_phone') }}</p>
                <a href="mailto:info@homeiq.ae" class="text-[#41B6E8] text-sm font-medium hover:underline">{{ get_setting('footer_email') }}</a>

                <h3 class="text-gray-300 font-semibold text-sm mt-6">{{ get_setting('footer_address_title') }}</h3>
                <p class="text-gray-400 text-sm mt-1">
                    {!! nl2br(e(get_setting('footer_address'))) !!}
                </p>
            </div>

            <!-- Smart Solutions -->
            <div>
                <h3 class="text-gray-300 font-semibold text-sm">Smart Solutions</h3>
                <ul class="text-gray-400 text-sm mt-3 space-y-2">
                    <li><a href="#" class="hover:text-white">Home Automation</a></li>
                    <li><a href="#" class="hover:text-white">Security Systems</a></li>
                    <li><a href="#" class="hover:text-white">Energy Management</a></li>
                    <li><a href="#" class="hover:text-white">Smart Lightning</a></li>
                    <li><a href="#" class="hover:text-white">Climate Control</a></li>
                </ul>
            </div>

            <!-- Shop -->
            <div>
                <h3 class="text-gray-300 font-semibold text-sm">Shop</h3>
                <ul class="text-gray-400 text-sm mt-3 space-y-2">
                    <li><a href="#" class="hover:text-white">All Products</a></li>
                    <li><a href="#" class="hover:text-white">Smart Packages</a></li>
                    <li><a href="#" class="hover:text-white">Installation Services</a></li>
                    <li><a href="#" class="hover:text-white">New Arrivals</a></li>
                    <li><a href="#" class="hover:text-white">Special Offers</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h3 class="text-gray-300 font-semibold text-sm">Support</h3>
                <ul class="text-gray-400 text-sm mt-3 space-y-2">
                    <li><a href="#" class="hover:text-white">Installation Guide</a></li>
                    <li><a href="#" class="hover:text-white">Technical Support</a></li>
                    <li><a href="#" class="hover:text-white">FAQ</a></li>
                    <li><a href="#" class="hover:text-white">Warranty Info</a></li>
                    <li><a href="#" class="hover:text-white">Contact Support</a></li>
                </ul>
            </div>

            <!-- Resources & Company -->
            <div>
                <h3 class="text-gray-300 font-semibold text-sm">Resources</h3>
                <ul class="text-gray-400 text-sm mt-3 space-y-2">
                    <li><a href="#" class="hover:text-white">Blog</a></li>
                    <li><a href="#" class="hover:text-white">Knowledge Base</a></li>
                    <li><a href="#" class="hover:text-white">Video Tutorials</a></li>
                    <li><a href="#" class="hover:text-white">Case Studies</a></li>
                    <li><a href="#" class="hover:text-white">News</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-gray-300 font-semibold text-sm">Company</h3>
                <ul class="text-gray-400 text-sm mt-3 space-y-2">
                    <li><a href="#" class="hover:text-white">About Us</a></li>
                    <li><a href="#" class="hover:text-white">Our Team</a></li>
                    <li><a href="#" class="hover:text-white">Careers</a></li>
                    <li><a href="#" class="hover:text-white">Partners</a></li>
                    <li><a href="#" class="hover:text-white">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section: Copyright & Links -->
        <div class="mt-7 border-t border-gray-600 pt-4 flex flex-col md:flex-row md:items-center md:justify-between text-sm text-gray-400 space-y-2 md:space-y-0">
    <p class="text-center md:text-left">{{ str_replace("{year}", date('Y'), get_setting('frontend_copyright_text', null, $lang)) }} Designed by <a href="https://www.tomsher.com/" target="_blank">Tomsher</a></p>
    <div class="flex flex-wrap justify-center md:justify-end space-x-4 md:space-x-6">
        <a href="#" class="hover:text-white">Privacy Policy</a>
        <a href="#" class="hover:text-white">Terms of Service</a>
        <a href="#" class="hover:text-white">Customer Terms</a>
    </div>
</div>

    </div>
</footer>
