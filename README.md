# はじめての JavaScript より

構文に関する基本的なことを学ぶ。初版が 2007 年なので相当古いので注意。

## 構造について

html/ - HTML のサンプルを配置する

## 回答

- [O'Reilly のサイト](https:///www.oreilly.co.jp/books/9784873113227/)
- [ダウンロードした練習問題回答](./LJScript_App_kaitou.pdf)

## exam 2

### exam2-1

$someVariable 有効
\_someVariable 有効
1Variable 数字ではじめる事はできない。無効
some_variable 有効
som&#232;variable 特殊文字がつかえないので無効
function 予約語なので無効
.someVariable .は使えないので無効
some*variable *は使えないので無効

### exam2-2

```javascript
var someMonth
function getTheCurrentMonth
const CURRENT_MONTH
var summerMonths
mylibraryAfunction
```

### exam2-3

```javascript
var someString =
  'Who once said. "Only two things are infinite, the universe and human stupidity, and I\'m not sure about the former."';
```

### exam2-4

```javascript
var str = '432.54';
console.log(parseInt(str));
console.log(parseInt(str, 16));
console.log(parseInt(str, 8));
```

### exam2-5

できない、という回答。。。
if (someMonth == null)

### exam3-1

```javascript
var valA = 37;
var valB = 3;
var valC = 18;
// var resultOfComp = valA - valB % 3 / 2 * 4 + valC - 3;
var resultOfComp = (((valA - valB) % 3) / 2) * (4 + valC) - 3;
```

### exam3-2

```javascript
switch (val) {
  case 'one':
  case 'two':
    console.log('OK');
    break;
  case 'three':
    console.log('OK2');
    break;
  default:
    console.log('NONE');
}
```

### exam3-3

```javascript
var varOne = 33;
var varTwo = 100;
var varThree = 0;
if (varOne == 33 && varTwo >= 100 && varThree > 0)
```

### exam3-4

```javascript
for (var i = 11; i < 20; i++) console.log(i);
```

### exam3-5

```javascript
for (var i = 19; i > 10; i--) console.log(i);
```

### exam4-1

```javascript
var str = 'The fun of functions is that they are functional.';
var regex = /\bfun\b/;
str.replace(regex, 'power');
```

### exam4-2

```js
var date = new Date();
date.setDate(date.getDate() + 3);
console.log(date.toLocalDateString());
```

### exam4-3

```js
Math.ceil(34.44); // 切り上げ
Math.floor(34.44); // 切り下げ
```

### exam4-4

```js
var str = 'apple,orange-strawberry,lemon-.lime';
var regex = /[,.]/g;
str = str.replace(regex, ',');
var newArray = str.split(',');
for (var i in newArray) console.log(newArray[i]);
```

### exam5-1

- 宣言的関数
- 無名関数
- リテラル関数

### exam5-2

参照渡しなど。もしくは返り値を使う、グローバル変数を使う、など

### exam5-3

```javascript
function functionC(objectA, functionB) {
  functionB(objectA);
}
var func = new Function('x', 'alert(x)');
functionC('こんにちわ', func);
```

### exam6-1

- addEventListener や attachEvent 関数を使う
- インラインモデル onload 属性など、タグの属性として設定
- JavaScript のコードブロックに window.onload などのハンドラを記述

### exam6-2

window.event.screenX と screenY

### exam6-3

cancelBubble を設定する

### exam6-4

```javascript
if (window.addEventListener) {
  window.addEventListener('load', functionCall, false);
} else if (window.attachEvent) {
  window.attachEvent('onload', functionCall);
}
```

### exam6-5

```javascript
if (document.addEventListener) {
  document.addEventListener('keydown', getKey, true);
} else if (document.attachEvent) {
  document.attachEvent('onkeydown', getKey);
}
function getKey(evnt) {
  alert(evnt.which);
}
```

### exam7-1

DOM level0 イベントハンドラから false を返す
DOM level2 canselBubble を true(IE) preventDefault を呼び出す(FireFox など)

### exam7-2

blur イベント

### exam7-3

document.someForm.selectOpts.options.length を指定して value を追加
`options[document.someForm.selectOpts.options.length] = value`みたいに

```javascript
opts[opts.length] = new Option('選択肢4', 'opt4');
```

### exam7-4

```javascript
var regEx = /^[0-9]*$/g;
var OK = regEx.exec(document.someForm.address.value);
```

### exam7-5

各ラジオボタンにイベントハンドラ関数を割り当てておく

```javascript
document.someForm.radiodgroup[0].onclick = handleClick;
document.someForm.radiodgroup[1].onclick = handleClick;
```

あるラジオボタンがチェックされているかを確認し、チェックされていたらテキストフィールドを無効にする

```javascript
function handleClick() {
  if (document.someForm.radiogroup[1].checked) {
    document.someForm.submit.disabled = true;
  } else {
    document.someForm.submit.disabled = false;
  }
}
```

### exam8-1

クッキー

### exam8-2

- クッキー名
- key と value
- 期限
- パス

### exam8-3

期限設定をしない

### exam8-4

html タグや javascript コードそのものを escape する

### exam8-5

- ショッピングカート
- 検索履歴
-

### exam9-1

prompt じゃない方法で聞いてみる(不正解。prompt 使えってさ)

### exam9-2

```javascript
setInterval('callFunction', 3000, paramA, paramB);
```

### exam9-3

~~innerHTML~~
location

### exam9-4

window.navigator

### exam9-5

```javascript
window.open('help.html', 'test', 'toolbar=no,status=no');
```

### exam10-1

id,title,lang,dir,className

### exam10-2

```javascript
var elems = document.getElementByName('elemName');
for (var i = 0; i < elems.length; i++) {
  alert(elems[i].tagName);
}
```

### exam10-3

```javascript
var children = nd.childNodes;
for (var i = 0; i < children.length; i++) {
  alert(children[i].nodeType);
}
divs = document.getElementByTagName('div');
for (var i = 0; i < divs.length; i++) {
  alert(divs[i].id);
}
var elem = document.getElementById('elem1');
var children = elem.childNodes;
var child = elem.getElementsByTagname('h1')[0];
var p = document.createElement('p');
var txt = document.createTextNode('hello');
p.appendChild(txt);
elem.replaceChild(p, child);
```

### exam10-04

どうすればページ上のすべての DIV 要素の ID がわかるか

```javascript
divs = document.getElementsByTagName('div');
for (var i = 0; 0 < divs.length; i++) {
  alert(divs[i].id);
}
```

### exam10-05

次のような H1 要素を innerHTML を使わずにパラグラフに置き換えるにはどのようにしたらよいか

```html
<div id="elem1">
  <h1>みだし</h1>
</div>
```

次のようにする

```javascript
var elem = documeng.getElementById('elem1');
var children = elem.childNodes;
var child = elem.getElementsByTagName('h1')[0];
var p = document.createElement('p');
var txt = document.createTextNode('hello');
p.appendChild(txt);
elem.replaceChild(p, child);
```

### exam11-1

```javascript
Number.prototype.triple = function () {
  var nm = this.valueOf() * 3;
  return nm * 3;
};
var num = new Number(3.0);
console.log(num.triple());
```

### exam11-2

var を使ってメンバ宣言をします。隠蔽することにより、外部からのアクセスを制御でき、予測していない操作などをされないようにします。

### exam11-3

```javascript
if (typeof value != 'number') {
  throw 'NotANumber';
}
```

### exam11-4

ここはまじでよくわからんかった

### exam11-5

```javascript
function Control() {
  var state = 'on';
  var background = '#fff';
  this.changeState = function () {
    if (state == 'on') {
      state = 'off';
      background = '#000';
    } else {
      state = 'on';
      background = '#fff';
    }
  };
  this.getState = function () {
    return state;
  };
  this.getColor = function () {
    return background;
  };
}
```

### exam12-1

css で設定している style にはアクセスできない。はじめから javascript で設定する。

### exam12-2

```style
obj.style.font = "14pt/16pt";
obj.style.color = "#f00";
```

### exam12-3

div ブロック内にさらに別のブロックがあり、その中でスタイルが設定されていれば、変更できない可能性があります。

### exam12-4

width と height を 0 にする。
または visibility を hidden にする

### exam13-1

XMLHttpRequest.open の第 3 引数を false にする

### exam13-2

XMLHttpRequest のプロパティである onReadyStateChange
を介してコールバック関数を割り当てる

### exam13-3

XMLHttpRequest のプロパティ readyState は完了時に 4 になる。
status は 200 になる。

### exam13-4

- html
- xml(xslt)
- json
