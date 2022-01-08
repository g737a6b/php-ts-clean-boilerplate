# php-ts-clean-boilerplate

PHPとTypeScriptとSassによるクリーンなボイラープレート。中小規模サイト向け。

## 使い方

空のディレクトリ PATH/TO/WORKPLACE にインストールする場合：

```sh
mkdir PATH/TO/WORKPLACE && cd PATH/TO/WORKPLACE
git clone git@github.com:g737a6b/php-ts-clean-boilerplate.git .
rm -rf ./.git

# 新たなバージョン管理を開始
git init
```

## ビルド（ローカル）

```sh
docker run -it --rm -v $(pwd):/app composer:2.0 install
docker run -it --rm -v $(pwd):/app -w /app node:16 npm i
docker run -it --rm -v $(pwd):/app -w /app node:16 npm run build

# ウォッチする場合
docker run -it --rm -v $(pwd):/app -w /app node:16 npm run watch
```

## 起動（ローカル）

```sh
docker-compose up -d

# http://localhost
# http://localhost/foo/bar/
# http://localhost:8080

# 起動後、Jobの実行（ここではSampleJob）
docker exec -it phptsbp-web php /docker/run-script.php SampleJob
```

## 動作環境

- AWS Lightsail bitnami LAMP環境に合わせてセットアップしています
