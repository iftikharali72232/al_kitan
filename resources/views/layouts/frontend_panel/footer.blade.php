<div class="bg-[#E8D9C0] py-10 {{ request()->routeIs('contact') ? 'hidden' : '' }}">
    <div class="container-box md:flex items-center justify-between">
        <div class="md:w-1/2 w-full md:text-start text-center">
            <h3 class="text-xl text-[#224C5A] font-semibold uppercase mb-2">{{ trans('lang.contact_us') }}</h3>
            <p class="text-lg leading-4 mb-8">
                {{ trans('lang.for_questions_please_speak') }}
            </p>
            
            <button type="button" class="hover:bg-[#BE8951] hover:text-white transition-all duration-300 border border-[#224C5A] text-lg font-semibold uppercase px-[30px] py-[10px] rounded">{{ trans('lang.contact') }}</button>
        </div>
        
        <div class="md:w-1/2 w-full md:mt-0 mt-10 md:text-start text-center">
            <h3 class="text-xl text-[#224C5A] font-semibold uppercase mb-2">{{ trans('lang.email') }}</h3>
            <p class="text-lg mb-8">
                Alkitan.sa@gmail.com
            </p>

            <h3 class="text-xl text-[#224C5A] font-semibold uppercase mb-2">{{ trans('lang.phone') }}</h3>
            <p class="text-lg ">
                {{ trans('lang.hotline') }}: 800-236852
            </p>
            <p class="text-lg ">
                {{ trans('lang.customer_service') }}: +966012541236
            </p>

        </div>
    </div>
</div>

<div class="footer-bg py-10 {{ request()->routeIs('contact') ? 'hidden' : '' }}">
    <div class="container-box flex items-center justify-between">
        <div class="lg:w-1/2 w-full">
            <div class="bg-white/20 rounded p-5 grid md:grid-cols-2 gap-4 md:text-start text-center">
                <div class="">
                    <h3 class="text-lg text-white font-semibold uppercase mb-2">{{ trans('lang.explore_alkitan') }}</h3>
                    <ul class="text-white text-lg">
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.about') }}</a>
                        </li>
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.vision') }}</a>
                        </li>
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.mission') }}</a>
                        </li>
                    </ul>

                    <ul class="mt-4">
                        <li>
                            <a href="#">
                                <h3 class="text-lg text-white font-semibold uppercase">{{ trans('lang.terms_condition') }}</h3>
                            </a>
                        </li>    
                        <li>
                            <a href="#">
                                <h3 class="text-lg text-white font-semibold uppercase">{{ trans('lang.privacy_policy') }}</h3>
                            </a>
                        </li>    
                        <li>
                            <a href="#">
                                <h3 class="text-lg text-white font-semibold">{{ trans('lang.faqs') }}</h3>
                            </a>
                        </li>    
                    </ul>
                </div>

                <div class="">
                    <h3 class="text-lg text-white font-semibold uppercase mb-2">{{ trans('lang.innovations') }}</h3>
                    <ul class="text-white text-lg">
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.real_estate') }}</a>
                        </li>
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.development') }}</a>
                        </li>
                    </ul>

                    <h3 class="text-lg text-white font-semibold uppercase mt-4 mb-2">{{ trans('lang.services') }}</h3>
                    <ul class="text-white text-lg">
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.business_development') }}</a>
                        </li>
                        <li>
                            <a href="#" class="uppercase font-light">{{ trans('lang.corporate_governance') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white/20 rounded p-5 flex md:flex-row flex-col justify-center items-center mt-4">
                <h3 class="text-xl text-white font-semibold uppercase md:mb-0 mb-6">{{ trans('lang.stay_connected') }}</h3>
                <div class="flex items-center text-white gap-10 text-3xl ms-10">
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 lg:block hidden"></div>
    </div>
</div>

<div class="container-box border-t-3 border-[#216B7D] py-5 md:px-0 px-4 flex justify-center">
    <p class="md:text-xl text-lg text-center bg-gradient-to-r from-[#218599] to-[#B07546] bg-clip-text text-transparent font-semibold">
        {{ trans('lang.copyright_all_rights') }}
    </p>
</div>