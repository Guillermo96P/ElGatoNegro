<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads; //trait para subir imagenes
use Livewire\WithPagination; //trait de paginacion

class CategoriasController extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $nombre, $search, $imagen, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;

    public function render()
    {

        $data = Categoria::all();

        return view('livewire.categoria.categorias', ['categorias' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
