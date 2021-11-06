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
