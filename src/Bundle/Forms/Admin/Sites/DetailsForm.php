<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\Sites;

use Marktic\Partners\Bundle\Library\Form\FormModel;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-site-form');

        $this->addInput('name', translator()->trans('name'), true);

        $this->addButton('save', translator()->trans('submit'));
    }
}
