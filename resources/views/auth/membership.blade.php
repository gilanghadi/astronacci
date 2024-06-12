@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-bold">Pilih Level Membership anda</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('authencticateWithMembershipStore') }}" method="POST">
                            @csrf
                            <select name="membership" id="membership" class="form-select">
                                <option value="A" selected>Type A</option>
                                <option value="B">Type B</option>
                                <option value="C">Type C</option>
                            </select>

                            <div class="mt-3">
                                <h4>Keuntungan</h4>
                                <div id="membership-keuntungan">
                                    <ul>
                                        <li>Harga Terjangkau</li>
                                        <li>Mendapatkan Akses ke 3 Article berlangganan</li>
                                        <li>Mendapatkan Akses ke 3 Video berlangganan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-end w-100">
                                <button class="btn btn-primary" type="submit">Pilih Membership</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        const membershipKeuntungan = document.getElementById('membership-keuntungan');
        const membership = document.getElementById('membership');

        membership.addEventListener('change', (event) => {
            switch (event.target.value) {
                case 'A':
                    membershipKeuntungan.innerHTML = `<ul>
                                <li>Harga Terjangkau</li>
                                <li>Mendapatkan Akses ke 3 Article berlangganan</li>
                                <li>Mendapatkan Akses ke 3 Video berlangganan</li>
                            </ul>`
                    break;
                case 'B':
                    membershipKeuntungan.innerHTML = `<ul>
                                <li>Mendapatkan Akses ke 10 Article berlangganan</li>
                                <li>Mendapatkan Akses ke 10 Video berlangganan</li>
                            </ul>`
                    break;
                case 'C':
                    membershipKeuntungan.innerHTML = `<ul>
                                <li>Mendapatkan Akses ke Seluruh Article berlangganan</li>
                                <li>Mendapatkan Akses ke Seluruh Video berlangganan</li>
                            </ul>`
                    break;
            }
        });
    </script>
@endsection
