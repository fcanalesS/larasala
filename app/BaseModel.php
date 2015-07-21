<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of BaseModel
 *
 * @author Sebastián Salazar Molina <ssalazar@experti.cl>
 */
class BaseModel extends Model {

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    public function getDateFormat() {
        return 'Y-m-d H:i:s.u';
    }

}
