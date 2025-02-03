@extends('layouts.app')

@section('content')

    <div class="container-box pt-20 pb-10">
        <div class="flex justify-between bg-[#F4EDE0] md:p-6 p-3 rounded-lg shadow-sm">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="lg:w-[50px] w-[40px]">
            </div>

            <div class="w-full ps-[10px]">
                <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">Smart Real Estate with Alkitan</h4>
                <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
                <p class="lg:text-xl text-lg mt-6">
                    Smart Real Estate with Alkitan is more than just a trend; it’s a revolutionary shift in the way we think about buildings, homes, and urban living. Through the integration of AI, IoT, sustainability practices, and blockchain, Alkitan is leading the way towards a future where technology and real estate merge to create smarter, safer, and more sustainable environments.
                </p>
            </div>
        </div>
    </div>

    <div class="container-box pt-10 pb-8">
        <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">
            Energy Efficiency & Sustainability
        </h4>
        <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
    </div>

    <div class="bg-brown-300 py-10 ">
        <div class="container-box flex justify-between">
            <div class="w-2/3 text-[#216B7D] pr-40">
                <p class="text-2xl">
                    Solar Panels & Energy Storage Systems:
                </p>
                <p class="mt-2 text-xl leading-9">
                    In Alkitan’s residential developments, solar panels are installed on the rooftops of homes to harness solar energy. For instance, in one of their projects, solar panels generate electricity, and any excess energy is stored in home battery systems. This stored energy can be used to power the home’s heating, cooling, and lighting systems. On days with excessive sun, the system can store surplus energy for later use or feed it back into the grid. The smart system optimizes when to use stored energy based on weather conditions & household consumption, significantly reducing energy costs & environmental impact.
                </p>
            </div>

            <div class="w-1/3">
                <img src="<?= asset("img/energy1.png") ?>" class="mt-[-120px] mb-3">
                
                <div class="grid grid-cols-4 gap-2">
                    <div class="">
                        <img src="<?= asset("img/energy2.png") ?>" class="">
                    </div>
                    <div class="">
                        <img src="<?= asset("img/energy3.png") ?>" class="">
                    </div>
                    <div class="">
                        <img src="<?= asset("img/energy4.png") ?>" class="">
                    </div>
                    <div class="">
                        <img src="<?= asset("img/energy5.png") ?>" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-box pt-10 pb-8">
        <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">
            Eco-Friendly Community Developments
        </h4>
        <div class="border-b-[3px] border-[#235967] w-[160px]"></div>

        <div class="bg-white p-6 rounded-3xl mt-6">
            <ul class="text-xl text-[#216B7D] leading-8 list-disc pl-6 space-y-4">
                <li class="">
                    <p>
                        Green Building Certifications: As sustainability becomes more crucial, Alaska is seeing an increase in LEED-certified buildings (Leadership in Energy and Environmental Design). These buildings prioritize energy efficiency, water conservation, and sustainable materials, creating a long-term positive environmental impact.
                    </p>
                </li>

                <li class="">
                    <p>
                        Eco-Friendly Neighborhoods: New real estate developments are incorporating green spaces, sustainable waste management systems, and alternative transportation infrastructure like bike paths and electric vehicle charging stations.
                    </p>
                </li>
            </ul>
        </div>
    </div>
@endsection