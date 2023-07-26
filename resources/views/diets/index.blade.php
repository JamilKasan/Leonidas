<x-app-layout>
    <div class="bg-white py-8 sm:py-8 h-full">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Diet</h2>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 border-t border-gray-200 pt-3 sm:mt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($diets as $diet)
                    <ul role="list" class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
                        <a  href="{{ route('diet.show', $diet->id) }}">
                            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6">
                                <div class="flex gap-x-4">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">
                                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                                {{ $diet->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </li>
                        </a>

                    </ul>
                @endforeach
            </div>
        </div>
    </div>



</x-app-layout>
