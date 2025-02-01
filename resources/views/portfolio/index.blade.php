@extends('layouts.app')

@section('content')

    <div class="container-box flex justify-between py-10">
        <div class="w-1/3 flex items-center justify-center">
            <img src="<?= asset("img/about1.png") ?>" class="w-[200px] mb-[-220px] me-[-50px] z-10">
            <img src="<?= asset("img/about2.png") ?>" class="w-[200px]">
        </div>

        <div class="w-2/3">
            <div class="flex justify-between bg-[#F4EDE0] p-6 rounded-lg shadow-sm mb-[-220px] mt-[80px] ms-[-90px] z-10">
                <div class="w-auto">
                    <img src="<?= asset("img/about-star.png") ?>" class="w-[50px]">
                </div>

                <div class="w-full ps-[10px]">
                    <h4 class="text-3xl font-semibold uppercase text-[#235967]">About Us</h4>
                    <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
                    <p class="text-xl mt-6">
                        We are Al-Kitan Real Estate, your strategic & ideal partner for real estate development. Founded 15 years ago, we have made the blessed city of Madinah our headquarters. We offer comprehensive real estate services in the local market & dedicate all the efforts of our specialized team to constructing solid and reliable properties.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D6BA8E] pt-30 pb-20">
        <div class="container-box text-xl">
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

    <div class="container-box py-20">
        <div class="flex justify-between">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="w-[50px]">
            </div>

            <div class="w-full ps-[10px]">
                <h4 class="text-3xl font-semibold uppercase text-[#235967]">Vision & Mission</h4>
                <div class="border-b-[3px] border-[#235967] w-[90px]"></div>
            </div>
        </div>        

        <div class="grid grid-cols-2 gap-4 mt-10">
            <!-- Card 1 -->
            <div class="flex flex-col items-center">
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl max-w-md overflow-hidden">
                    <div class="absolute top-0 left-0 h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex space-x-4 rotate-90 space-y-1">
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
                        <h2 class="text-3xl font-bold text-gray-800 pb-10">Vision</h2>
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
                <div class="relative bg-[#935E3B] shadow-lg ps-[20px] pb-[20px] rounded-2xl max-w-md overflow-hidden">
                    <div class="absolute top-0 left-0 h-full w-[20px] bg-transparent rounded-r-2xl flex flex-col justify-center items-center text-white text-xs font-semibold rotate-180">
                        <div class="flex space-x-4 rotate-90 space-y-1">
                            <p>Vision</p>
                            <p>Vision</p>
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

                    <div class="bg-white rounded-bl-xl  px-8 py-10"> <!-- Offset due to left border -->
                        <h2 class="text-3xl font-bold text-gray-800 pb-10">Mission</h2>
                        <p class="text-gray-700 text-xl mt-2">
                            Our mission at Al-Kitan Real Estate is to provide innovative, high-quality real estate solutions that meet our clients' needs and enhance their investments. We focus on delivering outstanding projects on time and in accordance with the highest standards of safety and quality, while prioritizing sustainability and creating residential and commercial environments that align with community aspirations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection