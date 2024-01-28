<h1>This is my Contact page</h1>
<a href="{{url('/')}}">Back to home</a>

<h1>Store your contact Person</h1> <br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Write your name"><br>
    <input type="email" name="email" placeholder="Write your email"><br>
    <input type="text" name="phone" placeholder="Write your phone number"><br>
    <button type="submit">Submit</button>
</form>
