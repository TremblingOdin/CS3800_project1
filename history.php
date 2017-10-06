<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <title> Project 1 </title> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="project 1 cs3800"> 
        <link rel="shortcut icon" href="images/newfav.png"> 
        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/main.css">  
    </head>
    <body>

        <?php include("includes/header.php"); ?>

        <main>
            <?php
            $userAl = false;

            $file = fopen("aliases.txt", "r");

            $name = fgets($file);
            $alias1 = fgets($file);
            $alias2 = fgets($file);
            $alias3 = fgets($file);
            $alias4 = fgets($file);
            $alias5 = fgets($file);
            $alias6 = fgets($file);
            $alias7 = fgets($file);
            
            fclose($file);
            /**
             * photos
             * $photo1
             * $photo2
             * $photo3
             * $photo4
             * $photo5
             * $photo6
             */
            

            if (!feof($file)) {
                $aliasUser = fgets($file);
                $userAl = true;
            }

            echo <<<EOT
            	Born as $name to The Joy and The Sorrow during the Allied invasion of Normandy, France June 6th, 1944. He was taken from his parents by agents of the Philosophers. When he was old enough $name worked for the NSA as a code breaker. While at the NSA he had the codename of ADAM, before him and another colleague defected to the Soviet Union in September of 1960. Some accounts however claim that after World War 2 he was taken in and raised by the Spetsnaz under Yevgeny Borisovitch Volgin, commander of GRU. Which ever was the case he acted as a spy for both the KGB and CIA while in the USSR under the command of the Philosophers.
	$name was given preferential treatment while in GRU due to both his parents and his mentor, Volgin. This allowed him the opportunities to be promoted to Major at a very young age. This also lead to him being given command of his own personal squad. His inherited legacy came to a head when his mother was forced to choose between killing $name or his father the Sorrow. After she killed his father $name's life was no longer threatened.
	In the August 1964, $name, now know as Major Ocelot, traveled to Rassvet, Tselinoyarsk with the Ocelot unit. For those who are unfamiliar Tselinoyarsk is a mountainous region at the south of the Former USSR, bordering much of Central Asia. Ocelot’s task was to capture a Nikolai Stepanovich Sokolov for the GRU, killing KGB operatives he knew in the process. At the same time the CIA sent in operatives to extract Nikolai and other defecting Rocket scientists. This is where Ocelot first meets Naked Snake, someone who would then turn out to be one of his greatest allies. After failing to kill Naked Snake, he’s told that he shoots as if he’s holding a revolver despite holding a Makarov Pistol.
	After the conflict Ocelot airlifted the Shagohod prototype with Colonel Volgin. The Shagohod, designed by Nokolai, was a hybrid screw propelled vehicle that served as a mobile nuclear ballistic missile system. This is where Ocelot witnessed the launch of a nuclear warhead at Nikola’s resereach facility. This would later be dismissed as the act of terrorists lead by The Joy.
	One week later Ocelot was ordered by the CIA to aid Naked Snake during Operation Snake Eater, including eliminating The Boss, the Cobra Unit, and Shagohod. The Cobra Unit, lead by The Joy/The Boss, consisted of The Pain, The End, The Fury, The Sorrow, and The Fear. While accomplishing this goal he was tasked to retrieve the Philosophers’ Legacy for the American branch of the Philosophers while also keeping it out of the hands of a Chinese spy posing as EVA.
        
EOT;
            ?>
            <p>INSERT CONVOLUDED PLOT SHIT HERE<p>
        </main>

        <?php include("includes/footer.php"); ?>
    </body>
</html>