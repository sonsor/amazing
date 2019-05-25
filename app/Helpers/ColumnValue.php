<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/25/19
 * Time: 12:04 PM
 */
namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
/**
 * Class ColumnValue
 * @package App\Helpers
 */
class ColumnValue
{
    /**
     * @param string $field
     * @param Model $row
     * @return string
     */
    public static function get(string $field, Model $row): string
    {
        $value = '';
        $fields = explode('.', $field);
        while ($field = array_shift($fields)) {
            if (!isset($row->{$field})) {
                $value = '';
                break;
            }
            $value = $row->{$field};
            $row = $row->$field;
        }
        return $value;
    }
}