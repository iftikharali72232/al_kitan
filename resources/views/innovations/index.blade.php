@extends('layouts.app')

@section('content')

    <div class="container-box lg:pt-20 pt-10 pb-10">
        <div class="flex justify-between bg-[#F4EDE0] md:p-6 p-3 rounded-lg shadow-sm">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="lg:w-[50px] w-[40px]">
            </div>

            <div class="w-full ps-[10px]">
                <h4 class="lg:text-3xl text-2xl font-semibold uppercase text-[#235967]">{{ trans('lang.smart_real_title') }}</h4>
                <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
                <p class="lg:text-xl text-lg mt-6">
                    {{ trans('lang.smart_real_desc') }}
                </p>
            </div>
        </div>
    </div>

    <div class="container-box pt-10 pb-8 flex flex-col lg:items-start items-center">
        <h4 class="lg:text-3xl text-2xl md:text-start text-center font-semibold uppercase text-[#235967]">
            {{ trans('lang.energy_efficiency') }}
        </h4>
        <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
    </div>

    <div class="bg-brown-300 py-10 md:px-0 px-4 md:text-start text-center">
        <div class="container-box flex lg:flex-row flex-col lg:justify-between">
            <div class="lg:w-2/3 w-full text-[#216B7D] {{ app()->getLocale() == 'ar' ? 'lg:pl-40' : 'lg:pr-40' }}">
                <p class="text-2xl">
                    {{ trans('lang.solar_panels_title') }}
                </p>
                <p class="mt-2 text-xl leading-9">
                    {{ trans('lang.solar_panels_desc') }}
                </p>
            </div>

            <div class="lg:w-1/3 w-full flex lg:flex-col md:flex-row flex-col lg:mt-0 mt-6">
                <img src="<?= asset("img/energy1.png") ?>" class="lg:mt-[-120px] lg:h-auto h-[300px] lg:mb-3 md:mb-0 mb-3">
                
                <div class="grid lg:grid-cols-4 grid-cols-2 lg:ms-0 md:ms-10 ms-0 gap-2">
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

    <div class="container-box pt-10 pb-8 md:px-0 px-4">
        <div class="flex flex-col lg:items-start items-center">
            <h4 class="lg:text-3xl text-2xl md:text-start text-center font-semibold uppercase text-[#235967]">
                {{ trans('lang.eco_friendly_title') }}
            </h4>
            <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
        </div>

        <div class="bg-white p-6 rounded-3xl mt-6">
            <ul class="text-xl text-[#216B7D] leading-8 list-disc {{ app()->getLocale() == 'ar' ? 'pr-6' : 'pl-6' }} space-y-4">
                <li class="">
                    <p>
                        {{ trans('lang.eco_friendly_desc1') }}
                    </p>
                </li>

                <li class="">
                    <p>
                        {{ trans('lang.eco_friendly_desc2') }}
                    </p>
                </li>
            </ul>
        </div>

        <div class="grid md:grid-cols-6 gap-4 mt-10">
            <div class="md:col-span-2">
                <img src="<?= asset("img/eco1.png") ?>" class="">
            </div>

            <div class="md:col-span-2">
                <img src="<?= asset("img/eco2.png") ?>" class="">
            </div>

            <div class="md:col-span-2">
                <img src="<?= asset("img/eco3.png") ?>" class="">
            </div>

            <div class="md:col-span-1">
                <div class="w-full lg:h-[350px] h-[300px] rounded-2xl overflow-hidden">
                    <img src="<?= asset("img/eco4.png") ?>" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:col-span-4">
                <div class="w-full lg:h-[350px] h-[300px] rounded-2xl overflow-hidden">
                    <img src="<?= asset("img/eco5.png") ?>" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:col-span-1">
                <div class="w-full lg:h-[350px] h-[300px] rounded-2xl overflow-hidden">
                    <img src="<?= asset("img/eco6.png") ?>" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:col-span-3">
                <img src="<?= asset("img/eco7.png") ?>" class="">
            </div>

            <div class="md:col-span-3">
                <img src="<?= asset("img/eco8.png") ?>" class="">
            </div>
        </div>
    </div>

    <div class="container-box pt-10 pb-20 md:px-0 px-4">
        <div class="flex flex-col lg:items-start items-center">
            <h4 class="lg:text-3xl text-2xl md:text-start text-center font-semibold uppercase text-[#235967]">
                {{ trans('lang.virtual_title1') }}
            </h4>
            <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
        </div>

        <div class="mt-6 virtual-bg lg:pt-[600px] md:pt-[400px] pt-6 pb-6 px-6 rounded-3xl">
            <div class="flex md:justify-between">
                <div class="lg:w-2/6 w-1/6 md:block hidden"></div>

                <div class="lg:w-4/6 md:w-5/6 bg-white/80 rounded-3xl md:p-10 p-6">
                    <h3 class="text-xl font-semibold">{{ trans('lang.smart_real_title2') }}</h3>
                    <p class="text-xl mt-2">
                        {{ trans('lang.virtual_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection