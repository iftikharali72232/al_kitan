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
                    <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">About Us</h4>
                    <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
                    <p class="lg:text-xl text-lg mt-6">
                        We are Al-Kitan Real Estate, your strategic & ideal partner for real estate development. Founded 15 years ago, we have made the blessed city of Madinah our headquarters. We offer comprehensive real estate services in the local market & dedicate all the efforts of our specialized team to constructing solid and reliable properties.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D6BA8E] lg:pt-30 md:pt-40 pt-10 md:pb-20 pb-10 md:px-0 px-5 ">
        <div class="container-box text-xl md:text-start text-center">
            <p>
                Through our dedication and continuous innovation, we have successfully achieved leadership in the local real estate market and expanded the scope of our services to include various fields such as real estate development, property management, and real estate investment consulting. We believe in the importance of building long-term relationships with our clients, always putting their interests first and striving to offer solutions that meet their unique needs.
            </p>
            <p>
                Our work philosophy is based on quality, commitment to deadlines, and attention to detail, ensuring the delivery of real estate projects that are efficient and sustainable. Our specialized team of engineers, architects, and consultants works in harmony to provide a flexible work environment that supports innovation and ensures the execution of projects according to the highest standards of safety and security.
            </p>
            <p>
                We continue to expand our portfolio of distinguished projects across various real estate sectors to achieve the maximum benefit for both our clients and investors. Additionally, we are committed to applying the highest environmental sustainability standards to ensure the delivery of projects that protect the environment and meet the needs of future generations.
            </p>
        </div>
    </div>

    <div class="container-box md:py-20 py-10 md:px-0 px-10">
        <div class="flex justify-between">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="w-[50px]">
            </div>

            <div class="w-full ps-[10px]">
                <h4 class="text-3xl font-semibold uppercase text-[#235967]">Vision & Mission</h4>
                <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
            </div>
        </div>        

        <div class="grid md:grid-cols-2 gap-4 mt-10">
            <!-- Card 1 -->
            <div class="flex flex-col items-center">
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl md:max-w-md overflow-hidden">
                    <div class="absolute top-0 {{ app()->getLocale() == 'ar' ? 'left-auto right-0' : 'left-0' }} h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex justi space-x-4 rotate-90 space-y-1">
                            <p>Vision</p>
                            <p>Vision</p>
                            <p>Vision</p>
                            <p>Vision</p>
                            <p>Vision</p>
                            <p>Vision</p>
                            <p>Vision</p>
                        </div>
                    </div>

                    <!-- Bottom Border -->
                    <div class="absolute bottom-0 left-0 w-full bg-transparent text-white text-xs font-semibold flex justify-around p-1 rounded-b-2xl">
                        <span>Vision</span>
                        <span>Vision</span>
                        <span>Vision</span>
                        <span>Vision</span>
                        <span>Vision</span>
                        <span>Vision</span>
                        <span>Vision</span>
                    </div>

                    <div class="bg-white rounded-bl-xl px-8 py-10"> <!-- Offset due to left border -->
                        <h2 class="text-3xl font-bold text-gray-800 lg:pb-10 pb-6">Vision</h2>
                        <p class="text-gray-700 text-xl mt-2">
                            Our vision is to lead the way in the development of urban communities
                            with competitive efficiency, contributing to the advancement of urban
                            development based on solid and sustainable foundations in the Kingdom
                            of Saudi Arabia.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="flex flex-col items-center">
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl md:max-w-md overflow-hidden">
                    <div class="absolute top-0 {{ app()->getLocale() == 'ar' ? 'left-auto right-0' : 'left-0' }} h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex space-x-4 rotate-90 space-y-1">
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                            <p>Mission</p>
                        </div>
                    </div>

                    <!-- Bottom Border -->
                    <div class="absolute bottom-0 left-0 w-full bg-transparent text-white text-xs font-semibold flex justify-around p-1 rounded-b-2xl">
                        <span>Mission</span>
                        <span>Mission</span>
                        <span>Mission</span>
                        <span>Mission</span>
                        <span>Mission</span>
                        <span>Mission</span>
                        <span>Mission</span>
                    </div>

                    <div class="bg-white rounded-bl-xl  px-8 py-10"> <!-- Offset due to left border -->
                        <h2 class="text-3xl font-bold text-gray-800 lg:pb-10 pb-6">Mission</h2>
                        <p class="text-gray-700 text-xl mt-2">
                            Our mission at Al-Kitan Real Estate is to provide innovative, high-quality real estate solutions that meet our clients' needs and enhance their investments. We focus on delivering outstanding projects on time and in accordance with the highest standards of safety and quality, while prioritizing sustainability and creating residential and commercial environments that align with community aspirations.
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
                            In 2015, Al-Kitan Real Estate achieved several significant milestones that further strengthened its position as a strategic partner in the local real estate market. This year marked a turning point in our journey, as we successfully completed a series of major real estate projects that addressed the growing demands of the market and aligned with the development of key infrastructure in Madinah.
                        </p>

                        <p class="text-xl">
                            One of our most notable accomplishments in 2015 was our active involvement in the full construction of large-scale, strategic projects that contributed to the enhancement of the nation’s infrastructure. We participated in the construction of vital residential and commercial developments, alongside real estate projects in strategic areas, helping to drive the local economy forward.
                        </p>

                        <p class="text-xl">
                            We also delivered critical public works projects that required the highest standards of quality and efficiency. Among the key projects were the development of roads and infrastructure supporting large residential and commercial complexes, as well as the creation of advanced service facilities aimed at improving the quality of life in Madinah. These projects were completed on time, adhering to the highest standards of safety and quality.
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