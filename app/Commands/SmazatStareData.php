<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class SmazatStareData extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'command:name';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
    // Získáme aktuální datum
    $dnes = date('Y-m-d');

    // Vypočítáme datum před 11 lety
    $hranice = date('Y-m-d', strtotime('-11 years'));

    // Vytvoříme model
    $model = new \App\Models\Data();

    // Najdeme záznamy starší než 11 let
    $zaznamy = $model
        ->where('date <', $hranice)
        ->findAll();

    // Projdeme jednotlivé záznamy
    foreach ($zaznamy as $zaznam) {

        // Provedeme soft delete
        $model->delete($zaznam->id);
    }

    echo "Mazání starých záznamů dokončeno.";
    }
}
