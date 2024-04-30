<x-layout title="Nova série">
    <form action="/series/salvar" method="POST">
        @csrf
        <label class="form-label" for="nome">Nome: </label>
        <input class="form-control" type="text" id="nome" name="nome">
        <button type="submit" class="btn btn-success mt-3 algin-items-end">Salvar</button>
    </form>
</x-layout>   