<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * artikel
 *
 * @ORM\Table(name="artikel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 */
class artikel
{

    /**
     * @var int
     *
     * @ORM\Column(name="artikelnummer", type="integer", unique=true)
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=255, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="specificaties", type="string", length=255, nullable=true)
     */
    private $specificaties;

    /**
     * @var string
     *
     * @ORM\Column(name="magazijnlocatie", type="string", length=255)
     */
    private $magazijnlocatie;

    /**
     * @var int
     *
     * @ORM\Column(name="inkoopprijs", type="integer")
     */
    private $inkoopprijs;

    /**
     * @var int
     *
     * @ORM\Column(name="vervangendartikel", type="integer", nullable=true)
     */
    private $vervangendartikel;

    /**
     * @var int
     *
     * @ORM\Column(name="minimumvoorraad", type="integer", nullable=true)
     */
    private $minimumvoorraad;

    /**
     * @var int
     *
     * @ORM\Column(name="voorraad", type="integer", nullable=true)
     */
    private $voorraad;

    /**
     * Set artikelnummer
     *
     * @param integer $artikelnummer
     *
     * @return artikel
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return int
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return artikel
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set specificaties
     *
     * @param string $specificaties
     *
     * @return artikel
     */
    public function setSpecificaties($specificaties)
    {
        $this->specificaties = $specificaties;

        return $this;
    }

    /**
     * Get specificaties
     *
     * @return string
     */
    public function getSpecificaties()
    {
        return $this->specificaties;
    }

    /**
     * Set magazijnlocatie
     *
     * @param string $magazijnlocatie
     *
     * @return artikel
     */
    public function setMagazijnlocatie($magazijnlocatie)
    {
        $this->magazijnlocatie = $magazijnlocatie;

        return $this;
    }

    /**
     * Get magazijnlocatie
     *
     * @return string
     */
    public function getMagazijnlocatie()
    {
        return $this->magazijnlocatie;
    }

    /**
     * Set inkoopprijs
     *
     * @param integer $inkoopprijs
     *
     * @return artikel
     */
    public function setInkoopprijs($inkoopprijs)
    {
        $this->inkoopprijs = $inkoopprijs;

        return $this;
    }

    /**
     * Get inkoopprijs
     *
     * @return int
     */
    public function getInkoopprijs()
    {
        return $this->inkoopprijs;
    }

    /**
     * Set vervangendartikel
     *
     * @param integer $vervangendartikel
     *
     * @return artikel
     */
    public function setVervangendartikel($vervangendartikel)
    {
        $this->vervangendartikel = $vervangendartikel;

        return $this;
    }

    /**
     * Get vervangendartikel
     *
     * @return int
     */
    public function getVervangendartikel()
    {
        return $this->vervangendartikel;
    }

    /**
     * Set minimumvoorraad
     *
     * @param integer $minimumvoorraad
     *
     * @return artikel
     */
    public function setMinimumvoorraad($minimumvoorraad)
    {
        $this->minimumvoorraad = $minimumvoorraad;

        return $this;
    }

    /**
     * Get minimumvoorraad
     *
     * @return int
     */
    public function getMinimumvoorraad()
    {
        return $this->minimumvoorraad;
    }

    /**
     * Set voorraad
     *
     * @param integer $voorraad
     *
     * @return artikel
     */
    public function setVoorraad($voorraad)
    {
        $this->voorraad = $voorraad;

        return $this;
    }

    /**
     * Get voorraad
     *
     * @return int
     */
    public function getVoorraad()
    {
        return $this->voorraad;
    }
}
