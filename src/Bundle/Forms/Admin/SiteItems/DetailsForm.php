<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\SiteItems;

use Marktic\Partners\Bundle\Library\Form\FormModel;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-site-item-form');

        $this->addInput('id_partner', translator()->trans('partner'), true);
        $this->addInput('id_site', translator()->trans('site'), true);
        $this->addInput('id_category', translator()->trans('category'), true);
        $this->addInput('label', translator()->trans('label'), true);

        $this->addButton('save', translator()->trans('submit'));
    }
}
