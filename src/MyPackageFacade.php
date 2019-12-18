<?php

namespace Subratadutta\MyPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Subratadutta\MyPackage\Skeleton\SkeletonClass
 */
class MyPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-package';
    }
}
