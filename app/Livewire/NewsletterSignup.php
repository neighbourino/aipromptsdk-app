<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterSignup extends Component
{

    #[Validate('required')] 
    public $email = '';

    public $submitted = false;

    public function save()
    {
        $this->validate(); 
 

        Newsletter::subscribe($this->email);

        $this->submitted = true;

          
 
        #return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.newsletter-signup');
    }
}
