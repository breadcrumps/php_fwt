<?php require "views/partials/Heading.php"; ?>

<h1>Names</h1>
<?php foreach ($manyusers as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h2>Submit Your Name</h2>
<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>

<?php require "views/partials/Footer.php"; ?>