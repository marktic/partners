<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Forms\Admin\Partners;

use Marktic\Partners\Bundle\Library\Form\FormModel;
use Marktic\Partners\Categories\Models\Category;
use Marktic\Partners\Utility\PartnersModels;

class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-partners-partner-form');

        $this->addInput('name', translator()->trans('name'), true);
        $this->addInput('label', translator()->trans('label'));
        $this->addInput('url', translator()->trans('url'));
        $this->addSelect('id_category', translator()->trans('category'), false, $this->categoryOptions());

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function categoryOptions(): array
    {
        $categories = PartnersModels::categories()->newQuery()->orderBy('name')->all();
        $options = ['' => ''];

        /** @var Category $category */
        foreach ($categories as $category) {
            $options[(string) $category->id] = (string) $category->name;
        }

        return $options;
    }
}
