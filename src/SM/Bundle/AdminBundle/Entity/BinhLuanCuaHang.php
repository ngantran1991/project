<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use SM\Bundle\AdminBundle\Entity\CuaHang;
use SM\Bundle\AdminBundle\Entity\DanhGiaBinhLuan;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * BinhLuanCuaHang
 *
 * @ORM\Table(name="binh_luan_cua_hang", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_cua_hang", columns={"id_cua_hang"}), @ORM\Index(name="id_danh_gia", columns={"id_danh_gia"})})
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\BinhLuanCuaHangRepository")
 */
class BinhLuanCuaHang 
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
     * @var \DanhGiaBinhLuan
     *
     * @ORM\ManyToOne(targetEntity="DanhGiaBinhLuan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_danh_gia", referencedColumnName="id")
     * })
     */
    private $idDanhGia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ngay_di", type="date", nullable=true)
     */
    private $ngayDi;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="diem", type="float", nullable=true)
     */
    private $diem;
    
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
     * Set idDanhGia
     *
     * @param \SM\Bundle\AdminBundle\Entity\DanhGiaBinhLuan $idDanhGia
     * @return idDanhGia
     */
    public function setIdDanhGia(DanhGiaBinhLuan $idDanhGia = null)
    {
        $this->idDanhGia = $idDanhGia;

        return $this;

    }

    /**
     * Get idDanhGia
     *
     * @return \SM\Bundle\AdminBundle\Entity\DanhGiaBinhLuan
     */
    public function getIdDanhGia()
    {
        return $this->idDanhGia;

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
     * Set ngayDi
     *
     * @param \DateTime $ngayDi
     * @return DanhGiaBinhLuan
     */
    public function setNgayDi($ngayDi)
    {
        $this->ngayDi = $ngayDi;

        return $this;

    }

    /**
     * Get ngayDi
     *
     * @return \DateTime
     */
    public function getNgayDi()
    {
        return $this->ngayDi;

    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return Description
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
     * Set diem
     *
     * @param string $diem
     * @return Diem
     */
    public function setDiem($diem)
    {
        $this->diem = $diem;

        return $this;
    }

    /**
     * Get diem
     *
     * @return string
     */
    public function getDiem()
    {
        return $this->diem;
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
     * @return DanhGiaBinhLuan
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
     * @return DanhGiaBinhLuan
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
