<META httpequiv="Content-Type" content="text/html;charset=utf8">
<?php

if (empty($_GET['pref'])){
  echo "都道府県が選択されていません";
} else {
  // 検索対象から初めと終わりのホワイトスペースを取り除く
  $search = trim($_GET['pref']);
  switch($search) {
    case "HO":
      $result = "<option value='札幌'>札幌</option>";
      $result .= "<option value='旭川'>旭川</option>";
      $result .= "<option value='根室'>根室</option>";
      break;
    case "FU":
      $result = "<option value='福井'>福井</option>";
      $result .= "<option value='鯖江'>鯖江</option>";
      $result .= "<option value='越前'>越前</option>";
      break;
    case "NA":
      $result = "<option value='長野'>長野</option>";
      $result .= "<option value='松本'>松本</option>";
      $result .= "<option value='Web2.0シティ'>Web2.0シティ</option>";
      $result .= "<option value='上田'>上田</option>";
      break;
    case "OK":
      $result = "<option value='那覇'>那覇</option>";
      $result .= "<option value='石垣'>石垣</option>";
      break;
    default:
      $result = "都市が見つかりません";
      break;
  }
  echo $result;
}