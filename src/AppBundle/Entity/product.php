<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\productRepository")
 */
class product
{

    /**
     * @var string
     *
     * @ORM\Column(name="barcode", type="string", length=20, unique=true)
     */
    private $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=100)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="merk", type="string", length=50)
     */
    private $merk;

    /**
     * @var int
     *
     * @ORM\Column(name="producttype", type="integer", unique=true)
     */
    private $producttype;

    /**
     * @var float
     *
     * @ORM\Column(name="inkoopprijs", type="float")
     */
    private $inkoopprijs;

    /**
     * @var string
     *
     * @ORM\Column(name="opmerkingen", type="string", length=255, nullable=true)
     */
    private $opmerking;

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return product
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set merk
     *
     * @param string $merk
     *
     * @return product
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;

        return $this;
    }

    /**
     * Get merk
     *
     * @return string
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * Set producttype
     *
     * @param integer $producttype
     *
     * @return product
     */
    public function setProducttype($producttype)
    {
        $this->producttype = $producttype;

        return $this;
    }

    /**
     * Get producttype
     *
     * @return int
     */
    public function getProducttype()
    {
        return $this->producttype;
    }

    /**
     * Set inkoopprijs
     *
     * @param float $inkoopprijs
     *
     * @return product
     */
    public function setInkoopprijs($inkoopprijs)
    {
        $this->inkoopprijs = $inkoopprijs;

        return $this;
    }

    /**
     * Get inkoopprijs
     *
     * @return float
     */
    public function getInkoopprijs()
    {
        return $this->inkoopprijs;
    }

    /**
     * Set opmerkingen
     *
     * @param string $opmerkingen
     *
     * @return product
     */
    public function setOpmerking($opmerking)
    {
        $this->opmerking = $opmerking;

        return $this;
    }

    /**
    * @ORM\ManyToOne(targetEntity="ProductType", inversedBy="producten")
    * @ORM\JoinColum(name="producttype", referencedColumName="tid")
    */
    private $producttype;


    /**
     * Get opmerkingen
     *
     * @return string
     */
    public function getOpmerking()
    {
        return $this->opmerking;
    }
}
