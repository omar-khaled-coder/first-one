<x-layout>
    <x-slot:heading>Home Page</x-slot:heading>
    <!-- Page content here -->
     {{ $greeting}} {{$name}} form home page <br>

---------------

   {{--
     @foreach($jobs as $job)
      <li><strong>{{$job['title']}} :</strong> pays {{$job['salary']}} per year.</li>
    @endforeach
    --}}

</x-layout>
