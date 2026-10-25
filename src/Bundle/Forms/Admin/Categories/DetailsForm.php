<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\Categories;

use Marktic\Partners\Bundle\Library\Form\FormModel;
use Marktic\Partners\Sites\Models\Site;
use Marktic\Partners\Utility\PartnersModels;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-category-form');

        $this->addInput('name', translator()->trans('name'), true);
        $this->addSelect('id_site', translator()->trans('site'), false, $this->siteOptions());

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function siteOptions(): array
    {
        $sites = PartnersModels::sites()->newQuery()->orderBy('name')->all();
        $options = ['' => ''];

        /** @var Site $site */
        foreach ($sites as $site) {
            $options[(string) $site->id] = (string) $site->name;
        }

        return $options;
    }
}
