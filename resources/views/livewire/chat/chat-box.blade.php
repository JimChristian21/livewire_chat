<div>
    <header class="w-full sticky inset-x-0 flex pb-[5px] top-0 z-10 bg-white border-b">
        <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
            <a href="#" class="shrink-0 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
            </a>
            <div class="shrink-0 mt-2">
                <x-avatar class="w-9 h-9 lg:w-11 lg:h-11"/>
            </div>

            <h6 class="font-bold truncate">{{fake()->name}}</h6>

        </div>
    </header>
    <main class="flex flex-col gap-3 p-2 5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">
        <div @class([
            'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'    
        ])>

            <div @class(['shrink-0'])>
                <x-avatar/>
            </div>

            <div @class([
                'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                'rounded-bl-none border-gray-200/40' => false,
                'rounded-br-none bg-blue-500/80 text-white' => true
            ])>
                <p class="whitepace-normal truncate text sm md:text-base tracking-wide lg:tracking-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam esse ipsa? Assumenda fuga rem corrupti incidunt dicta labore, dolorum debitis quod a repellendus, eveniet, sint atque sapiente? Reprehenderit, beatae!
                </p>

                <div class="ml-auto flex gap-2">
                    <p @class([
                        'text-xs',
                        'text-gray-500' => false,
                        'text-white' => true
                    ])>
                        5:25am
                    </p>
                    <div>
                        <span @class(['text-gray-500'])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                            </svg>
                        </span>
                        <span @class(['text-gray-500'])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
