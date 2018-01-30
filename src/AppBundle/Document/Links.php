<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 30/01/18
 * Time: 11:43
 */

namespace AppBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * @ODM\Document
 */

class Links
{
    /**
     * @ODM\Id
     */

    protected $id;

    /**
     * @ODM\Field(name="product_name", type="string")
     */

    protected $productName;

    /**
     * @ODM\Field(name="short_description", type="string")
     */

    protected $shortDescription;

    /**
     * @ODM\Field(name="product_image", type="string")
     */

    protected $productImage;

    /**
     * @ODM\Field(name="product_price", type="string")
     */

    protected $productPrice;

    /**
     * @ODM\ReferenceOne(targetDocument="Marques", inversedBy="links")
     */
    private $marque;

    public function __toString()
    {
        return $this->getProductName();
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
     * Set productName
     *
     * @param string $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Get productName
     *
     * @return string $productName
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return $this
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string $shortDescription
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set productImage
     *
     * @param string $productImage
     * @return $this
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * Get productImage
     *
     * @return string $productImage
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     * @return $this
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string $productPrice
     */
    public function getProductPrice()
    {
        return $this->productPrice;
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
}
