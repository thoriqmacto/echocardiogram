<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Echo Report') }}
        </h2>
    </x-slot>

    <h2 class="font-bold text-lg">{{$data->anesthesia}}</h2>

</x-app-layout>
