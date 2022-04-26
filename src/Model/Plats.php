<?php

namespace App\Model;

class Plats
{
    protected int $id_plat;
    protected string $nom;
    protected string $description;
    protected string $date_creation;
    protected string $date_modification;

    /**
     * @return int
     */
    public function getIdPlat(): int
    {
        return $this->id_plat;
    }

    /**
     * @param int $id_plat
     * @return Plats
     */
    public function setIdPlat(int $id_plat): self
    {
        $this->id_plat = $id_plat;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Plats
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Plats
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreation(): string
    {
        return $this->date_creation;
    }

    /**
     * @param string $date_creation
     * @return Plats
     */
    public function setDateCreation(string $date_creation): self
    {
        $this->date_creation = $date_creation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateModification(): string
    {
        return $this->date_modification;
    }

    /**
     * @param string $date_modification
     * @return Plats
     */
    public function setDateModification(string $date_modification): self
    {
        $this->date_modification = $date_modification;
        return $this;
    }
}
