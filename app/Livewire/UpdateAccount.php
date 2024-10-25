<?php

namespace App\Livewire;

use App\Models\dataTrainer;
use Livewire\Component;

class UpdateAccount extends Component
{
    public $idAccount;
    public $username;
    public $email;
    public $password;
    public $lulusan;
    public $alamat;
    public $telephone;

    protected $rules = [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:4|string',
        'lulusan' => 'required|string',
        'alamat' => 'required|string',
        'telephone' => 'required|numeric',
    ];
    public function mount($idAccount = null) {
        if($idAccount) {
            $account = dataTrainer::findOrFail($idAccount);
            $this->username = $account -> username;
            $this->email = $account -> email;
            $this->password = $account -> password;
            $this->lulusan = $account -> lulusan;
            $this->alamat = $account -> alamat;
            $this->telephone = $account -> telephone;
        }
    }
    public function savePost() {
        $this->validate();
        if($this->idAccount) {
            $account = dataTrainer::findOrFail($this->idAccount);
            $account->update([
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'lulusan' => $this->lulusan,
                'alamat' => $this->alamat,
                'telephone' => $this->telephone,
            ]);
        } else {
            dataTrainer::create([
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'lulusan' => $this->lulusan,
                'alamat' => $this->alamat,
                'telephone' => $this->telephone,
            ]);
        }

        $this->reset(['username ', 'email', 'password', 'lulusan','alamat','telephone'],);

        session()->flash('success','update data akun user');
    }
    public function render()
    {
        return view('trainer.pages.profileAkun.livewire.update-account');
    }
}
