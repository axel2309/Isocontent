<?php

declare(strict_types=1);

namespace Isocontent\AST;

final class TextNode implements Node
{
    /**
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getType(): string
    {
        return Node::TYPE_TEXT;
    }

    public function toArray(): array
    {
        return ['type' => $this->getType(), 'value' => $this->value];
    }

    public static function fromText(string $text): self
    {
        return new self($text);
    }
}
