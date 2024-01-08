<?php
namespace App\Models;
use App\Core\Model;
class Recenzia extends Model
{
    protected ?int $id = null;
    protected ?int $rating = null;
    protected ?string $text_r;
    protected ?string $picture = null;
    protected ?string $author = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

    public function getText(): ?string
    {
        return $this->text_r;
    }

    public function setText(?string $text): void
    {
        $this->text_r = $text;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): void
    {
        $this->picture = $picture;
    }


    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }



}