@extends('layouts.app')

@section('content')

    <div class="h-full w-full overflow-hidden">
        <img src="<?= asset("img/banner.png") ?>" class="object-cover w-full h-full mt-[-100px]">
    </div>

    <div class="container-box py-[30px]">
        <!-- Hint Section -->
        <div class="grid grid-cols-2 gap-4">
            <div class="pe-[100px] flex flex-col justify-center">
                <div class="relative">
                    <h2 class="text-[80px] font-bold text-black/3 absolute">Hint</h2>
                    <div class="w-[150px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-11">01</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold text-end leading-11">Hint</h2>
                    </div>
                </div>

                <p class="text-[28px] leading-10 my-10">
                    We were established 15 years ago and we continue to lead in real estate development & innovation
                </p>

                <a href="#">
                    <div href="#" class="flex items-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">Read More</span>
                    </div>
                </a>

            </div>

            <div class="">
                <div class="flex items-center justify-end">
                    <img src="<?= asset("img/hint-img2.png") ?>" class="h-[350px] me-[-130px] mt-[120px] z-10">
                    <img src="<?= asset("img/hint-img1.png") ?>" class="h-[350px]">
                </div>

                <div class="flex justify-end pt-[50px] pe-[30px]">
                    <span class="border-2 border-gray-600 p-0 m-0 py-[30px]"></span>
                </div>
            </div>
        </div>

        <!-- Thoughts Section -->
        <div class="grid grid-cols-2 gap-4">
            <div class="">
                <div class="flex items-center gap-4">
                    <img src="<?= asset("img/thought-1.png") ?>" class="w-[100px] mt-[50px]">
                    <img src="<?= asset("img/thought-2.png") ?>" class="w-[100px] mt-[90px]">
                    <img src="<?= asset("img/thought-3.png") ?>" class="w-[100px]">
                    <img src="<?= asset("img/thought-4.png") ?>" class="w-[100px] mt-[70px]">
                </div>

                <div class="flex pt-[50px] ps-[30px]">
                    <span class="border-2 border-gray-600 p-0 m-0 py-[30px]"></span>
                </div>
            </div>

            <div class="ps-[100px] flex flex-col justify-center">
                <div class="relative flex flex-col items-end">
                    <h2 class="text-[80px] font-bold text-black/3 absolute">Hint</h2>
                    <div class="w-[250px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-13 text-end">02</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold leading-14">Thoughts</h2>
                    </div>
                </div>

                <p class="text-[28px] leading-10 my-10">
                    We achieve international quality standards in the execution of our real estate projects.
                </p>

                <a href="#">
                    <div href="#" class="flex items-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">Read More</span>
                    </div>
                </a>

            </div>
        </div>

        <!-- Expertise Section -->
        <div class="grid grid-cols-2 gap-4">
            <div class="pe-[100px] flex flex-col justify-center">
                <div class="relative">
                    <h2 class="text-[70px] font-bold text-black/3 absolute">Expertise</h2>
                    <div class="w-[250px] overflow-hidden pt-4 text-[#224C5A]">
                        <h2 class="text-[50px] font-bold leading-13">03</h2>
                        <div class="border-2 border-gray-600 p-0 m-0"></div>
                        <h2 class="text-[50px] font-bold text-end leading-14">Expertise</h2>
                    </div>
                </div>

                <p class="text-[28px] leading-10 my-10">
                    A window to the future that helps define our vision & mission.
                </p>

                <a href="#">
                    <div href="#" class="flex items-center gap-4 group">
                        <img src="{{ asset('img/arrow-right.png') }}" class="w-[70px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">
                        <span class="text-[#B07546] uppercase text-[20px] transform transition-all duration-300 ease-in-out group-hover:translate-x-2">Read More</span>
                    </div>
                </a>

            </div>

            <div class="">
                <div class="flex items-center justify-end">
                    <img src="<?= asset("img/hint-img2.png") ?>" class="h-[350px] me-[-130px] mt-[120px] z-10">
                    <img src="<?= asset("img/hint-img1.png") ?>" class="h-[350px]">
                </div>

                <div class="flex justify-end pt-[50px] pe-[30px]">
                    <span class="border-2 border-gray-600 p-0 m-0 py-[30px]"></span>
                </div>
            </div>
        </div>

    </div>

@endsection