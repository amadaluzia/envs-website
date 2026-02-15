<!doctype html>
<html>
    <head>
        <title>A very boring page | amadaluzia</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <?php include 'layout/navbar.php'; ?>
        </header>
        <div id="wrapper">
            <main>
                <h1>What even is this?</h1>
                <p>
                    This is a multipage website, or at least a test to
                    see if PHP can even do that. Turns out it was
                    actually a lot easier than I expected. My main issue
                    is that I have to include the .php at the end, which
                    I want to assume is <i>easily</i> fixable by creating
                    multiple folders with an index.php page. I should be
                    already used to this, given that I use Svelte, but I
                    guess I didn't feel like it :P.
                </p>
                <p>
                    Now that you are already here, you should write a
                    website, whether it's in Next.js, Svelte, PHP and
                    jQuery, etc. It's an interesting learning experience
                    that I don't really hate. HTML is good enough if
                    you don't want to use a framework, but you really
                    should if you don't want to write a lot of
                    boilerplate.
                </p>
            </main>
            <footer>
                <?php include 'layout/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
