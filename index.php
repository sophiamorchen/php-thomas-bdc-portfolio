<?php

require_once __DIR__ . '/bootstrap.php';

$pdo = getDbConnection();
$projects = getProjects($pdo);
$skills = getSkills($pdo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-..."
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
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

                <?php foreach ($projects as $project): ?>
                    <article class="project-card">

                        <h3 class="project-card__title">
                            <?php echoValue($project, 'title') ?>
                        </h3>

                        <p class="project-card__description">
                            <?php echoValue($project, 'description') ?>
                        </p>

                        <div class="project-card__links">
                            <a
                                href="<?php echoValue($project, 'github_link') ?>"
                                class="project-card__link project-card__link--primary">
                                <i class="fa-brands fa-github"></i>
                                Github

                            </a>

                            <a
                                href="<?php echoValue($project, 'project_link') ?>"
                                class="project-card__link project-card__link--outline">
                                <i class="fa-solid fa-up-right-from-square"></i>
                                Voir
                            </a>
                        </div>
                    </article>
                <?php endforeach ?>
            </div>
        </section>
        <section class="skills">
            <h2 class="skills__title">Mes skills</h2>

            <div class="skills__list">
                <?php
                foreach ($skills as $skill): ?>
                    <article class="skill-card">
                        <?php if ($skill['logo'] == null): ?>
                            <h3 class="skill-card__title">
                                <?php echoValue($skill, 'name') ?>
                            </h3>
                        <?php else : ?>
                            <img
                                src="<?php echoValue($skill, 'logo') ?>"
                                alt="Logo <?php echoValue($skill, 'name'); ?>">
                        <?php endif ?>
                    </article>
                <?php endforeach ?>

            </div>
        </section>
        <section class="references">

        </section>
    </main>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>