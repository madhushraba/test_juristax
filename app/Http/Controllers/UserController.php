use App\Models\User;

public function index()
{
    $users = User::all();
    return view('pages.Users', ['users' => $users]);
}
