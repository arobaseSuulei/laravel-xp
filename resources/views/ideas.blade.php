<x-layout title="New ideas">




    <form method="POST" action="/ideas" class="mt-10">

        @csrf
        <div class="sm:col-span-2">
            <label for="message" class="block text-sm/6 font-semibold ">Message</label>


            <input type="text" name="name" placeholder="nom">
            <input type="text" name="season" placeholder="saison">
            <input type="text" name="platform" placeholder="platforme">
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>
    </form>



        <div class="mt-10">
            <h2> Your anime </h2>
            {{--
        @foreach($ideas as $idea)
            <li>{{ $idea->name }}</li>
        @endforeach
            --}}


        </div>




</x-layout>
