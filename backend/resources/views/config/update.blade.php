@extends('dashboard')

@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Paramètres de configuration</h5>

                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- Vertical Form -->
                <form class="row g-3" action="{{ route('config.update', $config->id) }}" method="POST"
                    autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Description à propos de nous</label>
                        <textarea class="form-control" rows="10" name="description">
                          {{ ucfirst($config->description) }}
                        </textarea>
                    </div>



                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Numéro de téléphone 1</label>
                        <input type="tel" name="tel_1" class="form-control" value="{{$config->tel_1}}">
                    </div>


                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Numéro de téléphone 2</label>
                        <input type="tel" name="tel_2" class="form-control" value="{{$config->tel_2}}">
                    </div>


                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Adresse e-mail</label>
                        <input type="tel" name="email" class="form-control" value="{{$config->email}}">
                    </div>




                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Lien de la boutique sur estuaire achat</label>
                        <input type="text" name="boutique_link" class="form-control" value="{{$config->boutique_link}}">
                    </div>



                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    @endsection
