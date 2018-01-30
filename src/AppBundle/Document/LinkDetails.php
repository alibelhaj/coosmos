<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 30/01/18
 * Time: 11:47
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * @ODM\Document
 */

class LinkDetails
{

    /**
     * @ODM\Id
     */

    protected $id;
    /**
     * @ODM\Field(name="long_description", type="string")
     */

    protected $longDescrition;
    /**
     * @ODM\Field(name="image_url", type="string")
     */

    protected $imageUrl;

    /**
     * @ODM\Field(name="ref_product", type="string")
     */
    protected $reference;

    /**
     * @ODM\ReferenceOne(targetDocument="Links", inversedBy="linkdetails")
     */
    private $links;

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
     * Set longDescrition
     *
     * @param string $longDescrition
     * @return $this
     */
    public function setLongDescrition($longDescrition)
    {
        $this->longDescrition = $longDescrition;
        return $this;
    }

    /**
     * Get longDescrition
     *
     * @return string $longDescrition
     */
    public function getLongDescrition()
    {
        return $this->longDescrition;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string $imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Get reference
     *
     * @return string $reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set links
     *
     * @param \AppBundle\Document\Links $links
     * @return $this
     */
    public function setLinks(\AppBundle\Document\Links $links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Get links
     *
     * @return \AppBundle\Document\Links $links
     */
    public function getLinks()
    {
        return $this->links;
    }
}
