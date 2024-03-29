<?php namespace Zombiecorp\Braddress\FormWidgets;

use Html;
use Backend\Classes\FormWidgetBase;
use RainLab\Location\Models\Setting;

/**
 * Address finder
 * Renders a Google Place address field.
 *
 * Usage:
 *
 *   address:
 *       label: Address
 *       type: addressfinder
 *       countryRestriction: 'us,ch'
 *       fieldMap:
 *           latitude: latitude
 *           longitude: longitude
 *           city: city
 *           zip: zip
 *
 * @package rainlab\location
 * @author Alexey Bobkov, Samuel Georges
 */
class CepWidget extends FormWidgetBase
{
    /**
     * {@inheritDoc}
     */
    public $defaultAlias = 'cepfield';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('braddress');
    }

    /**
     * Prepares the list data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
    }

    public function getFieldMapAttributes()
    {
        // $fields = $this->getParentForm()->getFields();
        // $result = [];

        // foreach ($this->fieldMap as $map => $fieldName) {
        //     if (!$field = array_get($fields, $fieldName)) {
        //         continue;
        //     }

        //     $result['data-input-'.$map] = '#'.$field->getId();
        // }

        // return Html::attributes($result);
    }

    public function getCountryRestriction()
    {
        // return $this->countryRestriction;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        // $apiKey = Setting::get('google_maps_key');
        // $this->addJs('//maps.googleapis.com/maps/api/js?libraries=places&key='.$apiKey);
        $this->addJs('vendor/jquery.mask.min.js', 'vendor');
        $this->addJs('braddress.js', 'core');
    }
}
