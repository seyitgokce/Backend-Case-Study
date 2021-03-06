<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CurrencyRepository")
 */
class Currency
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $isocode;

    /**
     * @var float|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $source;

    /**
     * @var \DateTime|null
     */
    private $createdAt;


    /**
     * Get id.
     *
     * @return int
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Set isocode.
     *
     * @param string|null $isocode
     *
     * @return Currency
     */
    public function setisocode($isocode = null)
    {
        $this->isocode = $isocode;

        return $this;
    }

    /**
     * Get isocode.
     *
     * @return string|null
     */
    public function getisocode()
    {
        return $this->isocode;
    }

    /**
     * Set amount.
     *
     * @param float|null $amount
     *
     * @return Currency
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set source.
     *
     * @param string|null $source
     *
     * @return Currency
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Currency
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
