<div class="flex flex-col">
    @if (session()->has('success'))
        <div class="bg-green-500 text-white mx-2 my-2 px-4 py-2">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-500 text-white mx-2 my-2 px-4 py-2">
            {{ session('error') }}
        </div>
    @endif
</div>