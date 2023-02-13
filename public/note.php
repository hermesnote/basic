<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, tr, td{
            border: 1px solid black;
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
                    <th>說明</th>
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
        </table>
    </div>
</body>
</html>
