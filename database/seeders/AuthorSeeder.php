namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Pramoedya Ananta Toer', 'email' => 'pram@example.com', 'bio' => 'Sastrawan terkemuka Indonesia.'],
            ['name' => 'Andrea Hirata', 'email' => 'andrea@example.com', 'bio' => 'Penulis novel best seller Laskar Pelangi.'],
            ['name' => 'Tere Liye', 'email' => 'tereliye@example.com', 'bio' => 'Penulis produktif novel fiksi populer.'],
            ['name' => 'Dee Lestari', 'email' => 'dee@example.com', 'bio' => 'Penulis seri Supernova.'],
            ['name' => 'Ahmad Fuadi', 'email' => 'fuadi@example.com', 'bio' => 'Penulis trilogi Negeri 5 Menara.'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
