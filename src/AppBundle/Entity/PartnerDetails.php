<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartnerDetails
 *
 * @ORM\Table(name="p_01_partner_details", uniqueConstraints={@ORM\UniqueConstraint(name="partner_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartnerDetailsRepository")
 */
class PartnerDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_name", type="string", length=255)
     */
    private $partner_name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partnerName
     *
     * @param string $partnerName
     *
     * @return PartnerDetails
     */
    public function setPartnerName($partnerName)
    {
        $this->partner_name = $partnerName;

        return $this;
    }

    /**
     * Get partnerName
     *
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partner_name;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return PartnerDetails
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }
}
