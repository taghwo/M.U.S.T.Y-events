<div class="bg-white p-4 py-4 mt-2 rounded-bottom">
    @include('partials.alert')
    <form wire:submit.prevent="submit" class="flex flex-col">
        <label class="flex flex-col py-2">
                <small class="text-black-600">Event Title</small>
        </label>
        <input class="title bg-white-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" wire:model="title" placeholder="Title" type="text" required maxlength="500">
        @error('title') <span class="error">{{ $message }}</span> @enderror

            <label class="flex flex-col py-2">
                <small class="text-black-600">Event Description</small>
             </label>
        <textarea class="description bg-white-100 sec p-3 h-60 border border-gray-300 mb-4 outline-none" wire:model="description" spellcheck="false" placeholder="Describe event details"></textarea>
        @error('description') <span class="error">{{ $message }}</span> @enderror


        <label class="flex flex-col py-2">
            <small class="text-black-600">Event Start Date</small>
         </label>
        <input type="date" name="start_date" min="{{date('Y-m-d')}}" class="px-2 py-2 mt-2 mb-2" wire:model="start_date" date required>
        @error('start_date') <span class="error">{{ $message }}</span> @enderror


        <label class="flex flex-col py-2">
            <small class="text-black-600">Event End Date</small>
         </label>
        <input type="date" name="end_date" class="px-2 py-2" min="{{date('Y-m-d')}}" wire:model="end_date" required>
        @error('end_date') <span class="error">{{ $message }}</span> @enderror


        <label class="flex flex-col py-2">
            <small class="text-black-600">Event Images (press control to add multiple images)</small>
         </label>
        <input type="file" name="images[]" class="px-2 py-2" accept="images/*" wire:model="images" required multiple>

        <div class="buttons flex mt-2">
            <button class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 bg-indigo-500" type="submit">Save Event</button>
          </div>
    </form>
</div>
