<?php

namespace App\Http\Livewire\Prueba;

use Livewire\Component;
use App\Models\Libro;
use Livewire\WithFileUploads;


class Crear extends Component
{
    use WithFileUploads;
    public $book;


    protected $rules=[
        //si ya existe este nombre de producto, mandar un mensaje
        'book.nomLi'=> "required|max:200",
        'book.canEx'=> "required|integer",
        'book.price'=> "required",
        'book.description'=> "required",
    ];

    protected $validationAttributes=[
        
        'book.nomLi'=> "Nombre del Libro",
        'book.canEx'=> "Cantidad Existente",
        'book.price'=> "Precio",
        'book.description'=> "Sinopxis",
    ];

    public function mount()
    {
        $this->book=[];     
    }

    public function save_libro()
    {
        $this->validate();
        //guardar imagen
       
        $lib=new Libro($this->book);
        
        
        $lib->save();
        $this->book=[];
        session()->flash('flash.banner', 'Libro Guardado!');
        session()->flash('flash.bannerStyle', 'success');
      
    }

    public function render()
    {
        return view('livewire.prueba.crear');
    }
}
