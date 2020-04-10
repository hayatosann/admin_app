# DB設計
[ER図](https://imgur.com/L07JUfj)

## admin_usersテーブル

|Column|Type|Options|
|------|----|-------|
|name|string||
|email|string||
|password|string||
|password_confirmation|string||

## studentsテーブル

|Column|Type|Options|
|------|----|-------|
|name|string||
|address|string||
|birthday|string||
|password|string||

### Association
- has_many :stay_infos

## stay_infoテーブル

|Column|Type|Options|
|------|----|-------|
|name|string||
|duration|string||
|start_day|string||
|finish_day|string||
|room|integer||
|student_id|references|null: false, foreign_key: true|

### Association

- belongs_to :student

