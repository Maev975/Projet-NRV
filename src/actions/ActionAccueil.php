<?php

namespace Iutnc\Nrv\actions;

use Iutnc\Nrv\auth\AuthProvider;
use Iutnc\Nrv\exceptions\AuthException;

class ActionAccueil extends Action
{
    private string $form = <<<HTML
    <form action="?action=accueil" method="POST">
        <nav>
            <a href="?action=afficherSoirees">Afficher les soirées</a>
            <br>

    </form>
    HTML;

    public function get(): string
    {
        return $this->form;
    }



}