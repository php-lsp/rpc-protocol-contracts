<?php

declare(strict_types=1);

namespace Lsp\Contracts\Protocol;

use Lsp\Contracts\Protocol\Exception\DecodingExceptionInterface;
use Lsp\Contracts\Message\MessageInterface;

interface DecoderInterface
{
    /**
     * @throws DecodingExceptionInterface An error occurred while decoding raw
     *         data into the message instance.
     */
    public function decode(string $data): MessageInterface;
}
