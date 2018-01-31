<?php

namespace AppBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Category
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\Field(name="name", type="string")
     */
    protected $name;

    /**
     * @ODM\Field(name="link", type="string")
     */
    protected $link;
    /**
     * @ODM\ReferenceOne(targetDocument="Marques", inversedBy="links")
     */
    private $marque;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set marque
     *
     * @param \AppBundle\Document\Marques $marque
     * @return $this
     */
    public function setMarque(\AppBundle\Document\Marques $marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Get marque
     *
     * @return \AppBundle\Document\Marques $marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Get link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }
}
