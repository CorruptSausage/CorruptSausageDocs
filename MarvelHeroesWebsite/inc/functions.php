<?php

function changeBanner()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo './resources/thor_banner.jpg';
            } else if ($_GET['superhero'] == "captain_america") {
                echo './resources/captain_america banner.png';
            } else if ($_GET['superhero'] == "iron_man") {
                echo './resources/iron_man banner.png';
            } else if ($_GET['superhero'] == "spiderman") {
                echo './resources/spiderman_banner.png';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo './resources/captain_marvel banner.jpg';
            } else if ($_GET['superhero'] == "ant_man") {
                echo './resources/ant_man banner.jpg';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo './resources/hawkeye banner.png';
            } else {
                echo './resources/not_found.png';
            }
        } else {
            echo '';
        }
    }
}

function changeTitle()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo 'Thor Information';
            } else if ($_GET['superhero'] == "captain_america") {
                echo 'Captain America Information';
            } else if ($_GET['superhero'] == "iron_man") {
                echo 'Iron Man Information';
            } else if ($_GET['superhero'] == "spiderman") {
                echo 'Spiderman Information';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo 'Captain Marvel Information';
            } else if ($_GET['superhero'] == "ant_man") {
                echo 'Ant Man Information';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo 'Hawkeye Information';
            } else {
                echo 'Hero not found';
            }
        } else {
            echo 'Click "More Info" for more information per hero';
        }
    }
}

function changeDescription()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo 'Thor Odinson, or simply Thor, is a fictional character appearing in American comic books published
            by
            Marvel Comics. The character is based on the Norse deity of the same name, the Asgardian god of
            thunder
            whose enchanted hammer Mjolnir enables him to fly and manipulate weather, among his other superhuman
            attributes.';
            } else if ($_GET['superhero'] == "captain_america") {
                echo 'Captain America is the alter ego of Steve Rogers, a frail young artist enhanced to the peak of 
            human perfection by an experimental "super-soldier serum" after joining the military to aid the 
            United States government efforts in World War II.';
            } else if ($_GET['superhero'] == "iron_man") {
                echo 'Later, Stark develops his suit, adding weapons and other technological devices he designed through his company, Stark Industries. 
            He uses the suit and successive versions to protect the world as Iron Man.';
            } else if ($_GET['superhero'] == "spiderman") {
                echo 'Peter Parker gained his powers by being bitten by a radioactive spider. Being bitten by a radioactive spider gave Peter the following powers: Superhuman Strength. Superhuman Speed, Superhuman Reflexes, Superhuman Durability, Healing Factor, “Spider-Sense” Alert, Heightened Senses, and Wall-crawling.';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo 'Former Air Force pilot and intelligence agent Carol Danvers pursued her dream of space exploration as a NASA employee, but her life forever changed when she was accidentally transformed into a human-Kree hybrid with extraordinary powers.';
            } else if ($_GET['superhero'] == "ant_man") {
                echo 'The original Ant-Man was Biophysicist and Security Operations Center expert Dr. Henry "Hank" Pym; who decided to become a superhero after the death of his first wife Maria Trovaya, who had been a political dissident in Hungary. Falling in love with him and believing that his American citizenship would protect her, Maria traveled with Hank to Hungary shortly after their marriage to start their new life together.';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo 'The man who would become known as Hawkeye was born Clint Barton. Orphaned at an early age, he joined the circus and apprenticed himself to the Swordsman, a performer who specialized in tricks with blades. After he discovered the Swordsman stealing from the circus, the two fought, and Barton was left for dead';
            } else {
                echo 'It looks like we did not find a hero with that name, this is probally because the hero is not added to the website';
            }
        }
    }
}

function changeStrengths()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Super Strength</li>
            <li>Speed</li>
            <li>Agility</li>
            <li>Durability</li>
            <li>Immunity to most diseases</li>
            </ul>';
            } else if ($_GET['superhero'] == "captain_america") {
                echo '
            <h2>Strengths</h2>
            <ul>    
            <li>Agility</li>
            <li>Strength</li>
            <li>Speed</li>
            <li>Endurance</li>
            <li>Reaction time</li>
            </ul>';
            } else if ($_GET['superhero'] == "iron_man") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Superhuman strengths</li>
            <li>Durability</li>
            <li>Flight</li>
            <li>Array of weapons</li>
            </ul>';
            } else if ($_GET['superhero'] == "spiderman") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Super Strength</li>
            <li>Speed</li>
            <li>Reflexes</li>
            <li>Healing</li>
            <li>Heightened senses</li>
            </ul>';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Super Strength</li>
            <li>Speed</li>
            <li>Flight</li>
            <li>Durability</li>
            <li>Immunity to most diseases</li>
            </ul>';
            } else if ($_GET['superhero'] == "ant_man") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Can shrink</li>
            <li>Can grow</li>
            </ul>';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Manipulate arrows</li>
            <li>Very accurate</li>
            <li>Skilled martial artist</li>
            </ul>';
            } else {
                echo '
            <h2>Strengths</h2>
            <ul>
            <li>Invisible</li>
            <li>Cannot be found</li>
            </ul>';
            }
        }
    }
}

function changeRating()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                <i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "captain_america") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                </i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "iron_man") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                </i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "spiderman") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                </i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                <i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "ant_man") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                </i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo
                '
                <h2>Overal rating</h2>
                <div class="star_rating">
                </i><i class="fa-solid fa-star fa-2xl"></i><i class="fa-solid fa-star fa-2xl"></i>
                </div>
                ';
            } else {
                echo '';
            }
        }
    }
}

function changeWeakness()
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['superhero'])) {
            if ($_GET['superhero'] == "thor") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>Thor has no weaknesses</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "captain_america") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>No Major ranged attacks</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "iron_man") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>Dependence on technology</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "spiderman") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>Water</li>
                    <li>Memory Loss</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "captain_marvel") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>vulnerable mind</li>
                    <li>her "higher, further, faster" motto</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "ant_man") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>Limited Strength</li>
                    <li>Dependent of suit</li>
                </ul>
                ';
            } else if ($_GET['superhero'] == "hawkeye") {
                echo
                '
                <h2>Weaknesses</h2>
                <ul>
                    <li>Limited by ammo</li>
                </ul>
                ';
            } else {
                echo '';
            }
        }
    }
}

