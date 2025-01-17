<?php

namespace Statamic\GraphQL\Types;

use Statamic\Contracts\Query\Builder;
use Statamic\Facades\GraphQL;
use Statamic\Fields\Value;

class ReplicatorSetType extends \Rebing\GraphQL\Support\Type
{
    protected $fieldtype;
    protected $handle;

    public function __construct($fieldtype, $name, $handle)
    {
        $this->fieldtype = $fieldtype;
        $this->handle = $handle;
        $this->attributes['name'] = $name;
    }

    public function fields(): array
    {
        return $this->fieldtype->fields($this->handle)->toGql()
            ->merge([
                'id' => [
                    'type' => GraphQL::string(),
                ],
                'type' => [
                    'type' => GraphQL::nonNull(GraphQL::string()),
                ],
            ])
            ->map(function ($field) {
                $field['resolve'] = function ($row, $args, $context, $info) {
                    $value = $row[$info->fieldName];

                    $value = $value instanceof Value ? $value->value() : $value;

                    if ($value instanceof Builder) {
                        $value = $value->get();
                    }

                    return $value;
                };

                return $field;
            })
            ->all();
    }
}
