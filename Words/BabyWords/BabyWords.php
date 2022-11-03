<?php

require_once '../Words.php';

class BabyWords extends Words
{
    private array $babyWords = [];

    /**
     * @return array
     */
    public function getBabyWords(): array
    {
        return $this->babyWords;
    }

    /**
     * @param array $babyWords
     */
    public function setBabyWords(array $babyWords): void
    {
        $this->babyWords = $babyWords;
    }
}