<?php

namespace Nurmuhammet\NovaInputmask;

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
     * @var string
     */
    public function phonenumber(string $country)
    {
        return $this->withMeta(['phone_number' => true, 'country' => $country]);
    }

    /**
     * Mask field
     *
     * @var string
     */
    public function mask(string $mask)
    {
        return $this->withMeta(['mask' => $mask]);
    }
}
