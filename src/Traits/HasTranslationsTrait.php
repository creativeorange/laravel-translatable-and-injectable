<?php

namespace Creativeorange\LaravelTranslatableAndInjectable\Traits;

use Creativeorange\LaravelInjectable\Casts\InjectableCast;
use Creativeorange\LaravelInjectable\LaravelInjectable;
use Spatie\Translatable\HasTranslations;

trait HasTranslationsTrait
{
    use HasTranslations {
        getTranslation as getTranslatableTranslation;
    }

    /**
     * @param string $key
     * @param string $locale
     * @param bool $useFallbackLocale
     */
    public function getTranslation(string $key, string $locale, bool $useFallbackLocale = true)
    {
        if($this->keyHasInjectableCast($key)) {
            return (new LaravelInjectable())->setBody(
                self::getTranslatableTranslation($key, $locale, $useFallbackLocale)
            )->setModel($this);
        }

        return self::getTranslatableTranslation($key, $locale, $useFallbackLocale);
    }

    private function keyHasInjectableCast($key)
    {
        $casts = array_merge(
            array_fill_keys($this->getTranslatableAttributes(), 'array'),
            parent::getCasts()
        );

        return isset($casts[$key]) && $casts[$key] == InjectableCast::class;
    }
}
