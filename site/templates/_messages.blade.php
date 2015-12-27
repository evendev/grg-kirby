@if (flash('messages.success'))
<div class="container">
    <div class="alert alert-success">
        <strong>Success!</strong>
        @foreach (flash('messages.success') as $message)
            <div>{{ $message }}</div>
        @endforeach
    </div>
</div>
@endif

@if (flash('messages.error'))
<div class="container">
    <div class="alert alert-danger">
        <strong>Danger!</strong>
        @foreach (flash('messages.error') as $message)
            <div>{{ $message }}</div>
        @endforeach
    </div>
</div>
@endif