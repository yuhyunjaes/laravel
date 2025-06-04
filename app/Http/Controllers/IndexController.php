<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register(Request $request)
    {
        // 유효성 검사
        $data = $request->validate([
            'user_name'     => ['required','string','max:255'],
            'email'         => ['required','email','unique:users,email'],
            'password' => ['required','min:6'],
        ]);

        // 유저 생성
        $user = User::create([
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // 비밀번호 암호화
        ]);

        Auth::login($user);

        // 회원가입 완료 후 리디렉션
        return redirect()->route('index')->with('success', '회원가입 완료');
    }

    public function login(Request $request) {
        $credentials = $request -> only(['email', 'password']);
        if(Auth::attempt($credentials)) {
            return redirect() -> route('index');
        }
        return back()
            -> withInput()
            -> with('danger', '이메일 또는 비밀번호를 확인해 주세요.');
    }

    public function logout() {
        Auth::logout();
        return redirect() -> route('index');
    }

    public function manager() {
        $users = User::paginate(5);
        return view('manager', compact('users'));
    }

    public function deleteuser(Request $request) {
        $id = $request->input('id');
        $user = User::find($id);

        if($user) {
            $user->delete();
            return response() -> json(['message' => true]);
        }
        return response() -> json(['message' => false], 404);
    }
}
