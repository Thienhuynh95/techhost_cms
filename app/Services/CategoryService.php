<?php


namespace App\Services;


use App\Models\Category;
use App\Traits\CRUDTrait;

class CategoryService extends BaseService
{
    use CRUDTrait;

    public function __construct()
    {

    }

    public function get(Category $category)
    {
        $category = $category->with("allChildren")->whereNull('parent_id');
        return $category;
    }


}
