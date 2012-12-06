<?php

namespace FSC\HateoasBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * This is serialized by the serializer.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Link
{
    /**
     * @Serializer\Type("string")
     */
    private $rel;

    /**
     * @Serializer\Type("string")
     */
    private $href;

    public function setHref($href)
    {
        $this->href = $href;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    public function getRel()
    {
        return $this->rel;
    }
}
