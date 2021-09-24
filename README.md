<h1 align="center">Welcome to ndjson 👋</h1>
<p>
  <a href="https://www.npmjs.com/package/ndjson" target="_blank">
    <img alt="Version" src="https://img.shields.io/npm/v/ndjson.svg">
  </a>
</p>

## Download
```shell script
composer require emtiazzahid/ndjson
```

## Usage

### Decode ndjson
```php
<?php

$decode = \EmtiazZahid\Ndjson\Parser::decode($your_file_path);
```

### Encode ndjson
```php
<?php

$array = [
    ['foo' => 'bar'],
    ['hello' => 'world']
];
$encode = \EmtiazZahid\Ndjson\Parser::encode($array);
```

### Run test
```shell
.\vendor\bin\phpunit test/ParserTest
```

## Show your support

Give a ⭐️ if this project helped you!
