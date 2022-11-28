<?php

namespace App\View\Components;

use App\Models\Cliente;
use Illuminate\View\Component;

class ClientForm extends Component
{
    private $cliente;
    /**
     * Create a new component instance.
     * @param \App\Models\Cliente $cliente
     * @return void
     */
    public function __construct( $cliente = null )
    {
        if ( is_null( $cliente ) ) {
            $cliente = Cliente::make([]);
        }
        $this->cliente = $cliente;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $args = [
            'cliente' => $this->cliente,
        ];

        return view('components.client-form', $args);
    }
}
