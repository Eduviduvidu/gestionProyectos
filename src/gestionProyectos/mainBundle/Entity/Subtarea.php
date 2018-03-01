<?php

namespace gestionProyectos\mainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtarea
 *
 * @ORM\Table(name="subtarea", indexes={@ORM\Index(name="FK_subtarea_tarea", columns={"id_tarea"})})
 * @ORM\Entity
 */
class Subtarea
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
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text", length=65535, nullable=false)
     */
    private $contenido;

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
     * @var \Tarea
     *
     * @ORM\ManyToOne(targetEntity="Tarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tarea", referencedColumnName="id")
     * })
     */
    private $idTarea;



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
     * @return Subtarea
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
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Subtarea
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Subtarea
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
     * @return Subtarea
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
     * @return Subtarea
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
     * Set idTarea
     *
     * @param \gestionProyectos\mainBundle\Entity\Tarea $idTarea
     *
     * @return Subtarea
     */
    public function setIdTarea(\gestionProyectos\mainBundle\Entity\Tarea $idTarea = null)
    {
        $this->idTarea = $idTarea;

        return $this;
    }

    /**
     * Get idTarea
     *
     * @return \gestionProyectos\mainBundle\Entity\Tarea
     */
    public function getIdTarea()
    {
        return $this->idTarea;
    }
}
