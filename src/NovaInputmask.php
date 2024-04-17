<?php

namespace Shopstable\NovaInputmask;

use Laravel\Nova\Fields\Field;

class NovaInputmask extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-inputmask';

    /**
     * Make field phonenumber
     *
     * @param string $country
     */
    public function phonenumber(string $country)
    {
        return $this->withMeta(['phone_number' => true, 'country' => $country]);
    }

    /**
     * Store raw value
     */
    public function storeRawValue()
    {
        return $this->withMeta(['storeRawValue' => true]);
    }

    /**
     * Mask field
     *
     * @param string $mask
     */
    public function mask(string $mask)
    {
        return $this->withMeta(['mask' => $mask]);
    }
}
