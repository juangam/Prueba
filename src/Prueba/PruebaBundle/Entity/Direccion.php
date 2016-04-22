<?php

namespace Prueba\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use Symfony\Component\Validator\Mapping\ClassMetadata;
//use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @ORM\ManyToOne(targetEntity="Personal", inversedBy="Direccion")
     * @ORM\JoinColumn(name="dir_id", referencedColumnName="id")
     */
    protected $Personal;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="direccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=30, nullable=false)
     */
    private $calle;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_int", type="integer", nullable=false)
     */
    private $numInt;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ext", type="integer", nullable=false)
     */
    private $numExt;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=30, nullable=false)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=30, nullable=false)
     */
    private $municipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_postal", type="integer", nullable=false)
     */
    private $codPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="munic", type="string", length=30, nullable=false)
     */
    private $munic;



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
     * Set calle
     *
     * @param string $calle
     *
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numInt
     *
     * @param integer $numInt
     *
     * @return Direccion
     */
    public function setNumInt($numInt)
    {
        $this->numInt = $numInt;

        return $this;
    }

    /**
     * Get numInt
     *
     * @return integer
     */
    public function getNumInt()
    {
        return $this->numInt;
    }

    /**
     * Set numExt
     *
     * @param integer $numExt
     *
     * @return Direccion
     */
    public function setNumExt($numExt)
    {
        $this->numExt = $numExt;

        return $this;
    }

    /**
     * Get numExt
     *
     * @return integer
     */
    public function getNumExt()
    {
        return $this->numExt;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Direccion
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Direccion
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set codPostal
     *
     * @param integer $codPostal
     *
     * @return Direccion
     */
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get codPostal
     *
     * @return integer
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set munic
     *
     * @param string $munic
     *
     * @return Direccion
     */
    public function setMunic($munic)
    {
        $this->munic = $munic;

        return $this;
    }

    /**
     * Get munic
     *
     * @return string
     */
    public function getMunic()
    {
        return $this->munic;
    }
}
