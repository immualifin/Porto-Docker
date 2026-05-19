  <section id="FAQ" class="container max-w-[1130px] mx-auto px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row gap-[40px] lg:gap-[70px] items-start lg:items-center pt-[50px] lg:pt-[100px] pb-[80px] lg:pb-[150px]">
            <div class="flex flex-col gap-[20px] lg:gap-[30px] w-full lg:w-auto">
                <div class="w-16 h-16 lg:w-20 lg:h-20 flex shrink-0 rounded-full bg-portto-purple items-center justify-center mx-auto lg:mx-0">
                    <img src="{{ asset('images/icons/messages.svg')}}" alt="icon" class="w-8 h-8 lg:w-auto lg:h-auto">
                </div>
                <div class="flex flex-col gap-[8px] lg:gap-[10px] text-center lg:text-left">
                    <h2 class="font-extrabold text-[28px] sm:text-[36px] lg:text-[50px] leading-[36px] sm:leading-[48px] lg:leading-[70px]">Frequently Asked Questions</h2>
                    <p class="text-base lg:text-lg text-[#878C9C]">If you have any question please contact me.</p>
                </div>
                <a href="#Workflow" class="bg-portto-black font-bold text-base lg:text-lg text-white rounded-full p-[12px_24px] lg:p-[14px_30px] w-fit mx-auto lg:mx-0 transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">Contact Me</a>
            </div>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] w-full lg:w-[603px] lg:shrink-0">
                <div class="flex flex-col p-4 lg:p-5 rounded-xl lg:rounded-2xl bg-[#F4F5F8] w-full">
                    <button class="accordion-button flex justify-between gap-2 lg:gap-1 items-center" data-accordion="accordion-faq-1">
                        <span class="font-bold text-lg sm:text-xl lg:text-2xl text-left">How do I work usually?</span>
                        <div class="arrow w-8 h-8 lg:w-9 lg:h-9 flex shrink-0">
                            <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-1" class="accordion-content hide">
                        <p class="text-base lg:text-[20px] leading-[28px] lg:leading-[36px] pt-4 lg:pt-5">As a freelancer, my work process is characterized by flexibility, self-discipline, and a strong emphasis on client communication.</p>
                    </div>
                </div>
                <div class="flex flex-col p-4 lg:p-5 rounded-xl lg:rounded-2xl bg-[#F4F5F8] w-full">
                    <button class="accordion-button flex justify-between gap-2 lg:gap-1 items-center" data-accordion="accordion-faq-2">
                        <span class="font-bold text-lg sm:text-xl lg:text-2xl text-left">How much I charge per project?</span>
                        <div class="arrow w-8 h-8 lg:w-9 lg:h-9 flex shrink-0">
                            <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-2" class="accordion-content hide">
                        <p class="text-base lg:text-[20px] leading-[28px] lg:leading-[36px] pt-4 lg:pt-5">I don't charge hourly. I charge based on the project brief and given timeline to finish that particular project.</p>
                    </div>
                </div>
                <div class="flex flex-col p-4 lg:p-5 rounded-xl lg:rounded-2xl bg-[#F4F5F8] w-full">
                    <button class="accordion-button flex justify-between gap-2 lg:gap-1 items-center" data-accordion="accordion-faq-3">
                        <span class="font-bold text-lg sm:text-xl lg:text-2xl text-left">Can I work full-time?</span>
                        <div class="arrow w-8 h-8 lg:w-9 lg:h-9 flex shrink-0">
                            <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-3" class="accordion-content hide">
                        <p class="text-base lg:text-[20px] leading-[28px] lg:leading-[36px] pt-4 lg:pt-5">I don't work full-time. At this moment, I prefer to work remotely and based on the certain project only.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>