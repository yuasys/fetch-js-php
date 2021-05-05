### 目標
1. jsonファイルを読んで初期値を設定する:  
01版ではphpのファイルコンテンツ読み込み関数を使っていたが、この02ではHTMLとjavascriptのみで実現する。  
そのためには、jsonデータを別ファイルのjavascriptファイルとし、その中でjsonデータを書いておく。

2. 読んだ初期値をindex.htmlに表示する
3. 初期値を編集できるedit.htmlを別途用意する:  
01版ではmavo.jsフレームワークに乗せていたが、同じ機能をHTMLと生のjavascriptで実現する

1. edit.htmlではEditボタンとSaveボタンを設置する
01版ではmove.jsが提供するEdit，Saveボタンの他に虹色の「保存」ボタンが必要であったが、Edit，Saveボタンだけで同じ機能を持たせる

### 手順
1. json/data.jsの初期値設定

  ```json
let data = {
"companyName": "サンプル鈑金工業",
"phoneNumber": "012-345-6789"
}
```

1. 処理の流れを考える  
(1) 本番用:index.html  
   jsonファイルを読み、変数にセットして表示する  
(2) 編集用:edit.html   
   Form内の変数値を編集してsave.phpに送る  
(3) 保存用: save.php  
   変数を受信し、jsファイルに上書き保存する  

1.   具体的な実装方法を考える

- データファイルはjson/data.jsとし、```<script src="json/data.js"></scrit>```で読み込む
- 編集時はedit.htmlに実装する
- 通常はindex.htmlに実装する
- edit.htmlのSaveボタンにイベントリスナーを設定しクリックしたらデータを保存する処理を呼ぶ
- データを保存する処理はjavascript標準関数のFetchを使う

1. 実装してテストした結果  


2. 考察  




