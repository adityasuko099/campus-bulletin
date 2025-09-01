# Campus Bulletin

Tugas 2 Pengembangan Web

Cara Menjalankan
1. Clone repository ini:
   ```bash
   git clone https://github.com/adityasuko099/campus-bulletin.git
   cd campus-bulletin
   ```

2. Install dependency Laravel:
   ```bash
   composer install
   npm install
   ```

3. Copy file `.env` dan generate key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

5. Buka di browser:
   - [http://127.0.0.1:8000/](http://127.0.0.1:8000/) → halaman welcome default Laravel
   - [http://127.0.0.1:8000/health](http://127.0.0.1:8000/health) → JSON health check
   - [http://127.0.0.1:8000/clubs](http://127.0.0.1:8000/clubs) → daftar klub

