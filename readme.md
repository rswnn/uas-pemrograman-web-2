https://covid06tpmlm010.000webhostapp.com/

Tugas Uas Pemrograman Web 2 Kelompok 7
Anggota :
- Riswan Ardiansah 17101101402
- Purwantoro 171011401433
- Riski Mardianto 171011401541
- Ricky Berkat Sentosa Gulo 2015141926
- Novalda


Stack Engine :
- Php
- Mysql
- Bootstrap
- 000webhost


DATA RELAWAN COVID 19

1. Tampilan Form Login

<img width="700" alt="Screen Shot 2020-07-18 at 15 20 17" src="https://user-images.githubusercontent.com/39334864/87848391-3f796e00-c90a-11ea-8acf-b1413d097923.png">

Pada page login kami menggunakan php dan mysql untuk authentikasi. Setelah mengisikan form username dan password. Kami membuat sebuah form action
untuk menvalidasi antara form yg di input dengan data user yg sudah tersedia di mysql dengan syntax

![code](https://user-images.githubusercontent.com/39334864/87848714-ff67ba80-c90c-11ea-9d6a-550a35b3ffd5.png)

ketika users ditemukan, lalu akan mensave session dan redirect ke page dashboard, namun ketika gagal akan kembali ke page tersebut

2. Tampilan Dashboard / Home 

<img width="800" alt="Screen Shot 2020-07-18 at 15 47 58" src="https://user-images.githubusercontent.com/39334864/87848856-1824a000-c90e-11ea-8443-e7e32d70e1d3.png">

Pada Page ini, akan menampilkan data relawan yg sudah ada didalam web. untuk menampilkan data yg tersebut. kami menggunakan syntax

![code](https://user-images.githubusercontent.com/39334864/87848918-ca5c6780-c90e-11ea-95b1-76c76c81e972.png)

syntax tersebut akan mengambil semua row / data relawan yg sudah ada di table relawan


3. Tampilan Tambah Relawan

<img width="800" alt="Screen Shot 2020-07-18 at 15 57 56" src="https://user-images.githubusercontent.com/39334864/87849001-78681180-c90f-11ea-81fd-2ed9be6b56be.png">

Pada Page ini, akan menampilkan form untuk membuat data relawan baru. ketika semua form telah diisi dan melakukan submit, isi pada
form tersebut akan menyimpan di database dengan syntax

![code](https://user-images.githubusercontent.com/39334864/87849097-0cd27400-c910-11ea-81d0-a104d0bc33cc.png)

pertama akan mengambil setiap variable dan ditampung kedalam variable, lalu insert data pada table relawan

3. Tampilan Edit Relawan

<img width="800" alt="Screen Shot 2020-07-18 at 16 06 08" src="https://user-images.githubusercontent.com/39334864/87849167-9f731300-c910-11ea-8351-291a9916d5a2.png">


Pada Page ini, akan menampilkan form untuk edit data relawan, pertama kami akan mengambil data tersebut berdasarkan id yg dikirim didalam parameter
dan dicari menggunakan syntax & query

![code](https://user-images.githubusercontent.com/39334864/87849227-127c8980-c911-11ea-85cb-fdc4fb308626.png)

setiap data / row yg didapatkan ditampung ke dalam value tag input, setelah megupdate data dan melakukan submit, data tesebut akan mengubah data sebelumnya
dengan syntax 

![code](https://user-images.githubusercontent.com/39334864/87849278-73a45d00-c911-11ea-8945-5a7c7af58889.png)

4. Hapus data relawan

pada hapus data relawan kami mengambil data tersebut berdasarkan id yg dikirim didalam parameter, lalu dihapus menggunakan syntax

![code](https://user-images.githubusercontent.com/39334864/87849393-7f445380-c912-11ea-9e16-906f4e348f39.png)

ketika Berhasil akan meredirect ke dashboard namun ketika gagal akan menampilkan pesan yg dikirim





