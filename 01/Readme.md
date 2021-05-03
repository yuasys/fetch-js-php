### 目標
1. jsonファイルを読んで初期値を設定する
2. 読んだ初期値を表示する
3. 初期値をmavoで編集する
4. 虹色ボタンを押すと、現在の値をjsonファイルに上書きする

### 手順
1. jdonファイルjson/data.jsonの初期値設定

  ```json
{
"companyName": "サンプル鈑金工業",
"phoneNumber": "012-345-6789"
}
```

1. 処理の流れを考える  
(1) 本番用:index.php  
   jsonファイルを読み、変数にセットして表示する  
(2) 編集用:edit.php   
   変数の値を編集してsave.phpに送る  
(3) 保存用: save.php  
   変数を受信し、jsonファイルに上書き保存する  

1.   具体的な実装方法を考える

- データファイルはjson/data.jsonとする（json形式テキストファイル）
- edit.phpに実装する
- データファイル読み込みはfile_get_contents()関数をつかい、読み込んだ結果は$data変数に格納する
- ```<pre id="data"><?= $data; ?></pre>```でHTML要素にデータを埋め込む【PHP変数の値をHIMLに変換】
- ```<button class="btn" id="btn">保存</button>```でmain部に虹色ボタンを配置する
- 虹色ボタンにイベントリスナーを設定しクリックしたらデータを保存する処理を呼ぶ
- 
- 

2. cococo



