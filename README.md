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
var str = "432.54";
console.log(parseInt(str));
console.log(parseInt(str, 16));
console.log(parseInt(str, 8));
```

### exam2-5

できない、という回答。。。
if (someMonth == null)
