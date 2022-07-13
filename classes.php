<?php

class Movie {

 public $title;
 public $year;
 public $original_language;

 public function __construct($title, $year, $original_language) {
  $this->title = $title;
  $this->year = $year;
  $this->original_language = $original_language;
 }

 public function getTitle() {
  return $this->title;
 }

 public function getYear() {
  return $this->year;
 }

 public function getOriginalLanguage() {
  return $this->original_language;
 }

 public function setTitle($title) {
  $this->title = $title;
 }

 public function setYear($year) {
  $this->year = $year;
 }

 public function setOriginalLanguage($original_language) {
  $this->original_language = $original_language;
 }

}