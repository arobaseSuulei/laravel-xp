<x-layout title="home" info="">

    <p > </p>

    @php
        $message = "All your ideas here ?";
    @endphp

    <p>{{ $message }}</p>

    <div class="mt-10">
        <h2> Your ideas </h2>
        @foreach($ideas as $idea)

            <li> {{$idea->name}} </li>

        @endforeach
    </div>







</x-layout>
