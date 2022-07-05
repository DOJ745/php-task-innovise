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

    public function main(string $json): string
    {
        $errorMsg = 'Json cannot be decoded or encoded data is deeper than the nesting limit!';
        if (json_decode($json) === false || json_decode($json) === null) {
            throw new InvalidArgumentException($errorMsg);
        }
        $jsonObj = json_decode($json);

        $titleKey = 'Title';
        $titleValue = $jsonObj->{$titleKey};
        $titlePair = $this->formKeyValuePair($titleKey, $titleValue);

        $authorKey = 'Author';
        $authorValue = $jsonObj->{$authorKey};
        $authorPair = $this->formKeyValuePair($authorKey, $authorValue);

        $detailKey = 'Detail';
        $publisherKey = 'Publisher';
        $publisherValue = $jsonObj->{$detailKey}->{$publisherKey};
        $publisherPair = $this->formKeyValuePair($publisherKey, $publisherValue);

        return $this->formJsonDoc($titlePair, $authorPair, $publisherPair);
    }
}
