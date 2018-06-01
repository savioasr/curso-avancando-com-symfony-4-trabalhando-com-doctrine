<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
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
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var date
     * 
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

    /**
     * @var object
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="animal")
     */
    private $cliente;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }
}
