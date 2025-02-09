@extends('layouts.app')

@section('content')

    <div class="h-full w-full overflow-hidden">
        <img src="<?= asset("img/banner.png") ?>" class="object-cover w-full h-full lg:mt-[-100px]">
    </div>

    <div class="container-box py-[30px]">
        <!-- Hint Section -->
        <div class="grid lg:grid-cols-2 gap-4">
            <div class="lg:pe-[100px] flex flex-col justify-center lg:order-1 order-2">
                <div class="relative lg:block flex flex-col items-center">
                    <h2 class="text-[80px] font-bold text-black/3 absolute">{{ trans('lang.hint_title') }}</h2>
                    <div class="w-[150px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-11 lg:text-start text-center">01</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold lg:text-end text-center leading-11">{{ trans('lang.hint_title') }}</h2>
                    </div>
                </div>

                <p class="text-[28px] lg:text-start text-center leading-10 my-10">
                    {{ trans('lang.hint_desc') }}
                </p>

                <a href="#">
                    <div href="#" class="flex items-center lg:justify-start justify-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'rotate-[180deg] group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">{{ trans('lang.read_more') }}</span>
                    </div>
                </a>

            </div>

            <div class="lg:order-2 order-1">
                <div class="flex items-center lg:justify-end justify-center">
                    <img src="<?= asset("img/hint-img2.png") ?>" class="md:h-[350px] h-[230px] me-[-130px] mt-[120px] z-10">
                    <img src="<?= asset("img/hint-img1.png") ?>" class="md:h-[350px] h-[230px]">
                </div>

                <div class="lg:flex hidden justify-end pt-[50px] pe-[30px]">
                    <span class="border-2 border-gray-600 p-0 m-0 py-[30px]"></span>
                </div>
            </div>
        </div>

        <!-- Thoughts Section -->
        <div class="grid lg:grid-cols-2 gap-4">
            <div class="">
                <div class="flex items-center lg:justify-start justify-center gap-4">
                    <img src="<?= asset("img/thought-1.png") ?>" class="md:w-[100px] w-[60px] mt-[50px]">
                    <img src="<?= asset("img/thought-2.png") ?>" class="md:w-[100px] w-[60px] mt-[90px]">
                    <img src="<?= asset("img/thought-3.png") ?>" class="md:w-[100px] w-[60px]">
                    <img src="<?= asset("img/thought-4.png") ?>" class="md:w-[100px] w-[60px] mt-[70px]">
                </div>

                <div class="lg:flex hidden pt-[50px] ps-[30px]">
                    <span class="border-2 border-gray-600 p-0 m-0 py-[30px]"></span>
                </div>
            </div>

            <div class="lg:ps-[100px] flex flex-col justify-center">
                <div class="relative flex flex-col lg:items-end items-center">
                    <h2 class="text-[80px] font-bold text-black/3 absolute">{{ trans('lang.thoughts_title') }}</h2>
                    <div class="w-[250px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-13 lg:text-end text-center">02</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold leading-14 lg:text-start text-center">{{ trans('lang.thoughts_title') }}</h2>
                    </div>
                </div>

                <p class="text-[28px] lg:text-start text-center leading-10 my-10">
                    {{ trans('lang.thoughts_desc') }}
                </p>

                <a href="#">
                    <div href="#" class="flex items-center lg:justify-start justify-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'rotate-[180deg] group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">{{ trans('lang.read_more') }}</span>
                    </div>
                </a>

            </div>
        </div>

        <!-- Expertise Section -->
        <div class="grid lg:grid-cols-2 gap-4">
            <div class="lg:pe-[100px] flex flex-col justify-center lg:order-1 order-2">
                <div class="relative lg:block flex flex-col items-center">
                    <h2 class="text-[70px] font-bold text-black/3 absolute">{{ trans('lang.expertise_title') }}</h2>
                    <div class="w-[250px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-13 lg:text-start text-center">03</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold lg:text-end text-center leading-14">{{ trans('lang.expertise_title') }}</h2>
                    </div>
                </div>

                <p class="text-[28px] lg:text-start text-center leading-10 my-10">
                    {{ trans('lang.expertise_desc') }}
                </p>

                <a href="#">
                    <div href="#" class="flex items-center lg:justify-start justify-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'rotate-[180deg] group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">{{ trans('lang.read_more') }}</span>
                    </div>
                </a>

            </div>

            <div class="flex flex-col justify-center lg:order-2 order-1">
                <div class="flex items-center lg:justify-end justify-center gap-4">
                    <div class="mt-20">
                        <img src="<?= asset("img/expertise1.png") ?>" class="md:w-[200px] w-[150px] mb-[-50px]">
                        <img src="<?= asset("img/expertise2.png") ?>" class="md:w-[200px] w-[150px]">
                    </div>

                    <div class="">
                        <img src="<?= asset("img/expertise3.png") ?>" class="md:w-[200px] w-[150px]">
                        <img src="<?= asset("img/expertise4.png") ?>" class="md:w-[200px] w-[150px] mt-[-50px]">
                    </div>
                </div>
            </div>
        </div>

        <!-- Honored Clients Section -->
        <div class="pt-[50px]">
            <div class="lg:flex hidden justify-center mb-4">
                <span class="border-2 border-gray-600 p-0 m-0 px-10"></span>
            </div>

            <div class="relative flex flex-col items-center">
                <h2 class="text-[70px] font-bold text-black/3 absolute text-center">{{ trans('lang.honored_clients_title') }}</h2>
                <h2 class="text-[50px] font-bold text-center pt-[35px]">{{ trans('lang.honored_clients_title') }}</h2>
            </div>

            <div class="grid lg:grid-cols-4 grid-cols-2 md:gap-4 gap-2 my-6">
                <div class="flex justify-center">
                    <img src="<?= asset("img/client1.png") ?>" class="md:w-auto w-[200px]">
                </div>
                
                <div class="flex justify-center">
                    <img src="<?= asset("img/client2.png") ?>" class="md:w-auto w-[200px]">
                </div>

                <div class="flex justify-center">
                    <img src="<?= asset("img/client3.png") ?>" class="md:w-auto w-[200px]">
                </div>

                <div class="flex justify-center">
                    <img src="<?= asset("img/client4.png") ?>" class="md:w-auto w-[200px]">
                </div>
            </div>

            <div class="flex lg:justify-end justify-center">
                <a href="#">
                    <div href="#" class="flex items-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'rotate-[180deg] group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out {{ app()->getLocale() == 'ar' ? 'group-hover:translate-x-[-10px]' : 'group-hover:translate-x-2' }}">{{ trans('lang.see_more') }}</span>
                    </div>
                </a>
            </div>
        </div>

    </div>

@endsection