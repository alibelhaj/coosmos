<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */

class Products
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @var int $nbVignetteHovered
     *
     * @ODM\Field(name="nbVignetteHovered", type="int")
     */
    protected $description;

    /**
     * @var \DateTime $modifiedAt
     *
     * @ODM\Field(name="modified_at", type="date")
     */
    protected $modifiedAt;

    /**
     * @var \DateTime $createdAt
     *
     * @ODM\Field(name="created_at", type="date")
     */
    protected $createdAt;

    /**
     * @var string $mainImageIndex
     *
     * @ODM\Field(name="mainImageIndex", type="string")
     */
    protected $mainImageIndex;


    /**
     * @var string $mainUserId
     *
     * @ODM\Field(name="mainUserId", type="string")
     */
    protected $mainUserId;

    /**
     * @var string $nomCommercial
     *
     * @ODM\Field(name="nomCommercial", type="string")
     */
    protected $nomCommercial;

    /**
     * @var string $arrayImage
     *
     * @ODM\Field(name="arrayImage", type="string")
     */
    protected $arrayImage;

    /**
     * @var string $reference
     *
     * @ODM\Field(name="reference", type="string")
     */
    protected $reference;

    /**
     * @var string $Lightweight
     *
     * @ODM\Field(name="Lightweight", type="string")
     */
    protected $Lightweight;


    /**
     * @var string $UPC
     *
     * @ODM\Field(name="UPC", type="string")
     */
    protected $UPC;


    /**
     * @var string $EAN
     *
     * @ODM\Field(name="EAN", type="string")
     */
    protected $EAN;

    /**
     * @var string $EAN
     *
     * @ODM\Field(name="title", type="string")
     */
    protected $title;


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
     * Set description
     *
     * @param int $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return int $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set modifiedAt
     *
     * @param date $modifiedAt
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return date $modifiedAt
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Set createdAt
     *
     * @param date $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set mainImageIndex
     *
     * @param string $mainImageIndex
     * @return $this
     */
    public function setMainImageIndex($mainImageIndex)
    {
        $this->mainImageIndex = $mainImageIndex;
        return $this;
    }

    /**
     * Get mainImageIndex
     *
     * @return string $mainImageIndex
     */
    public function getMainImageIndex()
    {
        return $this->mainImageIndex;
    }

    /**
     * Set mainUserId
     *
     * @param string $mainUserId
     * @return $this
     */
    public function setMainUserId($mainUserId)
    {
        $this->mainUserId = $mainUserId;
        return $this;
    }

    /**
     * Get mainUserId
     *
     * @return string $mainUserId
     */
    public function getMainUserId()
    {
        return $this->mainUserId;
    }

    /**
     * Set nomCommercial
     *
     * @param string $nomCommercial
     * @return $this
     */
    public function setNomCommercial($nomCommercial)
    {
        $this->nomCommercial = $nomCommercial;
        return $this;
    }

    /**
     * Get nomCommercial
     *
     * @return string $nomCommercial
     */
    public function getNomCommercial()
    {
        return $this->nomCommercial;
    }

    /**
     * Set arrayImage
     *
     * @param string $arrayImage
     * @return $this
     */
    public function setArrayImage($arrayImage)
    {
        $this->arrayImage = $arrayImage;
        return $this;
    }

    /**
     * Get arrayImage
     *
     * @return string $arrayImage
     */
    public function getArrayImage()
    {
        return $this->arrayImage;
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
     * Set lightweight
     *
     * @param string $lightweight
     * @return $this
     */
    public function setLightweight($lightweight)
    {
        $this->Lightweight = $lightweight;
        return $this;
    }

    /**
     * Get lightweight
     *
     * @return string $lightweight
     */
    public function getLightweight()
    {
        return $this->Lightweight;
    }

    /**
     * Set uPC
     *
     * @param string $uPC
     * @return $this
     */
    public function setUPC($uPC)
    {
        $this->UPC = $uPC;
        return $this;
    }

    /**
     * Get uPC
     *
     * @return string $uPC
     */
    public function getUPC()
    {
        return $this->UPC;
    }

    /**
     * Set eAN
     *
     * @param string $eAN
     * @return $this
     */
    public function setEAN($eAN)
    {
        $this->EAN = $eAN;
        return $this;
    }

    /**
     * Get eAN
     *
     * @return string $eAN
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
}
