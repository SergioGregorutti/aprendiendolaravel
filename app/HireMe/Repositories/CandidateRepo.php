<?php

namespace HireMe\Repositories;

use HireMe\Entities\Candidate;
use HireMe\Entities\Category;

class CandidateRepo extends BaseRepo {

    public function getModel()
    {
        return new Candidate;
    }

}