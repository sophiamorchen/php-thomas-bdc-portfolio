<?php require_once 'db/db-connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/burger.js"></script>
</head>

<body>
    <?php include_once 'includes/header.php'; ?>
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Faites de vos idées des projets, et de l'argent ....</h1>
                <div>Envoyez-moi votre projet et je vous le réalise en deux semaines, (mensonge garanti).
                </div>
            </div>
            <img width="300" src="/assets/img/sophia-tea.jpg" alt="photo d'identité créateur">
        </section>
        <section class="projects">
            <h2 class="projects__title">Mes projets</h2>

            <div class="projects__list">
                <?php
                $pdo = getDbConnection();
                $sql = 'SELECT * FROM projects;';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach ($result as $project): ?>
                    <article class="project-card">

                        <h3 class="project-card__title">
                            <?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'utf-8') . "\t";?>
                        </h3>

                        <p class="project-card__description">
                            <?php echo htmlspecialchars($project['descritpion'], ENT_QUOTES, 'utf-8') . "\t" ?>
                        </p>

                        <div class="project-card__links">
                            <a
                                href="<?php echo htmlspecialchars($project['github_link'], ENT_QUOTES, 'utf-8') . "\t";?>"
                                class="project-card__link project-card__link--primary">Github
                                
                            </a>

                            <a
                                href="https://app.studi.fr/v3/events/98006/stream?type=0"
                                class="project-card__link project-card__link--outline">
                                Voir
                            </a>
                        </div>

                    </article>
                <?php endforeach ?>


                
                


                
            </div>
        </section>


        <section class="skills">

        </section>
        <section class="references">

        </section>
    </main>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>