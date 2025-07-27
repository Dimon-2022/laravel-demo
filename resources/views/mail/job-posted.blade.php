<h2>
    {{$job->title}}
</h2>

<p>
    Congrats!
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your job listing</a>
</p>