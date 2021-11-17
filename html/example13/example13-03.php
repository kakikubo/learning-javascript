<?php

if (empty($_GET['pref'])){
  echo "<city>都道府県が選択されていません</city>";
} else {
  // 検索対象から初めと終わりのホワイトスペースを取り除く
  $search = trim($_GET['pref']);
  switch($search) {
    case "HO":
      $result =  "<city><value>sapporo</value><title>札幌</title></city>";
      $result .= "<city><value>asahikawa</value><title>旭川</title></city>";
      $result .= "<city><value>nemuro</value><title>根室</title></city>";
      break;
    case "FU":
      $result =  "<city><value>fukui</value><title>福井</title></city>";
      $result .= "<city><value>sabae</value><title>鯖江</title></city>";
      $result .= "<city><value>echizen</value><title>越前</title></city>";
      break;
    case "NA":
      $result =  "<city><value>nagano</value><title>長野</title></city>";
      $result .= "<city><value>matsumoto</value><title>松本</title></city>";
      $result .= "<city><value>web20</value><title>Web2.0シティ</title></city>";
      $result .= "<city><value>ueda</value><title>上田</title></city>";
      break;
    case "OK":
      $result =  "<city><value>naha</value><title>那覇</title></city>";
      $result .= "<city><value>ishigaki</value><title>石垣</title></city>";
      break;
    default:
      $result = "都市が見つかりません";
      break;
  }
  $result = '<?xml version="1.0" encoding="UTF-8" ?>' . "<cities>" . $result . "</cities>";
  header('Content-Type: text/xml; charset=utf-8');
  echo $result;
}