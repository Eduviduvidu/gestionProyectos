<?php

namespace gestionProyectos\mainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea", indexes={@ORM\Index(name="FK_tarea_usuario_id", columns={"id_creador"})})
 * @ORM\Entity
 */
class Tarea
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinal", type="date", nullable=false)
     */
    private $fechafinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_creador", referencedColumnName="id")
     * })
     */
    private $idCreador;



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
     * @return Tarea
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tarea
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Tarea
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     *
     * @return Tarea
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return \DateTime
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tarea
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idCreador
     *
     * @param \gestionProyectos\mainBundle\Entity\Usuario $idCreador
     *
     * @return Tarea
     */
    public function setIdCreador(\gestionProyectos\mainBundle\Entity\Usuario $idCreador = null)
    {
        $this->idCreador = $idCreador;

        return $this;
    }

    /**
     * Get idCreador
     *
     * @return \gestionProyectos\mainBundle\Entity\Usuario
     */
    public function getIdCreador()
    {
        return $this->idCreador;
    }
}
