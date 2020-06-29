<?php


function get_table_prefix()
{
    return mw()->database_manager->get_prefix();
}

function db_get($table_name_or_params, $params = null)
{
    return mw()->database_manager->get($table_name_or_params, $params);
}

/**
 * Saves data to any db table.
 *
 * Function parameters:
 *
 *     $table - the name of the db table, it adds table prefix automatically
 *     $data - key=>value array of the data you want to store
 *
 * @since 0.1
 * @link http://microweber.com/docs/functions/save
 *
 * @param $table
 * @param $data
 *
 * @return array The database results
 */
function db_save($table_name_or_params, $params = null)
{
    return mw()->database_manager->save($table_name_or_params, $params);
}

function db_delete($table_name, $id = 0, $field_name = 'id')
{
    return mw()->database_manager->delete_by_id($table_name, $id, $field_name);
}
