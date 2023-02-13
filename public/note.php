<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, tr, td{
            border: 1px solid black;
        }
        th {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <table>
                <tr>
                    <th>目的</th>
                    <th>內容</th>
                    <th>備註</th>
                </tr>

                <tr>
                    <td>建立controller</td>
                    <td>php artisan make:controller 控制器名</td>
                    <td>使用terminal以artisan建立controller</td>
                </tr>

                <tr>
                    <td>Route與view</td>
                    <td>Route::get(請求)/post(建立)/put(覆寫)/delete(刪除)</td>
                    <td>Route用closure"/"來對應路徑，用return來呼叫對應的view(blade)</td>
                </tr>

                <tr>
                    <td>修改logo</td>
                    <td>resources\views\auth\application-logo.blade.php</td>
                    <td>直接加入img src="{{ asset('檔案位置') }}" width="調整寬度"</td>
                </tr>

                <tr>
                    <td>修改登入方式 by username</td>
                    <td>
                        <p>1. resources\views\auth\register.blade.php 修改註冊blade，加入username為註冊時必要資訊</p>
                        <p>2. app\Http\Auth\registerUserController.php 修改function store request 將username條件加入</p>
                        <p>3. 承上，在$user::create 加入username</p>
                        <p>4. app\Models\User.php 修改 $fillable 加入username</p>
                        <p>5. resources\auth\login.blade.php 將原先email登入修改為username</p>
                        <p>6. app\Http\Request\Auth\LoginRequest.php 在function rules 將條件中的email修改為username </p>
                        <p>7. 承上，在 function authenticate中將email修改為username</p>
                        <p>8. 承上，在 throw validationException 將email修改為username</p>
                    </td>
                    <td></td>
                </tr>
        </table>
    </div>
</body>
</html>
