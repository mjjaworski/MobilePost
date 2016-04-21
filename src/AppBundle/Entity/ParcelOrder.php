<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\ParcelOrderInterface;

/**
 * ParcelOrder
 *
 * @ORM\Table(name="ParcelOrder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParcelOrderRepository")
 */
class ParcelOrder implements ParcelOrderInterface
{
    /**
     * @ORM\Column(name="parcel_id", type="integer")
      */
    protected $parcel;
    
    /**
      * @ORM\Column(name="sender_id", type="integer")
      */
    protected $sender;
    
    /**
      * @ORM\Column(name="receiver_id", type="integer")
      */    
    protected $receiver;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="tracking", type="boolean")
     */
    private $tracking;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tracking
     *
     * @param boolean $tracking
     *
     * @return ParcelOrder
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * Get tracking
     *
     * @return bool
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set parcel
     *
     * @param \AppBundle\Entity\Parcel $parcel
     *
     * @return ParcelOrder
     */
    public function setParcel(\AppBundle\Entity\Parcel $parcel = null)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * Get parcel
     *
     * @return \AppBundle\Entity\Parcel
     */
    public function getParcel()
    {
        return $this->parcel;
    }

    /**
     * Set sender
     *
     * @param \AppBundle\Entity\AddressData $sender
     *
     * @return ParcelOrder
     */
    public function setSender(\AppBundle\Entity\AddressData $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \AppBundle\Entity\AddressData
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \AppBundle\Entity\AddressData $receiver
     *
     * @return ParcelOrder
     */
    public function setReceiver(\AppBundle\Entity\AddressData $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\AddressData
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
}
