<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=20)
     */
    private $nome;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
     */
    private $especie;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    public function getNomeEspecie()
    {
        return $this->getEspecie() ? $this->getEspecie()->getNome() : null;
    }
}
