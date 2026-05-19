@extends('front/layouts/app')
@section('title', 'InumaDev')
@section('content')
    <section id="Header" class="flex flex-col gap-[50px] lg:gap-[100px] bg-portto-black relative">
        <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[20px] lg:pt-[30px] px-4 lg:px-0 z-10">
            <a href="{{ route('front.index') }}" class="w-[120px] lg:w-[161px] flex shrink-0 h-fit">
                <img src="{{ asset('images/logos/logo.svg')}}" alt="logo">
            </a>
            <!-- Mobile menu button -->
            <button id="mobile-menu-toggle" class="lg:hidden flex flex-col gap-1 z-20">
                <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
            </button>
            <!-- Desktop menu -->
            <div class="hidden lg:flex gap-[30px] xl:gap-[50px] items-center">
                <ul class="flex gap-[30px] xl:gap-[50px] items-center text-white">
                    <li>
                        <a href="{{ route('front.index') }}"  class="font-medium text-base lg:text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
                    </li>
                    <li>
                        <a href="#Services"  class="font-medium text-base lg:text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
                    </li>
                    <li>
                        <a href="#Testimonials"  class="font-medium text-base lg:text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                    </li>
                    <li>
                        <a href="#Projects"  class="font-medium text-base lg:text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                    </li>
                    <li>
                        <a href="#Workflow"  class="font-medium text-base lg:text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
                    </li>
                </ul>
                <a href="{{ route('front.book') }}">
                    <button class="bg-portto-light-gold font-bold text-base lg:text-lg p-[12px_24px] lg:p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
                </a>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="fixed inset-0 bg-portto-black bg-opacity-95 z-10 lg:hidden transform translate-x-full transition-transform duration-300">
                <div class="flex flex-col items-center justify-center h-full gap-8">
                    <ul class="flex flex-col gap-8 items-center text-white">
                        <li>
                            <a href="{{ route('front.index') }}" class="font-medium text-xl hover:text-portto-light-gold transition-all duration-300">Home</a>
                        </li>
                        <li>
                            <a href="#Services" class="font-medium text-xl hover:text-portto-light-gold transition-all duration-300">Services</a>
                        </li>
                        <li>
                            <a href="#Testimonials" class="font-medium text-xl hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                        </li>
                        <li>
                            <a href="#Projects" class="font-medium text-xl hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                        </li>
                        <li>
                            <a href="#Workflow" class="font-medium text-xl hover:text-portto-light-gold transition-all duration-300">About</a>
                        </li>
                    </ul>
                    <a href="{{ route('front.book') }}">
                        <button class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
                    </a>
                </div>
            </div>
        </nav>
        <div class="hero container max-w-[1130px] mx-auto flex flex-col lg:flex-row justify-between items-center relative px-4 lg:px-0">
            <div class="flex flex-col gap-[30px] lg:gap-[50px] h-fit w-fit text-white z-10 text-center lg:text-left">
                <p class="font-semibold text-xl lg:text-2xl">I'm Shayna 👋</p>
                <h1 class="font-extrabold text-[32px] sm:text-[48px] lg:text-[80px] leading-[40px] sm:leading-[56px] lg:leading-[90px]">Professional Designer & Dev</h1>
                <a href="#Projects">
                    <button class="font-bold text-[18px] lg:text-[26px] leading-[27px] lg:leading-[39px] rounded-[20px] lg:rounded-[30px] p-[20px_30px] lg:p-[30px_40px] bg-portto-purple w-fit mx-auto lg:mx-0 transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore Now</button>
                </a>
            </div>
            <div class="flex max-w-[300px] sm:max-w-[400px] lg:max-w-[471px] max-h-[360px] sm:max-h-[480px] lg:max-h-[567px] z-10 mt-8 lg:mt-0">
                <img src="{{ asset('images/hero-image.png')}}" class="w-full h-full object-contain" alt="hero image">
            </div>
            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 opacity-50 lg:opacity-100" alt="background icon">
        </div>
        <div class="company-logos w-full overflow-hidden pb-[120px] lg:pb-[190px]">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap">
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
                <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] grid grid-cols-2 sm:grid-cols-3 lg:flex lg:justify-between items-center gap-4 lg:gap-0 px-4 sm:px-8 lg:px-[100px] py-6 lg:py-0 rounded-[20px] lg:rounded-[30px] w-full min-h-[120px] lg:h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">$230M</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Valuation</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">31,934</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Projects</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">245</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Startups IPO</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">9/10</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Successful</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto col-span-2 sm:col-span-1">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">562</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Companies</p>
            </div>
        </div>
    </section>

    <section id="Services" class="container max-w-[1130px] mx-auto pt-[120px] lg:pt-[190px] pb-[50px] lg:pb-[100px] px-4 lg:px-0">
        <div class="flex flex-col gap-[30px] lg:gap-[50px]">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 lg:gap-0">
                <h2 class="font-extrabold text-[28px] sm:text-[36px] lg:text-[50px] leading-[36px] sm:leading-[48px] lg:leading-[70px]">Actually, I Do Design <br>& Code for Living</h2>
                <a href="#Services" class="font-bold text-base lg:text-lg bg-portto-black rounded-full w-fit h-fit p-[12px_24px] lg:p-[14px_30px] text-white transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">All Services</a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] lg:gap-[30px]">
                <div class="p-[30px] lg:p-[50px] pb-0 rounded-[20px] lg:rounded-[30px] flex flex-col gap-[30px] lg:gap-[50px] bg-[#F4F5F8]">
                    <div class="flex items-center justify-center shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-portto-purple">
                        <img src="{{ asset('images/icons/crown.svg')}}" class="w-8 h-8 lg:w-10 lg:h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-4 lg:gap-5">
                        <p class="font-extrabold text-[20px] sm:text-[24px] lg:text-[32px] leading-[28px] sm:leading-[32px] lg:leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                        <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">Delivering great experience to users so that they are comfortable while using your product.</p>
                    </div>
                    <div class="w-full h-[250px] lg:h-[350px]">
                        <img src="{{ asset('images/services1.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div class="p-[30px] lg:p-[50px] pb-0 rounded-[20px] lg:rounded-[30px] flex flex-col gap-[30px] lg:gap-[50px] bg-[#F4F5F8]">
                    <div class="flex items-center justify-center shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-portto-green">
                        <img src="{{ asset('images/icons/code.svg')}}" class="w-8 h-8 lg:w-10 lg:h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-4 lg:gap-5">
                        <p class="font-extrabold text-[20px] sm:text-[24px] lg:text-[32px] leading-[28px] sm:leading-[32px] lg:leading-[48px]">AI Business Dashboard Finance Company</p>
                        <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">Delivering great experience to users so that they are comfortable while using product.</p>
                    </div>
                    <div class="w-full h-[250px] lg:h-[350px]">
                        <img src="{{ asset('images/services2.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-2 p-[30px] lg:p-[50px] pb-0 rounded-[20px] lg:rounded-[30px] flex flex-col lg:flex-row gap-[30px] lg:gap-[50px] bg-[#F4F5F8]">
                    <div class="flex flex-col gap-[30px] lg:gap-[50px]">
                        <div class="flex items-center justify-center shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-portto-red">
                            <img src="{{ asset('images/icons/3dcube.svg')}}" class="w-8 h-8 lg:w-10 lg:h-10 object-contain" alt="icon">
                        </div>
                        <div class="flex flex-col gap-4 lg:gap-5">
                            <p class="font-extrabold text-[20px] sm:text-[24px] lg:text-[32px] leading-[28px] sm:leading-[32px] lg:leading-[48px]">Robust Plugins Connected Machine Learning</p>
                            <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">Delivering great experience to users so that they are comfortable while using your product to grow.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-[450px] h-[250px] lg:h-[350px] flex shrink-0">
                        <img src="{{ asset('images/services3.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Projects" class="w-full flex flex-col py-[50px] lg:py-[100px] bg-[url('{{ asset('images/background/background1.png')}}')] bg-cover bg-center bg-no-repeat px-4 lg:px-0">
        <div class="flex flex-col gap-[8px] lg:gap-[10px] mb-[30px] lg:mb-[50px]">
            <h2 class="font-extrabold text-[28px] sm:text-[36px] lg:text-[50px] leading-[36px] sm:leading-[48px] lg:leading-[70px] text-center text-white">Great Projects</h2>
            <p class="text-base lg:text-lg text-center text-white">Working with awesome team from around the world</p>
        </div>
        <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                   
                    @forelse($projects as $index => $project)
                    @if($index < 3)
                    <div class="group w-[300px] sm:w-[450px] lg:w-[650px] h-[250px] sm:h-[350px] lg:h-[450px] flex shrink-0 rounded-[20px] lg:rounded-[30px] border border-white p-3 lg:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                        <div class="w-[276px] sm:w-[426px] lg:w-[608px] h-[226px] sm:h-[326px] lg:h-[408px] rounded-[20px] lg:rounded-[30px] overflow-hidden absolute">
                            <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col w-full items-center justify-center gap-[20px] sm:gap-[30px] lg:gap-[50px] bg-portto-black rounded-[20px] lg:rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                            <div class="text-center z-10">
                                <p class="font-extrabold text-[18px] sm:text-[24px] lg:text-[32px] leading-[24px] sm:leading-[32px] lg:leading-[48px] mb-[8px] lg:mb-[10px] text-white">{{ ($project->name) }}</p>
                                <p class="text-sm sm:text-base lg:text-lg text-[#BABABC]">{{ ($project->category) }}</p>
                            </div>
                            <a href="{{ route('front.details', $project) }}" class="z-10 font-bold text-sm sm:text-base lg:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[10px_20px] sm:p-[12px_24px] lg:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse

                </div>
                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                    
                    @forelse($projects as $index => $project)
                    @if($index < 3)
                    <div class="group w-[300px] sm:w-[450px] lg:w-[650px] h-[250px] sm:h-[350px] lg:h-[450px] flex shrink-0 rounded-[20px] lg:rounded-[30px] border border-white p-3 lg:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                        <div class="w-[276px] sm:w-[426px] lg:w-[608px] h-[226px] sm:h-[326px] lg:h-[408px] rounded-[20px] lg:rounded-[30px] overflow-hidden absolute">
                            <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col w-full items-center justify-center gap-[20px] sm:gap-[30px] lg:gap-[50px] bg-portto-black rounded-[20px] lg:rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                            <div class="text-center z-10">
                                <p class="font-extrabold text-[18px] sm:text-[24px] lg:text-[32px] leading-[24px] sm:leading-[32px] lg:leading-[48px] mb-[8px] lg:mb-[10px] text-white">{{ ($project->name) }}</p>
                                <p class="text-sm sm:text-base lg:text-lg text-[#BABABC]">{{ ($project->category) }}</p>
                            </div>
                            <a href="{{ route('front.details', $project) }}" class="z-10 font-bold text-sm sm:text-base lg:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[10px_20px] sm:p-[12px_24px] lg:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
        <div class="projects w-full flex flex-col overflow-hidden">
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                   
                    @forelse($projects as $index => $project)
                    @if($index >= 3)
                    <div class="group w-[300px] sm:w-[450px] lg:w-[650px] h-[250px] sm:h-[350px] lg:h-[450px] flex shrink-0 rounded-[20px] lg:rounded-[30px] border border-white p-3 lg:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                        <div class="w-[276px] sm:w-[426px] lg:w-[608px] h-[226px] sm:h-[326px] lg:h-[408px] rounded-[20px] lg:rounded-[30px] overflow-hidden absolute">
                            <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col w-full items-center justify-center gap-[20px] sm:gap-[30px] lg:gap-[50px] bg-portto-black rounded-[20px] lg:rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                            <div class="text-center z-10">
                                <p class="font-extrabold text-[18px] sm:text-[24px] lg:text-[32px] leading-[24px] sm:leading-[32px] lg:leading-[48px] mb-[8px] lg:mb-[10px] text-white">{{ ($project->name) }}</p>
                                <p class="text-sm sm:text-base lg:text-lg text-[#BABABC]">{{ ($project->category) }}</p>
                            </div>
                            <a href="{{ route('front.details', $project) }}" class="z-10 font-bold text-sm sm:text-base lg:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[10px_20px] sm:p-[12px_24px] lg:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse

                </div>
                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                    
                    @forelse($projects as $index => $project)
                    @if($index >= 3)
                    <div class="group w-[300px] sm:w-[450px] lg:w-[650px] h-[250px] sm:h-[350px] lg:h-[450px] flex shrink-0 rounded-[20px] lg:rounded-[30px] border border-white p-3 lg:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                        <div class="w-[276px] sm:w-[426px] lg:w-[608px] h-[226px] sm:h-[326px] lg:h-[408px] rounded-[20px] lg:rounded-[30px] overflow-hidden absolute">
                            <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col w-full items-center justify-center gap-[20px] sm:gap-[30px] lg:gap-[50px] bg-portto-black rounded-[20px] lg:rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                            <div class="text-center z-10">
                                <p class="font-extrabold text-[18px] sm:text-[24px] lg:text-[32px] leading-[24px] sm:leading-[32px] lg:leading-[48px] mb-[8px] lg:mb-[10px] text-white">{{ ($project->name) }}</p>
                                <p class="text-sm sm:text-base lg:text-lg text-[#BABABC]">{{ ($project->category) }}</p>
                            </div>
                            <a href="{{ route('front.details', $project) }}" class="z-10 font-bold text-sm sm:text-base lg:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[10px_20px] sm:p-[12px_24px] lg:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                            <img src="{{ asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>

    <section id="Workflow" class="container max-w-[1130px] mx-auto pt-[50px] lg:pt-[100px] pb-[120px] lg:pb-[200px] relative px-4 lg:px-0">
        <div class="flex flex-col gap-[30px] lg:gap-[50px] justify-center">
            <h2 class="font-extrabold text-[28px] sm:text-[36px] lg:text-[50px] leading-[36px] sm:leading-[48px] lg:leading-[70px] text-center">My Workflow Suitable <br>For Any Project</h2>
            <div class="flex flex-col lg:flex-row justify-between items-center gap-8 lg:gap-4">
                <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[20px] lg:gap-[30px] items-center">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/messages-notif.svg')}}" alt="icon" class="w-12 h-12 lg:w-auto lg:h-auto">
                    </div>
                    <div class="flex flex-col gap-[8px] lg:gap-[10px] text-center">
                        <p class="font-extrabold text-[18px] lg:text-[22px] leading-[27px] lg:leading-[33px]">Research & Validate</p>
                        <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">Ensuring all requirements were matching with market conditions</p>
                    </div>
                </div>
                <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[20px] lg:gap-[30px] items-center">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/programming-notif.svg')}}" alt="icon" class="w-12 h-12 lg:w-auto lg:h-auto">
                    </div>
                    <div class="flex flex-col gap-[8px] lg:gap-[10px] text-center">
                        <p class="font-extrabold text-[18px] lg:text-[22px] leading-[27px] lg:leading-[33px]">Building with Teams</p>
                        <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">Working with agile framework to product a better results</p>
                    </div>
                </div>
                <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[20px] lg:gap-[30px] items-center">
                    <div class="flex-none">
                        <img src="{{ asset('images/icons/like-notif.svg')}}" alt="icon" class="w-12 h-12 lg:w-auto lg:h-auto">
                    </div>
                    <div class="flex flex-col gap-[8px] lg:gap-[10px] text-center">
                        <p class="font-extrabold text-[18px] lg:text-[22px] leading-[27px] lg:leading-[33px]">Deliver to Clients</p>
                        <p class="text-base lg:text-lg leading-[28px] lg:leading-[34px]">We bring an instant results to the clients so that they are happys</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] grid grid-cols-2 sm:grid-cols-3 lg:flex lg:justify-between items-center gap-4 lg:gap-0 px-4 sm:px-8 lg:px-[100px] py-6 lg:py-0 rounded-[20px] lg:rounded-[30px] w-full min-h-[120px] lg:h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">$230M</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Valuation</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">31,934</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Projects</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">245</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Startups IPO</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">9/10</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Successful</p>
            </div>
            <div class="text-center w-fit h-fit mx-auto col-span-2 sm:col-span-1">
                <p class="font-extrabold text-[24px] sm:text-[32px] lg:text-[40px] leading-[36px] sm:leading-[48px] lg:leading-[60px]">562</p>
                <p class="font-semibold text-sm sm:text-base lg:text-lg">Companies</p>
            </div>
        </div>
    </section>

    <section id="Testimonials" class="bg-[#F4F5F8]">
        <div class="container max-w-[1130px] mx-auto pt-[120px] lg:pt-[180px] pb-[50px] lg:pb-[100px] px-4 lg:px-0">
            <h2 class="font-extrabold text-[28px] sm:text-[36px] lg:text-[50px] leading-[36px] sm:leading-[48px] lg:leading-[70px] text-center">I Have Delivered Success <br>For All My Clients</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] lg:gap-[30px] mt-[30px] lg:mt-[50px]">
                <div class="card-testi bg-white rounded-[20px] lg:rounded-[30px] flex flex-col p-4 lg:p-5 gap-4 lg:gap-5">
                    <div class="h-[32px] lg:h-[40px] flex shrink-0">
                        <img src="{{ asset('images/logos/logo-testi.svg')}}" alt="logo" class="h-full object-contain">
                    </div>
                    <p class="font-semibold text-[18px] lg:text-[22px] leading-[32px] lg:leading-[40px]">"Her working method were truly different from other freelancers, she has this kind of mindset that can create user-center product and user loved it"</p>
                    <div class="flex h-6 lg:h-8">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star" class="h-full">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star" class="h-full">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star" class="h-full">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star" class="h-full">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star" class="h-full">
                    </div>
                    <div class="flex items-center gap-3 lg:gap-4">
                        <div class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] shrink-0">
                            <img src="{{ asset('images/photo/photo.png')}}" alt="photo" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-lg lg:text-xl leading-[24px] lg:leading-[30px]">Jessi Lyio</p>
                            <p class="text-base lg:text-lg text-[#878C9C]">CPO Agolia Modd</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('images/logos/logo-testi2.svg')}}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('images/photo/photo2.png')}}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">Mariam Sya</p>
                            <p class="text-lg text-[#878C9C]">Founder TinderJobs</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('images/logos/logo-testi3.svg')}}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('images/photo/photo3.png')}}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">John Ceyna</p>
                            <p class="text-lg text-[#878C9C]">Investor at Wokiya</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('images/logos/logo-testi4.svg')}}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“Her working method were truly different from other freelancers, she has this kind of mindset that can create user-center product and user loved it”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                        <img src="{{ asset('images/icons/Star.svg')}}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('images/photo/photo.png')}}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">Yein Balli</p>
                            <p class="text-lg text-[#878C9C]">CMO Waniwani</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-faq/>

    <x-footer/>

    @push('after-scripts')
    <script src="{{ asset('js/main.js') }}"></script>
    @endpush
@endsection
