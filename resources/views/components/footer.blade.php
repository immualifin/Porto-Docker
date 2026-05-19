  <footer class="bg-portto-black text-white pb-[30px] lg:pb-[50px] border-t-[6px] lg:border-t-[10px] border-portto-purple">
        <div class="container max-w-[1130px] mx-auto flex flex-col lg:flex-row justify-between pt-[50px] lg:pt-[100px] pb-[30px] lg:pb-[50px] mb-[30px] lg:mb-[50px] relative border-b border-[#585867] px-4 lg:px-0 gap-8 lg:gap-0">
            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute h-[200px] lg:h-[300px] top-[40px] lg:top-[70px] -left-[10px] lg:-left-[20px] z-0 opacity-50 lg:opacity-100" alt="icon">
            <div class="flex shrink-0 h-fit z-10 justify-center lg:justify-start">
                <img src="{{ asset('images/logos/logo.svg')}}" alt="logo" class="w-[120px] lg:w-auto">
            </div>
            <div class="grid grid-cols-2 lg:flex gap-6 lg:gap-[60px] xl:gap-[100px] z-10">
                <div class="flex flex-col gap-3 lg:gap-5">
                    <p class="font-bold text-base lg:text-lg">Explore</p>
                    <a href="{{ route('front.index') }}#Services" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Services</a>
                    <a href="{{ route('front.index') }}#Testimonials" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                    <a href="{{ route('front.index') }}#Projects" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                    <a href="{{ route('front.index') }}#Workflow" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">About</a>
                </div>
                <div class="flex flex-col gap-3 lg:gap-5">
                    <p class="font-bold text-base lg:text-lg">Services</p>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">UI/UX Design</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Web Development</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Data Science</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Digital Marketing</a>
                </div>
                <div class="flex flex-col gap-3 lg:gap-5">
                    <p class="font-bold text-base lg:text-lg">About</p>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">My Profile</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">How do I work</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Achievements</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Team A</a>
                </div>
                <div class="flex flex-col gap-3 lg:gap-5">
                    <p class="font-bold text-base lg:text-lg">Connect</p>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/call.svg')}}" alt="icon" class="w-4 h-4 lg:w-auto lg:h-auto">+1 2208 1996</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/dribbble.svg')}}" alt="icon" class="w-4 h-4 lg:w-auto lg:h-auto">buildwithangga</a>
                    <a href="" class="font-medium text-sm lg:text-base hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/sms.svg')}}" alt="icon" class="w-4 h-4 lg:w-auto lg:h-auto">team@bwa.com</a>
                </div>
            </div>
        </div>
        <p class="text-xs lg:text-sm text-[#A0A0AC] text-center px-4">All Rights Reserved. Copyright BuildWithAngga 2024.</p>
    </footer>