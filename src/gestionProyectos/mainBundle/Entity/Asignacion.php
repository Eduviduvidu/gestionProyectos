<?php

namespace gestionProyectos\mainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion", indexes={@ORM\Index(name="FK_subtarea", columns={"id_subtarea"}), @ORM\Index(name="FK_usuario", columns={"id_usuario"})})
 * @ORM\Entity
 */
class Asignacion
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
     * @var \Tarea
     *
     * @ORM\ManyToOne(targetEntity="Tarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tarea", referencedColumnName="id")
     * })
     */
    private $idTarea;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;



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
     * Set idTarea
     *
     * @param \gestionProyectos\mainBundle\Entity\Tarea $idTarea
     *
     * @return Asignacion
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

    /**
     * Set idUsuario
     *
     * @param \gestionProyectos\mainBundle\Entity\Usuario $idUsuario
     *
     * @return Asignacion
     */
    public function setIdUsuario(\gestionProyectos\mainBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \gestionProyectos\mainBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
