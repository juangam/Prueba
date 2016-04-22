<?php

namespace Prueba\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Personal
 *
 * @ORM\Table(name="personal")
 * @ORM\Entity
 */
class Personal
{
    /**
     * @ORM\OneToMany(targetEntity="Direccion", mappedBy="Personal")
     */
    protected $Direccion;

    public function __construct()
    {
        $this->Direccion = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_pat", type="string", length=20, nullable=false)
     */
    private $apePat;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_mat", type="string", length=20, nullable=false)
     */
    private $apeMat;

    /**
     * @var string
     *
     * @ORM\Column(name="edad", type="string", length=255, nullable=false)
     */
    private $edad;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Personal
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apePat
     *
     * @param string $apePat
     *
     * @return Personal
     */
    public function setApePat($apePat)
    {
        $this->apePat = $apePat;

        return $this;
    }

    /**
     * Get apePat
     *
     * @return string
     */
    public function getApePat()
    {
        return $this->apePat;
    }

    /**
     * Set apeMat
     *
     * @param string $apeMat
     *
     * @return Personal
     */
    public function setApeMat($apeMat)
    {
        $this->apeMat = $apeMat;

        return $this;
    }

    /**
     * Get apeMat
     *
     * @return string
     */
    public function getApeMat()
    {
        return $this->apeMat;
    }

    /**
     * Set edad
     *
     * @param string $edad
     *
     * @return Personal
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string
     */
    public function getEdad()
    {
        return $this->edad;
    }
}
