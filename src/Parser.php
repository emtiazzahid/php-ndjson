<?php

namespace EmtiazZahid\Ndjson;

final class Parser
{
    /**
     * ndjson
     *
     * @var string
     */
    public const SEPARATOR = PHP_EOL;

    /**
     * ndjson
     *
     * @param string $ndjson
     * @return array
     */
    public static function decode(string $filename): array
    {
        // read file into an array of lines
        $jsonData = file($filename);

        // Parse each line in turn to produce an array of objects
        return array_map('json_decode', $jsonData);
    }

    /**
     * ndjson
     *
     * @param array $data
     * @return string
     */
    public static function encode(array $data): string
    {
        $ndjson = '';
        array_walk($data, function ($item) use (&$ndjson) {
            $ndjson .= json_encode($item) . self::SEPARATOR;
        });
        return $ndjson;
    }
}
