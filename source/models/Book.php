<?php

class Book {
    private ?int $id;
    private string $title;
    private string $description;
    private string $imagePath;

    public function __construct( ?int $id = null, string $title, string $description, string $imagePath) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->imagePath = $imagePath;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    } 

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    } 

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function getDescription(): string {
        return $this->description;
    } 

    public function setImagePath(string $imagePath) {
        $this->imagePath = $imagePath;
    }

    public function getImagePath(): string {
        return $this->imagePath;
    } 
}