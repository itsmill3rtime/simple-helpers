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

if (function_exists('model_only') === false) {
    /**
     * @param $model
     * @param array $properties
     * @return mixed
     */
    function model_only($model, array $properties = [])
    {
        $model = with(clone($model));
        foreach ($model->getAttributes() as $property => $value) {
            if (!in_array($property, $properties)) {
                unset($model->{$property});
            }
        }

        return $model;
    }
}

if (function_exists('model_except') === false) {
    /**
     * @param $model
     * @param array $properties
     * @return mixed
     */
    function model_except($model, array $properties = [])
    {
        $model = with(clone($model));
        foreach ($properties as $property) {
            unset($model->{$property});
        }

        return $model;
    }
}


if (function_exists('object_only') === false) {
    /**
     * @param $object
     * @param array $properties
     * @return mixed
     */
    function object_only($object, array $properties = [])
    {
        $object = with(clone($object));
        foreach ($object as $property => $value) {
            if (!in_array($property, $properties)) {
                unset($object->{$property});
            }
        }

        return $object;
    }
}

if (function_exists('object_except') === false) {
    /**
     * @param $object
     * @param array $properties
     * @return mixed
     */
    function object_except($object, array $properties = [])
    {
        $object = with(clone($object));
        foreach ($properties as $property) {
            unset($object->{$property});
        }

        return $object;
    }
}