<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Masjid</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->

    <body class="bg-blue-500 ">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-white lg:sticky lg:top-0 z-50 shadow-md">
            <a class="text-3xl font-bold leading-none text-blue-600" href="#">Al-Kautsar</a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-blue-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Home</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-blue-600 hover:text-blue-800" href="#">About Us</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Services</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>

                <li><a class="text-sm text-blue-600 hover:text-gray-500" href="#">Contact</a></li>
            </ul>

        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">

                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <a class="text-3xl font-bold text-blue-600 leading-none" href="#">Al-Kautsar</a>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
                        </li>

                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>Copyright © 2024</span>
                    </p>
                </div>
            </nav>
        </div>
    </body>

    <!-- Hero Section -->
    <section id="home" class="relative bg-cover bg-center h-screen flex items-center justify-left">
        <div class="absolute inset-0">
            <div
                class="h-full w-full bg-cover bg-center opacity-50 blur"
                style="background-image: url('{{ asset('assets/images/masjid.jpeg') }}');">
            </div>
        </div>

        <!-- Konten -->
        <div class="relative z-10 text-black p-6">
            @foreach ($Hero as $hero)
            <h1 class="text-4xl font-bold mb-4">{{ $hero->judul }}</h1>
            <p class="mt-4 text-lg">{{ $hero->isi }}</p>
            @endforeach
            <a href="#donasi" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-white-700">Donasi Sekarang</a>
        </div>

    </section>

    <!-- Slider Donasi -->
    <section id="donasi" class="py-16 bg-white"
        style="background-image: url('assets/images/ramadhan-removebg-preview.png'); 
                background-size: contain;
                background-repeat: no-repeat; 
                background-position: right ;">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Program Donasi</h2>

            <div class="flex overflow-x-auto space-x-4 p-8">
                @foreach ($donasis as $donasi)
                <div class="bg-blue-400 p-4 rounded-lg shadow-xl w-64 flex-shrink-0 ">
                    <div><img class="w-full h-32 object-cover rounded-lg" src="{{$donasi->path}}" alt=""></div>
                    <h3 class="font-bold text-xl mb-2">{{ $donasi->judul }}</h3>
                    <p class="text-sm mb-4">{{ $donasi->isi }}</p>
                    <button class="donateButton px-4 py-2 bg-blue-600 text-white rounded"
                        data-id="{{ $donasi->id }}"
                        data-judul="{{ $donasi->judul }}"
                        data-isi="{{ $donasi->isi }}"
                        data-path="{{ $donasi->path }}">

                        Donasi
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Informasi Keislaman -->
    <section id="informasi" class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Informasi Keislaman</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($contents as $content)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">{{ $content->judul }}</h3>
                    <p>{{ $content->isi }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tentang Masjid -->
    <section id="tentang" class="py-16 bg-white">
        @foreach ($tentangs as $tentang)
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">{{ $tentang->judul }}</h2>
            <p class="text-lg leading-relaxed">{{ $tentang->isi }}</p>
        </div>
        @endforeach
    </section>

    <!-- Pop-Up Modal -->
    <div id="donationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-20">
        <div class="bg-white w-96 rounded-lg shadow-lg p-6 fade-in">
            <!-- Close Button -->
            <button id="closeButton" class="text-gray-500 hover:text-gray-800 float-right">&times;</button>

            <!-- Content -->

            <div class="text-center slide-down mt-30">
                <img src="{{ $donasi->path }}" alt="Donation" class="w-32 h-full object-cover mx-auto mb-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Terima kasih karena telah mendonasikan ke {{ $donasi->judul }}</h2>
                <p class="text-gray-600 mb-4">{{ $donasi->isi }}</p>

                <!-- Dropdown Metode Pembayaran -->
                <select id="paymentMethod" class="w-full border-blue-300 rounded-lg p-2 mb-4">
                    <option value="">Pilih Metode</option>
                    <option value="bank">Transfer ATM</option>
                    @foreach ($donasi->emoney as $emoney)
                    <option value="{{ $emoney['key'] }}">{{ $emoney['nama'] }}</option>
                    @endforeach
                    @if ($donasi->qris_path)
                    <option value="qris">QRIS</option>
                    @endif
                </select>

                <!-- Dropdown Bank (Hanya untuk Transfer ATM) -->
                <div id="bankDropdown" class="hidden fade-in">
                    <select id="bankListNames" class="w-full border-gray-300 rounded-lg p-2 mb-4">
                        <option value="">Pilih Bank</option>
                        @foreach ($donasi->bank as $bank)
                        <option value="{{ $bank['key'] }}">{{ $bank['nama'] }}</option>
                        @endforeach
                    </select>
                </div>

                <select id="bankListAccounts" class="hidden">
                    @if($donasi->no_rek_1)
                    <option value="ATM1" data-rekening="{{ $donasi->no_rek_1 }}">{{ $donasi->no_rek_1 }}</option>
                    @endif
                    @if($donasi->no_rek_2)
                    <option value="ATM2" data-rekening="{{ $donasi->no_rek_2 }}">{{ $donasi->no_rek_2 }}</option>
                    @endif
                    @if($donasi->no_rek_3)
                    <option value="ATM3" data-rekening="{{ $donasi->no_rek_3 }}">{{ $donasi->no_rek_3 }}</option>
                    @endif
                </select>

                <!-- Payment Info -->
                <div id="paymentInfo" class="text-left hidden fade-in">
                    <p class="text-sm text-gray-600">Nomor Rekening/VA:</p>
                    <div class="flex items-center mt-1">
                        <span id="paymentDetails" class="font-mono text-gray-800"></span>
                        <button type="button" class="ml-2 text-blue-600 hover:text-blue-800" onclick="copyContent()">Copy</button>
                    </div>
                </div>

                <!-- QRIS -->
                <div id="qrisInfo" class="hidden fade-in">
                    <p class="text-sm text-gray-600 mb-2">Scan QRIS:</p>
                    <img src="{{ $donasi->qris_path }}" alt="QRIS" class="w-32 h-32 mx-auto">
                </div>

            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-8">
        @foreach($kontaks as $kontak)
        <div class="container mx-auto text-center">
            <p>&copy;{{ $kontak->tahun }} Masjid Al-Kautsar. Semua Hak Dilindungi.</p>
            <p>Kontak: {{ $kontak->email }} | {{ $kontak->no_telpon }}</p>
        </div>
        @endforeach
    </footer>



    <script>
        var donasi_id = null

        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const bankDropdown = document.getElementById('bankDropdown');
            const bankListNames = document.getElementById('bankListNames');
            const bankListAccounts = document.getElementById('bankListAccounts');
            const donateButtons = document.querySelectorAll('.donateButton');
            const donationModal = document.getElementById('donationModal');
            const closeButton = document.getElementById('closeButton');
            const paymentMethod = document.getElementById('paymentMethod');
            const paymentInfo = document.getElementById('paymentInfo');
            const qrisInfo = document.getElementById('qrisInfo');
            const paymentDetails = document.getElementById('paymentDetails');


            let currentDonasi = null;

            // Buka modal saat tombol "Donasi" ditekan
            donateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    donasi_id = this.dataset.id
                    currentDonasi = {

                        judul: this.dataset.judul,
                        isi: this.dataset.isi,
                        path: this.dataset.path
                    };

                    // Isi konten modal dengan data dari tombol
                    document.querySelector('#donationModal h2').innerText = `Terima kasih karena telah mendonasikan ke ${currentDonasi.judul}`;
                    document.querySelector('#donationModal p').innerText = currentDonasi.isi;
                    document.querySelector('#donationModal img').src = currentDonasi.path;

                    // Tampilkan modal
                    donationModal.classList.remove('hidden');
                });
            });

            // Tutup modal
            closeButton.addEventListener('click', () => {
                donationModal.classList.add('hidden');
            });

            // Update Payment Info


            function getPaymentMethod() {
                var xhr = new XMLHttpRequest();
                var url = "{{route('select-payment-method')}}";

                var data = JSON.stringify({
                    id: donasi_id,
                    
                });

                xhr.open("GET", url, true);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.onload = function() {
                    console.log(this.responseText);
                    alert(this.responseText);
                };

                xhr.send(data);
                return false;
            }

            function resetPaymentSections() {
                bankDropdown.classList.add('hidden');
                paymentInfo.classList.add('hidden');
                qrisInfo.classList.add('hidden');
                paymentDetails.textContent = '';
            }

            paymentMethod.addEventListener('change', (e) => {
                const method = e.target.value;
                alert(donasi_id)
                resetPaymentSections();

                getPaymentMethod();
                // if (method === 'bank') {
                //     bankDropdown.classList.remove('hidden');
                // } else if (method.startsWith('Emoney')) {
                //     paymentInfo.classList.remove('hidden');
                //     const emoneyData = {
                //         Emoney1: '{{ $donasi->nomer_va_1 }}',
                //         Emoney2: '{{ $donasi->nomer_va_2 }}',
                //         Emoney3: '{{ $donasi->nomer_va_3 }}'
                //     };
                //     paymentDetails.textContent = emoneyData[method] || 'Data tidak tersedia';
                // } else if (method === 'qris') {
                //     qrisInfo.classList.remove('hidden');
                //     const qrisPath = '{{ $donasi->qris_path }}';
                //     document.querySelector('#qrisInfo img').src = qrisPath;
                // }
            });

            // Event listener untuk dropdown nama ATM
            bankListNames.addEventListener('change', function() {
                // Ambil nilai yang dipilih (ATM1, ATM2, atau ATM3)
                const selectedValue = bankListNames.value;

                // Cari opsi yang sesuai di bankListAccounts
                const selectedAccountOption = Array.from(bankListAccounts.options).find(option => option.value === selectedValue);

                if (selectedAccountOption) {
                    // Ambil nomor rekening dari atribut data-rekening
                    const rekeningNumber = selectedAccountOption.getAttribute('data-rekening');

                    // Tampilkan nomor rekening di paymentDetails
                    paymentDetails.textContent = rekeningNumber;

                    // Tampilkan elemen paymentInfo
                    paymentInfo.classList.remove('hidden');
                } else {
                    // Jika tidak ada yang dipilih, sembunyikan paymentInfo
                    paymentInfo.classList.add('hidden');
                    paymentDetails.textContent = '';
                }
            });

            // Fungsi untuk menyalin konten
            window.copyContent = function() {
                const textToCopy = paymentDetails.textContent;
                if (textToCopy) {
                    navigator.clipboard.writeText(textToCopy)
                        .then(() => alert('Nomor rekening berhasil disalin!'))
                        .catch(err => console.error('Gagal menyalin teks:', err));
                }
            };
        });
    </script>


</body>

</html>