<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion PHP POO static</title>
    <link href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head><body>
    <header>
        <h1>
         <span aria-hidden="true">      	
            &#128640;
            </span>
            Confirmation de vos informations
        </h1>
    </header>
    <aside>
        <figure class="d-flex flex-column flex-md-row flex-items-center flex-md-items-center">
            <div class="col-2 d-flex flex-items-center flex-items-center flex-md-items-start" role="region" aria-labelledby="picture">
              <img id="picture" class="width-full avatar mb-2 mb-md-0" src="https://github.com/github.png" alt="github" />
            </div>
            <figcaption class="col-12 col-md-10 d-flex flex-column flex-justify-center flex-items-center flex-md-items-start pl-md-4">
              <h1 class="text-normal lh-condensed">GitHub</h1>
              <p class="h4 color-fg-muted text-normal mb-2">How people build software.</p>
              <a class="color-fg-muted text-small" href="https://github.com/giusmili/pattern_design">https://github.com/giusmili/pattern_design</a>
            </figcaption>
        </figure>
    </aside>
    <main>
        <section class="blankslate">    
                <h2>
                    
                    <span ariq-hidden="true">🔥</span> Vos informations!
                </h2>
                <?php
                if(isset($_GET["mail"]) && isset($_GET["pass"])){

                    if($_GET["mail"] && $_GET["pass"]){
                        echo "<ul><li>\n".$_GET['mail']."</li>
                        \n<li>".md5($_GET['pass'])."</li>
                        </ul>";
                        
                    }
                    else{
                        header("Location: index.php");
                        die("<p>Erreur de formulaire</p>");
                    }

                }
               
            ?>
               
           
                        
        </section>
    
    </main>
   <footer>
        <p>
            &copy; - github - <a href="#url" class="branch-name">a_new_feature_branch</a> - 2024
        </p>
</footer>

</body>
</html>