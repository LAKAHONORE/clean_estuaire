@extends('dashboard')

@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Page Pressing</h5>

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
                <form class="row g-3" action="{{ route('pressing.update', $pressing->id) }}" method="POST"
                    autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Texte Entête</label>
                        <textarea class="form-control" rows="5" name="text">
                          {{ ucfirst($pressing->text) }}
                        </textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Description</label>
                        <textarea class="form-control" rows="10" name="description">
                          {{ ucfirst($pressing->description) }}
                        </textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    @endsection
