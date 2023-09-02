@extends('layouts.app')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="card card-body shadow-lg border-0">
                <h2 class="card-title text-primary">Temporary phone numbers of all countries</h2>
                <div class="content-area my-4">
                    <div class="row g-4">
                        @foreach ($countries as $country)
                            <div class="col-md-4">
                                <a href="{{ route('country.show', ['country' => $country->name]) }}"
                                    class="text-decoration-none">
                                    <div class="card border-0 border-top border-primary border-5 bg-light text-center">
                                        <div class="flag-area pt-4 mb-3">
                                            <img src="{{ $country->flag }}" srcset="{{ $country->flag }} 2x" width="100"
                                                alt="Ukraine">
                                        </div>
                                        <div class="country-name text-center">
                                            <h4>{{ $country->name }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mt-4">SMS24 is the only phone number generator with SMS that allows you to generate
                                fake phone
                                numbers for verifications of hundreds of countries!
                                For free! <br>
                                With just a couple of clicks, you can own a temporary phone number online of any country
                                to receive free SMS! <br>
                                In the USA and want to receive free SMS online on a UK number? SMS24 has got you with
                                just a couple of clicks!</p>
                            <h4 class="text-primary">
                                How To Get A Free US Phone Number For Verifications
                            </h4>
                            <p>Are you a US citizen trying to register on an application or website which requires your
                                phone number? <br>
                                Not anymore do you need to fill in your personal number and risk security threats! <br>
                                Use our free USA temporary phone numbers and receive free SMS online instantly! <br>
                                SMS24 provides hundreds of US fake phone numbers for verification that you can receive
                                free SMS instantly! <br>
                                Simply choose the United States from the Countries page, choose any number from the
                                hundreds of temporary numbers displayed, and receive free texts online!</p>
                            <h4 class="text-primary">
                                Free Virtual Numbers For Every Country!
                            </h4>
                            <p>
                                The USA is a popular country for internet users and you may be able to find fake phone
                                number generators online for US verifications.
                                <br>
                                However, what if you reside somewhere in Europe, India, or in the North in Canada?
                                <br>
                                Don’t worry, SMS24 has got you!
                                <br>
                                SMS24 offers local fake phone numbers for receiving sms online for hundreds of
                                countries!
                                <br>
                                For each country, we offer hundreds of phone numbers you can choose from!
                                <br>
                                This means there are always tons of numbers available for each country that are never
                                crowded or cause any delays in receiving free SMS online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
