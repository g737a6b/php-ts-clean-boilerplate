# php-ts-clean-boilerplate

PHPとTypeScriptによるクリーンなボイラープレート。中小規模サイト向け。

## ビルド

```sh
docker-compose up -d
docker run -it --rm -v $(pwd):/app composer:2.0 install
docker run -it --rm -v $(pwd):/app -w /app node:16 npm i
docker run -it --rm -v $(pwd):/app -w /app node:16 npm run build
```

## インフラ

- AWS Lightsail bitnami LAMP環境を想定
