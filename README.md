# billboard

## 專案環境要求

* PHP >= 8.1
* composer
* mysql

---

## 安裝步驟

#### 1. 建置 billboard 資料庫

#### 2. git clone 此專案

#### 3. 進到專案目錄下，複製 .env.example

```json
$ cd billboard
$ cp .env.example .env
```


#### 4. 編輯 .env 設定檔資訊
* Database 設定

#### 5. 安裝專案使用套件(Composer)

```json
$ composer install
```


#### 6. 產生專案 Key


```json
$ php artisan key:generate
```

#### 7. 資料庫佈署(Run Migrate)

```json
$ php artisan migrate
```

#### 8. 啟動

```json
$ php artisan serve 
```

# 專案架構
根據 Laravel ORM 實現簡單的CRUD


# API 文件

## API 清單
1. [index](#index)
2. [show](#show)
3. [create](#create)
4. [update](#update)
5. [delete](#delete)


## 1.<a name="index">index</a>
#### 說明：取得全部的公告。

### Routes
| Method | URI            | Remark |
| ------ |----------------| -- |
| GET    | /api/billboard | |

### Header
| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |

### Input Parameter

| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |


### Response Parameter

| Type    | Name    | Remark |
| ------- | ------- | ------ |
| integer | status      | 狀態碼     |
| integer | id      | id     |
| string  | title   | 標題   |
| string  | content | 內文   |


### JSON Response

#### Success
```json
status code: 200
{
  "status": 200,
  "data": [
    {
        "id": 1,
        "title": "111",
        "content": "qqq",
        "created_at": "2022-11-23T00:35:11.000000Z",
        "updated_at": "2022-11-23T00:35:45.000000Z"
    },
    {
        "id": 4,
        "title": "123123qe",
        "content": "qwe123",
        "created_at": "2022-11-23T00:35:36.000000Z",
        "updated_at": "2022-11-23T00:35:36.000000Z"
    }
  ]
}
```

---

## 2.<a name="show">show</a>
#### 說明：根據id取得對應的公告。

### Routes
| Method | URI                 | Remark |
| ------ | ------------------- | ------ |
| GET    | /api/billboard/{id} |        |

### Header
| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |

### Input Parameter

| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|    int  |   id   |    ✔     |        |


### Response Parameter

| Type    | Name                  | Remark            |
| -------  | --------------------- |  ----------------- |
| integer | status      | 狀態碼     |
| integer | id      | id     |
| string  | title   | 標題   |
| string  | content | 內文   |


### JSON Response

#### Success
```json
status code: 200
{
    "status": 200,
    "data": [
        {
            "id": 1,
            "title": "111",
            "content": "qqq",
            "created_at": "2022-11-23T00:35:11.000000Z",
            "updated_at": "2022-11-23T00:35:45.000000Z"
        }
    ]
}
```
---

## 3.<a name="store">store</a>
#### 說明：建立新的公告。

### Routes
| Method | URI                 | Remark |
| ------ | ------------------- | ------ |
| POST    | /api/billboard |        |

### Header
| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |

### Input Parameter

| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|    string  |   title   |    ✔     |    標題    |
|    string  |   content   |    ✔     |     內文   |


### Response Parameter

| Type    | Name                  | Remark            |
| -------  | --------------------- |  ----------------- |
| integer | status      | 狀態碼     |
| integer | id      | id     |
| string  | title   | 標題   |
| string  | content | 內文   |


### JSON Response

#### Success
```json
status code: 200
{
    "status": 201,
    "data": {
        "title": "title",
        "content": "qwe123",
        "updated_at": "2022-11-23T01:25:51.000000Z",
        "created_at": "2022-11-23T01:25:51.000000Z",
        "id": 5
    }
}
```
---


## 4.<a name="update">update</a>
#### 說明：根據id更新公告。

### Routes
| Method | URI                 | Remark |
| ------ | ------------------- | ------ |
| PUT    | /api/billboard/{id} |        |

### Header
| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |

### Input Parameter

| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|    integer  |   id   |    ✔     |        |
|    string  |   title   |    ✔     |    標題    |
|    string  |   content   |    ✔     |     內文   |


### Response Parameter

| Type    | Name                  | Remark            |
| -------  | --------------------- |  ----------------- |
| integer | status      | 狀態碼     |
| integer | id      | id     |
| string  | title   | 標題   |
| string  | content | 內文   |


### JSON Response

#### Success
```json
status code: 200
{
    "status": 200,
    "data": {
        "id": 1,
        "title": "title",
        "content": "qwe123",
        "created_at": "2022-11-23T00:35:11.000000Z",
        "updated_at": "2022-11-23T01:28:02.000000Z"
    }
}
```
---



## 5.<a name="delete">delete</a>
#### 說明：根據id刪除公告。

### Routes
| Method | URI                 | Remark |
| ------ | ------------------- | ------ |
| DELETE    | /api/billboard/{id} |        |

### Header
| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|      |      |         |        |

### Input Parameter

| Type | Name | Require | Remark |
| ---- | ---- | ------- | ------ |
|    integer  |   id   |    ✔     |        |


### Response Parameter

| Type    | Name                  | Remark            |
| -------  | --------------------- |  ----------------- |
| integer | status      | 狀態碼     |
| integer | id      | id     |
| string  | title   | 標題   |
| string  | content | 內文   |


### JSON Response

#### Success
```json
status code: 200
{
    "status": 200,
    "data": {
        "id": 1,
        "title": "title",
        "content": "qwe123",
        "created_at": "2022-11-23T00:35:11.000000Z",
        "updated_at": "2022-11-23T01:28:02.000000Z"
    }
}
```
---
