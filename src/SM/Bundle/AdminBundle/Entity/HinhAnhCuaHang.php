<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use SM\Bundle\AdminBundle\Entity\CuaHang;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * HinhAnhCuaHang
 *
 * @ORM\Table(name="hinh_anh_cua_hang", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_cua_hang", columns={"id_cua_hang"})})
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\HinhAnhCuaHangRepository")
 */
class HinhAnhCuaHang
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var \CuaHang
     *
     * @ORM\ManyToOne(targetEntity="CuaHang")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cua_hang", referencedColumnName="id")
     * })
     */
    private $idCuaHang;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;
    
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set idCuaHang
     *
     * @param \SM\Bundle\AdminBundle\Entity\CuaHang $idCuaHang
     * @return Status
     */
    public function setIdCuaHang(CuaHang $idCuaHang = null)
    {
        $this->idCuaHang = $idCuaHang;

        return $this;

    }

    /**
     * Get idCuaHang
     *
     * @return \SM\Bundle\AdminBundle\Entity\CuaHang
     */
    public function getIdCuaHang()
    {
        return $this->idCuaHang;

    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Name
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
     * Set file
     *
     * @param string $file
     * @return Name
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * Set status
     *
     * @param string $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return HinhAnhCuaHang
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
     * @return HinhAnhCuaHang
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
}
