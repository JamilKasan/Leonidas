<x-app-layout>
    <div class="bg-white py-8 sm:py-8 h-full">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recipes</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600"></p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($recipes as $recipe)
                    <a href="{{ route('recipes.show', $recipe->id) }}">
                        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                            <img src="{{ asset('storage/' . $recipe->image) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40 "></div>
                            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                                <time datetime="2020-03-16" class="mr-8">{{ date('M jS, Y', strtotime($recipe->updated_at))}}</time>
                                <div class="-ml-4 flex items-center gap-x-4">
                                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="flex gap-x-2.5">
                                        <img src="{{ asset('logo-ico.png') }}" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
                                        Leonidas
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                                    <span class="absolute inset-0"></span>
                                    {{ $recipe->name }}
                            </h3>
                        </article>
                    </a>
                @endforeach

                <!-- More posts... -->
            </div>
        </div>
    </div>
</x-app-layout>
