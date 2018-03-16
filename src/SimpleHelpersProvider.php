<?php 
namespace Itsmill3rtime\Helpers;

use Illuminate\Support\ServiceProvider;

class SimpleHelpersProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        include_once('loader.php');
    }
}