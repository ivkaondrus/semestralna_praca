<?php
namespace App\Models;
use App\Core\Model;
class Recenzia extends Model
{
    protected ?int $id = null;
    protected ?string $prihlaseny_username;
    protected ?string $text_r;
    protected ?string $obrazok;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPrihlasenyUsername(): ?string
    {
        return $this->prihlaseny_username;
    }

    public function setPrihlasenyUsername(?string $prihlaseny_username): void
    {
        $this->prihlaseny_username = $prihlaseny_username;
    }

    public function getText(): ?string
    {
        return $this->text_r;
    }

    public function setText(?string $text): void
    {
        $this->text_r = $text;
    }

    public function getObrazok(): ?string
    {
        return $this->obrazok;
    }

    public function setObrazok(?string $obrazok): void
    {
        $this->obrazok = $obrazok;
    }

}