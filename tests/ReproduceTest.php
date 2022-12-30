<?php

use PHPUnit\Framework\TestCase;

class ReproduceTest extends TestCase
{
    public function iterableDataProvider(): iterable
    {
        yield 'no arg' => [];
        yield 'with one arg' => [1];
        yield 'with two args' => [1, 2];
    }

    /**
     * @test
     * @dataProvider iterableDataProvider
     */
    public function reproduceWithIterableDataProvider(int ...$args): void
    {
        self::assertTrue(true);
    }

    public function arrayDataProvider(): array
    {
        return [
            'no arg' => [],
            'with one arg' => [1],
            'with two args' => [1, 2],
        ];
    }

    /**
     * @test
     * @dataProvider arrayDataProvider
     */
    public function reproduceWithArrayDataProvider(int ...$args): void
    {
        self::assertTrue(true);
    }
}
