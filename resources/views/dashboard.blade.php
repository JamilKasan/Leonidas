<x-app-layout>
    @php($user = \Illuminate\Support\Facades\Auth::user())
    @php($upcomingEvent = \App\Models\Schedule::query()->where('start', '>=', date('Y-m-d H:i:s'))->orderBy('start', 'asc')->first())
    @php($goal = \Illuminate\Support\Facades\Auth::user()->goal_weight)
    @php($first = \Illuminate\Support\Facades\Auth::user()->first_weight)
    @php($last = \Illuminate\Support\Facades\Auth::user()->last_weight)
    @php($diff = \Illuminate\Support\Facades\Auth::user()->last_weight - \Illuminate\Support\Facades\Auth::user()->first_weight)
    @php($progressToGoal = $goal - $first)
    <div class="bg-white py-8 sm:py-8 h-full">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="mx-auto lg:px-8">
            <dl class="grid grid-cols-1 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Name</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $user->name }}</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Age</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $user->age }}</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Height</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $user->height }} M</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Initial weight</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ \Illuminate\Support\Facades\Auth::user()->first_weight }} KG</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Current weight</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ \Illuminate\Support\Facades\Auth::user()->last_weight }} KG</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">Goal</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ \Illuminate\Support\Facades\Auth::user()->goal_weight }} KG</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-600">{{ $progressToGoal < 0 ? 'Weight to lose' : 'Weight to gain' }}</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $goal > $first ? number_format($goal - $first, 2) : number_format($first - $goal, 2)}} KG</dd>
                </div>
                <div class="flex flex-col bg-gray-400/5 p-8">
                    @if(\Illuminate\Support\Facades\Auth::user()->first_weight != null and \Illuminate\Support\Facades\Auth::user()->last_weight != null and \Illuminate\Support\Facades\Auth::user()->goal_weight != null)
                    @if($goal > $first)
                        @if($progressToGoal > 0)
                            @php($percentage = ($diff) / ($progressToGoal/100))
                        @endif
                        @else
                            @php($percentage = ($diff) / ($progressToGoal/100))
                    @endif
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Progress</dt>
{{--                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900"><img width="20" src="{{ $percentage > 0 ? asset('symbols/arrow-up-solid.svg') : asset('symbols/arrow-down-solid.svg') }}" alt="">{{ number_format($percentage, 2) }}%</dd>--}}
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ number_format($percentage, 2) }}%</dd>
                    @endif
                </div>
                @if($upcomingEvent != null)
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600"><div>Upcoming event</div>{{ date('Y-m-d') ==  date('Y-m-d', strtotime($upcomingEvent->start)) ? 'Today' : date('M d, Y', strtotime($upcomingEvent->start)) }} <div>{{ date('H:i', strtotime($upcomingEvent->start))  . '-' . date('H:i', strtotime($upcomingEvent->end))}}</div></dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $upcomingEvent->name }}</dd>
                    </div>
                @endif

            </dl>
        </div>
    </div>
</x-app-layout>
