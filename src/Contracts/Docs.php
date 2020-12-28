<?php

declare(strict_types=1);

namespace Pollen\Docs\Contracts;

use tiFy\Contracts\Support\ParamsBag;

/**
 * @mixin \tiFy\Support\Concerns\BootableTrait
 * @mixin \tiFy\Support\Concerns\ContainerAwareTrait
 */
interface Docs
{
    /**
     * Récupération de l'instance courante.
     *
     * @return static
     */
    public static function instance(): Docs;

    /**
     * Chargement.
     *
     * @return static
     */
    public function boot(): Docs;

    /**
     * Récupération de paramètre|Définition de paramètres|Instance du gestionnaire de paramètre.
     *
     * @param string|array|null $key Clé d'indice du paramètre à récupérer|Liste des paramètre à définir.
     * @param mixed $default Valeur de retour par défaut lorsque la clé d'indice est une chaine de caractère.
     *
     * @return ParamsBag|mixed
     */
    public function config($key = null, $default = null);

    /**
     * Définition des paramètres de configuration.
     *
     * @param array $attrs Liste des attributs de configuration.
     *
     * @return static
     */
    public function setConfig(array $attrs): Docs;
}