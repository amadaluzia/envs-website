<?php
$mymainsite = "https://amadaluzia.is-a.dev"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>amadaluzia</title>
        <script
            src="js/jquery-4.0.0.slim.min.js"
            type="text/javascript"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <header>
            <?php include 'layout/navbar.php'; ?>
        </header>
        <div id="wrapper">
            <main>
                <h1 id="greeting">Good day!</h1>
                <script>
                 const today = new Date;
                 function timeOfDay(date) {
                     const hours = date.getHours();
                     if (hours < 12) {
                         return "morning";
                     } else if (hours < 18) {
                         return "afternoon";
                     }
                     return "evening";
                 }
                 
                 $(document).ready(function() {
                     $("#greeting").text(`Good ${timeOfDay(today)}!`);
                 });
                </script>
                <p>
                    Welcome to a PHP+jQuery website I wanted to open for the
                    fun of it. This was made after I wanted to see how much
                    of a difference it is to write websites like it's the
                    2000's, and I can certainly say it's <i>different</i>.
                    I'm more used to modern JS frameworks like React, Svelte
                    and Astro, so this is quite the learning experience for
                    me. I have to appreciate how older developers were just
                    using these tools, you can still definitely do a lot
                    with these tools, but this stack pales in comparison.
                </p>
                <p>
                    To keep it brief: I'm Artur Manuel, known as amadaluzia
                    on the internet. I like reading things, and writing
                    things. Things I read and write include software, books,
                    screenplays, etc. You can find me in a lot of places on
                    the internet. If you want a proper introduction, visit
                    <a href="<?=$mymainsite?>">my main website instead.</a>
                </p>
            </main>
            <footer>
                <?php include 'layout/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
