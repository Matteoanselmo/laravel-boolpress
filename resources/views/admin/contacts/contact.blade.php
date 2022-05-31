@extends('layouts.main');

@section('main-content')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Scrivici</h3>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <form action="{{ route('contacts.sender') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="mail_message" class="form-label">Inserisci messaggio</label>
                        <textarea type="text" value="" class="form-control" name="mail_message" id="mail_message" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="userMail" class="form-label">Inserisci mail</label>
                        <input type="text" value="" class="form-control" name="userMail" id="userMail" >
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</main>
</html>
@endsection
