    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 
            
    @if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
    @endif 

     @if ($messages = Session::get('errors'))
    <div class="alert alert-danger">
        @foreach($messages as $message)
        <p>{{ $message }}</p>
        @endforeach
    </div>
    @endif 