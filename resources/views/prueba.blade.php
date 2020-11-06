<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <p class="display-4">PRUEBA</p>

    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto aspernatur in, labore quasi tenetur voluptas? Accusamus, accusantium autem deserunt eius facilis fugiat hic iste provident voluptatibus. Explicabo, facere, nemo?</span><span>Cupiditate esse ipsa itaque laudantium, magni nesciunt optio perferendis. Asperiores autem dignissimos dolor error eum fugiat ipsam itaque, iusto molestiae molestias nam, natus odit officiis quae quam quos velit, voluptatum!</span><span>Accusantium, architecto beatae dolorem dolorum enim, expedita facilis fugiat fugit iure magnam nostrum obcaecati odit pariatur quas sequi ut voluptatem? Alias aut blanditiis eveniet ipsum nam natus odio odit sapiente!</span><span>Aliquam aliquid atque aut beatae consequatur corporis dolores fuga illo in itaque, laudantium nemo numquam praesentium, quasi quia quo repellat saepe ut veritatis vero. Explicabo iste nulla possimus provident reprehenderit.</span><span>Accusantium, assumenda dolore eum nesciunt omnis quia vero. Ad adipisci atque corporis, dolorem earum enim explicabo ipsum iste iure laboriosam molestiae mollitia nam nobis pariatur quos sapiente similique soluta veniam.</span>   </p>

    <ul class="list-group">
        @for($i = 0; $i<12; $i++)
        <li class="list-group-item">Prueba lista item {{ $i }} </li>
        @endfor
    </ul>


</body>
</html>
