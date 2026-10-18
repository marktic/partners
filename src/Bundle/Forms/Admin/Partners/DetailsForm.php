<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\Partners;

use Marktic\Partners\Bundle\Library\Form\FormModel;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-partner-form');

        $this->addInput('name', translator()->trans('name'), true);
        $this->addInput('label', translator()->trans('label'));
        $this->addInput('url', translator()->trans('url'));
        $this->addInput('id_category', translator()->trans('category'));

        $this->addButton('save', translator()->trans('submit'));
    }
}
