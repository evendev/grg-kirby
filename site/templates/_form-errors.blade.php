@if (!!count($form->errors()))
<div class="alert alert-danger">
    @foreach ($form->errors() as $error)
        <div>{{ $error }}</div>
    @endforeach
</div>
@endif