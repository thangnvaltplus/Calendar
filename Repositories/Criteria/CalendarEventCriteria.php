<?php

namespace Litepie\Calendar\Repositories\Criteria;

use Litepie\Contracts\Repository\Criteria as CriteriaInterface;
use Litepie\Contracts\Repository\Repository as RepositoryInterface;

class CalendarEventCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('status','=', 'Draft');
         
    }
}