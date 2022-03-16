<?php

namespace controleur;

class ErreurControleur extends BaseControleur
{
    public function pageNonTrouve()
    {
        $this->afficherVue([],'erreur');
    }
}
