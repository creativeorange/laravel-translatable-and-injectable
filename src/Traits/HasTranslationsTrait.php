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

    /**
     * @param $key
     * @return mixed
     */
    public function getAttributeValue($key)
    {
        if (!$this->isTranslatableAttribute($key)) {
            return parent::getAttributeValue($key);
        }

        $casts = self::getCasts();

        if (isset($casts[$key]) && $casts[$key] == InjectableCast::class) {
            return (new LaravelInjectable())->setBody(
                $this->getTranslation($key, $this->getLocale())
            )->setModel($this);
        } else {
            return $this->getTranslation($key, $this->getLocale());
        }
    }
}
