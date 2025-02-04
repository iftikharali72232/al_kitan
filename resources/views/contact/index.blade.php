@extends('layouts.app')

@section('content')

    <div class="md:px-0 px-4 md:pt-20 pt-10 pb-10">
        <div class="container-box flex md:items-center">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="w-[40px] md:mt-0 mt-2">
            </div>

            <div class="ps-2">
                <h4 class="md:text-4xl text-3xl font-semibold text-[#235967] mb-2">Call Us</h4>
                <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
            </div>
        </div>
    </div>

    <div class="{{ app()->getLocale() == 'ar' ? 'lg:bg-[linear-gradient(to_right,#faf7f2_20%,#F4EDE0_20%)]' : 'lg:bg-[linear-gradient(to_right,#F4EDE0_80%,#faf7f2_20%)]' }} bg-[#F4EDE0] md:px-0 px-4 py-14">
        <div class="container-box flex lg:flex-row flex-col lg:justify-between">
            <div class="lg:w-2/3 w-full flex flex-col lg:items-start items-center">
                <h2 class="text-3xl text-[#216B7D] font-semibold mb-6">Seals Office</h2>
                <ul class="text-2xl text-[#216B7D] lg:text-start text-center font-semibold space-y-10 lg:ms-3">
                    <li>
                        <i class="bi bi-telephone-fill text-xl"></i>
                        <span class="ms-2">800-236852</span>
                    </li>
                    <li>
                        <i class="bi bi-envelope text-xl"></i>
                        <span class="ms-2">Alkitan.sa@gmail.com</span>
                    </li>
                    <li>
                        <i class="bi bi-geo-alt text-xl"></i>
                        <span class="ms-2">Second Ring Road, Next to Jarir Bookstore</span>
                    </li>
                </ul>

                <div class="flex md:space-x-20 space-x-10 mt-[50px] lg:ms-[40px]">
                    <a href="#">
                        <img src="<?= asset("img/instagram.png") ?>" class="w-[40px]">
                    </a>

                    <a href="#">
                        <img src="<?= asset("img/twitter.png") ?>" class="w-[40px]">
                    </a>

                    <a href="#">
                        <img src="<?= asset("img/tiktok.png") ?>" class="w-[40px]">
                    </a>
                </div>
            </div>

            <div class="lg:w-1/3 w-full flex lg:justify-end justify-center lg:mt-0 mt-10">
                <img src="<?= asset("img/contact1.png") ?>" class="lg:w-full md:w-[80%] w-[90%]">
            </div>
        </div>
    </div>

    <div class="md:px-0 px-4 pt-20 pb-10">
        <div class="container-box flex md:items-center">
            <div class="w-auto">
                <img src="<?= asset("img/about-star.png") ?>" class="w-[40px] md:mt-0 mt-2">
            </div>

            <div class="ps-2">
                <h4 class="md:text-4xl text-3xl font-semibold text-[#235967] mb-2">Contact Us</h4>
                <div class="border-b-[3px] border-[#235967] w-[160px]"></div>
            </div>
        </div>
    </div>

    <div class="{{ app()->getLocale() == 'ar' ? 'md:bg-[linear-gradient(to_right,#C9A06E_90%,#faf7f2_10%)]' : 'md:bg-[linear-gradient(to_right,#faf7f2_10%,#C9A06E_10%)]' }} bg-[#C9A06E] py-20 mb-20 md:px-0 px-4">
        <div class="container-box flex md:justify-end">
            <form class="md:w-[90%] w-full">
                <div class="mb-4">
                    <input type="text" placeholder="Full Name" class="w-full p-4 bg-[#fdfaf3] rounded-xl placeholder-gray-400 focus:outline-none text-xl">
                </div>

                <div class="mb-4">
                    <input type="email" placeholder="Email" class="w-full p-4 bg-[#fdfaf3] rounded-xl placeholder-gray-400 focus:outline-none text-xl">
                </div>

                <div class="mb-4">
                    <input type="tel" placeholder="Phone Number" class="w-full p-4 bg-[#fdfaf3] rounded-xl placeholder-gray-400 focus:outline-none text-xl">
                </div>

                <div class="mb-4">
                    <textarea placeholder="Message" class="w-full h-50 p-4 bg-[#fdfaf3] rounded-xl placeholder-gray-400 focus:outline-none text-xl"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-10 py-3 text-2xl text-[#224C5A] font-semibold bg-[#E8D9C0] rounded hover:bg-white">Send</button>
                </div>
            </form>
        </div>
    </div>

@endsection