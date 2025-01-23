namespace App\Controllers;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();  // Ambil semua data barang

        return view('barang_view', $data);
    }
}