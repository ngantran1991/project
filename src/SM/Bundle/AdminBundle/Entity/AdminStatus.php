<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Compte
 *
 * @ORM\Table(name="admin_status", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\AdminStatusRepository")
 */
class AdminStatus
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="date", nullable=true)
     */
    private $dateModification;

    public function __construct()
    {
//        $this->address = new ArrayCollection();

    }

    /**
     * Get idStatus
     *
     * @return integer
     */
    public function getIdStatus()
    {
        return $this->idStatus;

    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Compte
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;

    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;

    }

    /**
     * Set description
     *
     * @param string $description
     * @return Admin
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;

    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;

    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Compte
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;

    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;

    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Admin
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;

    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;

    }
    
    public function getId()
    {
        return $this->getIdStatus();
    }
}
