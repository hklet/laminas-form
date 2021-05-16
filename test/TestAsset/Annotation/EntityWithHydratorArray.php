<?php

namespace LaminasTest\Form\TestAsset\Annotation;

use Laminas\Form\Annotation;

/**
 * @Annotation\Name("user")
 * @Annotation\Attributes({"legend":"Register"})
 * @Annotation\Hydrator({"type":"Laminas\Hydrator\ClassMethodsHydrator", "options": {"underscoreSeparatedKeys": false}})
 */
#[Annotation\Name("user")]
#[Annotation\Attributes(["legend" => "Register"])]
#[Annotation\Hydrator([
    "type" => "Laminas\Hydrator\ClassMethodsHydrator",
    "options" => ["underscoreSeparatedKeys" => false],
])]
class EntityWithHydratorArray
{
    /**
     * @Annotation\Options({"label":"Username:", "label_attributes": {"class": "label"}})
     */
    #[Annotation\Options(["label" => "Username:", "label_attributes" => ["class" => "label"]])]
    public $username;
}
