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
            <textarea name="title" class="title" placeholder="title"></textarea>
        </div>
        <div>
            <textarea name="message" class="message" placeholder="Message"></textarea>

        </div>
        <input class="post" type="submit" value="Save">


        <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>

    </form>
</div>

</body>
</html>