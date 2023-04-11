<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = [
            ['id' => '1',
            'name' => 'Indomie Goreng Spesial',
            'image' => 'indomiegoreng.jpg',
            'status' => 'R',
            'price' => 'Rp. 3000',
            'desc' => 'Produk terpopuler dari brand Indomie, Indomie Goreng pertama diluncurkan pada tahun 1982 dan telah merambah banyak negara termasuk Amerika Serikat, Australia, Inggris, Timur Tengah dan China. Jangan lewatkan berbagai pilihan rasa yang ditawarkan, Indomie Goreng memang yang paling komplit!'
            ],

            ['id' => '2',
            'name' => 'Indomie Rasa Kari Ayam',
            'image' => 'indomiekari.jpg',
            'status' => 'R',
            'price' => 'Rp. 5000',
            'desc' => 'Indomie kuah merupakan salah satu varian yang rasanya khusus diambil dari bumbu-bumbu makanan khas Indonesia. Perpaduan antara mi, kuah dan bumbu otentik makanan khas Indonesia menjadikan Indomie kuah makanan yang sangat spesial apalagi bila disajikan dikala cuaca dingin atau hujan.'
            ],

            ['id' => '3',
            'name' => 'Indomie Mi Kocok Bandung',
            'image' => 'indomiemiekocok.jpg',
            'status' => 'SSR',
            'price' => 'Rp. 8900',
            'desc' => 'Indomie selalu berhasil memikat penggemar mi dengan cita rasa khas. Kali ini, mereka membuat varian rasa mi kocok, khas Kota Bandung. Bukan rasanya saja yang mirip, tapi tekstur minya juga dibuat serupa. Apalagi Indomie melengkapi rasa mi kocok Bandung dengan topping bakso, membuatnya tambah nikmat dan lezat'
            ],

            ['id' => '4',
            'name' => 'Indomie Rasa Baso Sapi',
            'image' => 'indomiebaso.png',
            'status' => 'SR',
            'price' => 'Rp. 4000',
            'desc' => 'Indomie kuah merupakan salah satu varian yang rasanya khusus diambil dari bumbu-bumbu makanan khas Indonesia. Perpaduan antara mi, kuah dan bumbu otentik makanan khas Indonesia menjadikan Indomie kuah makanan yang sangat spesial apalagi bila disajikan dikala cuaca dingin atau hujan.'
            ],

            ['id' => '5',
            'name' => 'Indomie Mie Goreng Ayam Pop',
            'image' => 'indomieayampop.webp',
            'status' => 'SR',
            'price' => 'Rp. 6900',
            'desc' => 'Rekomendasi mie kelima yang viral untukmu Indomie Mie Goreng Ayam Pop. Hampir sama dengan rendang, ayam pop ini juga banyak membuat pecinta Indomie penasaran dengan rasanya. Sehingga sekalinya keluar langsung laris dan berhasil menggoyang lidah para pecinta mienya. '
            ],

            ['id' => '6',
            'name' => 'Indomie Seblak Hot Jeletot',
            'image' => 'indomieseblak.jpg',
            'status' => 'SSR',
            'price' => 'Rp. 7800',
            'desc' => 'Orang Indonesia memang suka banget dengan makanan pedas sehingga hadirnya Indomie Seblak Hot Jeletot Mie Instan menjadi menu favorit mie bagi penyuka makanan pedas. Mie ini pedasnya pas, gurihnya dapet dan enak banget untuk dimakan saat hujan sebagai seblak instan tanpa perlu membuatnya ribet. '
            ]
        ];
        return view('produk', compact('produk'));
    }
        public function detail($id){
            $produk = [
                ['id' => '1',
                'name' => 'Indomie Goreng Spesial',
                'image' => 'indomiegoreng.jpg',
                'status' => 'R',
                'price' => 'Rp. 3000',
                'desc' => 'Produk terpopuler dari brand Indomie, Indomie Goreng pertama diluncurkan pada tahun 1982 dan telah merambah banyak negara termasuk Amerika Serikat, Australia, Inggris, Timur Tengah dan China. Jangan lewatkan berbagai pilihan rasa yang ditawarkan, Indomie Goreng memang yang paling komplit!'
                ],

                ['id' => '2',
                'name' => 'Indomie Rasa Kari Ayam',
                'image' => 'indomiekari.jpg',
                'status' => 'R',
                'price' => 'Rp. 5000',
                'desc' => 'Indomie kuah merupakan salah satu varian yang rasanya khusus diambil dari bumbu-bumbu makanan khas Indonesia. Perpaduan antara mi, kuah dan bumbu otentik makanan khas Indonesia menjadikan Indomie kuah makanan yang sangat spesial apalagi bila disajikan dikala cuaca dingin atau hujan.'
                ],

                ['id' => '3',
                'name' => 'Indomie Mi Kocok Bandung',
                'image' => 'indomiemiekocok.jpg',
                'status' => 'SSR',
                'price' => 'Rp. 8900',
                'desc' => 'Indomie selalu berhasil memikat penggemar mi dengan cita rasa khas. Kali ini, mereka membuat varian rasa mi kocok, khas Kota Bandung. Bukan rasanya saja yang mirip, tapi tekstur minya juga dibuat serupa. Apalagi Indomie melengkapi rasa mi kocok Bandung dengan topping bakso, membuatnya tambah nikmat dan lezat'
                ],

                ['id' => '4',
                'name' => 'Indomie Rasa Baso Sapi',
                'image' => 'indomiebaso.png',
                'status' => 'SR',
                'price' => 'Rp. 4000',
                'desc' => 'Indomie kuah merupakan salah satu varian yang rasanya khusus diambil dari bumbu-bumbu makanan khas Indonesia. Perpaduan antara mi, kuah dan bumbu otentik makanan khas Indonesia menjadikan Indomie kuah makanan yang sangat spesial apalagi bila disajikan dikala cuaca dingin atau hujan.'
                ],

                ['id' => '5',
                'name' => 'Indomie Mie Goreng Ayam Pop',
                'image' => 'indomieayampop.webp',
                'status' => 'SR',
                'price' => 'Rp. 6900',
                'desc' => 'Rekomendasi mie kelima yang viral untukmu Indomie Mie Goreng Ayam Pop. Hampir sama dengan rendang, ayam pop ini juga banyak membuat pecinta Indomie penasaran dengan rasanya. Sehingga sekalinya keluar langsung laris dan berhasil menggoyang lidah para pecinta mienya. '
                ],

                ['id' => '6',
                'name' => 'Indomie Seblak Hot Jeletot',
                'image' => 'indomieseblak.jpg',
                'status' => 'SSR',
                'price' => 'Rp. 7800',
                'desc' => 'Orang Indonesia memang suka banget dengan makanan pedas sehingga hadirnya Indomie Seblak Hot Jeletot Mie Instan menjadi menu favorit mie bagi penyuka makanan pedas. Mie ini pedasnya pas, gurihnya dapet dan enak banget untuk dimakan saat hujan sebagai seblak instan tanpa perlu membuatnya ribet. '
                ]
            ];
            foreach ($produk as $item) {
                if($item['id'] == $id)
                    return view('detail', compact('item'));
            }
    }
}
