<x-app-layout>
    <div class="bg-white py-8 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $diet->name }}</h1>
                        <div class="max-w-xl">
                            <p class="mt-2">{!! $diet->ingredients !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
