<?php

namespace App\Http\Livewire;
use App\Models\LuTuristico;
use Livewire\Component;


class LuTuristicos extends Component

{
    public $luturisticos, $nombre, $descripcion, $ubicación, $como_llegar, $recomendaciones, $horarios_de_visitas,
    $restricciones, $costo, $insertar_fotos;

    public $modal = false;

    public function render()
    {
        $luturisticos = luTuristico::all(); 
        return view('livewire.lu-turistico', compact('luturisticos', 'luturisticos'));
        
    }

    public function crear()
    {
        $limpiarCampos();
        $abrirModal();
    }

    public function abrirModal() {
        $modal = true;
    }
    public function cerrarModal() {
        $modal = false;
    }
    public function limpiarCampos(){
        $nombre = '';
        $descripcion = '';
        $ubicación = '';
        $como_llegar = '';
        $recomendaciones = '';
        $horarios_de_visitas = '';
        $restricciones = '';
        $costo = '';
        $insertar_fotos = '';
    }
    public function editar($id)
    {
        $luturisticos = luturistico::findOrFail($id);
        $id_luturisticos = $id;
        $nombre = $luturisticos->nombre;
        $descripcion = $luturisticos->descripcion;
        $ubicación = $luturisticos->ubicacion;
        $como_llegar = $luturisticos->como_llegar;
        $recomendaciones = $luturisticos->recomendaciones;
        $horarios_de_visitas = $luturisticos->horarios_de_visitas;
        $restricciones = $luturisticos->restricciones;
        $costo = $luturisticos->costo;
        $insertar_fotos = $luturisticos->insertar_fotos;
       
        $abrirModal();
    }

    public function borrar($id)
    {
        luturisticos::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        luturisticos::updateOrCreate(['id'=>$this->id_luturisticos],
            [
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'ubicación' => $this->ubicación,
                'como_llegar' => $this->como_llegar,
                'recomendaciones' => $this->recomendaciones,
                'horarios_de_visitas' => $this->horarios_de_visitas,
                'restricciones' => $this->restricciones,
                'costo' => $this->costo,
                'insertar_fotos' => $this->insertar_fotos
            ]);
         
         session()->flash('message',
            $id_luturisticos ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $cerrarModal();
         $limpiarCampos();
    }
}
