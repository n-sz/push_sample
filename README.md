# push_sample

## 概要
ブラウザプッシュ通知を送信する
[Push.js](https://pushjs.org/)の練習用リポジトリです。    



## 送信画面

![スクリーンショット 2019-07-21 12 43 32](https://user-images.githubusercontent.com/34799564/61586796-4cf4fe80-abb7-11e9-9281-ae4c0389f5ec.png)

title及びbodyに入力した内容でブラウザプッシュ通知を送信します

## ブラウザプッシュ通知画面

![スクリーンショット 2019-07-21 12 44 34](https://user-images.githubusercontent.com/34799564/61586797-4fefef00-abb7-11e9-9078-6d7b9e95bad1.png)

## Option

|Option  |type  |Description  |
|---|---|---|
|icon  |String  |アイコン画像  |
|body  |String  |本文  |
|timeout  |Integer  |消えるまでの時間 (ミリ秒)    |
|onClick()  |Function  |クリックした時のイベント    |
|onClose()  |Function  |閉じた時のイベント    |
|onError()  |Function  |エラーイベント    |
|onShow()  |Function  |表示イベント    |
