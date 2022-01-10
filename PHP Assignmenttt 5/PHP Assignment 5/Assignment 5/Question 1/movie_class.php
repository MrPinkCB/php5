<?php

class FavMovies {
    
    public $filename;
    public $fav_movies = array();
  
    function __construct($filename) {
        $this->filename = $filename;
    }
  
    function check_file_exists(){
        if(file_exists($this->filename)){
            return true;
        } else{
            return false;
        }
    }

    function get_movies_array(){
        return $this->fav_movies;
    }

    function read_xml(){
        $xml = simplexml_load_file($this->filename);
        foreach($xml->Movie as $movie){
            $title = $movie->Title;
            $picture = $movie->Picture;
            $director = $movie->Director;
            $main_actor = $movie->MainActor;
            $imdb = $movie->IMDB;
            $year = $movie->Year;
            $genre = $movie->Genre;

            $single_movie = array($title, $picture, $director, $main_actor, $imdb, $year, $genre);
            array_push($this->fav_movies, $single_movie);

        }
    }


}

?>