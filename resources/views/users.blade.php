<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<style>
    body{
        background-color: blueviolet;
        margin: 0;
        padding: 0;
    }
    h1,h2{
        color: white;
        text-align: center;
        font-size: 3rem;
    }
    h2{
        font-size: 1.5rem;
        letter-spacing: 0.5rem;
        font-weight: 400;
    }
    .container{
        background-color: white;
        padding: 100px;
        margin-top: 80px;
    }
</style>
<body>
    <h1>Users Page</h1>
    <h2>Welcome {{ $name }}</h2>
    <div class="container">
        <h2 style="color: black">User details</h2>
        <p>Name: {{ $users['name'] }}</p>
        <p>Email: {{ $users['email'] }}</p>
        <p>Phone: {{ $users['phone'] }}</p>
    </div>
    <div class="container">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nesciunt ab quod perspiciatis
            soluta veniam deserunt, quibusdam error placeat adipisci? Quas quaerat rem nisi, molestias placeat
            debitis odit veniam esse ea exercitationem est vel praesentium alias expedita eligendi, dolor harum itaque
            distinctio ipsam? Qui odit nihil, incidunt consequatur omnis natus id voluptates veniam laboriosam ipsa
            quasi dicta vitae magni. Non atque odio tempore, consequuntur tenetur ratione qui, ad magni, accusamus ab
            illum animi velit iste numquam excepturi dolores commodi hic suscipit. Adipisci amet distinctio, iusto quas
            accusantium, dolore explicabo totam tempora, eum minima molestias eveniet velit sit eius iste iure.
        </p>
    </div>
</body>
</html>
