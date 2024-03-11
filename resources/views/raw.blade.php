<html>
<body>
@php

    class Person {
        public string $name;
        public string $address;
}

    $person = new Person();
    $person->name = "Jabal";
    $person->address = "Nagan Raya";
@endphp

<p>{{$person->name}}</p>
<p>{{$person->address}}</p>

</body>
</html>
