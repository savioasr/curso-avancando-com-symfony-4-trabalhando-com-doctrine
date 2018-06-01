<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
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
    private $rua;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=20)
     */
    private $numero;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=50)
     */
    private $bairro;

    public function getId()
    {
        return $this->id;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }
}
