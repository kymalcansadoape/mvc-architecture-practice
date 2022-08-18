<?php require('partials/head.php');?>


<h1>Submit Name</h1>
<?php foreach($users as $user) : ?>
    <li><?= $user->name ?></li>
<?php endforeach;?>

<form action="/names" method="POST">
    <input type="text" id="" name="name">
<button type="submit">Submit</button>

</form>

<?php require('partials/footer.php');?>




