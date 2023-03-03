<div>

    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

    @foreach ($contacts as $c)

        <tr>
            <th scope="row">{{ $c->id }}</th>
            <td>{{ $c->name }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->phone }}</td>
            <td><a href="{{route('contacts.edit',['contact'=>$c->id])}}" class="btn btn-sm btn-warning">Editar</a></td>
            <td>@livewire('contact.contact-delete', ['id' => $c->id], key($c->id))</td>
          </tr>

    @endforeach

        </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $contacts->links('pagination::bootstrap-4') }}
        </div>

</div>
