@extends('site.layouts.base')


@section('content')
    <div class="grid grid-cols-3 gap-8">

        <section class=" col-span-2">
            <h2 class=" font-medium text-2xl mb-4">aktuelle Meldungen</h2>

            <div class="grid grid-cols-2 gap-4">
                <div class="relative flex flex-col text-gray-700 bg-white shadow-md rounded bg-clip-border">
                    {{-- <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40"> --}}
                    <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                        alt="img-blur-shadow" class="object-cover w-full h-32 rounded-t" layout="fill" />
                    {{-- </div> --}}
                    <div class="p-6">
                        <h3
                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            UI/UX Review Check
                        </h3>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk
                            and near to "Naviglio" where you can enjoy the main night life in
                            Barcelona.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-sky-500" href="#">
                            <button
                                class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-sky-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-sky-500/10 active:bg-sky-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-dark="true">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="relative flex flex-col text-gray-700 bg-white shadow-md rounded bg-clip-border">
                    {{-- <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40"> --}}
                    <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                        alt="img-blur-shadow" class="object-cover w-full h-32 rounded-t" layout="fill" />
                    {{-- </div> --}}
                    <div class="p-6">
                        <h3
                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            UI/UX Review Check
                        </h3>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk
                            and near to "Naviglio" where you can enjoy the main night life in
                            Barcelona.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-sky-500" href="#">
                            <button
                                class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-sky-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-sky-500/10 active:bg-sky-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-dark="true">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="relative flex flex-col text-gray-700 bg-white shadow-md rounded bg-clip-border">
                    {{-- <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40"> --}}
                    <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                        alt="img-blur-shadow" class="object-cover w-full h-32 rounded-t" layout="fill" />
                    {{-- </div> --}}
                    <div class="p-6">
                        <h3
                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            UI/UX Review Check
                        </h3>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk
                            and near to "Naviglio" where you can enjoy the main night life in
                            Barcelona.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-sky-500" href="#">
                            <button
                                class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-sky-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-sky-500/10 active:bg-sky-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-dark="true">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="relative flex flex-col text-gray-700 bg-white shadow-md rounded bg-clip-border">
                    {{-- <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40"> --}}
                    <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                        alt="img-blur-shadow" class="object-cover w-full h-32 rounded-t" layout="fill" />
                    {{-- </div> --}}
                    <div class="p-6">
                        <h3
                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            UI/UX Review Check
                        </h3>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk
                            and near to "Naviglio" where you can enjoy the main night life in
                            Barcelona.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-sky-500" href="#">
                            <button
                                class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-sky-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-sky-500/10 active:bg-sky-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-dark="true">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <h2 class=" font-medium text-2xl mb-4">Veranstaltungen</h2>

            <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded bg-clip-border">
                <div class="p-6">
                    <h3
                        class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        UI/UX Review Check
                    </h3>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        Because it's about motivating the doers. Because I'm here to follow my
                        dreams and inspire others.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-sky-500" href="#">
                        <button
                            class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-sky-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-sky-500/10 active:bg-sky-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Mehr erfahren
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </section>

    </div>


    {{-- <section class="p-6 bg-gray-50 rounded-sm ">
        <div class="prose prose-xl prose-gray max-w-full">
            <h1>{!! $item->title !!}</h1>

            @if ($item->hasImage('cover'))
                <img class="float-left rounded-sm w-1/2 my-2 mr-6" src="{{ $item->image('cover') }}">
            @endif

            @if (trim($item->description) != '')
                <p class="lead">{!! $item->description !!}</p>
            @endif

            {!! $item->renderBlocks() !!}
        </div>
    </section> --}}
@endsection
