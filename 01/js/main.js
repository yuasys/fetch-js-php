// 虹色ボタンを押すとjsonデータを得る
const el = document.getElementById("btn")
el.addEventListener("click", () => {
  const mydata = document.getElementById("data").innerText
  // 1 dataの中身を表示
  alert(mydata)
  // 2 dataをボディーにいれてfetchしてみる
  // 2-1 まず標準のFormDataクラスからインスタンスpostDataをつくる
  postData = new FormData
  // 2-2 setメソッドでインスタンスpostDataにデータをセットする
  //     PHP側が$_POST['pdata']で受け取れるようにする
  postData.set('pdata', mydata)
  // 2-3 fetch関数の第２引数を変数dataとして準備しておく
  const data = {
    method: 'POST',
    body: postData
  }
  // 2-4 fetchする
  //     現在の場所（カレント）は呼び出し元のedit.phpであることに留意する
  fetch('save.php', data)
    .then((res) => res.text())  //fetch結果をテキストとして取り出す
    .then(console.log)          //それをコンソールに表示する
})