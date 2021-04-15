<?php

namespace App\Http\Livewire\Admins;

use App\Models\Channel;
use Livewire\Component;

class Blog extends Component
{
    public $name;
    public $currentChannel;


    protected $rules = [
        'name' => 'required',
    ];

    public function storeModal()
    {
        $this->resetValidation();
        $this->reset();
    }

    public function store()
    {
        $dada = $this->validate();
        $channel = Channel::create($dada);
        $this->dispatchBrowserEvent('close-modal');
    }


    public function updateModal($id)
    {
        $channel = Channel::find($id);
        $this->currentChannel = $channel;
        $this->name = $channel->name;
    }

    public function update()
    {
        $data = $this->validate();
        $this->currentChannel->update($data);
        $this->dispatchBrowserEvent('close-modal');
    }

    public function Delete($id)
    {
        $channel = Channel::find($id);
        $channel->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view(
            'livewire.admins.blog',
            ['channels' => Channel::paginate(5)]
        );
    }
}
