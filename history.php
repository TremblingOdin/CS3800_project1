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

            echo "<p>Born as $name to The Joy and The Sorrow during the Allied "
                    . "invasion of Normandy, France June 6th, 1944. He was taken "
                    . "from his parents by agents of the Philosophers. When he "
                    . "was old enough $name worked for the NSA as a code breaker."
                    . " While at the NSA he had the codename of ADAM, before him"
                    . " and another colleague defected to the Soviet Union in "
                    . "September of 1960. Some accounts however claim that after "
                    . "World War 2 he was taken in and raised by the Spetsnaz under "
                    . "Yevgeny Borisovitch Volgin, commander of GRU. Which "
                    . "ever was the case he acted as a spy for both the KGB and CIA"
                    . "while in the USSR under the command of the Philosophers.</p>";
	    echo "<p>$name was given preferential treatment while in GRU due to "
                    . "both his parents and his mentor, Volgin. This allowed him"
                    . " the opportunities to be promoted to Major at a very young "
                    . "age. This also lead to him being given command of his own "
                    . "personal squad. His inherited legacy came to a head when "
                    . "his mother was forced to choose between killing $name "
                    . "or his father the Sorrow. After she killed his father $name's "
                    . "life was no longer threatened.</p>";
	    echo "<p>In the August 1964, $name, now know as Major Ocelot, travel"
                    . "ed to Rassvet, Tselinoyarsk with the Ocelot unit. For "
                    . "those who are unfamiliar Tselinoyarsk is a mountainous "
                    . "region at the south of the Former USSR, bordering much of"
                    . " Central Asia. Ocelot’s task was to capture a Nikolai "
                    . "Stepanovich Sokolov for the GRU, killing KGB operatives "
                    . "he knew in the process. At the same time the CIA sent in "
                    . "operatives to extract Nikolai and other defecting Rocket "
                    . "scientists. This is where Ocelot first meets Naked Snake, "
                    . "someone who would then turn out to be one of his greatest "
                    . "allies. After failing to kill Naked Snake, he’s told that "
                    . "he shoots as if he’s holding a revolver despite holding a "
                    . "Makarov Pistol.</p>";
	    echo "After the conflict Ocelot airlifted the Shagohod prototype "
            . "with Colonel Volgin. The Shagohod, designed by Nokolai, was a "
                    . "hybrid screw propelled vehicle that served as a mobile "
                    . "nuclear ballistic missile system. This is where Ocelot "
                    . "witnessed the launch of a nuclear warhead at Nikola’s "
                    . "research facility. This would later be dismissed as the "
                    . "act of terrorists lead by The Joy.</p>";
	    echo "<p>One week later Ocelot was ordered by the CIA to aid Naked "
            . "Snake during Operation Snake Eater, including eliminating The "
                    . "Boss, the Cobra Unit, and Shagohod. The Cobra Unit, lead "
                    . "by The Joy/The Boss, consisted of The Pain, The End, The "
                    . "Fury, The Sorrow, and The Fear. While accomplishing this "
                    . "goal he was tasked to retrieve the Philosophers’ Legacy "
                    . "for the American branch of the Philosophers while also "
                    . "keeping it out of the hands of a Chinese spy posing as EVA.<p>";
            echo "<p>When Snake was forced to fight Volgen, $alias2 disobeyed direct "
                    . "orders to shoot him and instead aided his task of killing Volgen. "
                    . "This leads to Volgen's attempts to kill him with the back draft "
                    . "of Shagohod as her pursues's Snake and Eva. His mission "
                    . "comes to an end when he challenges Snake to a quick draw duel "
                    . "on top of a WIG. After the mission he contacts the KGB and CIA "
                    . "directors having given each a separate half of the philosophers "
                    . "legacy.</p>";
            echo "<p>$alias2 is recruited to aid in the formation of the La-Li-Lu-Le-Lo "
            . "to shape the world into the one The Boss had envisioned. Due to Zero's "
                    . "distorted interpretation of such vision $alias2 and Big Boss "
                    . "left to form their own mercenary army. Zero would later contact "
                    . "$alias2 in 1975 to protect Big Boss against Skull Face after "
                    . "his 9 year coma induced by the aftermath of the XOF Trojan Horse. "
                    . "He created a body double for Big Boss, dubbed Venom Snake, "
                    . "using hypnotherapy he implanted Big Boss's memories in the double "
                    . "and himself to believe that the double is Big Boss.</p>";
            echo "<p>In 1984 $alias2 extracted Venom Snake from his hospital and "
            . "traveled to Afghanistan to rescue a Kaz Miller. He locates and extracts "
                    . "a Huey Emmerich who was responsible for the failed XOF Trojan incident. "
                    . "After this him and Miller proceeded to torture Huey for more "
                    . "information onf the incident. During this Venom Snake had "
                    . "rescued a child named Eli who was assumed to be one of his "
                    . "genetic clones. After numerous incidents with Skull Unit "
                    . "$alias2 discovered that Eli was trying to orchestrate a rebellion "
                    . "on Mother base. Eli had Huey repair a Sahelanthropus and proceeded "
                    . "to escape Mother Base. $alias2 proceeded to track him down "
                    . "and interrogated the child once he was located. He would later "
                    . "leave Venom Snake's group, and after the fall of the Soviet "
                    . "Union he left the Spetsnaz.</p>";
            echo "<p>After the Big Boss was put in a nanomachine induced coma by "
            . "Zero $alias5 and Eva devised a plan to recover his body. In 2005, under "
                    . "the orders of U.S. President George Sears, $alias5 encouraged "
                    . "Liquid Snake, or Eli, to bring about an inserrection on Shadow "
                    . "Moses Island. Part of this mission also included preventing "
                    . "Liquid Snake from obtaining the MEtal Gear REX launch codes. "
                    . "This failed as Liquid simply had Decoy Octopus disguise himself "
                    . "as Anderseon to talke Solid Snake into the act.</p>";
            echo "<p>$alias5 challenged Solid Snake to a gunfight, much like his "
                    . "genetic donor, but midway through the duel he lost his right "
                    . "arm to the Cyborg Ninja. He fled but later returns to torture "
                    . "Snake for interrogation. $alias5 took this time to try and "
                    . "inform snake of his and his predecessors actions in Afghanistan, "
                    . "Eritrea, Mozambique, and Chad. After Ocelot had Snake hand "
                    . "him the REX's test data from Snake he escaped Shadow Moses "
                    . "and delivered it to the President.</p>";
            echo "<p>After the Shadow Moses incident $alias5, now going by $alias4, "
                    . "grafted Liquid's arm to his body to replace his own missing "
                    . "arm. This caused the dormant personality of liquid to occasionally "
                    . "possess $alias4 through the arm. In 2007 $alias4 was ordered "
                    . "by the Lalilulelo to steal the newest Metal Gear model, Metal "
                    . "Gear Ray. This was accomplised with the help of Sergei Gurlukovich "
                    . "and his mercinaries. Snake attempted to stop him, but this "
                    . "was instead used to frame Snake.</p>";
            echo "<p>In April of 2009 $alias4 teamed up with Solidus Snake, the "
                    . "last of the three clones of Big Boss, Liquid, Solid, Solidus. "
                    . "The two of them formed the Sons of Liberty and took over the "
                    . "Big Shell. Solidus planned to eliminate the LaLiLuLeLo unaware "
                    . "of $alias4`s involvement. Raiden was sent as an agent of "
                    . "the Patriots to stop the two of them. However upon his success "
                    . "Ocelot reveals that this was all a test scenario for the LaLiLuLeLo'"
                    . "new GW AI. However many unscripted events took place due to "
                    . "Liquids possesion through $alias4`s arm. This would lead to "
                    . "him replacing his arm with a cybernetic arm.</p>";
            echo "<p>By 2014 $alias6 resurfaced to create insurrection against the "
                    . "LaLiLuLeLo. Using Solidus' DNA to enter the LaLiLuLeLo's AI "
                    . "Network he took over the SOP system which controlled all "
                    . "manufactured gun and weapon in the world for the past few "
                    . "decades. Due to this Solid Snake, who due to imperfect clone "
                    . "techniques suffered from accelerated aging, hyjacked the "
                    . "Metal Gear Rex in order to attack $alias6. He was met with "
                    . "a Metal Gear Ray which $alias6 used to disable the REX and "
                    . "take it's rail gun. He attempted to flee and use the rail "
                    . "gun to shot down the LaLiLuLeLo's orbital core AI. Snake "
                    . "boarded his battleship in order to upload a computer worm "
                    . "which shut down most of the nanomachines in Ocelot's forces. "
                    . "This was part of Ocelot's plan though as he intended to remove "
                    . "the LaLiLuLeLo's influence and control from the world, freeing "
                    . "the people. Atop of his battleship Old Snake confronts $alias6 "
                    . "and the two have a fight to the death as $alias2 slowly shifted "
                    . "into his fighting style from his conflict with Big Boss back "
                    . "in 1964. After Snake attempted to spare him the LaLiLuLeLo's "
                    . "FOXDIE virus located the nanomachines in the bodies of $name, "
                    . "EVA, and Big Boss, killing them.</p>";
            if(isset($aliasUser)) {
                echo "<p>Given how questionable previous 'deaths' were, some assume "
                . "he is still operating under the new name of $aliasUser</p>";
            }
            ?>
        </main>

        <?php include("includes/footer.php"); ?>
    </body>
</html>