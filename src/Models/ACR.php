<?php

namespace BAF\ACR\Models;

use Illuminate\Database\Eloquent\Model;

class ACR extends Model
{
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
