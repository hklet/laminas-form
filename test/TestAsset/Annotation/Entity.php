<?php

namespace LaminasTest\Form\TestAsset\Annotation;

use Laminas\Form\Annotation;

class Entity
{
    /**
      * @Annotation\ErrorMessage("Invalid or missing username")
      * @Annotation\Required(true)
      * @Annotation\Filter({"name":"StringTrim"})
      * @Annotation\Validator({"name":"NotEmpty"})
      * @Annotation\Validator({"name":"StringLength","options":{"min":3,"max":25}})
      */
    #[Annotation\ErrorMessage("Invalid or missing username")]
    #[Annotation\Required(true)]
    #[Annotation\Filter(["name" => "StringTrim"])]
    #[Annotation\Validator(["name" => "NotEmpty"])]
    #[Annotation\Validator(["name" => "StringLength", "options" => ["min" => 3, "max" => 25]])]
    public $username;

    /**
      * @Annotation\Filter({"name":"StringTrim"})
      * @Annotation\Validator({"name":"EmailAddress"})
      * @Annotation\Attributes({"type":"password","label":"Enter your password"})
      */
    #[Annotation\Filter(["name" => "StringTrim"])]
    #[Annotation\Validator(["name" => "EmailAddress"])]
    #[Annotation\Attributes(["type" => "password", "label" => "Enter your password"])]
    public $password;
}
