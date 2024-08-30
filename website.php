<?php

class Content {
    protected string $title;
    protected string $text;

    public function __construct(string $title, string $text) {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getText(): string {
        return $this->text;
    }
}

class Article extends Content {
    private bool $breakingNews;

    public function __construct(string $title, string $text, bool $breakingNews = false) {
        parent::__construct($title, $text);
        $this->breakingNews = $breakingNews;
    }

    public function getTitle(): string {
        $title = parent::getTitle();
        if ($this->breakingNews) {
            $title = "BREAKING: " . $title;
        }
        return $title;
    }
}

class Ad extends Content {
    public function getTitle(): string {
        return strtoupper(parent::getTitle());
    }
}

class Vacancy extends Content {
    public function getTitle(): string {
        return parent::getTitle() . " - apply now!";
    }
}

// Create content array
$contents = [
    new Article("New PHP Version Released", "PHP 8.1 has been released with new features.", true),
    new Article("Local News", "A new park has been opened downtown."),
    new Ad("Sale on Electronics", "Get up to 50% off on all electronics."),
    new Vacancy("Software Developer", "We are looking for a skilled software developer.")
];

// Display content with HTML tags
foreach ($contents as $content) {
    echo "<h1>" . $content->getTitle() . "</h1>";
    echo "<p>" . $content->getText() . "</p>";
}