<div>
    <h1>This header component</h1>
    <h3>Hello {{ $name }}</h3>
    <h3>Fruits:</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>
