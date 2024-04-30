<x-layout title="Series">
    <button type="button" class="btn btn-outline-primary mb-3"><a href="/series/criar">Adicionar uma nova série</a></button>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->name }}</li>
        @endforeach
    </ul>

</x-layout>

        
