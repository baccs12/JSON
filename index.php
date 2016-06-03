<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Jaeson-ToDo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>

    <form action="post.php" method="POST">

<div class="wrapper">
        <div class="header">
            <h1>To-Do Title </h1>
            <textarea name="title" class="title" placeholder="Title"></textarea>
        </div>
        <div>
            <textarea name="message" class="message" placeholder="Message"></textarea>
        </div>


        <!-- date -->
        <div class="date-wrapper">
        <div class="date-content">
            <input class="date" type="date" name="date" type="submit">
        </div>
    </div>


        <input class="post" type="submit" value="Save">
        <a href="view.php"><span>View</span></a>
</div>


</form>

</body>
</html>