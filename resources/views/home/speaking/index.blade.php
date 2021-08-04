@extends("layouts.speaking")

@section("content")

    <div class="container d-flex justify-content-center flex-column align-items-center p-4">
        <div class="col-6 bg-white">
            <form action="{{ route("speaking.topics") }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Topic's name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="part" class="form-label">Speaking Parts</label>
                    <select type="text" name="part" class="form-control" id="part">
                        <option value="1" @if($part == 1) selected @endif>Part-1</option>
                        <option value="2" @if($part == 2) selected @endif>Part-2</option>
                        <option value="3" @if($part == 3) selected @endif>Part-3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100 mb-4">Submit</button>
            </form>
        </div>

        <div class="mt-3 w-100 d-flex justify-content-end ">
            <form action="{{ route("speaking.topics") }}" method="GET"
                  class="bg-light p-2">
                <select name="filter" class="form-control" id="filter">
                    <option value="1" @if($part == 1) selected @endif>Part-1</option>
                    <option value="2" @if($part == 2) selected @endif>Part-2</option>
                    <option value="3" @if($part == 3) selected @endif>Part-3</option>
                    <option value="-1" @if($part == -1) selected @endif>All</option>
                </select>
            </form>
        </div>

        <table class="table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Part</th>
            </tr>
            </thead>
            <tbody id="part-1" class="@if($part != 1) d-none @endif">
            @foreach($topics->where("part",1) as $topic)
                <tr>
                    <th scope="row">{{ $topic['id'] }}</th>
                    <td>{{ $topic["name"] }}</td>
                    <td>{{ $topic["part"] }}</td>
                    <td class="col-1">
                        <form action="{{ route("speaking.questions", $topic['id']) }}" method="GET">
                            <button class="btn btn-primary">Next</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tbody id="part-2" class="@if($part != 2) d-none @endif">
            @foreach($topics->where("part", 2) as $topic)
                <tr>
                    <th scope="row">{{ $topic['id'] }}</th>
                    <td>{{ $topic["name"] }}</td>
                    <td>{{ $topic["part"] }}</td>
                    <td class="col-1">
                        <form action="{{ route("speaking.questions", $topic['id']) }}" method="GET">
                            <button class="btn btn-primary">Next</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tbody id="part-3" class="@if($part != 3) d-none @endif">
            @foreach($topics->where("part", 3) as $topic)
                <tr>
                    <th scope="row">{{ $topic['id'] }}</th>
                    <td>{{ $topic["name"] }}</td>
                    <td>{{ $topic["part"] }}</td>
                    <td class="col-1">
                        <form action="{{ route("speaking.questions", $topic['id']) }}" method="GET">
                            <button class="btn btn-primary">Next</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tbody id="part-all" class="@if($part != -1) d-none @endif">
            @foreach($topics->where("part") as $topic)
                <tr>
                    <th scope="row">{{ $topic['id'] }}</th>
                    <td>{{ $topic["name"] }}</td>
                    <td>{{ $topic["part"] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
