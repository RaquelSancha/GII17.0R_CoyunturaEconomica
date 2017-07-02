<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class invitadoTest extends DuskTestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testRestriccionModificarTabla()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tables')
                    ->waitForText('Modificar Valores') 
                    ->clickLink('Modificar Valores') 	
                    ->waitForText('Inicia sesión')
                    ->assertPathIs('/login');
        });
    }



    public function testGestionDatos()
    {
        $this->browse(function (Browser $browser) {
           $browser->visit('/')
                    ->clickLink('Comienza')
                    ->waitForText('Bienvenido')
                    ->clickLink('Gestión Datos')
                    ->waitForText('Inicia sesión')
                    ->assertPathIs('/login');
        });
    }

    public function testAdministraciónUsuarios()
    {
        $this->browse(function (Browser $browser) {
           $browser->visit('/')
                    ->clickLink('Comienza')
                    ->waitForText('Bienvenido')
                    ->clickLink('Administración')
                    ->waitForText('Usuarios')
                    ->clickLink('Usuarios')
                    ->waitForText('Inicia sesión')
                    ->assertPathIs('/login');
        });
    }

   
}
