<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\Categories;

use Marktic\Partners\Bundle\Library\Form\FormModel;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-category-form');

        $this->addInput('name', translator()->trans('name'), true);
        $this->addInput('id_site', translator()->trans('site'));

        $this->addButton('save', translator()->trans('submit'));
    }
}
