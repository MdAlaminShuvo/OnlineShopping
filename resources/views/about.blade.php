<h1>This is my about page</h1>

<a href="{{url('/')}}">Back to home</a>


<form action="{{route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Write your name"><br>
    <input type="email" name="email" placeholder="Write your email"><br>
    <button type="submit">Submit</button>
</form>
