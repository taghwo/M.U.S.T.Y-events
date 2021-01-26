<div>
    @include('partials.alert')

    <div class="flex flex-col sm:flex-col md:flex-col px-6 container">
        @foreach ($events as $event)
                <div class="flex flex-row md:flex-row lg:px-6 py-5 justify-start overflow-x-scroll">
                @foreach ($event->images->shuffle() as $image)
                <div class="flex flex-col bg-white mb-2 w-full md:w-1/3 mx-8 p-4">
                <img src="storage/{{$image->path}}" alt=""
                class="h-56 border-white border-8 hover:opacity-25 max-w-sm my-2">

                <button  wire:click="vote([{{$event->id}},{{$image->id}}])"
                    class="{{$this->blockDuplicateVoting([$event->id]) != null? "invisible":"visible"}} p-2 bg-indigo-500 text-white rounded-full font-sm text-sm self-end outline-none">Vote</button>
                </div>
                    @endforeach
                </div>
            <div class="pb-8 lg:pt-3 md:px-10 w-full">
                <h1 class="font-bold text-lg">
                    {{$event->title}}
                </h1>
                <p class="py-4">
                    {{$event->description}}
                </p>
            </div>
        @endforeach
        <nav class="relative z-0 inline-flex shadow-sm py-4 mb-3">
            <div	>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div>
                {{ $events->links() }}
            </div>
            <div v-if="pagination.current_page < pagination.last_page">
                <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </nav>
    </div>
</div>
