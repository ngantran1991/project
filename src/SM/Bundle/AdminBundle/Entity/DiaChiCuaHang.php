<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use SM\Bundle\AdminBundle\Entity\CuaHang;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * DiaChiCuaHang
 *
 * @ORM\Table(name="dia_chi_cua_hang", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_cua_hang", columns={"id_cua_hang"})})
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\DiaChiCuaHangRepository")
 */
class DiaChiCuaHang
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
     * @ORM\Column(name="dien_thoai", type="string", length=15, nullable=true)
     */
    private $dienThoai;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dia_chi", type="string", length=255, nullable=true)
     */
    private $diaChi;
    
    /**
     * @var \DateTime 
     *
     * @ORM\Column(name="gio_mo_cua", type="time", nullable=true)
     */
    private $gioMoCua;
    
    /**
     * @var \DateTime 
     *
     * @ORM\Column(name="gio_dong_cua", type="time", nullable=true)
     */
    private $gioDongCua;
    
    /**
     * @var \int 
     *
     * @ORM\Column(name="gia_min", type="integer", nullable=true)
     */
    private $giaMin;
    
    /**
     * @var \int 
     *
     * @ORM\Column(name="gia_max", type="integer", nullable=true)
     */
    private $giaMax;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vi_tri_khu_vuc", type="string", length=255, nullable=true)
     */
    private $viTriKhuVuc;
    
    /**
     * @var string
     *
     * @ORM\Column(name="o_gan", type="string", length=255, nullable=true)
     */
    private $oGan;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="suc_chua", type="integer", nullable=true)
     */
    private $sucChua;
    
    /**
     * @var \DateTime 
     *
     * @ORM\Column(name="gio_nhan_khach_cuoi", type="time", nullable=true)
     */
    private $gioNhanKhachCuoi;
    
    /**
     * @var \string 
     *
     * @ORM\Column(name="thanh_pho", type="string", length=255, nullable=true)
     */
    private $thanhPho;
    
    /**
     * @var \string 
     *
     * @ORM\Column(name="quoc_gia", type="string", length=255, nullable=true)
     */
    private $quocGia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="long", type="float", nullable=true)
     */
    private $long;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="float", nullable=true)
     */
    private $lat;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ban_kinh_hoat_dong", type="integer", nullable=true)
     */
    private $banKinhHoatDong;
    
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
     * Set $dienThoai
     *
     * @param string $dienThoai
     * @return DienThoai
     */
    public function setDienThoai($dienThoai)
    {
        $this->dienThoai = $dienThoai;

        return $this;
    }

    /**
     * Get dienThoai
     *
     * @return string
     */
    public function getDienThoai()
    {
        return $this->dienThoai;
    }
    
    /**
     * Set $diaChi
     *
     * @param string $diaChi
     * @return DiaChi
     */
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;

        return $this;
    }

    /**
     * Get DiaChi
     *
     * @return string
     */
    public function getDiaChi()
    {
        return $this->diaChi;
    }
    
    /**
     * Set $gioMoCua
     *
     * @param string $gioMoCua
     * @return GioMoCua
     */
    public function setGioMoCua($gioMoCua)
    {
        $this->gioMoCua = $gioMoCua;

        return $this;
    }

    /**
     * Get GioMoCua
     *
     * @return string
     */
    public function getGioMoCua()
    {
        return $this->gioMoCua;
    }
    
    /**
     * Set $gioDongCua
     *
     * @param string $gioDongCua
     * @return GioDongCua
     */
    public function setGioDongCua($gioDongCua)
    {
        $this->gioDongCua = $gioDongCua;

        return $this;
    }

    /**
     * Get GioDongCua
     *
     * @return string
     */
    public function getGioDongCua()
    {
        return $this->gioDongCua;
    }
    
    /**
     * Set $giaMin
     *
     * @param string $giaMin
     * @return GiaMin
     */
    public function setGiaMin($giaMin)
    {
        $this->giaMin = $giaMin;

        return $this;
    }

    /**
     * Get GiaMin
     *
     * @return string
     */
    public function getGiaMin()
    {
        return $this->giaMin;
    }
    
    /**
     * Set $giaMax
     *
     * @param string $giaMax
     * @return GiaMax
     */
    public function setGiaMax($giaMax)
    {
        $this->giaMax = $giaMax;

        return $this;
    }

    /**
     * Get GiaMax
     *
     * @return string
     */
    public function getGiaMax()
    {
        return $this->giaMax;
    }
    
    /**
     * Set $viTriKhuVuc
     *
     * @param string $viTriKhuVuc
     * @return ViTriKhuVuc
     */
    public function setViTriKhuVuc($viTriKhuVuc)
    {
        $this->viTriKhuVuc = $viTriKhuVuc;

        return $this;
    }

    /**
     * Get ViTriKhuVuc
     *
     * @return string
     */
    public function getViTriKhuVuc()
    {
        return $this->viTriKhuVuc;
    }
    
    /**
     * Set $oGan
     *
     * @param string $oGan
     * @return OGan
     */
    public function setOGan($oGan)
    {
        $this->oGan = $oGan;

        return $this;
    }

    /**
     * Get OGan
     *
     * @return string
     */
    public function getOGan()
    {
        return $this->oGan;
    }
    
    /**
     * Set $sucChua
     *
     * @param string $sucChua
     * @return SucChua
     */
    public function setSucChua($sucChua)
    {
        $this->sucChua = $sucChua;

        return $this;
    }

    /**
     * Get SucChua
     *
     * @return string
     */
    public function getSucChua()
    {
        return $this->sucChua;
    }
    
    /**
     * Set $gioNhanKhachCuoi
     *
     * @param string $gioNhanKhachCuoi
     * @return GioNhanKhachCuoi
     */
    public function setGioNhanKhachCuoi($gioNhanKhachCuoi)
    {
        $this->gioNhanKhachCuoi = $gioNhanKhachCuoi;

        return $this;
    }

    /**
     * Get GioNhanKhachCuoi
     *
     * @return string
     */
    public function getGioNhanKhachCuoi()
    {
        return $this->gioNhanKhachCuoi;
    }
    
    /**
     * Set $thanhPho
     *
     * @param string $thanhPho
     * @return ThanhPho
     */
    public function setThanhPho($thanhPho)
    {
        $this->thanhPho = $thanhPho;

        return $this;
    }

    /**
     * Get ThanhPho
     *
     * @return string
     */
    public function getThanhPho()
    {
        return $this->thanhPho;
    }
    
    /**
     * Set $quocGia
     *
     * @param string $quocGia
     * @return QuocGia
     */
    public function setQuocGia($quocGia)
    {
        $this->quocGia = $quocGia;

        return $this;
    }

    /**
     * Get QuocGia
     *
     * @return string
     */
    public function getQuocGia()
    {
        return $this->quocGia;
    }
    
     /**
     * Set $long
     *
     * @param string $long
     * @return Long
     */
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get Long
     *
     * @return string
     */
    public function getLong()
    {
        return $this->long;
    }
    
     /**
     * Set $lat
     *
     * @param string $lat
     * @return Lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get Lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }
    
     /**
     * Set $banKinhHoatDong
     *
     * @param string $banKinhHoatDong
     * @return BanKinhHoatDong
     */
    public function setBanKinhHoatDong($banKinhHoatDong)
    {
        $this->banKinhHoatDong = $banKinhHoatDong;

        return $this;
    }

    /**
     * Get BanKinhHoatDong
     *
     * @return string
     */
    public function getBanKinhHoatDong()
    {
        return $this->banKinhHoatDong;
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
