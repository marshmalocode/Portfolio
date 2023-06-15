<?php

namespace model\AbstractClass;

abstract class MappingAbstract
{
    public function __construct(array $tab = [])
    {
        $this->hydrate($tab);
    }

    public function hydrate(array $tab)
    {
        foreach ($tab as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                //echo"<p>La méthode $method existe et sera exécutée avec la valeur</p>";
                // on appel le setter
                $this->$method($value);
            }
            // else{
                // erreur
                //echo"<p>La méthode $method n'existe pas</p>";
            //}
        }
    }
}