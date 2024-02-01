<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primakara Developer | {{ $title }}</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- END STYLE CSS --}}
</head>
<body>
    
    @include('components.navbar')
    @include('components.topbar')

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, excepturi reprehenderit suscipit est fugit eum asperiores dignissimos eius vitae. Debitis dicta quas fuga eius autem fugiat totam, rem ducimus delectus numquam! Ex asperiores debitis enim quis esse laboriosam mollitia unde vel animi, dolorum nemo repellat voluptate alias, nisi dolorem repellendus at, accusantium tempora id quidem nam doloribus delectus? Unde delectus earum laborum facere beatae. Similique ipsum enim perspiciatis ipsam, debitis aperiam? Accusantium ut quam voluptatem non neque accusamus voluptate veniam deserunt doloribus vitae voluptatibus aut facere, unde id. Officiis placeat amet sed facilis minus laboriosam dolore repudiandae iusto porro harum et, hic, deserunt ea doloremque ipsum deleniti commodi beatae velit, quo obcaecati facere iure delectus. Officiis numquam incidunt ex error suscipit expedita accusamus exercitationem! Veritatis repellat tempore ratione, laudantium eos deserunt fugiat voluptatem optio nobis ut sapiente odio sint eum sunt. Beatae earum dolore doloremque necessitatibus deleniti et facilis nulla aspernatur. Reprehenderit ad ipsum molestias accusantium officiis quis aliquid voluptates voluptatum! Quia necessitatibus perspiciatis beatae quaerat magni reiciendis maiores consectetur, provident ullam fuga libero, similique iste modi natus fugit ipsum voluptas molestias molestiae sed totam. Sunt porro sit illo laudantium perspiciatis! Architecto error dicta quam perspiciatis non itaque voluptas minima!</p>

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- END SCRIPT JS --}}
</body>
</html>