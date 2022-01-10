<?php

include_once("movie_class.php");

$filename = "fav_movies.xml";

$movie_class = new FavMovies($filename);
$check_file_exists = $movie_class->check_file_exists();

if($check_file_exists){

    $movie_class->read_xml();
    $movies_array = $movie_class->get_movies_array();
    ?>
        <table border="1" style="margin: auto;">
            <tbody>

                <?php

                    $col = 0;
                    for($i = 0; $i < count($movies_array); $i++){
                        $title = $movies_array[$i][0];
                        $picture = $movies_array[$i][1];
                        $director = $movies_array[$i][2];
                        $main_actor = $movies_array[$i][3];
                        $imdb = $movies_array[$i][4];
                        $year = $movies_array[$i][5];
                        $genre = $movies_array[$i][6];

                        $col = $col + 1;
                        if($col == 0){
                                echo "<tr><td>
                                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                                        <h4>".$title." (".$year.")</h4>
                                        <p>Director: ".$director."</p>
                                        <p>Main Actor/Actress: ".$main_actor."</p>
                                        <p>Genre: ".$genre."</p>
                                        </td>";
                        } else if($col == 3){
                                echo "<td>
                                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                                        <h4>".$title." (".$year.")</h4>
                                        <p>Director: ".$director."</p>
                                        <p>Main Actor/Actress: ".$main_actor."</p>
                                        <p>Genre: ".$genre."</p>
                                </td></tr>";
                                $col = 0;
                        } else{
                                echo "<td>
                                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                                        <h4>".$title." (".$year.")</h4>
                                        <p>Director: ".$director."</p>
                                        <p>Main Actor/Actress: ".$main_actor."</p>
                                        <p>Genre: ".$genre."</p>
                                </td>";
                        }   
                    }

                ?>

            </tbody>
        </table>

    <?php

} else{
    echo "<h3 style='text-align: center; padding: 10px; background-color: red; color: white;'>".$filename." not found...</h3>";
}


?>
