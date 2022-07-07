namespace src;
<?php

class Task8
{
    private function formKeyValuePair(string $key, string $value): string
    {
        return "$key: $value</br>";
    }

    private function formJsonDoc(string ...$pair): string
    {
        return implode('', $pair);
    }

    public static function main(string $json): string
    {
        $errorMsg = 'Json cannot be decoded or encoded data is deeper than the nesting limit!';
        if (json_decode($json) === false || json_decode($json) === null) {
            throw new \InvalidArgumentException($errorMsg);
        }
        $jsonObj = json_decode($json);

        $titleKey = 'Title';
        $titleValue = $jsonObj->{$titleKey};
        $titlePair = (new Task8)->formKeyValuePair($titleKey, $titleValue);

        $authorKey = 'Author';
        $authorValue = $jsonObj->{$authorKey};
        $authorPair = (new Task8)->formKeyValuePair($authorKey, $authorValue);

        $detailKey = 'Detail';
        $publisherKey = 'Publisher';
        $publisherValue = $jsonObj->{$detailKey}->{$publisherKey};
        $publisherPair = (new Task8)->formKeyValuePair($publisherKey, $publisherValue);

        return (new Task8)->formJsonDoc($titlePair, $authorPair, $publisherPair);
    }
}
