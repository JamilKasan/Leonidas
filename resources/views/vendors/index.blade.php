<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <x-maps-leaflet :id="1" class="block sm:hidden"  :zoom-level="15" :center-point="['lat' => '5.8513880094368975' , 'long' => '-55.13034372206839']" :markers="$addresses"></x-maps-leaflet>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <div class="bg-white py-8 sm:py-8 h-full hidden sm:block">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Vendor</h2>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr sm:mt-20 lg:mx-0 lg:max-w-none">
                <div class="py-8 lg:py-0 w-full">
                    <x-maps-leaflet :id="2"  :zoom-level="15" :center-point="['lat' => '5.8513880094368975' , 'long' => '-55.13034372206839']" :markers="$addresses ?? null"></x-maps-leaflet>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
