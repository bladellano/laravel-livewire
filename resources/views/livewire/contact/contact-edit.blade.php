<div>

    <h2>Editar Contato</h2>

    <div>
        <form wire:submit.prevent="update" method="post">

            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div>
                <label>Nome</label>

                <input type="text" class="form-control" wire:model="name">

                <div class="invalid-feedback d-block">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <label>Email</label>

                <input type="email" class="form-control" wire:model="email">

                <div class="invalid-feedback d-block">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <label>Telefone</label>

                <input type="text" class="form-control" wire:model="phone">

                <div class="invalid-feedback d-block">
                    @error('phone')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-success mt-4">
                Editar Contato
            </button>
        </form>

    </div>

</div>
