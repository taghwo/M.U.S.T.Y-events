<?php

namespace App\Http\Livewire;

use App\Repository\Contracts\EventImageInterface;
use App\Repository\Contracts\EventInterface;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EventForm extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $images;


    protected $rules = [
        'title' => 'required|max:500',
        'description' => 'required|string:max:3000',
        'start_date' => 'required|date_format:Y-m-d',
        'end_date' => 'required|date_format:Y-m-d|after_or_equal:start_date',
        'images' => 'required|array',
        'images.*' => 'mimes:png,jpg,jpeg',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        $event = App()->make(EventInterface::class);

        try {
            $event = $event->createModel([
                'title' => $this->title,
                'description' => $this->description,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
            ]);
            if (count($this->images) > 0) {
                $this->saveEventImages($event->id);
            }
            session()->flash('success', 'Event successfully created.');
            $this->resetForm();
            $this->emit('newEvent');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }

    private function saveEventImages($eventId)
    {
        $eventImagesToInsert = [];

        foreach ($this->images as $image) {
            $ext = $image->extension();
            $filename = $this->setFile($ext);
            $path = $image->storeAs('event_images', $filename, 'public');
            array_push($eventImagesToInsert, ["event_id" => $eventId,'path' => $path]);
        }

        $eventImage = app()->make(EventImageInterface::class);

        $eventImage->insertBulk($eventImagesToInsert);
    }

    private function setFile($ext)
    {
        $getRandomStr = str_shuffle("ABCDEFghdfs01243547574gfd-");

        return substr(Str::slug($this->title), 25).'-'.$getRandomStr.'.'.$ext;
    }
    private function resetForm()
    {
        $this->title = '';
        $this->description = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->images = '';
    }
}
