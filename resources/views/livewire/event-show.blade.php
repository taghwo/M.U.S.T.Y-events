<div class="container px-4 mx-auto">
<div class="flex flex-col flex-wrap">
    <div class="flex flex-col py-3">
    <small class="text-gray-500 leading-6">Event Title</small>
    <h1>{{$event->title}}</h1>
    </div>
    <div class="flex flex-col py-3 leading-6">
    <small class="text-gray-500">Event Description</small>
    <h1>{{$event->description}}</h1>
    </div>
    <div class="flex flex-col py-3 leading-6">
    <small class="text-gray-500">Event Start Date</small>
    <h1>{{$event->start_date}}</h1>
    </div>
    <div class="flex flex-col py-3 leading-6">
    <small class="text-gray-500">Event End Date</small>
    <h1>{{$event->end_date}}</h1>
    </div>
    <div class="flex flex-col py-3 leading-6">
    <small class="text-gray-500">Total Vote(s) For Event</small>
    <h1>{{$event->votes->count()}}</h1>
    </div>
</div>
<h2 class="leading-6 text-gray-500 font-bold py-4 mx-auto flex flex-col text-center align-center">Event Images with votes</h2>
    <div class="flex sm:flex-row md:flex-row px-6 flex-wrap">
        @foreach ($event->images as $image)
            <div class="max-w-sm px-4 lg:px-6 py-5 flex-wrap">
                <div class="bg-white hover:shadow-xl">
                    <div class="">
                        <img src="/storage/{{$image->path}}" alt=""
                            class="h-56 w-full border-white border-8 hover:opacity-25">
                    </div>
                    <div class="px-4 py-4 md:px-10 flex flex-row justify-between">
                            <small>Image Votes</small>
                            <span class=" rounded-full px-4 py-2 bg-gray-300 text-black">{{$image->imagevotes->count()}}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex flex-col">
        <h2 class="leading-6 text-gray-500 font-bold py-4 mx-auto flex flex-col text-center align-center">Event Voters</h2>
        <div class="flex flex-col">
        @foreach ($event->voters as $user)

        <small class="text-gray-500">Name</small>
        <h3 class="py-4">
            {{$user->name}}
        </h3>
        <small class="text-gray-500">Email</small>
        <h3 class="py-4">
            {{$user->email}}
        </h3>
        <hr class="py-2"/>
        <hr/>
        @endforeach
        </div>
    </div>
</div>
