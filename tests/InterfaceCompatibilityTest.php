<?php

declare(strict_types=1);

namespace Lsp\Contracts\Protocol\Tests;

use Lsp\Contracts\Message\MessageInterface;
use Lsp\Contracts\Protocol\DecoderInterface;
use Lsp\Contracts\Protocol\EncoderInterface;
use Lsp\Contracts\Protocol\Exception\DecodingExceptionInterface;
use Lsp\Contracts\Protocol\Exception\ProtocolExceptionInterface;
use PHPUnit\Framework\Attributes\Group;

/**
 * Note: Changing the behavior of these tests is allowed ONLY when updating
 *       a MAJOR version of the package.
 */
#[Group('php-lsp/rpc-protocol-contracts')]
final class InterfaceCompatibilityTest extends TestCase
{
    public function testDecoderCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements DecoderInterface {
            public function decode(string $data): MessageInterface {}
        };
    }

    public function testEncoderCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements EncoderInterface {
            public function encode(MessageInterface $message): string {}
        };
    }

    public function testExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements ProtocolExceptionInterface {};
    }

    public function testDecodingExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements DecodingExceptionInterface {};
    }

    public function testEncodingExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements DecodingExceptionInterface {};
    }
}
