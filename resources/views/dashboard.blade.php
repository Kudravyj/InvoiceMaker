<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Invoices') }}
        </h2>
    </x-slot>
    
    <section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div style="margin-left: 43%">
                            <a href="/Invoices/create">    
                                <img src="/svg/Plus.svg" alt="" style="height: 100px;">
                            </a>
                            <p >Add new Invoice</p>
                            </div>
                            <div style="">

                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="{{ url('/search') }}" class="form-inline my-2 my-lg-0 d-flex p-3" type="get">
                                    <input class="form-control mr-sm-2" type="search" name='query' placeholder="Find Invoice">
                                    <button class="btn btn-outline-light my-2 m-3">search</button>
                                </form>
                            </div>
                        </div>
                        @foreach($user->invoices as $invoice)
                        <div class="Profil1">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card m-1">
                                        <div class="row d-flex ml-5">
                                            <div class="col-2 p-3">
                                                <img src="/svg/document.svg" class="greatimage w-100" alt="img1">
                                            </div>
                                            <div class="col-6 d-flex">
                                                <div class="mt-3">
                                                    <div><p>Faktura numer:{{ $invoice->date() }}/{{ $invoice->id }}</p></div>
                                                </div>
                                            </div>  
                                            <div class="col-2 p-3">
                                                <a href="/p/{{ $invoice->id }}/install">
                                                    <img src="/svg/check.svg" class="greatimage" style="height: 40px" alt="img1">
                                                </a>
                                            </div>
                                            <div class="col-2 p-3">
                                                @method('delete')
                                                <a href="/p/{{ $invoice->id }}/delete">
                                                    <img src="/svg/cancel.svg" class="greatimage" style="height: 40px" alt="img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @if($user->invoices->count() == 0)
                        <div class="Profil1">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="p-4">
                                        <p style="text-align: center;">It seem's like you don't have any Invoice:(</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
    
</x-app-layout>