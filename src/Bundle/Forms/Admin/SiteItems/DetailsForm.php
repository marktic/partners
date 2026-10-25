<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\SiteItems;

use Marktic\Partners\Bundle\Library\Form\FormModel;
use Marktic\Partners\Categories\Models\Category;
use Marktic\Partners\Partners\Models\Partner;
use Marktic\Partners\Sites\Models\Site;
use Marktic\Partners\Utility\PartnersModels;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-site-item-form');

        $this->addSelect('id_partner', translator()->trans('partner'), true, $this->partnerOptions());
        $this->addSelect('id_site', translator()->trans('site'), true, $this->siteOptions());
        $this->addSelect('id_category', translator()->trans('category'), true, $this->categoryOptions());
        $this->addInput('label', translator()->trans('label'), true);

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function partnerOptions(): array
    {
        $partners = PartnersModels::partners()->newQuery()->orderBy('name')->all();
        $options = [];

        /** @var Partner $partner */
        foreach ($partners as $partner) {
            $options[(string) $partner->id] = (string) ($partner->label ?: $partner->name);
        }

        return $options;
    }

    protected function siteOptions(): array
    {
        $sites = PartnersModels::sites()->newQuery()->orderBy('name')->all();
        $options = [];

        /** @var Site $site */
        foreach ($sites as $site) {
            $options[(string) $site->id] = (string) $site->name;
        }

        return $options;
    }

    protected function categoryOptions(): array
    {
        $categories = PartnersModels::categories()->newQuery()->orderBy('name')->all();
        $options = [];

        /** @var Category $category */
        foreach ($categories as $category) {
            $options[(string) $category->id] = (string) $category->name;
        }

        return $options;
    }
}
