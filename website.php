<?php

// Base class for content
class Content {
    protected string $title;
    protected string $text;

    // Constructor to initialize title and text
    public function __construct(string $title, string $text) {
        $this->title = $title;
        $this->text = $text;
    }

    // Getter for title
    public function getTitle(): string {
        return $this->title;
    }

    // Getter for text
    public function getText(): string {
        return $this->text;
    }
}

// Derived class for articles
class Article extends Content {
    private bool $breakingNews;

    // Constructor to initialize title, text, and breaking news flag
    public function __construct(string $title, string $text, bool $breakingNews = false) {
        parent::__construct($title, $text);
        $this->breakingNews = $breakingNews;
    }

    // Override getTitle to prepend "BREAKING: " if it's breaking news
    public function getTitle(): string {
        $title = parent::getTitle();
        if ($this->breakingNews) {
            $title = "BREAKING: " . $title;
        }
        return $title;
    }
}

// Derived class for ads
class Ad extends Content {
    // Override getTitle to return the title in uppercase
    public function getTitle(): string {
        return strtoupper(parent::getTitle());
    }
}

// Derived class for vacancies
class Vacancy extends Content {
    // Override getTitle to append " - apply now!"
    public function getTitle(): string {
        return parent::getTitle() . " - apply now!";
    }
}

// Create content array with different types of content
$contents = [
    new Article("New PHP Version Released", "PHP 8.1 has been released with new features.", true)
];