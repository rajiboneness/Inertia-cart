<?php

namespace App\Providers;

use App\Interfaces\CollectionInterface;
use App\Interfaces\CategoryInterface;
use App\Interfaces\SubcategoryInterface;
use App\Interfaces\ProductInterface;
use App\Interfaces\BannerInterface;
use App\Interfaces\SociallinkInterface;
use App\Interfaces\AboutUsInterface;
use App\Interfaces\OrderInterface;

use App\Repositories\CollectionRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\BannerRepository;
use App\Repositories\SociallinkRepository;
use App\Repositories\AboutUsRepository;
use App\Repositories\OrderRepository;

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
        $this->app->bind(BannerInterface::class, BannerRepository::class);
        $this->app->bind(SociallinkInterface::class, SociallinkRepository::class);
        $this->app->bind(AboutUsInterface::class, AboutUsRepository::class);
        $this->app->bind(OrderInterface::class, OrderRepository::class);
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
