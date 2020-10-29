<?php

namespace Creativeorange\LaravelTranslatableAndInjectable\Traits;

use Creativeorange\LaravelInjectable\Casts\InjectableCast;
use Creativeorange\LaravelInjectable\LaravelInjectable;
use Spatie\Translatable\HasTranslations;

trait HasTranslationsTrait
{
    use HasTranslations {
        getAttributeValue as getTranslatableAttributeValue;
    }

    public function getAttributeValue($key)
    {
        if (! $this->isTranslatableAttribute($key)) {
            return parent::getAttributeValue($key);
        }

        return (new LaravelInjectable())->setBody(
            $this->getTranslation($key, $this->getLocale())
        )->setModel($this);
    }
}
