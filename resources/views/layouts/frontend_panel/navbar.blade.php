<div class="">
    <div class="bg-white p-5"></div>
    <div class="bg-[#E8D9C0] py-2">
        <div class="container-box">
            <div class="flex justify-between items-center">
                <div class="">
                    <a href="{{route('home')}}">
                        <div class="w-[100px] h-[100px] overflow-hidden">
                            <img src="<?= asset("img/logo.png") ?>" class="object-fit w-full h-full">
                        </div>
                    </a>
                </div>

                <div class="flex items-center justify-end">
                    <div class="me-10">
                        <ul class="flex space-x-10 p-4 uppercase text-lg text-[#224C5A]">
                            <li>
                                <a href="#" class="font-semibold">Overview</a>
                            </li>
                            
                            <li>
                                <a href="#" class="">Portfolio</a>
                            </li>
                            
                            <li>
                                <a href="#" class="">Innovations</a>
                            </li>
                            
                            <li>
                                <a href="#" class="">Services</a>
                            </li>
                            
                            <li>
                                <a href="#" class="">Contact</a>
                            </li>
                        </ul
                        >
                    </div>

                    <div class="flex items-center">
                        <button id="color_mode" class="text-[#224C5A] font-semibold px-3 py-2 bg-gray-200 rounded-lg border-2 border-gray-400/60" onclick="changeLanguage('color_mode')">
                            {{ app()->getLocale() == 'ar' ? 'AR' : 'EN' }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>