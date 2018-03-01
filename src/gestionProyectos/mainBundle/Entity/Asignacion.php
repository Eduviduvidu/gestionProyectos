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
     * @var \Subtarea
     *
     * @ORM\ManyToOne(targetEntity="Subtarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subtarea", referencedColumnName="id")
     * })
     */
    private $idSubtarea;

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
     * Set idSubtarea
     *
     * @param \gestionProyectos\mainBundle\Entity\Subtarea $idSubtarea
     *
     * @return Asignacion
     */
    public function setIdSubtarea(\gestionProyectos\mainBundle\Entity\Subtarea $idSubtarea = null)
    {
        $this->idSubtarea = $idSubtarea;

        return $this;
    }

    /**
     * Get idSubtarea
     *
     * @return \gestionProyectos\mainBundle\Entity\Subtarea
     */
    public function getIdSubtarea()
    {
        return $this->idSubtarea;
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
