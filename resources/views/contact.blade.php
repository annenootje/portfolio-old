@extends('layout')

@section('title', 'Contact')

@section('content')

    <section class="line small">
        <div class="container">
            <div class="part-12">
                <h2>Contact</h2>
                <br><br>
            </div>
            <div class="part-6">
                <div class="container">
                    <div class="part-3">
                        <p><b>Naam</b></p>
                        <p><b>E-mail</b></p>
                        <br>
                        <p><b>KVK</b></p>
                        <p><b>BTW</b></p>
                    </div>
                    <div class="part-9">
                        <p>{{$contactdetail[0]->naam}}</p>
                        <a href="mailto:{{$contactdetail[0]->email}}">{{$contactdetail[0]->email}}</a>
                        <br>
                        <br>
                        <p>{{$contactdetail[0]->kvk}}</p>
                        <p>{{$contactdetail[0]->btw}}</p>
                    </div>
                </div>
            </div>
            <div class="part-6 socials">
                @foreach($socials as $social)
                    <a class="social" target="_blank" href="{{$social->link}}">
                        <img src="{{$social->image}}" alt="Social media Anne Noteboom">
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="line small">
        <div class="container">
            <div class="part-12">
                
                <form action="send-message" method="POST">
                    @csrf
                    @if(!$sended)
                        <h3>Verstuur een bericht</h3>
                        <br>
                        <div class="container">
                            <div class="part-6">
                                <label for="name">Naam</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="part-6">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="part-12">
                                <label for="message">Bericht</label>
                                <textarea name="message" id="message"></textarea>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" required>
                                    <label for="checkbox">
                                        Ik ga akkoord met de&nbsp;<a href="privacy">privacyverklaring</a>
                                    </label>
                                    <div class="checked">
                                        <img src="/img/check.svg" alt="">
                                    </div>
                                </div>
                                <input type="submit" class="button">
                            </div>
                        </div>
                    @else
                        <div class="empty">
                            <img src="/img/mail.svg" alt="">
                            <br><br>
                            <h3 class="center">Bericht verzonden</h3>
                            <p>U krijgt zo snel mogelijk bericht terug.</p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </section>

@endsection