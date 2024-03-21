<x-guest-layout>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif                
            </div>
            <form action="{{route ('logout')}}" method="post">
                @csrf 
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>    
</div>
</x-guest-layout>

    