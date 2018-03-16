<?php

if (function_exists('getInputs') === false) {
    /**
     * @param $request
     * @param array $merge_in
     * @param bool $ignore_nulls
     * @return array
     */
    function getInputs($request, $merge_in = [])
    {
        $data = array_only($request->all(), array_keys($request->rules()));

        if (count($merge_in)) {
            $data = array_merge($data, $merge_in);
        }

        //cleanup
        foreach ($data as $item) {
            if (is_string($item)) {
                $item = trim($item);
            }
        }

        return $data;
    }
}
if (function_exists('enumMigration') === false) {
    /**
     * fix for updating a table that has enum
     */
    function enumMigration()
    {
        \Illuminate\Support\Facades\Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
}