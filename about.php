<!DOCTYPE html>
<html lang="en-GB">
<?php require_once 'Templates/Head.tmpl.php'; ?>
<body>
<?php require_once 'Templates/Nav.tmpl.php'; ?>
<main class="content">
    <section class="hero is-black is-fullheight-with-navbar" style="background-color: #212738;">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-success">
                    PHP Academy Homework 1
                </h1>
                <h2 class="subtitle has-text-danger">
                    About
                </h2>
                <hr style="background-color: #48c774;">
                <h3 class="has-text-success">.</h3>
                <h4 class="has-text-success">.</h4>
                <h5 class="has-text-success"><sup>.</sup></h5>
                <h6 class="has-text-success"><sub>.</sub></h6>

            </div>
        </div>
    </section>
    <section class="section">
        <div class="content">

            <h3>Preconditions</h3>
            <ol type="1">
                <li>Create GitHub profile if you don't have one</li>
                <li>Post your profile on General channel on Slack</li>
            </ol>

            <h3>Mandatory</h3>
            <ol type="1">

                <li>Create 3 pages using a CSS Framework of your choice, except Bootstrap.</li>
                <li>Every page must have a relative link to every other page.</li>
                <li>Together all 3 pages must have a total of 30 unique HTML elements</li>
                <li>Try to reuse as much content as possible if they are same between pages. At least one include/include_once and one require/require_once is mandatory.</li>
                <li>Together all 3 pages must have at least 10 PHP operators</li>
                <li>All 3 pages must be valid by Markup Validation Service</li>
                <li>Your homework must be pushed (do not use file upload) to GitHub repository PHPAcademyHomework1.</li>
            </ol>

            <h3>Extra points</h3>
            <ol type="1">
                <li>Do all of your work in develop branch</li>
                <li>Once you are done, create a pull request and put one of your colleagues as a reviewer.</li>
                <li>When your homework is approved, merge it to the master branch.</li>
            </ol>

        </div>
    </section>
</main>
<?php require_once 'Templates/Footer.tmpl.php' ?>

</body>
</html>