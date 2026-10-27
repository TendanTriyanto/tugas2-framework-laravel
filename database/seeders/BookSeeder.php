namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Bumi Manusia', 'description' => 'Kisah perjuangan Minke di era kolonial.', 'publication_year' => 1980],
            ['title' => 'Laskar Pelangi', 'description' => 'Kisah persahabatan 10 anak Belitung.', 'publication_year' => 2005],
            ['title' => 'Hujan', 'description' => 'Novel fiksi ilmiah tentang persahabatan.', 'publication_year' => 2016],
            ['title' => 'Supernova: Ksatria, Puteri, & Bintang Jatuh', 'description' => 'Novel fiksi dan sains.', 'publication_year' => 2001],
          ['title' => 'Negeri 5 Menara', 'description' => 'Kisah kehidupan santri di pesantren.', 'publication_year' => 2009],

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
