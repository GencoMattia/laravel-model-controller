@extends("layout.app")

@section("page-title", "Movies Home")

@section("main-content")
    <main>
        <div class="container">
            <section class="row">
                @foreach ( $movies as $movie)
                <div class="card p-0 me-3 mb-4" style="width: 18rem;">
                    <div class="card-header">
                        {{ $movie->title }}
                    </div>
                    <img src="{{ $movie->cover_image }}" class="card-img-top" alt="{{ $movie->title }} image">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Original Title: {{ $movie->original_title }}
                        </li>
                        <li class="list-group-item">
                            Nationality: {{ $movie->nationality }}
                        </li>
                        <li class="list-group-item">
                            Release: {{ $movie->date }}
                        </li>
                        <li class="list-group-item">
                            Vote: {{ $movie->vote }}
                        </li>
                    </ul>
                </div>
                @endforeach
            </section>
        </div>
    </main>
@endsection
