<?php

namespace App\Providers;

use App\Enrollment;
use App\EnrollmentPayload;
use App\Observers\EnrollmentObserver;
use App\Observers\EnrollmentPayloadObserver;
use App\Observers\SurveyResultPayloadObserver;
use App\SurveyResultPayload;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Enrollment::observe(EnrollmentObserver::class);
        EnrollmentPayload::observe(EnrollmentPayloadObserver::class);
        SurveyResultPayload::observe(SurveyResultPayloadObserver::class);

        $this->app->resolving(LengthAwarePaginator::class, function ($paginator) {
            return $paginator->appends(Arr::except(Input::query(), $paginator->getPageName()));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

//        if ($this->app->environment() !== 'production') {
//            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
//        }

//        if ($this->app->environment('local', 'testing')) {
//            //$this->app->register(DuskServiceProvider::class);
//            $this->app->register(\Orangehill\Iseed\IseedServiceProvider::class);
//        }
    }
}
