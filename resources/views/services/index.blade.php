@extends('layouts.app')

@section('content')

    <div class="bg-[linear-gradient(to_bottom,white_50%,#F4EDE0_50%)] md:px-0 px-4">
        <div class="container-box lg:pt-20 pt-10 pb-10">
            <div class="flex md:items-center">
                <div class="w-auto">
                    <img src="<?= asset("img/about-star.png") ?>" class="w-[40px] md:mt-0 mt-2">
                </div>

                <div class="ps-2">
                    <h4 class="md:text-4xl text-2xl font-semibold text-[#235967] mb-2"> {{ trans('lang.innovative_sustainable_title') }} </h4>
                    <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
                </div>
            </div>

            <div class="flex lg:flex-row flex-col lg:justify-between">
                <div class="lg:w-2/3 w-full {{ app()->getLocale() == 'ar' ? 'lg:pl-[100px]' : 'lg:pr-[100px]' }} mt-6 lg:mb-0 mb-8">
                    <p class="lg:text-3xl md:text-2xl text-xl text-[#216B7D] text-justify lg:leading-12 md:leading-9">
                        {{ trans('lang.innovative_sustainable_desc') }}
                    </p>
                </div>

                <div class="lg:w-1/3 w-full">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex lg:justify-normal justify-end {{ app()->getLocale() == 'ar' ? 'order-2' : '' }}">
                            <img src="<?= asset("img/rs1.png") ?>" class="lg:w-full w-[200px]">
                        </div>
                        <div class="{{ app()->getLocale() == 'ar' ? 'order-1' : '' }}">
                            <img src="<?= asset("img/rs2.png") ?>" class="lg:w-full w-[200px]">
                        </div>
                        <div class="flex lg:justify-normal justify-end {{ app()->getLocale() == 'ar' ? 'order-4' : '' }}">
                            <img src="<?= asset("img/rs3.png") ?>" class="lg:w-full w-[200px]">
                        </div>
                        <div class="{{ app()->getLocale() == 'ar' ? 'order-3' : '' }}">
                            <img src="<?= asset("img/rs4.png") ?>" class="lg:w-full w-[200px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-box py-20">
        <div class="grid lg:grid-cols-2 gap-4 md:px-0 px-4">
            <div class="w-full flex lg:justify-normal justify-center">
                <img src="<?= asset("img/s1.png") ?>" class="lg:w-full md:w-[70%]">
            </div>

            <div class="w-full flex flex-col justify-center lg:items-start items-center lg:ps-10 ps-0">
                <h2 class="md:text-3xl text-2xl font-semibold text-[#235967] mb-4">{{ trans('lang.residential_real_estate_title') }}</h2>
                <ul class="text-xl text-[#235967] font-light list-disc list-inside lg:mt-4 lg:mt-2 lg:space-y-4">
                    <li>{{ trans('lang.residential_real_estate_desc1') }}</li>
                    <li>{{ trans('lang.residential_real_estate_desc2') }}</li>
                    <li>{{ trans('lang.residential_real_estate_desc3') }}</li>
                </ul>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-4 lg:mt-0 mt-10  md:px-0 px-4">
            <div class="w-full flex flex-col justify-center lg:items-start items-center lg:pe-10 pe-0 lg:order-1 order-2">
                <h2 class="md:text-3xl text-2xl font-semibold text-[#235967] mb-4">{{ trans('lang.commercial_real_estate_title') }}</h2>
                <ul class="text-xl text-[#235967] font-light list-disc list-inside lg:mt-4 lg:mt-2 lg:space-y-4">
                    <li>{{ trans('lang.commercial_real_estate_desc1') }}</li>
                    <li>{{ trans('lang.commercial_real_estate_desc2') }}</li>
                    <li>{{ trans('lang.commercial_real_estate_desc3') }}</li>
                </ul>
            </div>

            <div class="w-full flex lg:justify-normal justify-center lg:order-2 order-1">
                <img src="<?= asset("img/s2.png") ?>" class="lg:w-full md:w-[70%]">
            </div>
        </div>
    </div>

@endsection