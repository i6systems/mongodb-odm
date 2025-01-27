<?php

declare(strict_types=1);

namespace Documents\Functional;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="same_collection")
 * @ODM\DiscriminatorField("type")
 * @ODM\DiscriminatorMap({"test1"="Documents\Functional\SameCollection1", "test2"="Documents\Functional\SameCollection2"})
 * @ODM\DefaultDiscriminatorValue("test1")
 */
class SameCollection2
{
    /**
     * @ODM\Id
     *
     * @var string|null
     */
    public $id;

    /**
     * @ODM\Field(type="string")
     *
     * @var string|null
     */
    public $name;

    /**
     * @ODM\Field(type="string")
     *
     * @var bool|null
     */
    public $ok;

    /**
     * @ODM\Field(type="string")
     *
     * @var string|null
     */
    public $w00t;
}
