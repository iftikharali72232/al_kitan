@extends('layouts.app')

@section('content')

    <div class="container-box flex md:flex-row flex-col md:justify-between py-10">
        <div class="md:w-1/3 w-full flex items-center justify-center">
            <img src="<?= asset("img/about1.png") ?>" class="lg:w-[200px] w-[150px] mb-[-220px] me-[-50px] z-10">
            <img src="<?= asset("img/about2.png") ?>" class="lg:w-[200px] w-[150px]">
        </div>

        <div class="md:w-2/3 w-full">
            <div class="flex justify-between bg-[#F4EDE0] md:p-6 p-3 rounded-lg shadow-sm md:mb-[-220px] lg:mt-[80px] md:mt-0 mt-[150px] lg:ms-[-90px] z-10">
                <div class="w-auto">
                    <img src="<?= asset("img/about-star.png") ?>" class="lg:w-[50px] w-[40px]">
                </div>

                <div class="w-full ps-[10px]">
                    <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">{{ trans('lang.about_us_title') }}</h4>
                    <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
                    <p class="lg:text-xl text-lg mt-6">
                        {{ trans('lang.about_us_desc1') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D6BA8E] lg:pt-30 md:pt-40 pt-10 md:pb-20 pb-10 md:px-0 px-5 ">
        <div class="container-box text-xl md:text-start text-center">
            <p>
                {{ trans('lang.about_us_desc2') }}
            </p>
            <p>
                {{ trans('lang.about_us_desc3') }}
            </p>
            <p>
                {{ trans('lang.about_us_desc4') }}
            </p>
        </div>
    </div>

    <div class="container-box md:py-20 py-10 md:px-0 px-10">
        <div class="flex justify-between">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="w-[50px]">
            </div>

            <div class="w-full ps-[10px]">
                <h4 class="text-3xl font-semibold uppercase text-[#235967]">{{ trans('lang.vision_mission') }}</h4>
                <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
            </div>
        </div>        

        <div class="grid md:grid-cols-2 gap-4 mt-10">
            <!-- Card 1 -->
            <div class="flex flex-col items-center">
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl md:max-w-md overflow-hidden">
                    <div class="absolute top-0 {{ app()->getLocale() == 'ar' ? 'left-auto right-0' : 'left-0' }} h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex justi space-x-4 rotate-90 space-y-1">
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                            <p>{{ trans('lang.vision') }}</p>
                        </div>
                    </div>

                    <!-- Bottom Border -->
                    <div class="absolute bottom-0 left-0 w-full bg-transparent text-white text-xs font-semibold flex justify-around p-1 rounded-b-2xl">
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                        <span>{{ trans('lang.vision') }}</span>
                    </div>

                    <div class="bg-white rounded-bl-xl px-8 py-10"> <!-- Offset due to left border -->
                        <h2 class="text-3xl font-bold text-gray-800 lg:pb-10 pb-6">{{ trans('lang.vision') }}</h2>
                        <p class="text-gray-700 text-xl mt-2">
                            {{ trans('lang.vision_desc') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="flex flex-col items-center">
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl md:max-w-md overflow-hidden">
                    <div class="absolute top-0 {{ app()->getLocale() == 'ar' ? 'left-auto right-0' : 'left-0' }} h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex space-x-4 rotate-90 space-y-1">
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                            <p>{{ trans('lang.mission') }}</p>
                        </div>
                    </div>

                    <!-- Bottom Border -->
                    <div class="absolute bottom-0 left-0 w-full bg-transparent text-white text-xs font-semibold flex justify-around p-1 rounded-b-2xl">
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                        <span>{{ trans('lang.mission') }}</span>
                    </div>

                    <div class="bg-white rounded-bl-xl  px-8 py-10"> <!-- Offset due to left border -->
                        <h2 class="text-3xl font-bold text-gray-800 lg:pb-10 pb-6">{{ trans('lang.mission') }}</h2>
                        <p class="text-gray-700 text-xl mt-2">
                            {{ trans('lang.mission_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F4EDE0] py-20">
        <div class="container-box relative">
            <div class="flex justify-between items-center mb-6 relative">
                <div class="absolute w-full border-b-2 border-[#C9A06E] z-1"></div>
                <div class="relative z-2">
                    <button id="btn-2009" class="tab-button transition-all duration-300 font-semibold w-[70px] h-[70px] p-2 bg-brown-300 border border-gray-400 text-gray-700 rounded-full" onclick="changeTab('2009')">2009</button>
                </div>

                <div class="relative z-2">
                    <button id="btn-2011" class="tab-button transition-all duration-300 font-semibold w-[70px] h-[70px] p-2 bg-brown-300 border border-gray-400 text-gray-700 rounded-full" onclick="changeTab('2011')">2011</button>
                </div>

                <div class="relative z-2">
                    <button id="btn-2015" class="tab-button transition-all duration-300 font-semibold w-[90px] h-[90px] text-xl p-2 bg-brown-400 border-0 text-[#224C5A] rounded-full" onclick="changeTab('2015')">2015</button>
                </div>

                <div class="relative z-2">
                    <button id="btn-2019" class="tab-button transition-all duration-300 font-semibold w-[70px] h-[70px] p-2 bg-brown-300 border border-gray-400 text-gray-700 rounded-full" onclick="changeTab('2019')">2019</button>
                </div>

                <div class="relative z-2">
                    <button id="btn-2022" class="tab-button transition-all duration-300 font-semibold w-[70px] h-[70px] p-2 bg-brown-300 border border-gray-400 text-gray-700 rounded-full" onclick="changeTab('2022')">2022</button>
                </div>
            </div>
            
            <div id="2009" class="tab-content hidden">Content for 2009...</div>
            <div id="2011" class="tab-content hidden">Content for 2011...</div>
            <div id="2015" class="tab-content"> 
                <div class="flex lg:flex-row flex-col lg:justify-between lg:p-10">
                    <div class="lg:w-2/3 w-full lg:order-1 order-2 space-y-4 md:text-start text-center">
                        <p class="text-xl">
                            {{ trans('lang.2015_tab_p1') }}
                        </p>

                        <p class="text-xl">
                            {{ trans('lang.2015_tab_p2') }}
                        </p>

                        <p class="text-xl">
                            {{ trans('lang.2015_tab_p3') }}
                        </p>
                    </div>

                    <div class="lg:w-1/3 w-full lg:order-2 order-1 flex lg:flex-col lg:items-end lg:justify-normal justify-center lg:mb-0 mb-4">
                        <img src="<?= asset("img/timeline1.png") ?>" class="md:w-[270px] w-[150px]">
                        <img src="<?= asset("img/timeline2.png") ?>" class="md:w-[270px] w-[150px]">
                    </div>
                </div>
            </div>
            <div id="2019" class="tab-content hidden">Content for 2019...</div>
            <div id="2022" class="tab-content hidden">Content for 2022...</div>
        </div>
    </div>

    <script>
        function changeTab(year) {
            $('.tab-content').addClass('hidden');
            $('#' + year).removeClass('hidden');
            
            $('.tab-button').removeClass('bg-brown-400 text-xl border-0 w-[90px] h-[90px]').addClass('bg-brown-300 border border-gray-700 w-[70px] h-[70px]');
            $('#btn-' + year).addClass('bg-brown-400 text-xl border-0 w-[90px] h-[90px]');
        }
    </script>
@endsection