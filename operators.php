<!DOCTYPE html>
<html lang="en-GB" xmlns="http://www.w3.org/1999/xhtml">
<?php require_once 'Templates/Head.tmpl.php'; ?>
<body>
<?php require_once 'Templates/Nav.tmpl.php'; ?>
<main class="content">
    <section class="section">

        <h1 class="title">
            Operators
        </h1>

        <div class="tile is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child box notification is-danger">
                    <h3 class="title">Addition +</h3>
                    <p class="subtitle">Example: $x + $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 + 2 = <?= 2 + 2 ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-warning">
                    <h3 class="title">Subtraction -</h3>
                    <p class="subtitle">Example: $x - $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 4 - 2 = <?= 4 - 2 ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-success">
                    <h3 class="title">Multiplication *</h3>
                    <p class="subtitle">Example: $x * $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 * 2 = <?= 2 * 2 ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-info">
                    <h3 class="title">Division /</h3>
                    <p class="subtitle">Example: $x / $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 4 / 2 = <?= 4 / 2 ?></strong></p>
                </article>
            </div>

        </div>

        <div class="tile is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child box notification is-white">
                    <h3 class="title">Modulus %</h3>
                    <p class="subtitle">Example: $x % $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 5 % 2 = <?= 5 % 2 ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-danger">
                    <h3 class="title">Exponentiation **</h3>
                    <p class="subtitle">Example: $x ** $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 ** 2 = <?= 2 ** 2 ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-link">
                    <h3 class="title">Equal ==</h3>
                    <p class="subtitle">Example: $x == $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 == 2 = <?= 2 == 2 ? "true" : "false" ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-black">
                    <h3 class="title">Not equal !=</h3>
                    <p class="subtitle">Example: $x != $y</p>
                    <p class="subtitle"><strong class="has-text-white">Result: 4 != 2 = <?= htmlspecialchars(4 != 2 ? "true" : "false") ?></strong></p>
                </article>
            </div>

        </div>

        <div class="tile is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child box notification is-primary">
                    <h3 class="title">Greater than ></h3>
                    <p class="subtitle">Example: $x > $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 > 3 = <?= htmlspecialchars(2 > 3 ? "true" : "false") ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-link">
                    <h3 class="title">Less than &lt;</h3>
                    <p class="subtitle">Example: $x &lt; $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 4 &lt; 2 = <?= htmlspecialchars(4 < 2 ? "true" : "false") ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-warning">
                    <h3 class="title">Identical ===</h3>
                    <p class="subtitle">Example: $x === $y </p>
                    <p class="subtitle"><strong class="has-text-black">Result: 2 === 2.0 = <?= 2 === 2.0 ? "true" : "false" ?></strong></p>
                </article>
            </div>

            <div class="tile is-parent">
                <article class="tile is-child box notification is-primary">
                    <h3 class="title">Not identical !==</h3>
                    <p class="subtitle">Example: $x !== $y</p>
                    <p class="subtitle"><strong class="has-text-black">Result: 4 !== 2 = <?= 4 !== 2 ? "true" : "false" ?></strong></p>
                </article>
            </div>

        </div>

    </section>
</main>
<?php require_once 'Templates/Footer.tmpl.php' ?>
</body>
</html>