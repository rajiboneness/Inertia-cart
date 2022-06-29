<?php

namespace App\Providers;

use App\Interfaces\CollectionInterface;
use App\Interfaces\CategoryInterface;
use App\Interfaces\SubcategoryInterface;
use App\Interfaces\ProductInterface;

use App\Repositories\CollectionRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;
use App\Repositories\ProductRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CollectionInterface::class, CollectionRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubcategoryInterface::class, SubCategoryRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
