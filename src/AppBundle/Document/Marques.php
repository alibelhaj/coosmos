<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 30/01/18
 * Time: 11:40
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * @ODM\Document
 */
class Marques
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
     * @ODM\Field(name="etat", type="boolean")
     */
    protected $etat;

    public function __toString()
    {
        return $this->name;
    }
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
     * Set etat
     *
     * @param boolean $etat
     * @return $this
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean $etat
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
